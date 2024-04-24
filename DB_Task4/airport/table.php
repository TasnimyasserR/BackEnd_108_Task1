<?php
$db = new PDO("mysql:host=localhost;dbname=airport", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable error reporting

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Airport_name']) && isset($_POST['Country'])) {
    $query_update = "UPDATE airport SET Airport_name=:Airport_name, Country=:Country WHERE id=:id";
    $sql = $db->prepare($query_update);
    $sql->bindParam(':Airport_name', $_POST['Airport_name']);
    $sql->bindParam(':Country', $_POST['Country']);
    $sql->bindParam(':id', $_POST['id']);
    $res = $sql->execute();
    
    if ($res) {
        header("Location: ".$_SERVER['PHP_SELF']."?success=1");
        exit;
    } else {
        echo "Update failed.";
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query_delete = "DELETE FROM airport WHERE id = :id";
    $sql = $db->prepare($query_delete);
    $sql->bindParam(':id', $id);
    $res = $sql->execute();
    
    if ($res) {
        header("Location: ".$_SERVER['PHP_SELF']."?success=1");
        exit;
    } else {
        echo "Delete failed.";
    }
}

$query = "SELECT * FROM airport";
$stmt = $db->prepare($query);
$stmt->execute();
$countries = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Management</title>
    <link rel="stylesheet" href="../style/table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <a href="./form.php" class="btn btn-sm btn-primary pull-left"><i class="fa fa-plus-circle"></i> Add New</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>id</th>
                                <th>Airport_name</th>
                                <th>Country</th>
                                <th>Submit</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($countries as $country) : ?>
                            <tr>
                                <td>
                                    <ul class="action-list">
                                        <li><a href="<?php echo $_SERVER["PHP_SELF"].'?update='.$country['id']?>"><i class="fa fa-pencil-alt"></i></a></li>
                                        <li><a href="<?php echo $_SERVER["PHP_SELF"].'?delete='.$country['id']?>"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </td>
                                <td><?php echo $country['id']; ?></td>
                                <td><?php echo $country['Airport_name']; ?></td>
                                <td><?php echo $country['Country']; ?></td>
                                <td></td>
                            </tr>
                            <?php if(isset($_GET['update']) && $_GET['update'] == $country['id']): ?>
                            <tr>
                                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                                    <input type="hidden" name="id" value="<?php echo $country['id']; ?>">
                                    <td></td>
                                    <td><input type="text" name="Airport_name" value="<?php echo $country['Airport_name']; ?>"></td>
                                    <td><input type="text" name="Country" value="<?php echo $country['Country']; ?>"></td>
                                    <td><button type="submit">Save</button></td>
                                </form>
                            </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel-body table-responsive"  class="panel">
    <table class="table">
        <tr><a href="">Tables</a></tr>
        <li><a href="../airline/table.php">Airline</a></li>
        <li><a href="../airport/table.php">Airport</a></li>
        <li><a href="../airway/table.php">Airway</a></li>
        <li><a href="../city/table.php">City</a></li>
        <li><a href="../country/table.php">Country</a></li>
        <li><a href="../crew/table.php">Crew</a></li>
    </table>
</div>

</body>
</html>

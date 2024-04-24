<?php
$db = new PDO("mysql:host=localhost;dbname=airport", "root", "");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Country_CODE']) && isset($_POST['Name']) && isset($_POST['Zone'])) {
    $query_update = "UPDATE country SET Name=:name, Zone=:zone WHERE Country_CODE=:country_code";
    $sql = $db->prepare($query_update);
    $sql->bindParam(':name', $_POST['Name']);
    $sql->bindParam(':zone', $_POST['Zone']);
    $sql->bindParam(':country_code', $_POST['Country_CODE']);
    $res = $sql->execute();

    // Redirect back to the page after updating
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

if (isset($_GET['delete'])) {
    $query_delete = "DELETE FROM country WHERE Country_CODE=:country_code";
    $sql = $db->prepare($query_delete);
    $sql->bindParam(':country_code', $_GET['delete']);
    $res = $sql->execute();
}

// Fetch all countries
$query = "SELECT * FROM country";
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
                                <th>Country CODE</th>
                                <th>Name</th>
                                <th>Zone</th>
                                <th>Submit</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($countries as $country) : ?>
                            <tr>
                                <td>
                                    <ul class="action-list">
                                        <li><a href="<?php echo $_SERVER["PHP_SELF"].'?update='.$country['Country_CODE']?>"><i class="fa fa-pencil-alt"></i></a></li>
                                        <li><a href="<?php echo $_SERVER["PHP_SELF"].'?delete='.$country['Country_CODE']?>"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </td>
                                <td><?php echo $country['Country_CODE']; ?></td>
                                <td><?php echo $country['Name']; ?></td>
                                <td><?php echo $country['Zone']; ?></td>
                                <td></td>
                            </tr>
                            <?php if(isset($_GET['update']) && $_GET['update'] == $country['Country_CODE']): ?>
                            <tr>
                                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                                    <input type="hidden" name="Country_CODE" value="<?php echo $country['Country_CODE']; ?>">
                                    <td></td>
                                    <td><input type="text" name="Name" value="<?php echo $country['Name']; ?>"></td>
                                    <td><input type="text" name="Zone" value="<?php echo $country['Zone']; ?>"></td>
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

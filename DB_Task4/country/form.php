<?php

$db = "mysql:host=localhost;dbname=airport";
$con = new PDO($db, "root", "");

$query = "SELECT * FROM country";
$sql = $con->prepare($query);



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="../style/form.css">

</head>

<body>


    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Country</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" novalidate action="create.php" method="post">

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="Country_CODE" placeholder="Country_CODE" required>


                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="Name" placeholder="Name" required>

                            </div>

                          


                            <div class="col-md-12">
                                <input class="form-control" type="text" name="Zone" placeholder="Zone" required>

                            </div>







                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</body>

</html>
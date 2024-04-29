<?php
session_start();
include_once 'con.php';
?>
<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="favicon.ico" type="image/ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include_once 'header.php'; ?>

    <div class="container top-margin">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="active-tab" data-bs-toggle="tab" data-bs-target="#activeAuctions" type="button" role="tab" aria-controls="activeAuctions" aria-selected="true">My Details</button>
                <button class="nav-link" id="completed-tab" data-bs-toggle="tab" data-bs-target="#completedAuctions" type="button" role="tab" aria-controls="completedAuctions" aria-selected="true">My Results</button>
                <button class="nav-link" id="all-tab" data-bs-toggle="tab" data-bs-target="#allAuctions" type="button" role="tab" aria-controls="allAuctions" aria-selected="true">Apply Leave</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="activeAuctions" role="tabpanel" aria-labelledby="active-tab">
                <div class="container details-tab">
                    <div class="row justify-content-start" style="padding:20px">
                        <div class="col-8">
                            <?php
                            // print_r($_SESSION["studentDetails"]);
                            ?>
                            <table class="table">
                                <tr>
                                    <td>Name:</td>
                                    <td id="name"><?php echo $_SESSION["studentDetails"]["name"] ?></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td id="email"><?php echo $_SESSION["studentDetails"]["email"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Mobile:</td>
                                    <td id="mobile"><?php echo $_SESSION["studentDetails"]["phone"]; ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        Attendance:
                                    </td>
                                    <td id="attendance"><?php echo $_SESSION["studentDetails"]["attendance"]?>%</td>
                                </tr>
                                <tr>
                                    <td>Father Email:</td>
                                    <td id="fatherName"><?php echo $_SESSION["studentDetails"]["fatherEmail"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Father Mobile</td>
                                    <td id="fatherMobile"><?php echo $_SESSION["studentDetails"]["fatherPhone"]; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-4">
                            <img style="width:150px;height:150px" id="studentImg" src="./images/user.webp">
                        </div>
                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>

           
        </div>
    </div>
</body>
<?php include_once "footer.php" ?>
<script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script>
    // page specific script here
</script>

</html>
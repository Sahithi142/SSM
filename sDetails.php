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
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include_once 'header.php'; ?>
    <?php
    $sql = "select * from student where roll = '" . $_GET['sid'] . "'";
    if ($res = mysqli_query($con, $sql)) {
        $row = mysqli_fetch_assoc($res);
    ?>
        <br><br>
        <div class="container d-flex justify-content-center">
            <div class="card" style="width: max-content;">
                <div class="card-body">
                    <h4 class="card-title text-center">Student Details</h4>
                    <h5 class="card-subtitle mb-2 text-muted text-center"><?php echo $row['name'] ?></h5>
                    <p class="card-text text-center">
                        Attendance: <?php echo $row["attendance"]; ?> %
                    </p>

                    <?php
                    $sql = "select * from marks where studentRoll = '" . $_GET['sid'] . "'";
                    if ($res = mysqli_query($con, $sql)) {
                        $row = mysqli_fetch_assoc($res);
                    ?>
                        <br><br>
                        <h5>Academic Results</h5>
                        <table class="table">
                            <tr>
                                <th></th>
                                <th>1ST YEAR</th>
                                <th>2ND YEAR</th>
                                <th>3RD YEAR</th>
                                <th>4TH YEAR</th>
                            </tr>
                            <tr>
                                <th>1ST SEMESTER</th>
                                <td><?php echo $row["sem1"] ?></td>
                                <td><?php echo $row["sem3"] ?></td>
                                <td><?php echo $row["sem5"] ?></td>
                                <td><?php echo $row["sem7"] ?></td>
                            </tr>
                            <tr>
                                <th>2ND SEMESTER</th>
                                <td><?php echo $row["sem2"] ?></td>
                                <td><?php echo $row["sem4"] ?></td>
                                <td><?php echo $row["sem6"] ?></td>
                                <td><?php echo $row["sem8"] ?></td>
                            </tr>
                            <tr>
                                <td>CGPA:</td>
                                <th><?php echo $row["CGPA"]; ?></th>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <h5>Past Requests</h5>
                        <br>
                        <table class="table">
                            <tr>
                                <td><b>Date</b></td>
                                <td><b>Reason</b></td>
                                <td><b>Status</b></td>
                            </tr>
                            <?php
                            $sql = "select * from leaves where studentId ='" . $_GET['sid'] . "'";
                            if ($res = mysqli_query($con, $sql)) {
                                while ($row = mysqli_fetch_assoc($res)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row["date"] ?></td>
                                        <td><?php echo $row["reason"] ?></td>

                                        <td>
                                            <?php
                                            if ($row["approved"] == "0") {
                                                echo "On hold";
                                            } else if ($row["approved"] == "1") {
                                                echo "Waiting for HOD confirmation";
                                            } else if ($row["approved"] == "2") {
                                                echo "Approved";
                                            } else {
                                                echo "Rejected";
                                            }
                                            ?>
                                        </td>

                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </table>



                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        </div>

</body>
<?php include_once "footer.php" ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script>
    // page specific script here
</script>

</html>
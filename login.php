<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-image:url(./images/1561819162721.jpg);background-repeat:no-repeat;background-size: 100% 100%";>
    <?php include_once 'header.php'; ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container" style="padding:10px;border:2px solid #000;border-radius:5px;width: max-content;min-width: 400px;">
        <form action="loginUtil.php" method="post">
            <h2 class="d-flex justify-content-center"style="background-color: #fdfdfd80;"><b>LOGIN</b></h2>
            <br><br>
            <div class="mb-3">
                <label class="form-label"style="color:white;text-shadow: 2px 2px 5px black" ><b>Email Address</b></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="rollnumber@gcet.edu.in" required>
            </div>
            <div class="mb-3">
                <label class="form-label"style="color:white;text-shadow: 2px 2px 5px black"><b>Password</b></label>
                <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
            </div>
            <div class="mb-3">
                <label class="form-label"style="color:white;text-shadow: 2px 2px 5px black"><b>Login as</b></label>
                <select class="form-select" aria-label="Default select example" name="signinas" required>
                    <option value="1">Student</option>
                    <option value="2">Faculty</option>
                    <option value="3">Hod</option>
                </select>
            </div>
            <div class="col-auto d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-info mb-3">Confirm identity</button>
            </div>
            <br>
        </form>
    </div>
    <br>
    <br><br><br><br>
</body>
<?php include_once "footer.php" ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>
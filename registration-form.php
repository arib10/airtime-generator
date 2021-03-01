<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

    <?php
    $first_name = $last_name = $email = $age = $gender = "";
    if (isset($_POST["submit"])) {

        if (isset($_POST["fname"])) {
            $first_name = $_POST["fname"];
        }
        if (isset($_POST["lname"])) {
            $last_name = $_POST["lname"];
        }
        if (isset($_POST["email"])) {
            $email = $_POST["email"];
        }
        if (isset($_POST["age"])) {
            $age = $_POST["age"];
        }
        if (isset($_POST["gender"])) {
            $gender = $_POST["gender"];
        }
    }
    ?>

<body>
    <h2>Registration Form</h2>
    <form action="registration-form.php" method="post">
        First Name: <input type="text" name="fname" id=" "> <br><br>
        Last Name: <input type="text" name="lname" id=" "> <br><br>
        Email: <input type="email" name="email" id=" "> <br><br>
        Age: <input type="number" name="age" id=" "> <br><br>
        Gender <input type="radio" name="gender" value="Male" id=""> Male
        <input type="radio" name="gender" value="Female" id=""> Female
        <input type="radio" name="gender" value="others" id=""> Others <br>
        <input type="submit" name="submit" id="" value="submit">
    </form>

    <?php
        if (isset($_POST["submit"])) {
    ?>
    <h2>Your Form data:</h2>
    <p>First name: <?php echo $first_name; ?></p>
    <p>Last name: <?php echo $last_name; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Age: <?php echo $age; ?></p>
    <p>Gender: <?php echo $gender; ?></p>
    <?php
        }
    ?>
</body>
</html>
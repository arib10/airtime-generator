<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Simple Calculator</title>
</head>
<body>

    <?php
    $val1 = $val2 = $operator = $result = $error = "";
    if(isset($_POST["submit"])) {
        $val1 = isset($_POST["val1"]) ? $_POST["val1"] : ""; 
        $val2 = isset($_POST["val2"]) ? $_POST["val2"] : "";
        $operator = $_POST["operation"];

        if($val1 !== "" && $val2 !== "" ) {
            if ($operator === "sum") {
                $result = $val1 + $val2;
            } else if ($operator === "subtract"){
                $result = $val1 - $val2;
            } else if ($operator === "divide") {
                $result = $val1 / $val2;
            } else {
                $result = $val1 * $val2;
            }
        } else {
            $error = "Values 1 & 2 and operation are required.";
        }
    }
    ?>
    <h2>PHP Simple Calculator</h2>
    <form action="simple-calculator.php" method="post">
        <input type="number" name="val1" value="<?php echo $val1; ?>">
        <select name="operation" id="">
            <option value="sum"<?php if($operator == "sum") echo "selected"; ?> >sum</option>
            <option value="subtract" <?php if($operator == "subtract") echo "selected"; ?>>subtract</option>
            <option value="divide" <?php if($operator == "divide") echo "selected"; ?> >divide</option>
            <option value="multiply" <?php if($operator == "multiply") echo "selected"; ?> >multiply</option>
        </select>
        <input type="number" name="val2" id="" value="<?php echo $val2; ?>">
        <input type="submit" value="Calculate" name="submit">
    </form>
    
    <?php
    if (strlen($error) > 0) {
        echo "<p>$error</p>";
    } else {
        echo "<p>Result:  $result</p>";
    }
    ?>
</body>
</html>
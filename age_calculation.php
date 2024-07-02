<?php 
 if(isset($_POST['submit'])){
    // let's declare the variable from the form
    $dob = $_POST['dob'];
    $current = $_POST['current'];

    // function for age calculation or procedures for age calculation
    $age = date_diff(date_create($dob),date_create($current));

    // print the age
    echo "Your age is ". $age->format("%y");

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculation</title>
</head>
<body align="center">
    <form action="" method="post">
        <label for="">Date of Birth</label>
        <input type="date" name="dob"><br><br>
        <label for="">Current Date</label>
        <input type="date" name="current"><br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
</body>
</html>
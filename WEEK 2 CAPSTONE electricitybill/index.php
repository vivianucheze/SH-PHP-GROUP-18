<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculating Electricity Bill Using PHP Conditional Statement</title>
</head>
<link rel="stylesheet" href="style.css">
<?php
$sum_str = $sum = "";
if (isset($_POST['submit-unit'])) {
    $units = $_POST['unit'];
    if (!empty($units)) {
        $sum = bills($units);
        $sum_str = "Total bill is " . $units . "-" . $sum;
    }
}
function bills($units)
{
    $first_unit_cost = 3.50;
    $second_unit_cost = 4.00;
    $third_unit_cost = 5.20;
    $fourth_unit_cost = 6.20;

    if ($units <= 50) {
        $bill = $units * $first_unit_cost;
    } else if ($units > 50 && $units <= 100) {
        $temp = 50 * $first_unit_cost;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $second_unit_cost);
    } else if ($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $second_unit_cost);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $third_unit_cost);
    } else {
        $temp = (50 * 3.5) + (100 * $second_unit_cost) + (100 * $third_unit_cost);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $fourth_unit_cost);
    }
    return number_format((float) $bill, 2, '.', '');
}
?>

<body>
  <h1 align="center">Electricity Bill Calculation</h1>
  <form align="center" action="" method="post">
    <input type="number" name="unit" placeholder="Enter your unit number">
    <input type="submit" value="Submit" name="submit-unit">
  </form>
</body>

</html>
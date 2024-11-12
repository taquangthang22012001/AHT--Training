<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    form {
        display: flex;
        width: 350px;
        flex-direction: column;
        margin: auto;
    }
</style>


<body>
    <form action="future_value.php" method="POST">
        <h1>Future Value Calculator</h1>
        <label>Investment Amount</label>
        <input type="number" name="A" placeholder="Tiền ban đầu" required><br>
        <label>Yearly Interest Rate</label>
        <input type="number" name="B" placeholder="Lãi suất năm (%)" required><br>
        <label>Number of Years</label>
        <input type="number" name="C" placeholder="Năm đầu tư" required> <br>
        <input type="submit" value="Calculator">
    </form>
    
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["A"]) && isset($_POST["B"]) && isset($_POST["C"])) {

        $A = floatval($_POST["A"]);
       $B = floatval($_POST["B"]);
       $C = floatval($_POST["C"]);

   if ($A < 0) {
            echo "Tiền phải lớn hơn 0.";
            exit();
        }
    if($B < 0) {
        echo "Lãi phải lớn hơn 0";
        exit();    
    }
    if($C < 0) {
        echo "Số năm phải lớn hơn 0";
    }
    
    $futureValue = $A + (($A*($B/100)))*$C;

    // Giá trị Tương lai = Giá trị Hiện tại + (Giá trị Hiện tại * Lãi suất)

echo "Giá trị tương lai:" .  $futureValue; 

}
}else{ 
   echo "Chỉ chấp nhận POST"; 
}

?>

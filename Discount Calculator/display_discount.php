<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (isset($_POST["description"]) && isset($_POST["price"]) && isset($_POST["discount"])) {

         $price = floatval($_POST["price"]);
        $discount = floatval($_POST["discount"]);

    if ($price <= 0) {
             echo "Giá phải lớn hơn 0.";
             exit();
         };
     if($discount <= 0) {
         echo "Phần trăm phải lớn hơn hoặc bằng 0";
         exit();    
     }

     $discountAmount = $price * $discount/100;
     $discountPrice = $price - $discountAmount;

echo "Giá giảm:" .  $discountAmount; 
echo "<br>\n";
echo "Tổng cộng:" . $discountPrice;

}
 }else{ 
    echo "Chỉ chấp nhận POST"; 
 }

?>

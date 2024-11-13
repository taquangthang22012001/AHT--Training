<?php
// Hàm kiểm tra xem một số có phải là số nguyên tố hay không
function Prime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Lặp qua các số từ 2 đến 100 và in ra các số nguyên tố
echo "Các số nguyên tố nhỏ hơn 100 là ";
for ($i = 2; $i < 100; $i++) {
    if (Prime($i)) {
        echo ":". $i;
    }
}
?>
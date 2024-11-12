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
        width: 300px;
        flex-direction: column;
        margin: auto;
    }
    form>input {
        margin: 5px;
        margin-right: 50px;
    }
</style>
<body>
    <form action="display_discount.php" method="POST" >
        <h2>Product Discount Calculator</h2> 
        <label for="product_description">Product Description </label>
        <input type="text" name="description" placeholder="Mô tả sản phẩm" required><br>

        <label for="price">List Price</label>
        <input type="number" name="price" step="0.1" placeholder="Giá sản phẩm" required><br>

        <label for="discount">Discount Percent (%)</label>
        <input type="number" name="discount" step="0.1" placeholder="Tỷ lệ chiết khấu" required><br>

        <input type="submit" value="Calculator">
        
    </form>
</body>
</html>
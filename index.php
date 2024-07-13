<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Beiruti:wght@200..900&display=swap" rel="stylesheet">    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الفراعنة ستور-Al Fra3na Store</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php"method="post" enctype="multipart/form-data">
            <h2 class="golden-text">الفراعنة ستور-Al Fra3na Store</h2>
            <img src="3.png" alt="Logo"width="450px">
            <input type="text" name='name'>
            <br>
            <input type="text" name='name'>
            <br>
            <input type="file" id="file" name='image' style = 'display:none;'>
            <label for="file">اختيار صورة للمنتج</label>
            <button name='Upload'>رفع المنتج ✅</button>
            <br><br>
            <a href="Products.php">عرص كل المنتجات</a>
            <p class="golden-text">Developer By Omar Ragab</p>
          </form>
        </div>
    </center>
</body>
</html>
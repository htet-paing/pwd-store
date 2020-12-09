<?php include("confs/auth.php") ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Category</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        
    form label {
        display: block;
        margin-top: 8px;
    }
    </style>
</head>
<body>
    <h1>New Category</h1>
    <ul class="menu">
        <li><a href="book_list.php">Manage Books</a></li>
        <li><a href="cat_list.php">Manage Categories</a></li>
        <li><a href="orders.php">Manage Orders</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    <form action="cat_add.php" method="POST">
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name">

        <label for="remark">Remark</label>
        <textarea name="remark" id="remark"></textarea><br><br>
        <input type="submit" value="Add Category">
    </form>
</body>
</html>
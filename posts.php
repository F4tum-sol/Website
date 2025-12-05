<?php
    $link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');
    $id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id=$id";
    $res = mysqli_query($link, $sql);
    $rows = mysqli_fetch_array($res);
    $title = $rows['title'];
    $main_text = $rows['main_text'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tabeev S.V.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row">
            <div class="col-12 text-center">
                <?php
                echo "<h1> $title </h1>";
                echo "<p> $main_text </p>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
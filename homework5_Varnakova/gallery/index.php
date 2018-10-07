<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гелерея</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <div class="gallery">

            <?php
            include "config.php";
            $sql="select * from Gallery";
            $res=mysqli_query($connect, $sql);
            while ($file=mysqli_fetch_assoc($res))
            {
                $name = $file['name'];
                echo "<div class=\"item\">
                        <a href=\"img/big/$name\">
                         <img class=\"itemsmall\" src=\"img/small/$name\">
                        </a>
                      </div>";
            }
            ?>

    </div>
</div>
</body>

</html>
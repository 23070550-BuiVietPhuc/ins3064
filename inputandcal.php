<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
    <h1>This is my first php13 213 12321213 1z23213
        <?php
        $x= $_GET['x'];
        $y= $_GET['y'];
        $z= $x + $y;
        $p= $x - $y;
        echo "The sum is: " . $z . "<br/>";
        echo "The difference is: " . $p . "<br/>";

        echo "x < y =>  " . ($x<$y) . "<br/>";
        echo "x > y =>  " . ($x>$y) . "<br/>";
        echo "x == y =>  " . ($x==$y) . "<br/>";
        ?>
</body>
</html>

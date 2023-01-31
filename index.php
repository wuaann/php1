<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<body>

<form action="index.php" method="get">
    <input id='data' type="text" name="mog">
</form>


<?php
$m = $_GET['mog'];
switch ($m) {
    default:
        echo "<p>heheehehehe</p>";
    case 1:
        echo "<p> di choi voi girl friend</p>";
        break;
    case 2:
        echo "<p> di choi voi thay</p>";
        break;
    case 3:
        echo "<p> di choi ma</p>";
        break;
    case 4:
        echo "<p> mong 4</p>";
        break;
    case 5:
        echo "<p>mong 5</p>";
        break;
    case 6:
        echo "<p>mong 6</p>";
        break;
}
?>

</body>
</html>
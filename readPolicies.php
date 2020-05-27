<?php
    $file = fopen('policies.txt', 'r');
?>

<html>
<head>
    <title>Read Policies</title>
</head>
<body>
    <h1>POLICIES</h1>
    <p>
        <?php
            while($line = fgets($file)){
                echo $line;
            }
        ?>
    </p>
</body>
</html>
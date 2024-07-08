<!DOCTYPE html>
<html>
<head>
    <title>Page Visit Counter</title>
</head>
<body>
    <?php
    $file = 'count.txt';
    if(file_exists($file)) {
        $count = file_get_contents($file);
        $count++;
    } else {
        $count = 0;
    }
    file_put_contents($file, $count);
    echo "Cette page est visitée " . $count . " fois.";
    ?>
</body>
</html>
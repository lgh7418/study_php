<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    // memeo.php?name=egoing
    // $_GET['name'];
    $str = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
    Quia fuga veritatis, fugiat quos ducimus porro reiciendis ut modi 
    obcaecati autem accusantium quas illo placeat similique laudantium assumenda 
    eius? Rerum, consequuntur.";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
    echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php
    echo nl2br($str);
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Array</h1>
    <?php
    $coworkers = array('egoing', 'dee', 'lee', 'doo');
    echo $coworkers[1] . '<br>';
    // php array total count
    // echo count($coworkers);
    var_dump(count($coworkers));    // int(4)

    echo '<br>';

    // php add value
    array_push($coworkers, 'kahee');
    var_dump($coworkers);
    ?>
</body>

</html>
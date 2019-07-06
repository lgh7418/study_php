<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?php
        // data라고하는 디렉토리에 있는 파일 목록을 가져와서 배열에 담아 리턴함
        // 배열에 담긴 것 중 '.'은 현재 디렉토리, '..'은 부모 디렉토리를 의미함
        $list = scandir('./data');

        $i = 0;
        while ($i < count($list)) {
            if ($list[$i] != '.') {
                if ($list[$i] != '..') {
                    echo "<li><a href='index.php?id=$list[$i]'>$list[$i]</a></li>\n";
                }
            }
            $i += 1;
        }


        // var_dump($list);
        /*        echo "<li>$list[0]</li>\n";
        echo "<li>$list[1]</li>\n";
        echo "<li>$list[2]</li>\n";
        echo "<li>$list[3]</li>\n";
        echo "<li>$list[4]</li>\n"; */

        /*     $i = 0;
        while ($i < count($list)) {
            if ($list[$i] != '.') {
                if ($list[$i] != '..') {
                    echo '<li><a href="index.php?id=' . $list[$i] . '">' . $list[$i] . '</a></li>';
                }
            }
            $i = $i + 1;
        } */
        ?>

    </ol>
    <h2>
        <?php
        if (isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo "Welcome";
        }
        ?>
    </h2>
    <?php
    if (isset($_GET['id'])) {
        echo file_get_contents("data/" . $_GET['id']);
    } else {
        echo "Hello, PHP";
    }
    ?>
</body>

</html>
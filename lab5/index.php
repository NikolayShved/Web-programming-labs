<head>
    <meta charset="UTF-8">
    <title>lab5</title>
</head>
<body>
    <?php
        $time = microtime();
        $time = explode(" ", $time);
        $time = $time[1] + $time[0];
        $start = $time;
    ?>

    <?php
        echo "<h2><big>Привет дорогой пользователь! Тебя приветствует Шведов Николай и желает тебе хорошего дня!<br/></big></h2>";
        echo "Счётчик посещаемости сайта: ";
        $filename = "counter.txt";
        if (file_exists($filename))
            $count = file_get_contents($filename);
        else
            $count = 1;
        echo $count;
        file_put_contents($filename, ++$count);
    ?>

    <?php
        if (--$count % 10 == 0) {
            echo "<br/>";
            echo "Поздравляю, ты десятый пользователь сайта!Каждому десятому пользователю мы дарим печеньки!)";
        }
    ?>

    <?php
        echo "<br/>";
        echo "<p>Текущая дата: " . date('d-m-Y') . "</p>\r\n";
        echo "<p>Текущее время: " . date('H:i:s') . "</p>\r\n";
        echo "<p>Отображение текущей даты и времени в длинном формате: " . date('d F Y, D - g:i:s A') . "</p>\r\n";
    ?>

    <?php
        $time = microtime();
        $time = explode(" ", $time);
        $time = $time[1] + $time[0];
        $finish = $time;
        $totaltime = ($finish - $start);
        printf ("Страница загрузилась за %f секунд(ы)", $totaltime);
    ?>
</body>

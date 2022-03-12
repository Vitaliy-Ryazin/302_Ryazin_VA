<?php
    function runTest(){

        $v1 = new Vector(3, 7, 11);
        echo 'Символьное представление 1-го вектора: '.PHP_EOL;
        echo "Ожидается: (3, 7, 11)".PHP_EOL;
        echo "Получено: ".$v1.PHP_EOL;

        $v2 = new Vector(1, -4, -2);
        echo 'Символьное представление 1-го вектора: '.PHP_EOL;
        echo "Ожидается: (1, -4, -2)".PHP_EOL;
        echo "Получено: ".$v2.PHP_EOL;

        $v3 = $v1->add($v2);
        echo 'Сложение векторов: '.PHP_EOL;
        echo "Ожидается: (4, 3, 9)".PHP_EOL;
        echo "Получено: ".$v3.PHP_EOL;

        $v4 = $v1->sub($v2);
        echo 'Вычитание векторов: '.PHP_EOL;
        echo "Ожидается: (2, 11, 13)".PHP_EOL;
        echo "Получено: ".$v4.PHP_EOL;

        $number = 11;
        $v5 = $v1->product($number);
	    echo 'Умножение вектора 1 на число 11: '.PHP_EOL;
        echo "Ожидается: (33, 77, 121)".PHP_EOL;
        echo "Получено: ".$v5.PHP_EOL;

        $number_scal = $v1->scalarProduct($v2);
        echo 'Скалярное произведение векторов: '.PHP_EOL;
        echo "Ожидается: -47".PHP_EOL;
        echo "Получено: ".$number_scal.PHP_EOL;

        $v6 = $v1->vectorProduct($v2);
        echo 'Векторное произведение векторов: ';
        echo "Ожидается: (30, 17, -19)".PHP_EOL;
        echo "Получено: ".$v6.PHP_EOL;

    }
?>
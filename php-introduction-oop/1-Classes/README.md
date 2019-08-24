### src\Point.php

Реализуйте класс Point с публичными свойствами $x и $y

### src\PointFunctions.php

Реализуйте функцию getMidpoint, которая принимает на вход
две точки (объекты) и возвращает точку (объект) лежащую
между ними (поиск середины отрезка)

    <?php

    $point1 = new Point();
    $point1->x = 1;
    $point1->y = 10;
    $point2 = new Point();
    $point2->x = 10;
    $point2->y = 1;
    
    $midpoint = getMidpoint($point1, $point2);
    $midpoint->x; // => 5.5
    $midpoint->y; // => 5.5
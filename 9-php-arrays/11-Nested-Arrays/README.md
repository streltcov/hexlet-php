

У вас есть набор данных, описывающих изменение температуры воздуха в одном городе в течение нескольких суток
Данные представлены массивом, в котором каждый элемент — это массив, содержащий список температур в течение одних
суток

Рассмотрим статистику температур (например, по состоянию на утро, день и вечер) за три дня. Для первого дня значения
температур составляют: -5°, 7°, 1°; для второго дня: 3°, 2°, 3°; и для третьего дня: -1°, -1°, 10° . Массив,
отражающий такую статистику, будет выглядеть так:

    <?php
    
    $data = [
        [-5, 7, 1],
        [3, 2, 3],
        [-1, -1, 10],
    ];

### src\Arrays.php

Реализуйте функцию getIndexOfWarmestDay, которая находит самый тёплый день (тот, в котором была зарегистрирована
максимальная температура) и возвращает индекс этого дня в исходном массиве

##### Примеры

    <?php
    
    $data = [
        [-5, 7, 1],
        [3, 2, 3],
        [-1, -1, 10],
    ];
    
    getIndexOfWarmestDay($data); // 2

##### Подсказки

* Если на вход поступил пустой массив, то функция должна вернуть null
* Если существует несколько дней с максимальной температурой, то функция возвращает индекс последнего из этих
дней (то есть выбирается день с наибольшим индексом)

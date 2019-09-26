
### src\Arrays.php

Реализуйте функцию get, которая извлекает из массива элемент по указанному индексу, если индекс существует, либо возвращает значение по умолчанию. Функция принимает на вход три аргумента:

   Массив
   Индекс
   Значение по умолчанию (равно null)

### Примеры

    <?php
    
    use function App\Arrays\get;
    
    $cities = ['moscow', 'london', 'berlin', 'porto'];
    
    get($cities, 1); // => london
    get($cities, 4); // => null
    get($cities, 10, 'paris'); // => paris
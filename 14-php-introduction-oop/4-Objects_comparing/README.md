
### src\UserFunctions.php
Реализуйте функцию areUsersEqual($user, $user), которая сравнивает переданных пользователей на основе их идентификаторов. При этом функция должна убедиться, что переданные объекты - пользователи. Сделайте это через аннотирование входных параметров типами.

    <?php
    
    use function App\UserFunctions\areUsersEqual;
    
    $user1 = new User();
    $user1->id = 1;
    
    $user2 = new User();
    $user2->id = 1;
    
    areUsersEqual($user1, $user2); // => true

    $cat = new Cat();
    $cat->id = 1;
    
    areUsersEqual($user1, $cat); // => Boom! (error)
    
### Подсказки
Вспомните что класс можно указывать в определении функции


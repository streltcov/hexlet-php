### src\Emails.php

Реализуйте функцию getFreeDomainsCount, которая принимает на вход список
емейлов, а возвращает количество емейлов, расположенных на каждом бесплатном
домене. Список бесплатных доменов хранится в константе FREE_EMAIL_DOMAINS

Пример использования:

    <?php
    
    $emails = [
        'info@gmail.com',
        'info@yandex.ru',
        'info@hotmail.com',
        'mk@host.com',
        'support@hexlet.io',
        'key@yandex.ru',
        'sergey@gmail.com',
        'vovan@gmail.com',
        'vovan@hotmail.com'
    ];
    
    getFreeDomainsCount($emails);
    # Array (
    #     'gmail.com' => 3
    #     'yandex.ru' => 2
    #     'hotmail.com' => 2
    #  )

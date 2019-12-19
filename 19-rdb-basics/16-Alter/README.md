### solution.sql

Напишите запрос обновляющий таблицу структуры:	

    CREATE TABLE users (
      id bigint PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
      email varchar(255) NOT NULL,
      age integer,
      name varchar(255)
    );


В структуру:

    CREATE TABLE users (
      id bigint PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
      email varchar(255) NOT NULL UNIQUE,
      first_name varchar(255) NOT NULL,
      created_at timestamp
    );


name и first_name - одна и та же колонка

Подсказки:

    Добавление констрейна UNIQUE выполняется через команду ADD
    Установка констрейна NOT NULL выполняется через команды ALTER COLUMN и SET

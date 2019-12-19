CREATE TABLE users (
    id INT PRIMARY KEY,
    first_name VARCHAR(255),
    created_at DATE
);

INSERT INTO users (id, first_name, created_at) VALUES (1, 'user_1', '2000-01-01');

CREATE TABLE orders (
    id INT PRIMARY KEY,
    user_first_name VARCHAR(255),
    months INT,
    created_at DATE
);

INSERT INTO orders (id, user_first_name, months, created_at) VALUES (1, 'user_1', 5, '2010-01-01'), (2, 'user_1', 7, '2011-01-01');
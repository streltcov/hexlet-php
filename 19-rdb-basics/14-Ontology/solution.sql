CREATE TABLE goods (
    id INT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
    name VARCHAR(255),
    price INT
);

CREATE TABLE orders (
    id INT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
    user_id INT REFERENCES users (id),
    create_at DATE
);

CREATE TABLE order_items (
    id INT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
    order_id INT REFERENCES orders (id),
    good_id INT REFERENCES goods (id),
    price INT
);
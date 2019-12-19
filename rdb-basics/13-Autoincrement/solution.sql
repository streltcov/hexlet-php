CREATE TABLE article_categories (
    id INT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
    name TEXT
);

INSERT INTO article_categories (name) VALUES ('review'), ('digest');
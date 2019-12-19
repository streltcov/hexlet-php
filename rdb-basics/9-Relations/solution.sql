CREATE TABLE cars (
    user_first_name varchar(255),
    brand varchar(255),
    model varchar(255)
);

INSERT INTO users VALUES ('user_1', 'lastname_1', '1980-01-01'), ('user_2', 'lastname_2', '1981-01-01');

INSERT INTO cars (user_first_name, brand, model) VALUES
        ('user_1', 'bmw', 'x3'),
        ('user_2', 'renault', 'logan'),
        ('user_1', 'hyundai', 'solaris'),
        ('user_2', 'mitsubishi', 'pajero'),
        ('user_1', 'toyota', 'camry');
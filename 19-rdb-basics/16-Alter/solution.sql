ALTER TABLE users ADD CONSTRAINT email_unique UNIQUE (email);
ALTER TABLE users DROP COLUMN age;
ALTER TABLE users RENAME COLUMN name TO first_name;
ALTER TABLE users ADD CONSTRAINT first_name_unique UNIQUE (first_name);
ALTER TABLE users ADD COLUMN created_at TIMESTAMP;
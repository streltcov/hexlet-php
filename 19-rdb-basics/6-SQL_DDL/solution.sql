-- creating table 'courses'
CREATE TABLE courses (
    name varchar(255),
    body text,
    created_at timestamp
);

-- creating table 'users'
CREATE TABLE users (
    first_name varchar(255),
    email varchar(255),
    manager boolean
);

-- creating table 'course_members'
CREATE TABLE course_members (
    user_id integer,
    course_id integer,
    created_at timestamp
);
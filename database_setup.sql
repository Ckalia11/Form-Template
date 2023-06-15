-- This query creates the table named user in the database named form

CREATE TABLE user (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    radio_button VARCHAR(20) NOT NULL,
    checkbox VARCHAR(100) NOT NULL,
    country VARCHAR(50) NOT NULL,
    text_box TEXT NOT NULL
);

-- This query creates the table named upload in the database named form

CREATE TABLE upload (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(255) NOT NULL,
    filename VARCHAR(255) NOT NULL
);
-- Create a new database
CREATE DATABASE IF NOT EXISTS calisthenics_website_database;


USE calisthenics_website_database;

-- Create the User table
CREATE TABLE IF NOT EXISTS User (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL
);

-- Create the Session table
CREATE TABLE IF NOT EXISTS Session (
    session_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    date DATE NOT NULL,
    start_time TIME NOT NULL,
    duration INT NOT NULL,
    location VARCHAR(255) NOT NULL,
    trainer_id INT,
    FOREIGN KEY (trainer_id) REFERENCES User(user_id)
);

-- Create the Subscription table
CREATE TABLE IF NOT EXISTS Subscription (
    subscription_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    session_id INT,
    subscription_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES User(user_id),
    FOREIGN KEY (session_id) REFERENCES Session(session_id)
);

-- Create the Review table
CREATE TABLE IF NOT EXISTS Review (
    review_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    session_id INT,
    rating INT NOT NULL,
    comment TEXT,
    review_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES User(user_id),
    FOREIGN KEY (session_id) REFERENCES Session(session_id)
);

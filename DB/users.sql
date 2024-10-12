CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    profile_picture VARCHAR(255) DEFAULT 'user.jpg',
    password VARCHAR(255) NOT NULL
    
);

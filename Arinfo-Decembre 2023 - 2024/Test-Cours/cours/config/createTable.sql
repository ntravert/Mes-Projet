CREATE TABLE IF NOT EXISTS `post`(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    abstract VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    createdAt DATETIME NOT NULL
)


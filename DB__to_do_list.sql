use todo;
CREATE TABLE todos (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    title varchar(255) NOT NULL,
    date_time DATETIME DEFAULT CURRENT_TIMESTAMP,
    checked TINYINT(1) DEFAULT 0,
    INDEX idx_checked (checked)
);
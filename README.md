Для запуску потрібно встановлений OpenServer, 
так як там вже встановлені всі компоненти потрібні для роботи,
або встановити всі компоненти окремо

PhpMyAdmin в проекті встановлені ім'я користувача root, пароль відсутній

В розділі з sql командами виконать нажче приведену команду, яка створить 
базу та таблицю з потрібними полями

CREATE DATABASE IF NOT EXISTS quiz CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE quiz;

CREATE TABLE IF NOT EXISTS results (
id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
count INT NOT NULL,
correct_answer INT NOT NULL,
wrong_answer INT NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
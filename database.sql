-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS admintheme_db;
USE admintheme_db;

-- Crear la tabla usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(50) NOT NULL UNIQUE,
    pass VARCHAR(255) NOT NULL,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    level INT NOT NULL DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar usuario admin inicial
-- Credenciales: user: admin, pass: admin123
INSERT INTO usuarios (user, pass, first_name, last_name, level)
VALUES ('admin', 'admin123', 'Administrador', 'Sistema', 10);

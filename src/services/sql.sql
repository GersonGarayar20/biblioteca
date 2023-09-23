CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255),
    isbn VARCHAR(20),
    editorial VARCHAR(100),
    anio_publicacion INT,
    genero VARCHAR(50),
    sinopsis TEXT,
    portada_url VARCHAR(255),
    idioma VARCHAR(50),
    numero_paginas INT,
    disponibilidad BOOLEAN DEFAULT true
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE favorites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    book_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (book_id) REFERENCES books(id)
);
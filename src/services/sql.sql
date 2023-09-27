CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255),
    editorial VARCHAR(100),
    publication_year INT,
    cover_url VARCHAR(255),
    pdf_url VARCHAR(255)
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

INSERT INTO books(title, author, editorial, publication_year, cover_url, pdf_url) VALUES 
('La asamblea de las mujeres','Arístófanes','Feedbooks',null,'1000000000785.jpg', '1000000000785.pdf'),
('Fabulas de Esopo IX','Esopo','Feedbooks',null,'067_Esopo_-_Las_fabulas._Vol._IX.jpg','067_Esopo_-_Las_fabulas._Vol._IX.pdf'),
('Poética','Arístófanes','Feedbooks',1798,'1000000000662.jpg', '1000000000662.pdf'),
('Las avispas','Arístófanes','Feedbooks',null,'1000000000787.jpg', '1000000000787.pdf'),
('Las nubes','Arístófanes','Feedbooks',null,'1000000000788.jpg', '1000000000788.pdf'),
('Robur el conquistador','Verne, Jules','Feedbooks',null,'51pC_ZuIeXL._SX339_BO1_204_203_200_.jpg', '159_robur_el_conquistador.pdf'),
('Veinte mil leguas de viaje submarino','Verne, Jules','Feedbooks',null,'165_Julio__Verne_-_Veinte_mil_leguas_de_viaje_submarino.jpg', '165_Julio__Verne_-_Veinte_mil_leguas_de_viaje_submarino.pdf'),
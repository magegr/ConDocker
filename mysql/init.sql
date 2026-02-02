CREATE TABLE IF NOT EXISTS peliculas ( 

    id INT AUTO_INCREMENT PRIMARY KEY, 

    titulo VARCHAR(255) NOT NULL, 

    director VARCHAR(255) NOT NULL 

); 

 

INSERT INTO peliculas (titulo, director) VALUES 

('El Padrino', 'Francis Ford Coppola'), 

('Pulp Fiction', 'Quentin Tarantino'), 

('The Dark Knight', 'Christopher Nolan'); 
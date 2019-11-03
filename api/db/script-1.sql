CREATE DATABASE IF NOT EXISTS api_db;
USE api_db;

CREATE TABLE IF NOT EXISTS products(
	id INT(11) AUTO_INCREMENT,
	name VARCHAR(255),
	price DECIMAL(10, 2),
	PRIMARY KEY (id)
	);

INSERT INTO products VALUES(null, 'Curso de Swagger', 2456);
INSERT INTO products VALUES(null, 'Curso de Angular', 5469);

CREATE TABLE users (
    id VARCHAR(100) PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
);

INSERT INTO users (id, name, email, password) VALUES('13123jasdhfasjdfhasf', 'cafe green', 'adanu0503@gmail.com', '123456');

CREATE TABLE products (
    id VARCHAR(100) PRIMARY KEY, 
    name VARCHAR(255),
    price DECIMAL(10, 2),
    image MEDIUMBLOB,
    product_detail TEXT
);


CREATE TABLE services (
	id varchar(100) PRIMARY KEY,
    name varchar(20),
    description varchar(50),
    image MEDIUMBLOB
);

CREATE TABLE cart (
    id VARCHAR(100) PRIMARY KEY,  
    user_id VARCHAR(100),         
    product_id VARCHAR(100),
    price DECIMAL(10, 2),
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE wishlist (
    id VARCHAR(100) PRIMARY KEY,  
    user_id VARCHAR(100),        
    product_id VARCHAR(100),
    price DECIMAL(10, 2),
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE orders (
    id VARCHAR(100) PRIMARY KEY,  
    user_id VARCHAR(100),         
    name VARCHAR(255),
    number VARCHAR(20),
    email VARCHAR(255),
    address VARCHAR(255),
    address_type VARCHAR(50),
    method VARCHAR(50),
    product_id VARCHAR(100),
    price DECIMAL(10, 2),
    qty INT,
    date DATE,
    status VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- insert datos de prueba para products
INSERT INTO products (id, name, price, image, product_detail) VALUES ('13123jasdhfasjdfhasf', 'cafe green', 160.00, '4.webp', '');

INSERT INTO services (id, name, description, image) VALUES ('13123jasdhfasjdfhasf', 'cafe green', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.', '4.webp');




CREATE PROCEDURE sp_listar_products()
BEGIN
    SELECT * FROM products;
END

CREATE PROCEDURE sp_listar_services()
BEGIN
    SELECT * FROM services;
END

CREATE PROCEDURE sp_listar_usuarios()
BEGIN
    SELECT * FROM users;
END
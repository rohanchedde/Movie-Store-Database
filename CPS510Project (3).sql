DROP TABLE GENRES;

CREATE TABLE GENRES(
            genre VARCHAR2(25 CHAR) UNIQUE
            
);

DROP TABLE MOVIE;

CREATE TABLE MOVIE(
            movieId     INT,
            movieName   VARCHAR2(25 CHAR) NOT NULL,
            moviePrice INT DEFAULT 0,
            CONSTRAINT chk_price CHECK(movieprice>=0),
            PRIMARY KEY (movieId),
            genre       VARCHAR2(25 CHAR) NOT NULL,
            FOREIGN KEY (genre) REFERENCES genres(genre)
);

INSERT INTO MOVIE(movieId,movieName,moviePrice,genre) VALUES (1,'Avengers',10,'superhero');
INSERT INTO MOVIE(movieId,movieName,moviePrice,genre) VALUES (2,'Rocky',8,'sports');
INSERT INTO MOVIE(movieId,movieName,moviePrice) VALUES (3,'Barbie',20);


SELECT * FROM MOVIE;

--Check constraint
--INSERT INTO MOVIE(movieId,movieName,moviePrice) VALUES (1,'Avengers',-10);

DROP TABLE CUSTOMER;
CREATE TABLE CUSTOMER(
            customerId     INT,
            customerName   VARCHAR2(25 CHAR) NOT NULL,
            PRIMARY KEY (customerId)
);

INSERT INTO CUSTOMER(customerId,customerName) VALUES (1,'Tim Rozer');
INSERT INTO CUSTOMER(customerId,customerName) VALUES (2,'Rohan Chedde');

SELECT * FROM MOVIE;
SELECT * FROM CUSTOMER;
SELECT * FROM ACCOUNT;

DROP TABLE ADMIN;

CREATE TABLE ADMIN(
            username VARCHAR2(25 CHAR) UNIQUE,
            pass VARCHAR2(25 CHAR),
            customerId     INT,
            catalogId INT,
            
            FOREIGN KEY (customerId) REFERENCES customer(customerId),
            FOREIGN KEY (catalogId) REFERENCES catalog(catalogId)

     
);

DROP TABLE SHOPPINGCART;
CREATE TABLE SHOPPINGCART(

            orderId INT,
            total INT,
            price INT,
            movieId  INT,
            customerId INT,
            PRIMARY KEY(orderId),
            FOREIGN KEY (movieId) REFERENCES movie(movieId),
            FOREIGN KEY (customerId) REFERENCES customer(customerId) 
            
);
DROP TABLE PAYMENT;

CREATE TABLE PAYMENT(
            orderId INT,
            method VARCHAR2(25 CHAR),
            authen INT UNIQUE,
            
            FOREIGN KEY (orderId) REFERENCES shoppingcart(orderId)

);
DROP TABLE MEMBERSHIP;

CREATE TABLE MEMBERSHIP(
            points INT,
            CONSTRAINT chk_points CHECK(points>=0),

            PRIMARY KEY(points)
);

DROP TABLE ACCOUNT;
CREATE TABLE ACCOUNT(
            username VARCHAR2(25 CHAR),
            pass  VARCHAR2(25 CHAR),
            CONSTRAINT credentials PRIMARY KEY(username),
            points INT,
            customerId INT,
            FOREIGN KEY (customerId) REFERENCES customer(customerId),
            FOREIGN KEY (points) REFERENCES membership(points)
            
);

INSERT INTO ACCOUNT(username,pass) VALUES ('TimR200','cookie');
INSERT INTO ACCOUNT(username,pass) VALUES ('TimR200','muffin');
INSERT INTO ACCOUNT(username,pass) VALUES ('rchedde','cookie');


DROP TABLE CATALOG;

CREATE TABLE CATALOG(
        catalogId INT,
        genre       VARCHAR2(25 CHAR) NOT NULL,
            FOREIGN KEY (genre) REFERENCES genres(genre),
        movie REFERENCES movie(movieId),
        PRIMARY KEY(catalogId)
);
DROP TABLE WISHLIST;

CREATE TABLE WISHLIST(
        movieId  INT,
            username VARCHAR2(25 CHAR),
        FOREIGN KEY (movieId) REFERENCES movie(movieId),
        FOREIGN KEY (username) REFERENCES account(username) 
);
INSERT INTO admin(username, pass)
VALUES ('admin','popcorn');
CREATE DATABASE discoverly;

USE discoverly;

CREATE TABLE User (
    userID INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE Place (
    placeID INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50),
    name VARCHAR(50),
    location INT,
    about VARCHAR(900),
    address VARCHAR(50),
    hours VARCHAR(50),
    price INT,
    contact CHAR(9),
    website VARCHAR(50),
    accessibility VARCHAR(50),
    duration INT,
    photos VARCHAR(500)
);

CREATE TABLE Review (
    reviewID INT AUTO_INCREMENT PRIMARY KEY,
    userID INT NOT NULL,
    placeID INT NOT NULL,
    comment VARCHAR(120),
    rating INT,

    CONSTRAINT fk_review_user
        FOREIGN KEY (userID) REFERENCES User(userID)
        ON DELETE CASCADE,

    CONSTRAINT fk_review_place
        FOREIGN KEY (placeID) REFERENCES Place(placeID)
        ON DELETE CASCADE
);

CREATE TABLE Wishlist (
    userID INT NOT NULL,
    placeID INT NOT NULL,

    PRIMARY KEY (userID, placeID),

    CONSTRAINT fk_wishlist_user
        FOREIGN KEY (userID) REFERENCES User(userID)
        ON DELETE CASCADE,

    CONSTRAINT fk_wishlist_place
        FOREIGN KEY (placeID) REFERENCES Place(placeID)
        ON DELETE CASCADE
);
      
/*SHOW TABLES;
SELECT * FROM Vehicle;
SELECT * FROM Type;
SELECT * FROM Location;*/
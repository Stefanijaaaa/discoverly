CREATE DATABASE discoverly;

USE discoverly;

CREATE TABLE Users (
    userID INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE Place (
    placeID INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50),
    name VARCHAR(100),
    location INT,
    about VARCHAR(900),
    address VARCHAR(200),
    hours VARCHAR(100),
    price INT,
    contact VARCHAR(50),
    website VARCHAR(500),
    accessibility VARCHAR(100),
    duration INT,
    photos VARCHAR(1000)
);

CREATE TABLE Review (
    reviewID INT AUTO_INCREMENT PRIMARY KEY,
    userID INT NOT NULL,
    placeID INT NOT NULL,
    comment VARCHAR(200),
    rating INT,

    CONSTRAINT fk_review_user
        FOREIGN KEY (userID) REFERENCES Users(userID)
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
        FOREIGN KEY (userID) REFERENCES Users(userID)
        ON DELETE CASCADE,

    CONSTRAINT fk_wishlist_place
        FOREIGN KEY (placeID) REFERENCES Place(placeID)
        ON DELETE CASCADE
);
      
/*SHOW TABLES;
SELECT * FROM Vehicle;
SELECT * FROM Type;
SELECT * FROM Location;*/

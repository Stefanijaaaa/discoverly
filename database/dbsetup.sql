DROP DATABASE IF EXISTS discoverly;

CREATE DATABASE discoverly;

USE discoverly;

CREATE TABLE Users (
    userID INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    email VARCHAR(200) NOT NULL UNIQUE,
    password VARCHAR(300) NOT NULL
);

CREATE TABLE Place (
    placeID INT AUTO_INCREMENT PRIMARY KEY,
    userID INT NOT NULL,
    type VARCHAR(100),
    name VARCHAR(200),
    location VARCHAR(300),
    about VARCHAR(1500),
    address VARCHAR(300),
    hours VARCHAR(300),
    price VARCHAR(100),
    contact VARCHAR(300),
    website VARCHAR(500),
    accessibility VARCHAR(300),
    duration INT,
    photos VARCHAR(2000),
    latitude DECIMAL(9,6),
    longitude DECIMAL(9,6),

    CONSTRAINT fk_place_user
        FOREIGN KEY (userID) REFERENCES Users(userID)
        ON DELETE CASCADE
);

CREATE TABLE Review (
    reviewID INT AUTO_INCREMENT PRIMARY KEY,
    userID INT NOT NULL,
    placeID INT NOT NULL,
    comment VARCHAR(500),
    rating INT,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_review_user
        FOREIGN KEY (userID) REFERENCES Users(userID)
        ON DELETE CASCADE,

    CONSTRAINT fk_review_place
        FOREIGN KEY (placeID) REFERENCES Place(placeID)
        ON DELETE CASCADE
);

CREATE TABLE Wishlist (
    wishlistID INT AUTO_INCREMENT PRIMARY KEY,
    userID INT NOT NULL,
    placeID INT NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT uq_user_place
        UNIQUE (userID, placeID),

    CONSTRAINT fk_wishlist_user
        FOREIGN KEY (userID) REFERENCES Users(userID)
        ON DELETE CASCADE,

    CONSTRAINT fk_wishlist_place
        FOREIGN KEY (placeID) REFERENCES Place(placeID)
        ON DELETE CASCADE
);
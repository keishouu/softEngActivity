CREATE TABLE GameDevRegistration (
    Developer_id INT PRIMARY KEY NOT NULL  AUTO_INCREMENT,
    first_name varchar(50),
    last_name varchar(50),
    email varchar(255),
    expLevel INT,
    preferredEngine varchar(50),
    progLanguage varchar(255),
    focusPlatform varchar(255),
    collabExp varchar(255),
    motivation varchar(255),
    favGame varchar(255),
    dateAdded timestamp DEFAULT CURRENT_TIMESTAMP
); 
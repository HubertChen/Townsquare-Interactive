-- Create the necessary tables for the assignment at hand. 
-- Assumes the main database is called 'temp'
use temp;

CREATE TABLE articles (
    id int NOT NULL AUTO_INCREMENT, 
    title varchar(255) NOT NULL, 
    subtitle varchar(255),
    author varchar(255) NOT NULL,
    text text NOT NULL,
    date_created timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
);

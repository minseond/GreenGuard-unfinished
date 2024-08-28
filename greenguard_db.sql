CREATE DATABASE greenguard_db;

use greenguard_db;

CREATE TABLE users (
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255)
);

INSERT INTO users (image_path, plant_type, disease_name, explanation, solution, image_url)
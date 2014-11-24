CREATE TABLE dvd(dvd_id INT(11) UNSIGNED auto_increment, title VARCHAR(255), production_year VARCHAR(255), PRIMARY KEY(dvd_id));

CREATE TABLE customer(customer_id INT(11) UNSIGNED auto_increment, first_name VARCHAR(255), last_name VARCHAR(255), passport_code INT(10) UNSIGNED, registration_date DATE, PRIMARY KEY(customer_id));

CREATE TABLE offer(offer_id INT(11) UNSIGNED auto_increment, dvd_id INT(11), customer_id INT(11), offer_date DATE, return_date DATE, PRIMARY KEY(offer_id));
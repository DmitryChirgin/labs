INSERT INTO dvd(title, production_year)
VALUES('disk1', 2010),
      ('disk2', 2011),
	  ('disk3', 2010),
	  ('disk4', 2013),
	  ('disk5', 2014);
	  
INSERT INTO customer(first_name, last_name, passport_code, registration_date)
VALUES('Mike', 'Stone', 3302, '2013-11-11'),
      ('Jesse', 'Pinkman', 7855, '2014-01-15'),
	  ('Walter', 'White', 4516, '2014-06-17'),
	  ('John', 'Travolta', 3940, '2014-09-27'),
	  ('Bob', 'Marley', 1520, '2014-10-10');

INSERT INTO offer(dvd_id, customer_id, offer_date, return_date)
VALUES(1, 5, '2014-10-12', '2014-10-20'),
      (2, 3, '2014-11-01', '2014-11-10'),
	  (3, 1, '2014-11-09', '2014-11-15'),
	  (4, 2, '2014-11-15', NULL),
	  (5, 4, '2014-11-18', NULL);
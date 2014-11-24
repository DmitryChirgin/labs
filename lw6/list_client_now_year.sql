SELECT customer.first_name, customer.last_name, dvd.title
FROM dvd, customer, offer 
WHERE offer.offer_date < '2014-11-21'
AND dvd.dvd_id = offer.dvd_id
AND customer.customer_id = offer.customer_id; 

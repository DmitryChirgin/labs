SELECT dvd.title 
FROM dvd, offer 
WHERE offer.return_date IS NULL 
AND dvd.dvd_id = offer.dvd_id;
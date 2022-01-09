> ## Soru 1
```SQL
SELECT AVG(rental_rate) FROM film;
```

> ## Soru 2
```SQL
SELECT COUNT(title) FROM film
WHERE title LIKE 'C%';
```

> ## Soru 3
```SQL
SELECT MAX(length) FROM film
WHERE rental_rate = 0.99;
```
> ## Soru 4
```SQL
SELECT COUNT(replacement_cost) FROM film
WHERE length > 150;
```

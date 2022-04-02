
> ## Soru 1
```SQL
SELECT * FROM country
WHERE country LIKE 'A%a'; 

```

> ## Soru 2
```SQL
SELECT * FROM country
WHERE country LIKE '%_____n';
```

> ## Soru 3
```SQL
SELECT title FROM film
WHERE title ILIKE '%T%';
```

> ## Soru 4
```SQL
SELECT * FROM film
WHERE title LIKE 'C%' AND (length > 90 AND rental_rate = 2.99);
```

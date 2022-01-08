> ## Soru 1
```SQL
SELECT title, length FROM film
WHERE title LIKE '%n' 
ORDER BY length DESC
lIMIT 10;
```

> ## Soru 2
```SQL
SELECT title, length FROM film
WHERE title LIKE '%n'
ORDER BY length
OFFSET 5
LIMIT 5;
```

> ## Soru 3
```SQL
SELECT last_name, store_id FROM CUSTOMER
WHERE store_id = 1
ORDER BY last_name ASC
LIMIT 4;
```

> ## Soru 1
```SQL

SELECT city, country 
FROM city
INNER JOIN country on city.country_id = country.country_id;

```

> ## Soru 2
```SQL
SELECT payment_id, first_name, last_name 
FROM customer
INNER JOIN payment on customer.customer_id = payment.customer_id;

```

> ## Soru 3
```SQL
SELECT store_id, COUNT(*) FROM customer
GROUP BY store_id;
```



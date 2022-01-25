> ## Soru 1
```SQL
SELECT first_name FROM actor UNION
SELECT first_name FROM customer;

```

> ## Soru 2
```SQL
SELECT first_name FROM actor INTERSECT SELECT
first_name FROM customer;

```

> ## Soru 3
```SQL
SELECT first_name FROM actor except
SELECT first_name FROM customer;

```

> ## Soru 4
```SQL
SELECT first_name FROM actor UNION ALL SELECT first_name FROM customer;
SELECT first_name FROM actor INTERSECT all SELECT first_name FROM customer;
SELECT first_name FROM actor EXCEPT all SELECT first_name FROM customer;

```





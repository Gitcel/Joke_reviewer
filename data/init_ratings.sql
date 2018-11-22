SELECT joke_id,
jokes.setup,
jokes.punchline,
SUM(rating) AS total,
COUNT(rating) AS frequency,
SUM(rating) / COUNT(rating) AS averages

FROM reviews

INNER JOIN jokes ON reviews.joke_id = jokes.id

GROUP BY joke_id
ORDER BY frequency DESC

LIMIT 10;
<?php

$dsn = 'mysql:host=localhost;dbname=your_database_name';
$username = 'your_username';
$password = 'your_password';

try {
    $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Ошибка подключения к базе данных: ' . $e->getMessage();
    exit;
}

$query = "
    SELECT b.title, COUNT(ba.author_id) AS coauthors_count
    FROM Books b
    JOIN BookAuthors ba ON b.book_id = ba.book_id
    GROUP BY b.book_id
    HAVING coauthors_count >= 3;
";

$stmt = $dbh->prepare($query);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    $title = $row['title'];
    $coauthorsCount = $row['coauthors_count'];

    echo "Книга: $title, Количество соавторов: $coauthorsCount" . PHP_EOL;
}

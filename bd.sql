-- Напишите структуру базы данных для хранения информации о своей книжной Библиотеке: основная информация названия книг и имена авторов.

CREATE TABLE Books
(
    id    INT PRIMARY KEY,
    title VARCHAR(255)
);

CREATE TABLE Authors
(
    id   INT PRIMARY KEY,
    name VARCHAR(255)
);

CREATE TABLE BookAuthor
(
    book_id   INT,
    author_id INT,
    FOREIGN KEY (book_id) REFERENCES Books (id),
    FOREIGN KEY (author_id) REFERENCES Authors (id)
);

-- Из созданной вами базы данных, необходимо получить список книг, которые написаны 3-мя соавторами. То есть, получить отчет «книга — количество соавторов» и отсеять те, у которых соавторов меньше 3х.

SELECT b.title, COUNT(ba.author_id) AS coauthors_count
FROM Books b
         JOIN BookAuthors ba ON b.book_id = ba.book_id
GROUP BY b.book_id
HAVING coauthors_count >= 3;
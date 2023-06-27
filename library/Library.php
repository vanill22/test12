<?php

namespace library;

class Library
{
    private $books;

    public function __construct()
    {
        $this->books = [];
    }

    public function addBook(Book $book)
    {
        $this->books[$book->getId()] = $book;
    }

    public function removeBook($bookId)
    {
        if (isset($this->books[$bookId])) {
            unset($this->books[$bookId]);
        }
    }

    public function getAllBooks()
    {
        return $this->books;
    }

    public function sortBooksByTitle()
    {
        usort($this->books, function ($a, $b) {
            return strcmp($a->getTitle(), $b->getTitle());
        });
    }
    public function searchBooksByTitle($searchQuery)
    {
        $matchingBooks = [];

        foreach ($this->books as $book) {
            if (stripos($book->getTitle(), $searchQuery) !== false) {
                $matchingBooks[] = $book;
            }
        }

        return $matchingBooks;
    }
}
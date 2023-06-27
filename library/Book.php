<?php

namespace library;

class Book
{
    private $id;
    private $title;
    private $authors;

    public function __construct($id, $title, $authors)
    {
        $this->id = $id;
        $this->title = $title;
        $this->authors = $authors;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthors()
    {
        return $this->authors;
    }
}
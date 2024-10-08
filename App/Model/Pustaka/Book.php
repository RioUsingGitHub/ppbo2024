<?php

namespace App\Model\Pustaka;

class Book {
    public int $ISBN;
    public string $title;
    public string $description;
    public string $category;
    public string $language;
    public int $numberOfPage;
    public Author $author;
    public Publisher $publisher;

    public function __construct(int $ISBN, string $title, string $description, string $category, string $language, int $numberOfPage, Author $author, Publisher $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll(): array {
        return [
            'ISBN' => $this->ISBN,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'language' => $this->language,
            'numberOfPage' => $this->numberOfPage,
            'author' => $this->author->name,
            'publisher' => $this->publisher->name
        ];
    }

    public function detail(int $ISBN): array {
        if ($this->ISBN === $ISBN) {
            return [
                'ISBN' => $this->ISBN,
                'title' => $this->title,
                'description' => $this->description,
                'category' => $this->category,
                'language' => $this->language,
                'numberOfPage' => $this->numberOfPage,
                'author' => $this->author->show('full'),
                'publisher' => $this->publisher->showDetails()
            ];
        } else {
            return [];
        }
    }
}
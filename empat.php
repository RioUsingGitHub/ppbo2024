<?php
class Author {
    public string $name;
    public string $description;

    public function __construct(string $name, string $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show(string $type): array {
        if ($type === 'summary') {
            return [
                'name' => $this->name
            ];
        }
        else if ($type === 'full') {
            return [
                'name' => $this->name,
                'description' => $this->description
            ];
        }
        else {
            return [];
        }
    }
}

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

class Publisher {
    public string $name;
    public string $address;
    private string $phone;

    public function __construct(string $name, string $address, string $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone(string $phone): void {
        $this->phone = $phone;
    }

    public function getPhone(): string {
        return $this->phone;
    }

    public function showDetails(): array {
        return [
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->getPhone()
        ];
    }
}

// nyoba objek
$author = new Author("J.K. Rowling", "J.K. Rowling adalah penulis seri Harry Potter.");

$publisher = new Publisher("Rio", "Wonoyoso Kota Baru, Pontianak", "0896oke");

$book = new Book(
    1,
    "Harry Potter and the Philosopher's Stone",
    "Buku pertama dari seri Harry Potter.",
    "Fantasy",
    "English",
    123,
    $author,
    $publisher
);

print_r($author->show('summary'));
print_r($book->showAll());
print_r($book->detail(1));
var_dump($book->detail(1));

$publisher->setPhone("0896oke2");
echo "Nomor Telepon Penerbit: " . $publisher->getPhone() . "\n";

print_r($publisher->showDetails());
?>
<?php
class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies;
            return true;
        } else {
            return false;
        }
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook($book) {
        if ($book->borrowBook()) {
            return true;
        } else {
            return false;
        }
    }

    public function returnBook($book) {
        $book->returnBook();
        echo "{$this->getName()} returned \"{$book->getTitle()}\"\n";
    }
}


// Creating 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Creating 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrowing books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies
echo "Available Copies of 'The Great Gatsby': " . $book1->getAvailableCopies() . "<br>";
echo "Available Copies of 'To Kill a Mockingbird': " . $book2->getAvailableCopies() . "<br>";
?>
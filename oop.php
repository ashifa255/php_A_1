<?php
class Book
{
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies)
    {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }
    public function borrowBook()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies = $this->availableCopies - 1;
            return $this->availableCopies;
        } else {
            echo "No copies of '" . $this->title . "' are available.";
        }
    }
    public function returnBook()
    {
        $this->availableCopies = $this->availableCopies + 1;
        return $this->availableCopies;
    }
}
class Member
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function borrowBook($book)
    {
        return $book->borrowBook();
    }
    public function returnBook($book)
    {
        return $book->returnBook();
    }
}
//Create two books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

//Create two members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

$member1->borrowBook($book1); //John Doe borrows The Great Gatsby book
$member2->borrowBook($book2); // Jane Smith borrows To Kill a Mockingbird book

echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "<br>";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies();

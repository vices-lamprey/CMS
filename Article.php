<?php
// Article.php
class Article {
    private $title;
    private $content;
    private $author;

    public function __construct($title, $content, $author) {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function display() {
        echo "Title: $this->title\n";
        echo "Content: $this->content\n";
        echo "Author: " . $this->author->getName() . "\n";
    }
}
?>

<?php
// Author.php
class Author {
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function display() {
        echo "Author: $this->name\n";
        echo "Email: $this->email\n";
    }
}
?>

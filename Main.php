<?php
// Main.php
require_once 'Author.php';
require_once 'Article.php';
require_once 'CMS.php';

$author1 = new Author("John Doe", "john.doe@example.com");
$author2 = new Author("Jane Smith", "jane.smith@example.com");

$article1 = new Article("PHP Basics", "An introduction to PHP programming.", $author1);
$article2 = new Article("Object-Oriented PHP", "Exploring OOP concepts in PHP.", $author2);

$cms = new CMS();
$cms->addArticle($article1);
$cms->addArticle($article2);

$cms->displayArticles();
?>

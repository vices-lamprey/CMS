<?php
// CMS.php
class CMS {
    private $articles = [];

    public function addArticle($article) {
        $this->articles[] = $article;
    }

    public function displayArticles() {
        echo "Articles in the CMS:\n";
        foreach ($this->articles as $article) {
            $article->display();
            echo "\n";
        }
    }
}
?>

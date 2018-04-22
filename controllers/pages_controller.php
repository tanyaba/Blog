<?php

include __DIR__ . '/../models/blogger.php';
include __DIR__ . '/../models/ArticlewithComments.php';
//require_once('models/ArticleswithComments.php');

class PagesController {

    public function home() {
        if (isset($_SESSION['blogger_id'])) {
            $blogger = blogger::getBloggerById($_SESSION['blogger_id']);
            $name = $blogger->getFname() . " " . $blogger->getLname();
        } else {
            $name = "Guest";
        }
        require_once('views/pages/Homepage.php');
    }

    public function error() {
        require_once('views/pages/error.php');
    }
    public function Homepage() {
      // we store all the posts in a variable
      $articles = ArticlewithComments::articleswithcomments();
      require_once('views/pages/Homepage.php');
    }

}

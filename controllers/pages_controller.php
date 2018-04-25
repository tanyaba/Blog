<?php

include __DIR__ . '/../models/blogger.php';
include __DIR__ . '/../models/ArticlewithComments.php';

//require_once('models/ArticleswithComments.php');

class PagesController {

    public function home() {
        try {
            if (isset($_SESSION['blogger_id'])) {
                $blogger = blogger::getBloggerById($_SESSION['blogger_id']);
                $name = $blogger->getFname() . " " . $blogger->getLname();
            } else {
                $name = "Guest";
            }
            require_once('views/pages/Homepage.php');
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }

    public function error() {
        require_once('views/pages/error.php');
    }

    public function Homepage() {
        try {
            // we store all the posts in a variable
            $articles = ArticlewithComments::articleswithcomments();
            require_once('views/pages/Homepage.php');
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }

    public function unsubscribe() {
        require_once 'views/pages/unsubscribe.php';
    }

    public function contact() {
        require_once('views/pages/contact.php');
    }

}

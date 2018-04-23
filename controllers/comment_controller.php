<?php

class CommentController {
    public function categoryone() {
        require_once('models/ArticlewithComments.php');
      // we store all the posts in a variable
      $articles = ArticlewithComments::articlescategoryone();
      require_once('views/articlescomments/categoryone.php');
    }
    
    public function categorytwo() {
        require_once('models/ArticlewithComments.php');
      // we store all the posts in a variable
      $articles = ArticlewithComments::articlescategorytwo();
      require_once('views/articlescomments/categorytwo.php');
    }
    public function categorythree() {
        require_once('models/ArticlewithComments.php');
      // we store all the posts in a variable
      $articles = ArticlewithComments::articlescategorythree();
      require_once('views/articlescomments/categorythree.php');
    }
    
    public function categoryfive() {
        require_once('models/ArticlewithComments.php');
      // we store all the posts in a variable
      $articles = ArticlewithComments::articlescategoryfive();
      require_once('views/articlescomments/categoryfive.php');
    }
     public function categorysix() {
        require_once('models/ArticlewithComments.php');
      // we store all the posts in a variable
      $articles = ArticlewithComments::articlescategorysix();
      require_once('views/articlescomments/categoryfive.php');
    }
}

?>


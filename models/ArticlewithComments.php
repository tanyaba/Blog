
<?php
class ArticlewithComments {

    public $id;
    public $title;
    public $content;
    public $date;
    public $numberofcomments;
    const AllowedTypes = ['image/jpeg', 'image/jpg'];
    const InputKey = 'myUploader';
    

    public function __construct($id, $title, $content, $date,$numberofcomments) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->date = $date;
        $this->numberofcomments=$numberofcomments;
    }
    
    public static function articleswithcomments() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('select article.article_id as article_id,title,content,article.date as date,count(comment.article_id) as numberofcomments from article join comment on article.article_id=comment.article_id group by article.article_id order by article.date DESC limit 6'); //SELECT * FROM `article` 
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $article) {
        $list[] = new ArticlewithComments($article['article_id'], $article['title'],$article['content'], $article['date'],$article['numberofcomments']);
      }
      return $list;
    }
    }


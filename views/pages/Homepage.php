<section class="fullsize-video-bg">
    <div id="video-viewport">
        <video width="1920" height="1280" autoplay muted loop>
            <source src="views/videos/London.mp4" type="video/mp4" />
        </video>
    </div>
</section>
<!--text over video-->
<!--<video autoplay muted loop id="myVideo" >
  <source src="views/videos/London.mp4" type="video/mp4">
</video>-->


<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
<div class="row" style="margin-top: 620px">
    <?php
    foreach ($articles as $article) {
        $file = 'views/images/' . $article->id . '.jpg';
        ?>
        <div class="col-md-<?php echo $bootstrapColWidth; ?>">
            <div class="w3-card-4" style="margin-top: 10px;padding-left: 10px" >
                <img src="<?php echo $file ?>" alt="" style="width:100%;height: 230px">
                <div class="w3-container w3-center">
                    <div class="fonttitle" ><a  href="?controller=article&action=readArticle&article_id=<?php echo $article->id; ?>"><p><?php echo $article->title; ?></p></a></div>
                    <div class="font" style="font-style: italic; margin-left:-40px ">Posted on <?php echo $article->date; ?>
                        <p style="display: inline; margin-left: 50px"><?php echo $article->numberofcomments; ?></p><span class="glyphicon glyphicon-comment" style="margin-left: 2px"></span>

                    </div>

        <!--<a href="?controller=article&action=readArticle&article_id=<?php echo $article->id; ?>" class="btn" style="margin-bottom:5px">Read more</a>-->
                </div>
            </div>
        </div>
        <?php
        $rowCount++;
        if ($rowCount % $numOfCols == 0)
            echo '</div><div class="row">';
    }
    ?>

 


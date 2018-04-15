

<?php foreach ($products as $product)
{
    $file=$file = 'views/images/' . $product->article_id. '.jpg';

?> 
<div class="container">
<div class="card-group" style="margin-left:20px;margin-right:20px;margin-top:20px">
   <div class="card">
    <img class="card-img-top" style="height:200px" src="<?php echo $file?>" alt="<?php echo $product->title?>">
    <div class="card-body">
      <h6 class="card-header"><?php echo $product->date; ?></h6>
      <h5 class="card-title"><?php echo $product->title?></h5>
      <p class="card-text text-muted text-truncate"><?php echo $product->content?></p>
      <a href="#" class="btn btn-primary">Comment here</a>
    </div>
  </div>
</div>

<?php }?> 
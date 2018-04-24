<!-- Display article title-->
<div class="page-header text-center">
    <h2><?php echo $article->title; ?></h2>
<small style="color:graytext"> <i>Posted on <?php echo $article->date; ?></i></small>
</div>
    
<!-- Display image-->        
<?php
$file = 'views/images/' . $article->id. '.jpg';
if (file_exists($file)) {
    $img = "<img src='$file' width='100% heght= 30%' />";
    echo $img;
} 
?>
 <!-- Display content-->   
<p class="text-justify" style="margin-top: 30px; margin-bottom: 40px"><?php echo $article->content; ?></p>

<!--  Display map if exists -->
<div id="map"></div> 

<!-- Display comments-->
<p class="page-header"></p>

<?php foreach ($comments as $commentObj) { ?>
<div class="media">
    <div class="media-body">
        <h6 class="media-heading"><?php echo $commentObj->subscriber; ?><br> <small><i>Posted on <?php echo $commentObj->date; ?></i></small></h6>
        <p ><small><?php echo $commentObj->comment; ?></small></p>
    </div>
    </div>   

<?php } ?>
 
<!-- Form for comments-->
<form action="" method="POST"  enctype="multipart/form-data" style="margin-top: 5%">
   
    <div class="form-group row">
       <div class="col-xs-12">
       <label >Leave your comment:</label>
       <textarea style="width: 50%" class="form-control well well-md"  name="comment" required></textarea>
       </div>
   </div>  
    
    <div class="form-group row">
        <div class="col-sm-4 col-xs-6">
        <label>Name</label>
        <input class="form-control" type="text" name="name" required > 
        </div>
    </div>
        <div class="form-group row">
            <div class="col-xs-6 col-sm-4">
            <label>Email</label>
            <input class="form-control" type="email" name="email" required>
            </div>            
        </div>

  <p>
      <button class="btn btn-primary"  type="submit">Submit</button>
  </p>
</form>  

    
    


<?php 
// setting variables for coordinates to be used/echoed in JS
$lat = $map->latitude; 
$lng = $map->longitude;  
?>    
<script>
    function initMap() {
        var myCenter = new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lng; ?>);
        var mapCanvas = document.getElementById("map");
        var mapOptions = {center: myCenter, zoom: 15};
        if (<?php echo $lat; ?> && <?php echo $lng; ?> ){
            var map = new google.maps.Map(mapCanvas, mapOptions);
            mapCanvas.style.height = '200px'; //element's height
            mapCanvas.style.width = '500px'; //element's width
            var marker = new google.maps.Marker({position: myCenter});
            marker.setMap(map);
        }
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIUIVIME9OM1AlDAcjQFbD_bfq4usMdQM&callback=initMap"></script>

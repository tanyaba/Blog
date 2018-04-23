


<form action="#" method="POST" class="w3-container" enctype="multipart/form-data">

    <div class='form-group'>
        <label>Title</label>
        <input class="form-control" type="text" name="title" required >
    </div>
    
    <!-- image upload-->
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />
  <p style="margin-top: 20px"><input type="file" name="myUploader" /></p>
  <i style="color:graytext">to upload image</i>
    
  <div style="margin-top:20px" class='form-group'>
        <label>Content</label>
        <textarea class="form-control" rows='10' name="content" required></textarea>      
    </div >
   
  <!-- map-->
  
  <div > <p style="font-weight:bold">Map coordinates</p></div>
 
        <label>Latitude</label>
        <div class="row" >
            <div class="col-xs-3">
        <input class="form-control" type="text" name="latitude" >
            </div>
        </div>
        <label>Longitude</label>
        <div class="row" >
            <div class="col-xs-3">
        <input class="form-control" type="text" name="longitude" >
            </div>
    </div> 
  
  <div  style="margin-top: 10px; margin-bottom: 20px">
      <button class="btn btn-primary" type="submit" name='submit'>Create Article</button>
  </div>
</form>
       

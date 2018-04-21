<div class="page-header text-center">
    <p>Please fill in all the fields</p>
</div>

<form class="form-horizontal" style="margin-bottom: 20%" action="?controller=subscriber&action=removeSubscriber" method="POST"  enctype="multipart/form-data">
    <div class="form-group">
        
        <label class="control-label col-sm-2">Name</label>
        <div class=" col-sm-10">
        <input class="form-control" type="text" name="name" required > 
        </div>
        
    </div>
    <div class="form-group">
        
            <label class="control-label col-sm-2">Email</label>
            <div class="col-sm-10">
            <input class="form-control" type="email" name="email" required>
            </div>
    </div>


  <p>
      <button class="btn btn-info btn-lg"  type="submit">Unsubscribe me</button>
  </p>
</form>


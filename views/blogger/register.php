<div class='padding50px'>
    <div class='row'>
        <div class='col-md-3'>
        </div>
        <div class='col-md-6'>
            <center><h2> New blogger registration </h2></center>
            <br/>
            <form method="POST" action='?controller=blogger&action=register'>
                <div>
                <label for="f_name" class="col-sm-3 col-form-label" required>First name</label>
                <input type="text" name="f_name" class="form-control" id="f_name" placeholder="First name">
                
                <label for="l_name" class="col-sm-3 col-form-label" required>Last name</label>
                <input type="text" name="l_name" class="form-control" id="l_name" placeholder="Last name">
                </div>

                <label for="username" class="col-sm-3 col-form-label" required>Username</label>
                <input type="text" name="username" class="form-control" id="Username" placeholder="Username">

                 <label for="email" class="col-sm-3 col-form-label" required>Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                
                <label for="password" class="col-sm-4 col-form-label">New password</label>
                <input type="password" class="form-control" name="password"id="Password" placeholder="Password">
                <br/>
                <center>
                    <button type="submit" name="register"class="btn btn-primary">Register</button>
                </center>
            </form>
        </div>
        <div class='col-md-3'>
        </div>
    </div>
</div>

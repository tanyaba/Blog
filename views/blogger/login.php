
<style type="text/css">
    body {
        margin: 0;
        padding: 0;
        background: url("images/londonview.jpg");
        background-size: cover;
        font-family: sans-serif;
    }  
</style>

<div class='padding50px'>
    <div class='row'>
        <div class='col-md-4'>
        </div>
        <div class='col-md-4'>
            <center><h2> Blogger login </h2></center>
            <br/>
            <form method="POST">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <input type="text" name="username" class="form-control" id="Username" placeholder="username">

                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <input type="password" class="form-control" name="password"id="Password" placeholder="password">
                <br/>
                <center>
                    <button type="submit" name="submit"class="btn btn-primary">Sign in</button>
                </center>
            </form>
        </div>
        <div class='col-md-4'>
        </div>
    </div>
</div>
<center>
    <?php
    if ($showLoginWarning) {
        echo '<h2>' . "Wrong username or password" . '</h2>';
    }
    ?>
</center>



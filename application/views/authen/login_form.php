<!doctype html>
<html lang="en">
<?php 
// echo "<pre>";
// var_dump($_SERVER);

/*
["HTTP_REFERER"]=>
  string(41) "http://localhost/todo/index.php/user/save"
  */
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login form </title>
    <style>
        input[type=text],input[type=password]{
            background-color: #3CBC8D;
            color: white;

        }
    </style>
</head>

<body>
    <div class="container">

        <?php
        if(isset($_SERVER['HTTP_REFERER'])){ 
        if($_SERVER['HTTP_REFERER'] == site_url('user/save')){ ?>
        <?php 
        // echo $_SERVER['HTTP_REFERER'] ."<br>";
        // echo site_url('user/save');
        ?>
        <br>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <strong>Regiter OK </strong> login ได้เลย ค่ะ
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    <?php } }
        ?>

    <?php echo validation_errors(); ?>

        <form method="POST" action="<?php echo site_url('authen/index');?>">
            <br>
            <h2>Login</h2>
            <br>
            <div class="form-group">
                <label>Username</label>
                <input name="username" type="text" value="<?php echo set_value('username'); ?>"  class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input name="password" type="password"  class="form-control">
            </div>
            <div class="row">
            <div class="col-md-6">
            <button name="submit" value="ok" type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-md-6" style="text-align: right;">
            <a href="<?php echo site_url('user/create');?>"><button  type="button" class="btn btn-info">Register</button></a>
            </div>
            <br/>
            <br/>


        </form>




    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
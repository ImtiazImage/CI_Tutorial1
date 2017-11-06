<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>User Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/jumbotron.css');?>" rel="stylesheet">

  </head>

  <body>

    <div class="container">
        <div class="header clearfix">
          <nav>
            <ul class="nav nav-pills pull-right">
              <li role="presentation" class="active"><a href="#">Home</a></li>
              <li role="presentation"><a href="#">About</a></li>
              <li role="presentation"><a href="#">Contact</a></li>
            </ul>
          </nav>
          <h3 class="text-muted">Registration Form</h3>
        </div>
      
      
  <!-- form Start. -->

    <form action="" method="POST" class="form-horizontal">
        <fieldset>

        <!-- Form Name -->
        <legend>Form Name</legend>
      <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="fn">First name</label>  
          <div class="col-md-4">
          <input id="fn" name="fanme" type="text" placeholder="First Name" class="form-control input-md" >
            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="ln">Last name</label>  
          <div class="col-md-4">
          <input id="ln" name="lname" type="text" placeholder="Last Name" class="form-control input-md" >
            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="age">Age</label>  
          <div class="col-md-4">
          <input id="cmpny" name="age" type="text" placeholder="Age" class="form-control input-md" >
            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="gender">Gender</label>  
          <div class="col-md-4">
          <input id="email" name="gender" type="text" placeholder="Gender" class="form-control input-md" >
            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="location">Location</label>  
          <div class="col-md-4">
          <input id="add1" name="location" type="text" placeholder="Location" class="form-control input-md" >
            
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-4">
            <button id="submit" name="submit" class="btn btn-primary">SUBMIT</button>
          </div>
        </div>

        </fieldset>
</form>



  <!-- form ends -->
      
      
      
        <footer class="footer">
          <p>&copy; 2016 Company, Inc.</p>
        </footer>
      
      </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

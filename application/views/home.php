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

    <title><?php echo $title;?></title>

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
        <h3 class="text-muted"><?php echo $header;?></h3>
      </div>

	  <table class="table table-bordered table-responsive">
	  	<thead>
	  		<tr>
	  			<th>First Name</th>
	  			<th>Last Name</th>
	  			<th>Age</th>
	  			<th>Gender</th>
	  			<th>Location</th>
	  		</tr>
	  	</thead>
<?php foreach ($users as $user) { ?>
	  		<tr>
	  			<td><?php echo $user->user_fname;?></td>
	  			<td><?php echo $user->user_lname;?></td>
	  			<td><?php echo $user->user_age;?></td>
	  			<td><?php echo $user->user_gender;?></td>
	  			<td><?php echo $user->user_location;?></td>
	  		</tr>
<?php } ?>
	  </table>


      <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

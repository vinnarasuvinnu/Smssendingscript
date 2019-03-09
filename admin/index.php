<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo '<script>';
	echo 'alert("please login via login form");location.href="login.php"';
	echo '</script>';
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	body{
    		background-image: url('images/m3.jpg');
    	}
      img{
        height: 30;
        width: 30;
      }
      .dataTables_wrapper .ui-toolbar{
        background-color: white;
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#all').click(function(){
          $('input[type=checkbox]').prop('checked', true);


        })

         $('#dall').click(function(){
          $('input[type=checkbox]').prop('checked', false);


        })
      })
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
            var table=$('#example').DataTable();

       
      })
    </script>
  </head>
  <body>
  	<div class="header" style="background-color: white">
	     <div class="container">
	     	
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html" style="color: black">Bulky SMS</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	              
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                       
	                          <li><a href="logout.php" class="btn btn-primary" style="color: black">Logout</a></li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		   <form class="from-group" action="upload.php" method="post" enctype="multipart/form-data">

		  <div class="col-md-6">

		  

  	

  		
  						<div class="col-lg-6 col-sm-6" style="background-color: #428bca">
  							<div class="card">
  								<h3 class="text-center">Send Message</h3>
  							
  								
  						
                  <lable>Enter your message</lable>
                  <textarea name="info" class="form-control" ></textarea>
                  <br>
                  <div class="text-center" style="margin-bottom: 100px">
  								<input type="submit" class="btn btn-success">
                </div>
  							</div>
  						</div>
            </div>
  					
            <div class="col-md-6">

  				<div class="panel-heading">
					<div class="panel-title">Name List</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" style="color: blue">
						<thead>
							<tr>
                <th>select</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
                <th>Degreee</th>
                <th>Type</th>
								
							</tr>
						</thead>
						<tbody>

              <?php
                include('../db.php');
               
                $q1="select * from info";
                $res=mysqli_query($db,$q1);
                while($row=mysqli_fetch_array($res)){

              ?>
              <tr>
                <td><input type="checkbox" value="<?php echo $row['phone']; ?>" name="check[]"/></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['mail'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['degree'] ?></td>
                <td><?php echo $row['stype'] ?></td>
              </tr>
						  <?php
            }
            ?>
							</tbody>
					</table><br>
          <div class="text-center">
                        <input type="button" class="btn btn-primary" id="all" value="Check all">
                            <input type="button" class="btn btn-primary" id="dall" value="Deselect all">

                  
                      </div>

  				</div>
  			</div>

</form>

		  </div>
		
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
  </body>
</html>
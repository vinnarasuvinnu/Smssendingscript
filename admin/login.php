<!DOCTYPE html>
<html>
  <head>
    <title>student information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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
</style>

    <script type="text/javascript">
	$(document).ready(function(){
		$('form').submit(function(e){
			 var form = $(this);
    var url = form.attr('action');

    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
           	if(data != 1){

               alert(data); // show response from the php script.
           	}
           	else{
           		location.href="index.php";
           	}
           }
         });

    e.preventDefault();
		})
	})
</script>
  </head>
  <body >
  	<div class="header" style="background-color: #428bca">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4" style="background-color: #428bca">
				<div class="login-wrapper">
			        <div class="box" style="margin-top: 100px;background-color: #428bca">
			            <div class="content-wrap" >
			                <h6>Sign In</h6>
			              
	                        <form action="login_b.php" method="post">
			                <input class="form-control" type="text" placeholder="E-mail address" name="uname">
			                <input class="form-control" type="password" placeholder="Password" name="pass">
			                <input type="submit" value="login" class="btn btn-success">       
			                </form>        
			            </div>
			        </div>

			      
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
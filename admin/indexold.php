
<!DOCTYPE html>
<html>
  <head>
    <title>admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <!-- styles -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
    var table=$('#example').DataTable();
    $.ajax({
        url:"alltoo.php",
        method:"post",
        data:{},
        success:function(data){
            console.log(data);

            var data=JSON.parse(data);
            data=data.result;
            console.log(data);
                $.each(data, function(key,value) {



            table.row.add($(
    '<tr>' +
    '<td>'+value.fname+'</td>' +
        '<td>'+value.lname+'</td>' +
    '<td>'+value.dob+'</td>' +
    '<td>'+value.gender+'</td>' +
    '<td>'+value.contact+'</td>' +
    '<td>'+value.email+'</td>' +
        '<td>'+value.board+'</td>' +
    '<td>'+value.yearofpass+'</td>' +



      '<td>'+value.aggri+'</td>' +
    '<td>'+value.pboard+'</td>' +
    '<td>'+value.pagri+'</td>' +
        '<td>'+value.pyearofpass+'</td>' +


    '<td>'+value.ug_reg+'</td>' +


        '<td>'+value.ugdtype+'</td>' +
        '<td>'+value.ugdegree+'</td>' +
    '<td>'+value.ugstream+'</td>' +
    '<td>'+value.ugcolg+'</td>' +
    '<td>'+value.uguni+'</td>' +
    '<td>'+value.ugpass+'</td>' +
      '<td>'+value.ugcgpa+'</td>' +
    '<td>'+value.ugaggr+'</td>' +
    '<td>'+value.mtdeg+'</td>' +

                '<td>'+value.pg_reg+'</td>' +

        '<td>'+value.pgdtype+'</td>' +
        '<td>'+value.pgdegree+'</td>' +
    '<td>'+value.pgstream+'</td>' +
    '<td>'+value.pgcolg+'</td>' +
    '<td>'+value.pguni+'</td>' +
    '<td>'+value.pgpass+'</td>' +
      '<td>'+value.pgcgpa+'</td>' +
    '<td>'+value.pgaggr+'</td>' +


     

 



    '</tr>'
)).draw(false);
        

    });


        }
    })
} );
</script>
  </head>
  <body>
  	<div class="header" style="height: 70px;">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Student Admin </a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <span class="input-group-btn">
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                  
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">

		  	<table id="example" class="display table-responsive" style="width:100%">
        <thead>
            <tr>
                <th>first name</th>
                <th>last name</th>
                <th>Date of birth</th>
                <th>Gender</th>
                <th>Contact</th>
                <th>Email</th>

                	<th>10 th board</th>
                <th>10 th year of pass</th>
                <th>10th total percentage</th>
                <th>!2th board</th>
                <th>12 th year of pass</th>
                <th>12 th total percentage</th>

                	<th>ug_reg_no</th>
                <th>ug_degree_type</th>
                <th>ug_degree</th>
                <th>ug_stream</th>
                <th>ug_college</th>
                <th>ug_university</th>
                 <th>ug_yearofpass</th>
                <th>ug_cgpa</th>
                <th>ug_total percentage</th>
                <th>master degeree(*)</th>
                	   	<th>pg_reg_no</th>
                <th>pg_degree_type</th>
                <th>pg_degree</th>
                <th>pg_stream</th>
                <th>pg_college</th>
                <th>pg_university</th>
                 <th>pg_yearofpass</th>
                <th>pg_cgpa</th>
                <th>pg_total percentage</th>
            </tr>
        </thead>
        <tbody>
        	
        </tbody>


    </table>
		  	
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  </body>
</html>
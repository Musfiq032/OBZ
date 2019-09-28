
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>books</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <link rel="stylesheet" href="style.css">

    <script src="js/solid.js"></script>
    <script src="js/fontawesome.js"></script>
</head>

<body>
    <div class="wrapper">
      
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Online Book Zone</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Welcome Admin</p>
               
                <li>
                    <a href="#">User requests</a>
                </li>
                     <li>
                    <a href="logout.php">Log Out</a>
                </li>
              
              
             
            </ul>

    
        </nav>

        

  
        <div id="content">
        <section id="showcase">
		<div class="container">
			<h1>Welcome to our book zone</h1>
		
		</div>
	</section>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                
                </div>
            </nav>



             <div class="card" style="padding: 10px 10px">
  <h5 class="card-header">Requests</h5>
  <div class="card-body">

    <?php
$servername = "localhost";
$username = "root";

$con = mysqli_connect($servername, $username);
if($con){
    echo" ";
}else{
    echo " no connection"; 
}

mysqli_select_db($con, 'onlinebookzone');


$sql = "SELECT * FROM user_request";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Request: " . $row["id"]. " - Name: " . $row["book_name"]. "<br> " . " Writers Name -" . $row["writers_name"]. " <br>"."Publishers Name- " . $row["publishers_name"].  "<br>" . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($con);
?>
   
  </div>
</div>

          
     <script src="js/jquery-3.3.1.slim.min.js"> </script>
 
    <script src="js/popper.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>
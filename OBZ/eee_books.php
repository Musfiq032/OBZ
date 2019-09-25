<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/solid.js"></script>
    <script src="js/fontawesome.js"></script>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
    width: 150px;

  padding: 30px;
  text-align: left;    
}
</style>
</head>
<body>

  
    <!--php-->




    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Online Book Zone</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Menu</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Catagories</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="programming_books.php">Computer Scince</a>
                        </li>
                        <li>
                            <a href="eee_books.php">Electrical Engineering</a>
                        </li>
                        <li>
                            <a href="#">Civil Engineering</a>
                        </li>
                         <li>
                            <a href="#">Mechanical Engineering</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="research_paper.php">Research Paper</a>
                </li>
                <li>
                    <a href="journal.php">Journals</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                   
                </li>
                <li>
                    <a href="services.php">Service</a>
                </li>
              
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

        <section id="showcase">
		<div class="container">
			<h1>EEE Books</h1>
		
		</div>
	</section>
      

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                   <form class="form-inline">
 
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="text" class="form-control" name="keyword" id="Books" placeholder="books">
  </div>
  <button type="submit" class="btn btn-primary mb-2" value="submit">Search</button>  
</form>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="login.php">Log In</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>

     <div class="card" style="padding: 10px 10px">
  <h5 class="card-header">EEE Books</h5>
  <div class="card-body">
 <?php


$files = scandir("files/Electricalengineering/");


for ($a = 2; $a < count($files); $a++)
{
    ?>
  
        <table style="width:100%">
  <tr>
    <th class="tb1">
        <?php echo $files[$a]; ?>
</th>
        
       <th> <a style="margin: 5px;text-decoration: none; color:red; "href="files/Electricalengineering/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>
</th>
<th>
        <a style="margin: 10px;text-decoration: none; color: green; "href="files/Electricalengineering/<?php echo $files[$a]; ?>">View</a>
        </th>
  </tr>
</table>

    </p>
    <?php


    
}
 
 ?>
</div>

</div>

</div>

     <script src="js/jquery-3.3.1.slim.min.js"> </script>
 
    <script src="js/popper.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>


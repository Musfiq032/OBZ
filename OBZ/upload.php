
<html>
<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
	<title>upload</title>
</head>
<body>

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
                            <a href="#">Computer Scince</a>
                        </li>
                        <li>
                            <a href="#">Electrical Engineering</a>
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
                    <a href="research_paper.html">Research Paper</a>
                </li>
                <li>
                    <a href="journal.html">Journals</a>
                </li>
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="index.html">Home</a>
                   
                </li>
                <li>
                    <a href="service.html">Service</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
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
			<h1>Welcome to our book zone</h1>
		
		</div>
	</section>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="login.html">Log In</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>

     <div class="card" style="padding: 10px 10px">
  <h5 class="card-header">All Research Papers</h5>
  <div class="card-body">
    <p class="card-text">
    		                 <form action="upload1.php" method="POST" enctype="multipart/form-data">
  <div class="form-group mb-2" action="seach_keyword.php"> 
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Upload Image for books">
  </div>
  <div class="form-group mx-sm-3 mb-2">
   
    <input type="file" class="form-control" name="userfile[]" value="" multiple="" placeholder="select a file">
  </div>
  <button type="submit" class="btn btn-primary mb-2" name="submit" value="submit">upload</button>  
</form>
    </p>
   
  </div>
</div>

</div>

</div>



	<!-- new upwords -->

	                 <form action="upload1.php" method="POST" enctype="multipart/form-data">
  <div class="form-group mb-2" action="seach_keyword.php"> 
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Research Paper">
  </div>
  <div class="form-group mx-sm-3 mb-2">
   
    <input type="file" class="form-control" name="userfile[]" value="" multiple="" placeholder="select a file">
  </div>
  <button type="submit" class="btn btn-primary mb-2" name="submit" value="submit">upload</button>  
</form>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

</body>

<?php 
include "db_connect.php"


 ?>
</html>
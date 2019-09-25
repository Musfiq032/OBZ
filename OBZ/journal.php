
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Online Book Zone | Journals</title>


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
                <p>Menu</p>
               
                  <li>
                    <a href="index.php">Home</a>
                   
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

   
        <div id="content">

        <section id="showcase">
		<div class="container"style >
			<h3>Journals</h3>
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

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="login.html" style="margin-left: 1200px">Log In</a>
                            </li>
                        </ul>
                    </div>
                       <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="registration.html">Sign Up</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>


  <div class="card" style="padding: 10px 10px">
  <h5 class="card-header">Journal</h5>
  <div class="card-body">
    <h5 class="card-title">Basic Research Journals of Agricultural Science and Review </h5>
    <p class="card-text"> The Basic Research Journal of Agricultural Science and Review (BRJASR) ISSN 2315-6880, International Scientific Indexing (ISI) Impact Factor (0.769), InfoBase (2.9), Thompson Reuters ResearcherID A-9294-2018 is an Open Access, peer-reviewed journal that considers scientific articles in all areas of Agricultural sciences. </p>
    <a href="journal_show.php" class="btn btn-primary">Read more</a>
  </div>
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
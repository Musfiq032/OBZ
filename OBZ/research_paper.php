
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

     <title>Online Book Zone | Research Paper</title>
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
                <li class="active">
                 
                 <li>
                    <a href="programming_books.php">Books</a>
                </li>
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
			<h2>Research Paper</h2>
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
                   <form class="form-inline">

  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Search</label>
    <input type="text" class="form-control" name="keyword" id="search_researchpaper" placeholder="Research Paper">
  </div>
  <button type="submit" class="btn btn-primary mb-2" value="submit">Search</button>  
</form>

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
    <h5 class="card-title">United states health care :progress to date and next steps</h5>
    <p class="card-text">Importance  The Affordable Care Act is the most important health care legislation enacted in the United States since the creation of Medicare and Medicaid in 1965. The law implemented comprehensive reforms designed to improve the accessibility, affordability, and quality of health care.</p>
    <a href="research_paper_show.php" class="btn btn-primary">Read More</a>
  </div>
</div>

  <div class="card" style="padding: 10px 10px">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Read More</a>
  </div>
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
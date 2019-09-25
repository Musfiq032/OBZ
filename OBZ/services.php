
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Online Book Zone | Services</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <link rel="stylesheet" href="style.css">

  
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
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
                    <a href="books.php">Books</a>
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
                    <a href="service.php">Service</a>
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
		<div class="container">
			<h1>Welcome to our book zone</h1>
		
		</div>
	</section>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="login.php" style="margin-left: 1200px">Log In</a>
                            </li>
                        </ul>
                    </div>
                       <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="registration.php">Sign Up</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>

    <div class="card" style="padding: 10px 10px">
  <h5 class="card-header">Serices</h5>

      <aside id="sidebar1" style="padding: 100px;">
          <div class="dark">
            <h3>User Requisition Box</h3>
            <form class="quote">
              <div>
                <label>Book Name</label><br>
                <input type="text" placeholder="Name">
              </div>
              <div>
                <label>Writer's Name</label><br>
                <input type="email" placeholder="Writers Name">
              </div>
               <div>
                <label>Publisher's Name</label><br>
                <input type="email" placeholder="Publishers name">
              </div>
              <div>
                <label>Description</label><br>
                <textarea placeholder="Description"></textarea>
              </div>
              <button class="button_1" type="submit">Send</button>
          </form>
          </div>
        </aside>
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
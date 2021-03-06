<!DOCTYPE>
<html lang="en">
    <head>
        <title>DIVES - Recommendation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <link rel="stylesheet"  href="../style/recommend.css">
        <script src="../script/recommended.js"></script>
    </head>
    <body>

            <!-- Navbar -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">  
                        <a class="navbar-brand" href="#">DIVES</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="profile.html">Microsoft</a></li>
                        </ul>
                        <form class="navbar-form navbar-right">
                            <input type="text" class="form-control" placeholder="Search...">
                        </form>
                    </div>
                </div>
            </nav>   

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <li class="active"><a href="recommend.php">Recommendation</a></li>
                    <li><a href="message.html">Message</a></li>   
                </ul>
                <ul class="sidebar-nav">
                    <li><a href="upcoming.html">Upcoming Events</a></li>
                    <li><a href="event.html">List of Events</a></li>
                </ul>
            </div>
            
            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="container_table">        
                       <?php 
                            if (!isset($_GET['page'])){
                                include ("recommend_home.php");
                            }
                            else{
                                $page = $_GET['page'];
                                include ("recommend_$page.php");
                            }
                        ?>
                   </div>
                </div>
                </div>
            </div>
                 
        <!-- Menu Toggle script -->
        <script>
            $("#menu-toggle").click( function (e){
                e.preventDefault();
                $("#wrapper").toggleClass("menuDisplayed");
            })
        </script>    
    </body>
</html>
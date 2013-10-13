
    <html>
        <head>
            <meta charset = "utf-8">
                <title> SUEC </title>
                <link rel="stylesheet" href="css/usc_calendar.css" type="text/css" title="css1" /> 
                <script src="js/jquery-2.0.2.min.js"></script>
                <script src="js/bootstrap.js"></script>
         
        </head>
        <body>
            <div class="container">
            <h1> <img src="img/site_banner.png" alt="SUPER USC EVENTS CALENDAR"> </hl>
            
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="addyourevent.php">Add Your Event</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>

             <?php
             include("filters.php");
             ?>
                
            <?php
             include("calendar.php");
             ?>
                    
                    <div class="span3">
                        <div class="selected-events">
                            <h3>EVENTS IN CART</h3>
                            <ul class=" nav nav-list">
                                <li class="nav-header" id="event1"> Event 1</li>
                                    <li class="info" id="info1">
                                        <a href="#"> EVENT1 INFO </a>
                                    </li>
                                <li class="nav-header" id="event2"> Event 2</li>
                                    <li class="info" id="info2">
                                        <a href="#"> EVENT2 INFO </a>
                                    </li>
                                <li class="nav-header" id="event3"> Event 3</li>
                                    <li class="info" id="info3">
                                        <a href="#"> EVENT3 INFO </a>
                                    </li>
                                <li class="nav-header" id="event4"> Event 4</li>
                                    <li class="info" id="info4">
                                        <a href="#"> EVENT4 INFO </a>
                                    </li>
                                <li class="nav-header" id="event5"> Event 5</li>
                                    <li class="info" id="info5">
                                        <a href="#"> EVENT5 INFO </a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                
                
                
                
            </div>
        </body>
        
        
    </html>

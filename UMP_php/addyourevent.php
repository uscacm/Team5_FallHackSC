
    <html>
        <head>
            <meta charset = "utf-8">
                <title> SUEC </title>
                <link rel="stylesheet" href="css/usc_calendar.css" type="text/css" title="css1" />             
                <script type="text/javascript" src="js/jquery-2.0.2.min.js"></script>
                <script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
                <script type="text/javascript" src="js/bootstrap.js"></script>
         
        </head>
        <body>
            <div class="container">
                <h1>  <a href="#">SUPER USC EVENTS CALENDAR </a> </hl>
                
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <ul class="nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li class="active"><a href="#">Add Your Event</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
    
                <div class="hero-unit">
                    <h2>Add an Event to the Calendar </h2>
                    <p>Insert Content here</p>
                    
                    <form class="form-horizontal" method="post" action="http://www.usc.edu/cgi-bin/mail_form/liangvic@usc.edu">                        
                        <div class="form-group">  
                            <label for="org_name" class="col-lg-2 control-label">Organization</label>  
                            <div class="col-lg-10">  
                              <input type="text" class="form-control" id="org_name" placeholder="UCS SuperStars">  
                            </div>  
                        </div>
                         
                        <div class="form-group">  
                          <label for="event_name" class="col-lg-2 control-label">Event Name</label>  
                          <div class="col-lg-10">  
                            <input type="text" class="form-control" id="event_name" placeholder="Apple Bobbing Under the Stars">  
                          </div>  
                        </div>
                        
                        <div class="form-group input-append bootstrap-timepicker">
                            <label for="start_time" class="col-lg-2 control-label">Start Time</label>
                            <div class="col-lg-10">
                                <input id="timepicker1" type="text" class="input-small form-control">
                                <span class="add-on"><i class="icon-time"></i></span>
                            </div>
                        </div>
                        </br>
                        <div class="form-group input-append bootstrap-timepicker">
                            <label for="end_time" class="control-label">End Time</label>
                            <div class="col-lg-10">
                                <input id="timepicker2" type="text" class="input-small form-control">
                                <span class="add-on"><i class="icon-time"></i></span>
                            </div>
                        </div>
                 
                        <script type="text/javascript">
                            $('#timepicker1').timepicker('setTime', '6:00 PM');
                            $('#timepicker2').timepicker('setTime', '8:00 PM');
                        </script>
                                         
                        <div class="form-group">  
                          <label for="desc" class="col-lg-2 control-label">Event Description</br>(200 chars max)</label>
                          <div class="col-lg-10">  
                            <textarea rows="5" cols="50" placeholder="Come join us for Apple Bobbing!"></textarea>  
                          </div>  
                        </div>  
                        
                        
                        
                        <div class="form-group col-lg-offset-10 col-lg-4">  
                            <button type="submit" value="submit" class="btn btn-default">Submit</button>                  
                        </div>
                        
                    </form>
                    
                    
                </div>
                
                
                
            </div>
                        
        </body>
        

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
            <h1> <img src="img/site_banner.png" alt="SUPER USC EVENTS CALENDAR"> </hl>

            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li class="active"><a href="#">Add Your Event</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
       
        
                <div class="container" >
                <form class="form-horizontal" name="register" method='post' action='register.php'>
		<fieldset>
			<legend>Add Event Form</legend>
			<div class="control-group">
				<label class="control-label">Organization:</label>
				<div class="controls">
					<input type="text" id="org_name" name="org_name">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Event</label>
				<div class="controls">
					<input type="text" id="event_name" name="event_name">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Location:</label>
				<div class="controls">
					<input type="text" id="location" name="location">
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label">USC Email</label>
				<div class="controls">
					<input type="text" id="usc_email" name="usc_email">
				</div>
			</div>
                        
                                                
			<div class="control-group">
				<label class="control-label">Description</label>
				<div class="controls">
					<input type="text" id="description" name="description">
				</div>
			</div>
                    
			<div class="control-group">
				<label class="control-label"></label>
				<div class="controls">
					<button type="submit" class="btn btn-success" value="register">Submit</button>
				</div>
                    	</div>
                </fieldset>                 
                </form>
                
                
                </div>
                </div>                
            </div>
                        
        </body>
        
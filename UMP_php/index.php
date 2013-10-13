
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
                <h1>  <a href="#">SUPER USC EVENTS CALENDAR </a> </hl>
                
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <ul class="nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="addyourevent.php">Add Your Event</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">            
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Filters
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <label class="checkbox inline">
                            <input type="checkbox" id="academic" value="option1"> 1
                          </label>
                          <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                          </label>
                          <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                          </label>
                          <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox4" value="option4"> 1
                          </label>
                          <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox5" value="option2"> 2
                          </label>
                          <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox6" value="option3"> 3                           
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                
                <script>
    $(function(){
      $("#filters").load("filters.html");
    });
    </script>
                
                <div class="row" data-spy="scroll">
                    <div class="span11">
                        <div class="calendar">
                            <table class="table table-bordered">
                                <thead>  
                                    <tr>
                                        <caption>CALENDAR</caption>
                                        <th>Time</th>
                                        <th>SUN</th>  
                                        <th>MON</th>  
                                        <th>TUES</th>  
                                        <th>WED</th>
                                        <th>THUR</th>
                                        <th>FRI</th>
                                        <th>SAT</th>
                                    </tr>
                                </thead>
                             <tbody>
                                <tr>
                                  <td>test</td>
                                  <td>test</td>
                                </tr>
                              </tbody>
                             <tr>
                                  <td>test</td>
                                  <td>test</td>
                                </tr>
                              </tbody>
                             <tr>
                                  <td>test</td>
                                  <td>test</td>
                                </tr>
                              </tbody>
                             <tr>
                                  <td>test</td>
                                  <td>test</td>
                                </tr>
                              </tbody>
                             <tr>
                                  <td>test</td>
                                  <td>test</td>
                                </tr>
                              </tbody>
                             <tr>
                                  <td>test</td>
                                  <td>test</td>
                                </tr>
                              </tbody>
                             <tr>
                                  <td>test</td>
                                  <td>test</td>
                                </tr>
                              </tbody>
                             <tr>
                                  <td>test</td>
                                  <td>test</td>
                                </tr>
                              </tbody>
                             <tr>
                                  <td>test</td>
                                  <td>test</td>
                                </tr>
                              </tbody>
                             <tr>
                                  <td>test</td>
                                  <td>test</td>
                                </tr>
                              </tbody>
                             
                             
                            </table>
                        </div>
                    </div>
                    
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

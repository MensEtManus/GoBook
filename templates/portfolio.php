<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">           
            <!-- sidebar -->
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
              
              	<ul class="nav">
          			<li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
            	</ul>
               
                <ul class="nav hidden-xs" id="lg-menu">
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-list-alt"></i> Friend List</a></li>
                    <!-- I may not need all this right now, will generate list based on my friends 
                    <li><a href="#stories"><i class="glyphicon glyphicon-list"></i> Stories</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-paperclip"></i> Saved</a></li> -->
                    <li><a href="#"><i class="glyphicon glyphicon-refresh"></i> Refresh</a></li>
                </ul>
                <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                    <li>
                      <a href="#"><h3>GoBook</h3> </a>
                    </li>
                </ul>
              
              	<!-- tiny only nav-->
              <ul class="nav visible-xs" id="xs-menu">
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                   
                    <li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
                </ul>
              
            </div>
            <!-- /sidebar -->
          
            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
                
                <!-- top nav -->
              	<div class="navbar navbar-green navbar-static-top">  
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
          				<span class="icon-bar"></span>
          				<span class="icon-bar"></span>
                      </button>
                      <a href="/" class="navbar-brand logo">G</a>
                  	</div>
                  	<nav class="collapse navbar-collapse" role="navigation">
                    <form class="navbar-form navbar-left">
                        <div class="input-group input-group-sm" style="max-width:360px;">
                          <input type="text" class="form-control" placeholder="Search Username" name="srch-term" id="srch-term">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav">
                      <li>
                        <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a>
                      </li>
                      <li>
                        <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post</a>
                      </li>
                     
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                     	<li>
                     		<a href="../public/login.php">Log out</a>
                     	</li>
                    </ul>
                  	</nav>
                </div>
                <!-- /top nav -->
              
                <div class="padding">
                    <div class="full col-sm-9">
                      
                        <!-- content -->                      
                      	<div class="row">
                          
                         <!-- main col left --> 
                         <div class="col-sm-5">
                           	<div class="panel panel-default">
                                <div class="panel-heading"><h4>What's New</h4></div>
                               	<div class="panel-body">
                                	This is nothing without JavaScript

                                </div>
                             </div>
                                               
                             <div class="panel panel-default">
                                <div class="panel-heading"><h4>What Is GoBook?</h4></div>
                               	<div class="panel-body">
                               		GoBook is a new way of socializing with friends. Unlike the traditional way to ask friends what they want to do at certain time, 
                               		GoBook allows you to simply jot down the things you want to do, and it will figure out if your friends also want to do the same thing at
                               		the same time (if they also wrote down the same event). The events matched will show up in the 'What's New panel' and you will have 
                               		the option to decide if you would like to do that particular event with that particular friend. If both of you choose yes, both of you 
                               		will get notifications for each other. Have fun!
                                </div>
                             </div>
                    
                          </div>
                          
                          <!-- main col right -->
                          <div class="col-sm-7"> 
                               <div class="panel panel-default">
                                 <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>My GoBook</h4></div>
                                  <div class="panel-body">
                                    
                                    <hr>
                                    This is nothing without JavaScript!!!
                                  </div>
                               </div>
                          </div>
                       </div><!--/row-->
                      
                        <div class="row">
                          <div class="col-sm-6">
                            <a href="#">Twitter</a> <small class="text-muted">|</small> <a href="#">Facebook</a> <small class="text-muted">|</small> <a href="#">Google+</a>
                          </div>
                        </div>

                        <div class="row" id="footer">    
                            <div class="col-sm-6">
                    		</div>
                          	<div class="col-sm-6">
                            	<p>
                            		<a href="#" class="pull-right">©2014 Albert Yang</a>
                            	</p>
                          	</div>
                        </div> 
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
          
        </div>
    </div>
</div>


<!--post modal-->
<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
      		<div class="modal-header">
          		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				Add Events
      		</div>
      		<div class="modal-body">
          		<form class="form center-block">
     				<div class="to-do">
     					<label>What would you like to do this week?</label>
		    			<select name="eventName" class="form-control">
			  				<option value="Go to the movies">Go to the movies</option>
						  	<option value="Go to the Gym">Go to the Gym</option>
						  	<option value="Go grocery shopping">Go grocery shopping</option>
						  	<option value="Go to the malls">Go to the malls</option>
						  	<option value="Study for my classes">Study for my classes</option>
						</select>
						<br>
						<label>What day would you like to do it?</label>
						<select name="eventDate" class="form-control">
				  			<option value="1">Monday</option>
						  	<option value="2">Tuesday</option>
						  	<option value="3">Wednesday</option>
						  	<option value="4">Thursday</option>
						  	<option value="5">Friday</option>
						  	<option value="6">Saturday</option>
						  	<option value="7">Sunday</option>
						</select>
						<br>
						<label>What time on that day would you like to do it?</label>
						<select name="time" class="form-control">
				  			<option value="1">Mornign</option>
						  	<option value="2">Afternoon</option>
						  	<option value="3">Evening</option>
						</select>
     				</div>     	
	    			
      			</form>
      		</div>
      		<div class="modal-footer">
		         <div>
		          <button class="btn btn-success btn-sm" data-dismiss="modal" aria-hidden="true">Add to My GoBook</button>
		            <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
			 	</div>	
      		</div>
  		</div>
  	</div>
</div>





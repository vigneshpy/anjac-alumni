
  <title>Welcome Back ! <?php echo $this->session->fname?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	
input
{
	width: 500px !important;
}



</style>


<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10" align="center"><h3>Welcome <?php ucfirst($this->session->fname); ?></h3></div>
        <div class="row">
  		<div class="col-sm-13"><!--left col-->

          
          
   	<div class="col-md-8 ">
		     <div class="list-group ">
              <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
      
              
            </div> 
        
          
        </div><!--/col-3-->
    	     <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?php echo $this->session->fname?>" disabled>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-12">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any." value="<?php echo $this->session->lname?>"disabled>
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="phone"><h4>Email</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any." value="<?php echo $this->session->email?>"disabled>
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-12">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any." value="<?php echo $this->session->pno?>"disabled>
                          </div>
                      </div>
                      <div class="form-group">
                      
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="email"><h4>Location</h4></label>
                              <input type="text" class="form-control" id="location" placeholder="somewhere" title="enter a location" value="<?php echo $this->session->place?>"disabled>
                          </div>
                      </div>
                  
                
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Update</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> </button>
                            </div>
                      </div>
              	</form>
               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">
            		
               	
                  <hr>
                  
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
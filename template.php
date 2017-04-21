<?php require("header.html"); ?>

<div class="customContainer">
    
    <nav class="navbar navbar-default secondNav">

   <div class="navbar-header">
                <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar2">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">
                    <div class="navbrand2"></div>
                </a>

            </div>
    <div class="collapse navbar-collapse secondNavBody" id="secondNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>
      <ul class="nav navbar-right">
        
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  
</nav>
    
    
    <div class="row">
    <div class="col-lg-9">
        
        <div class="col-lg-6">
        <button class="btn">Apply</button>
        </div>
        <div class="col-lg-6">
        <button class="btn">Next Steps</button>
        </div>
        
      
    </div>
    <div class="col-lg-3">
        
        Sidebar
        </div>
    
    
    </div>
    
    

</div>

<?php require("footer.html"); ?>
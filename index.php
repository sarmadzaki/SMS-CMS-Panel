<!DOCTYPE html>
<html>
<head>
    <title>ExpressDevelopers | Web Development Course</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-robot.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="bootstrap3/bootstrap.min.css">
  <script src="bootstrap3/jquery.min.js"></script>
  <script src="bootstrap3/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <script src="js/modernizr.custom.63321.js"></script>
<style type="text/css">
    hr {
        border: solid 1px #333333;
    }
        h1{
        padding: 0px;
        margin: 0px;
        font-size: 28px;
        margin-top: 5px;
    }
    span {
        color: white;
    }

</style>

<style type="text/css">
.footer {
    height: 50px;
    width: 100%;
    background-color: black;
}
 
</style>
</head>
<body>
<header class="clearfix">
    <div class="container">
            <div class="header-left">
                <h1>ExpressDevelopers</h1>
            </div>
            <div class="header-right">
                <label for="open">
                    <span class="hidden-desktop"></span>
                </label>
                <input type="checkbox" name="" id="open">
                <nav>
                    <a href="#" style="color: white;">Home</a>
                </nav>
            </div>
        </div>
    </header>
<div class="clearfix"></div>

<div class="container"> 
      <!-- Codrops top bar -->
     
      <header class="clearfix">
       
      </header>
      <div class="main">
        <div id="mi-slider" class="mi-slider">
          <ul>
            <li><a href="#"><img src="images/1.jpg" alt="img01"><h4>HTML</h4></a></li>
            <li><a href="#"><img src="images/2.jpg" alt="img02"><h4>CSS</h4></a></li>
            <li><a href="#"><img src="images/3.jpg" alt="img03"><h4>JavaScript</h4></a></li>
            
          </ul>
          <ul>
            <li><a href="#"><img src="images/4.jpg" alt="img05"><h4>MySQL DataBase</h4></a></li>
            <li><a href="#"><img src="images/5.jpg" alt="img06"><h4>PHP</h4></a></li>

          </ul>
        
          <nav>
            <a href="#">Web Designing</a>
            <a href="#">Web Development</a>
           
          </nav>
        </div>
      </div>
      <br>
      <hr>

      <div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-block">
      
      <ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab" style="color: black;">Sign Up</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#buzz" role="tab" data-toggle="tab" style="color: black;">Sign In</a>
  </li>

</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="profile">
    <!-- Sign In -->

    <form id="theForm" method="post">
<br>
    <div class="col-md-4">
      <div class="form-group">
    <label for="exampleInputEmail1">First Name:</label>
    <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
    
  </div>
</div>

    <div class="col-md-4">
      <div class="form-group">
    <label for="exampleInputEmail1">Last Name:</label>
    <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
    
  </div>
</div>

    <div class="col-md-4">
      <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Email Address" name="email">
    
  </div>
</div>

    <div class="col-md-4">
      <div class="form-group">
    <label for="exampleInputEmail1">Password:</label>
    <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
    
  </div>
</div>


    <div class="col-md-4">
      <div class="form-group">
    <label for="exampleInputEmail1">Date Of Birth:</label>
     <input class="form-control" type="date" value="2017-05-11" id="dob" name="dob">
    
  </div>
</div>

    <div class="col-md-4">
      <div class="form-group">
    <label for="exampleInputEmail1">Qualification:</label>
    <input type="text" class="form-control" id="qua" aria-describedby="emailHelp" placeholder="Qualification" name="qua">
    
  </div>
</div>

<div class="col-md-4"></div>

<div class="col-md-4">
    <button type="submit" class="btn btn-primary" id="submit">Register</button>
</div>
  </div>
</form>
  <div role="tabpanel" class="tab-pane fade" id="buzz">
    <!-- sign up -->
    
    <br>
    <form method="post" action="login.php">
<div class="col-md-4">
      <div class="form-group">
    <label for="exampleInputEmail1">Email Address:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="em">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
</div>

<div class="col-md-4">
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="passx">
  </div>
</div>
<div class="col-md-4"><br><button type="submit" class="btn btn-primary" name="oks">Submit</button></div>
</form>

  </div>
</div>

      </div>

    </div>
  </div>
</div>
<br>
        <hr>
    </div><!-- /container -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.catslider.js"></script>
    <script>
      $(function() {

        $( '#mi-slider' ).catslider();

      });
    </script>
   <br>
    <footer class="footer">
      <div class="container">
      <div style="margin-top: 15px;">
      <center>
        <span class="glyphicon glyphicon-copyright-mark"></span><span> 2016 All rights reserved Express Developers</span>
        </center>
        </div>
      </div>
    </footer>

<script type="text/javascript">
    
$(document).ready(function(){
$("#submit").click(function(){
var firstName = $("#fname").val();
var lastName = $("#lname").val();
var pass = $("#pass").val();
var email = $("#email").val();
var dob = $("#dob").val();
var qualification = $("#qua").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'fname='+ firstName + '&lname='+ lastName + '&pass='+ pass + '&email='+ email + '&dob='+ dob + '&qua='+ qualification;
if(firstName==''||lastName==''||pass==''||email=='' || dob=='' || qualification=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "register.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});
</script>
</body>
</html>
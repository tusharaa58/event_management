<!DOCTYPE html>
<html lang="en">
<head>
  <title>EVENT MANAGEMENT| Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  
  <link rel="stylesheet" href="style3.css?v=<?php echo time(); ?>">
  <!DOCTYPE html>
<?php 


$host="localhost";
$user="root";
$password="";

session_start();


$data=mysqli_connect($host,$user,$password);
mysqli_select_db($data, "user_info");
if($data===false)
{
	die("connection error");
}

?>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#myPage">EVENT MANAGEMENT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="#event">EVENTS</a></li>
        <li><a href="venue.php">VENUES</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="profile.php">PROFILE</a></li>
        <li><a href="../login.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
<h1>GLITTER EVENTS</h1> 
  <p>Where Events Become Experiences!</p> 
  </div>

<!-- Container About Section -->
<div id="about" class="container-fluid">
  <div class="row">
   
      <center><h2>About Us</h2><br></center>
      <p>Welcome to GLITTER EVENTS, where we turn dreams into unforgettable moments!

At GLITTER, we believe that every occasion deserves to be celebrated in style. With a passion for creativity and a commitment to excellence, we specialize in crafting extraordinary events that leave a lasting impression.<br>

Our team of experienced professionals brings together a wealth of expertise in event planning, design, and execution. From intimate gatherings to grand celebrations, we tailor our services to suit your unique vision, ensuring every detail is meticulously curated to perfection.

With a focus on innovation and attention to detail, we strive to exceed expectations, delivering seamless experiences that delight both hosts and guests alike. Whether you're planning a corporate event, wedding, birthday bash, or any special occasion, we are here to bring your vision to life.

At GLITTER, we understand the importance of creating memories that will be cherished for a lifetime. Let us handle the details while you enjoy every moment of your event. Join us in celebrating life's milestones, one extraordinary event at a time.

Come, let's embark on a journey of inspiration, creativity, and unparalleled hospitality. Contact us today and let's make your next event an unforgettable success with GLITTER EVENTS.
</div>
<br><br>   


<!-- Container Services Section -->
 <div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-star logo-small"></span>
      <h4>BIRTHDAY EVENTS</h4>
      <p>"Cheers to Another Year: Celebrate Life"</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>WEDDING EVENTS</h4>
      <p>"Together in Love, Forever in Joy"</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-bullhorn logo-small"></span>
      <h4>PROMOTION EVENTS </h4>
      <p>"Experience the Extraordinary"</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>SPORTS EVENTS</h4>
      <p>"Unleash Your Inner Champion"</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-education logo-small"></span>
      <h4>EDUCATIONAL EVENTS</h4>
      <p>"Ignite Learning, Spark Innovation"</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-glass logo-small"></span>
      <h4>PARTY</h4>
      <p>"Let's Party Like There's No Tomorrow!"</p>
    </div>
    
  </div>
</div> 


<!-- events -->
 <div id="event" class="container-fluid text-center bg-grey slideanim">
 
    <h1 class="text-center">List of our Events</h1>
    <?php 
               $sql="SELECT * from `Event` LIMIT 5;";
               $res = mysqli_query ($data, $sql);
            
               while($row = mysqli_fetch_array($res)):
                
        ?>
  
  <div class="m-auto">
  <div class="row-centerd slideanim ">
    <div class="col-md-4 col-xs-6 text-center">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1><?php echo ucwords($row['name']) ?></h1>
        </div>
        <div class="panel-body">
          
          <p><?php echo strip_tags($row['description']) ?></p>
        </div>
        
      </div>      
    </div> 
               </div>
                 </div>
     <?php endwhile; ?>
               </div>


<div id="contact" class="container-fluid">
  <h2 class="text-center con-h">CONTACT US</h2>
  <div class="row text-center">
    
      <p style = "display: inline;"><span class="glyphicon glyphicon-map-marker"></span> Mangalore,Karnataka, India</p>
      <p style = "display: inline;"><span class="glyphicon glyphicon-phone"></span>9380893547</p>
      <p style = "display: inline;"><span class="glyphicon glyphicon-envelope"></span> glitter@gmail.com</p>
    </div>
                 
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<script>
$(document).ready(function(){
  
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
   
    if (this.hash !== "") {
      
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
    window.location.hash = hash;
      });
    } 
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>


</body>
</html>
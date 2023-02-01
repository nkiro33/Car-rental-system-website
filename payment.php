<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['ssn'])){
   echo "<script>location.replace('login.php');</script>";
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_reservation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$ssn = $_SESSION["ssn"];
$type = $_SESSION["type"];
$min = $_SESSION["min"];
$max = $_SESSION["max"];
$country = $_SESSION["country"];
$city = $_SESSION["city"];
$start = $_SESSION["start"];
$end = $_SESSION["end"];
$name = $_SESSION["fname"];

$sql="select * from reservation natural join car where ssn = '$ssn' and payment='0';";
$result = $conn->query($sql);

?>
<html lang="en">
<head>
 
    <title>erkab</title>
   <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>rento</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #0000;
}

.shape:first-child{
    background: linear-gradient(
        #0000,
        #0000
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
     height: 300px;
    width: 700px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 0px rgba(8,7,16,0.6);
    padding: 50px 35px;}

form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}


td{
   color: #F8F8FF
}

::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 100px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
}

</head>
<body>
     
	 <header>
       <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index1.php"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="index1.php"> Home  </a>
                              </li>
                               <a class="nav-link" href="allcars.php">All cars </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Contact us</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="reserved.php">Reserved</a>
                              </li>
                               <li class="nav-item">
                                 <a class="nav-link" href="payment.php">Payment</a>
                              </li>
                           </ul>
                           <div class="sign_btn"><a href="login.php">Sign out</a></div>     
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>

      </header>
      <!-- end header inner -->
      <!-- end header -->
     <form name="myform" action='#'  onsubmit="return validateForm()" method='post' >
       <hr width="100%"
        size="50" color="black"
        noshade> 
        <h1>Payment</h1>

        <!-- TABLE CONSTRUCTION -->
       
             
            </tr>
             <hr width="100%"
        size="50" color="black"
        noshade> 
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {if($rows['payment']=='0'){
            ?>
           
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                     <table>
                   <tr> <td> <img src="images/<?=$rows['image']?>"><br>
               <h1 style="color:grey; font-size: 15px;">
                    Reservation date: <?php echo $rows['reservation_date'];?><br>
                       Return date:<?php echo $rows['return_date'];?><br>
                  plate:   <?php echo $rows['plate_id'];?><br>
              model: <?php echo $rows['model'];?><br>
               type: <?php echo $rows['type'];?><br>
              year:  <?php echo $rows['year'];?><br>
              engine capacity: <?php echo $rows['cc'];?><br>
              horsepower: <?php echo $rows['hp'];?><br>        
              color: <?php echo $rows['color'];?><br>
                price/day:<?php echo $rows['price'];?><br>
				price: <?php 
				$price=$rows['price'];
				$date1 = $rows['reservation_date'];
				$date2 = $rows['return_date'];
				$timestamp1 = strtotime($date1);
				$timestamp2 = strtotime($date2);
				$difference = $timestamp2 - $timestamp1;
				$final=$difference*$price/(24*60*60);
				echo $final;?>
               <hr width="100%"
        size="50" color="black"
        noshade> </td>


              </h1>
              <td>
               <br>
              </td>
              
        <td> <div class="container">
            <div class="row d_flex">
               <div class="col-md-12">
                  
                     <h1><a><input style="margin-top: 250px;
    width:150%;
    height: 100px;
    background-color: #ffd900;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 100px;
    cursor: pointer;
    border-color: transparent;
." type="submit" name="<?php echo $rows['reservation_id'];?>" value="Pay" ></a></h1></td>
					<?php
					$x=$rows['reservation_id'];
               date_default_timezone_set('Egypt');
               $date = date('Y-m-d', time());
					if(isset($_POST[$rows['reservation_id']])){
					$query="UPDATE reservation SET payment = '1' , payment_date='$date' WHERE reservation_id = $x " ;

					$result = $conn->query($query);
					echo "<script> alert('Payment done successfully');
						window.location.replace('payment.php');
							</script>";
					}
					?>
               <td> <div class="container">
            <div class="row d_flex">
               <div class="col-md-12">
                  
                     <h1><a><input style="margin-top: 250px;
    width:100%;
    height: 100px;
    background-color: #ffd900;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 100px;
    cursor: pointer;
    border-color: transparent;
." type="submit" name="<?php echo $rows['reservation_id'];?><?php echo $rows['ssn'];?>" value="cancel" ></a></h1></td>
					<?php
					$x=$rows['reservation_id'];
               date_default_timezone_set('Egypt');
               $date = date('Y-m-d', time());
               $set =$rows['reservation_id'].$rows['ssn'];
					if(isset($_POST[$set])){
					$query="Delete from reservation where reservation_id = '$x'" ;

					$result = $conn->query($query);
					echo "<script> alert('Reservation canceled!');
						window.location.replace('payment.php');
							</script>";
					}
					?>
             
            </div>
         </div>
      </section>
        </tr>  
            </table>
            <?php
                }}
            ?>
       
		</form>

</body>
</html>
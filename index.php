<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['adminname'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['adminname'];
  $query=mysqli_query($conn,"SELECT * FROM `admin` WHERE `Administrator_ID`='$filter'")or die(mysqli_error());
  $row1=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Eco Friendly Mobility - Administrator Homepage</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<style type="text/css">
        
          table{
    border: solid 1px black;
    align-items: center;
  }

   th, tr, td{
    border: solid 1px black;
    padding: 10px 10px;
  }
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <section class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container d-lg-none">
          <a class="navbar-brand" href="#">
            <div class="logo-box">
              <img src="images/logo.png" alt="">
              <span>
                Eco Friendly Mobility
              </span>
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mod"> My Module </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php"> Logout </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="#contact">Contact us</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="header_container ">
          <div class="logo-box">
            <img src="images/logo.png" alt="">
            <span>
              Eco Friendly Mobility
            </span>
          </div>
          <div>
                        <div class="header_top">
              <div class="header_top-contact">

                <a href="" class="ml-4">
                  <div>
                    <img src="images/phone.png" alt="" />
                  </div>
                  <span>
                    (+254) 712 3456789
                  </span>
                </a>
                <a href="" class="ml-4">
                  <div>
                    <img src="images/mail.png" alt="" />
                  </div>
                  <span>
                    Eco Friendly_mobility@gmail.com
                  </span>
                </a>
              </div>
            </div>
            <div class="header_btm">
              <nav class="navbar navbar-expand-lg custom_nav-container pt-3">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mod"> My Module </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php"> Logout </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="#contact">Contact us</a>
              </li>
                    </ul>

                  </div>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end header section -->

    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="slider_item-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slider_item-detail">
                      <div class="slider_form-box">
                      </div>
                      <div>
                        <h1 style="color: white;">
                          Welcome Administrator, <br>
                    <?php echo $row1['Fullname']; ?>  <br>
                          
                        </h1>

                        <div class="d-flex">
                          <div>
                            <a href="#mod" class="read-btn">

                              <span>
                                My Module
                              </span>
                              <img src="images/white-next.png" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <a href="#contact" class="quote-btn">

                              <span>
                                Contact Us
                              </span>
                              <img src="images/white-next.png" alt="">
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="slider_item-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slider_item-detail">
                      <div class="slider_form-box">
                      </div>
                      <div>
                        <h1 style="color: white;">
                          Welcome Administrator, <br>
   <?php echo $row1['Fullname']; ?> <br>
                          
                        </h1>

                        <div class="d-flex">
                          <div>
                            <a href="#mod" class="read-btn">

                              <span>
                                My Module
                              </span>
                              <img src="images/white-next.png" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <a href="#contact" class="quote-btn">

                              <span>
                                Contact Us
                              </span>
                              <img src="images/white-next.png" alt="">
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="slider_item-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slider_item-detail">
                      <div class="slider_form-box">
                      </div>
                      <div>
                        <h1 style="color: white;">
                          Welcome Administrator,   <br>
<?php echo $row1['Fullname']; ?><br>
                          
                        </h1>

                        <div class="d-flex">
                          <div>
                            <a href="#mod" class="read-btn">

                              <span>
                                My Module
                              </span>
                              <img src="images/white-next.png" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <a href="#contact" class="quote-btn">

                              <span>
                                Contact Us
                              </span>
                              <img src="images/white-next.png" alt="">
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="slider_item-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slider_item-detail">
                      <div class="slider_form-box">
                      </div>
                      <div>
                        <h1 style="color: white;">
                          Welcome Administrator,<br>
                          <?php echo $row1['Fullname']; ?><br>
                          
                        </h1>

                        <div class="d-flex">
                          <div>
                            <a href="#mod" class="read-btn">

                              <span>
                                My Module
                              </span>
                              <img src="images/white-next.png" alt="">
                            </a>
                          </div>
                          <div class="ml-3">
                            <a href="#contact" class="quote-btn">

                              <span>
                                Contact Us
                              </span>
                              <img src="images/white-next.png" alt="">
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>

      </div>


    </section>

    <!-- end slider section -->
  </div>
<div id="data">
<!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="d-flex justify-content-center">
      <h2 class="#">
        Database
      </h2>
    </div>
    <div class="container layout_padding2-top">
      <div class="row">
        <div class="col-md-12">
                    <div class="contact_form-container">
                     <h3>List of Users</h3>
              <table id="printTable" style="color: white;">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">User ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
  <th style="text-align: left;
  padding: 8px;">Phone Number</th>
  <th style="text-align: left;
  padding: 8px;">Image</th>
  <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "car_sale");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Customer_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `Image` FROM `customers`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Customer_ID"]); ?></td>
<td><?php echo($row["Fullname"]); ?></td>
<td><?php echo($row["Email_Address"]); ?></td>
<td><?php echo($row["Phone_Number"]); ?></td>
<td><img src="images/<?php echo($row["Image"]); ?>" style="width: 200px;"></td>
<td><button onclick="return confirm('Are you sure to that you want to delete this user?')?window.location.href='insertion.inc.php?action=deleteC&id=<?php echo ($row['Customer_ID']); ?>':true;" title='Delete User'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }
$conn->close();
?>

</table>
<br>
<div class="d-flex justify-content-end">
                <button onclick="printData();" class="">
                  Print
                </button>
              </div>
              <br>
          </div>
        </div>
                <div class="col-md-12">
                    <div class="contact_form-container">
                     <h3>List of Cars</h3>
  <table id="printTable1" style="color: white;">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Car ID</th>
<th style="text-align: left;
  padding: 8px;">Model & Make</th>
  <th style="text-align: left;
  padding: 8px;">Quantity </th>
  <th style="text-align: left;
  padding: 8px;">Description</th>
  <th style="text-align: left;
  padding: 8px;">Purchase Price (in kshs.)</th>
  <th style="text-align: left;
  padding: 8px;">Image</th>
  <th style="text-align: left;
  padding: 8px;">Document</th>
    <th style="text-align: left;
  padding: 8px;">Green Index</th>
    <th style="text-align: left;
  padding: 8px;">Additional Fee (in kshs.)</th>
    <th style="text-align: left;
  padding: 8px;">Status</th>
  <th style="text-align: left; padding: 8px;"></th>
  <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "car_sale");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Car_ID`, `Model`, `Make`, `Quantity`, `Description`, `Category`, `Price`, `Image`, `Fee`, `Green_Index`, `Document`, `Status` FROM `cars`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
  ?>
<tr>
<td><?php echo ($row['Car_ID']); ?></td>
<td><?php echo ($row['Model']); ?> by <?php echo ($row['Make']); ?></td>
<td><?php echo ($row['Quantity']);?></td>
<td><?php echo ($row['Description']); ?></td>
<td><?php echo($row['Price']);?></td>
<td><img src="images/<?php echo($row["Image"]); ?>" style="width: 50px;"></td>
<td><a href="document/<?php echo($row["Document"]); ?>" target="_blank">View</a></td>
<td><?php echo($row['Green_Index']);?></td>
<td><?php echo($row['Fee']);?></td>
<td><?php echo($row['Status']);?></td>
<?php
if($row['Status'] == "Pending"){
?>
<td><button onclick="return confirm('Are you sure that you want to deny this car?')?window.location.href='insertion.inc.php?action=denyC&id=<?php echo ($row['Car_ID']);?>':true;" title='Deny Car'>Deny</button></td>
<?php
}else if($row['Status'] == "Accepted"){
?>
<td><button onclick="return confirm('Are you sure that you want to confirm payment for this car?')?window.location.href='insertion.inc.php?action=payC&id=<?php echo ($row['Car_ID']);?>':true;" title='Pay Car'>Paid</button></td>
<?php
}else if($row['Status'] == "Paid For"){
?>
<td><button onclick="return confirm('Are you sure that you want to receive this car?')?window.location.href='insertion.inc.php?action=completeC&id=<?php echo ($row['Car_ID']);?>':true;" title='Receive Car'>Receive</button></td>
<?php
}else if($row['Status'] == "Completed"){
?>
<td></td>
<?php
}
?>
</tr>
<?php
}
} else { echo "No results"; }
$conn->close();
?>

</table>
<br>
<div class="d-flex justify-content-end">
                <button onclick="printData1();" class="">
                  Print
                </button>
              </div>
              <br>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section --> 

  <!-- contact section -->
  <section id="mod" class="contact_section layout_padding">
    <div class="d-flex justify-content-center">
      <h2 class="#">
        My Module
      </h2>
    </div>
    <div class="container layout_padding2-top">
      <div class="row">
        <div class="col-md-6">
                    <div class="contact_form-container">
          <form action="insertion.inc.php" method="POST">
              <div>
                <input type="text" placeholder="Your Name" value="<?php echo $row1['Fullname']; ?>" name="fname" required>
                <input type="hidden" value="<?php echo $filter; ?>" name="aid" required>
              </div>
              <div>
                <input type="email" placeholder="Your Email" value="<?php echo $row1['Email_Address']; ?>" name="email" required>
              </div>
              <div>
                <input type="password" placeholder="Your Password" name="password" required>
              </div>
              <div>
                <input type="password" placeholder="Confirm Your Password" name="cpassword" required>
              </div>
<!--               <div>
                <input type="text" class="message_input" placeholder="Message">
              </div> -->
              <div class="d-flex justify-content-end">
                <button type="submit " name="upa" class="">
                  Update My Details 
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contact_form-container">
            <form action="insertion.inc.php" method="POST" enctype="multipart/form-data">
              <div>
                <input type="number" min="0" max="10" placeholder="Green Index (1 to 10)..." name="index" required>
              </div>
              <div>
                <input type="number" min="0" placeholder="Taxation Fee (in kshs.)" name="fine" required>
              </div>
              <div>
                                             <select name="cid" required>
                                 <option selected disabled value="0">Select A Car</option>
                                     <?php
                                      $con = mysqli_connect("localhost","root","","car_sale");
                                      $sql = "SELECT * FROM `cars` WHERE `Status` = 'Pending'";
                                      $all_categories = mysqli_query($con,$sql);
                                      while ($category = mysqli_fetch_array(
                                              $all_categories,MYSQLI_ASSOC)):;
                                  ?>
                                  <option value="<?php echo $category["Car_ID"];?>"><?php echo $category["Car_ID"];?> - <?php echo $category["Model"];?> at <?php echo $category["Price"];?> kshs.</option>
                                  <?php
                                      endwhile;
                                  ?>
                              </select>
              </div>
              <div class="d-flex justify-content-end">
                <button type="submit " name="acceptC" class="">
                  Accept A Vehicle 
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  <!-- end contact section -->



  <!-- info section -->
  <section class="info_section " id="contact">
    <div class="container ">
      <div class="row  mb-3 pb-4">
        <div class="col-md-4 info_logo">
          <div class="logo-box">
            <img src="images/logo-white.png" alt="">
            <span style="font-size: 20px;">
              Eco Friendly Mobility
            </span>
          </div>
        </div>
        <div class="col-md-4 info_address">
          <h5>
            Contact Us
          </h5>
          <p>
            Location: Nairobi, KENYA.
          </p>
          <p>
            Call: (+254) 712 3456789
          </p>
          <p>
            <a href="">
            Email: Eco Friendly_mobility@gmail.com
            </a>
          </p>
        </div>
        <div class="col-md-4 info_links">

          <div class="info_nav ">
            <nav class="">
              <ul>
                <h5>
                 Important Links
                </h5>
                <li>
                  <a href="#"> Home</a>
                </li>
                <li>
                  <a href="#mod">My Module</a>
                </li>
                <li>
                  <a href="logout.php">Logout</a>
                </li>
                <li>
                  <a href="#contact">Contact Us</a>
                </li>

              </ul>
            </nav>
          </div>
        </div>
      </div>


    </div>
  </section>
  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2024 All Rights Reserved.</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>
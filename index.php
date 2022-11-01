<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- style links below 
  ============================== -->
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
    <!-- <link rel="stylesheet" href="./assets/css/theme1.css"> -->
    <link rel="stylesheet" href="./assets/css/theme2.css">


</head>
<body>
    <!-- header section 
    ============================ -->
    <?php include 'header.php';?>
  

      <!-- testimonial section 
    ================================ -->
    <?php  include './container/testimonial.php'; ?>

 

      <!-- Course Section  
    ======================================= -->
      <?php include './container/course.php'?>

  

      <!-- App Section  
    =============================== -->
     <?php include './container/app.php';?>
     
     
     
     <!-- Contact Us 
     ========================= -->
     <?php include './container/contact.php';?>

    <!-- Footer section 
    ================================== -->
      <?php include 'footer.php';?>
    

  <!-- Script File below
=============================== -->
<script src="./assets/js/script.js"></script>

<!-- font-icon script below  
======================= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>
</html>
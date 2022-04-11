<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- link fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <!-- link css -->
     <link rel="stylesheet" href="../../assets/style.css">
     <!-- link bootstrap  -->
     <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
<body>
<body class="for-body">

<!-- Start NAVBAR -->
<?php 
  
  include '../../components/navbar.php';
?>
<!-- End of NAVBAR  -->
<!-- start Section  --> 
<div class="parent container border rounded px-5 py-5 bg-light">
<h1 class="text-black mb-5">Welcome, Maher</h1>
<h3 class="log-i ">Your Profile : </h3>

<hr>
<div class="first-info d-flex flex-row justify-content-between">
    <div class="child">
    <p class="text-black fw-bolder gx-5">Username:</p>
</div>
<div class="child">
    <p class="text-black">Maher</p>
</div>
</div>
<hr>
<div class="first-info d-flex flex-row justify-content-between">
    <div class="child">
    <p class="text-black fw-bolder ">Signup date:</p>
</div>
<div class="child">
    <p class="text-black">Sun, 07 Apr 2019 16:11:25 +0000</p>
</div>
</div>
<hr>
<div class="first-info d-flex flex-row justify-content-between">
    <div class="child">
    <p class="text-black fw-bolder">Last login:</p>
</div>
<div class="child">
    <p class="text-black">Mon, 08 Apr 2019 14:24:20 +0000</p>
</div>
</div>

</div>
<!-- end Section -->
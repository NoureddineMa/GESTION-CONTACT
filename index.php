
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" type="image/png" href="./src/img/fav.png" />
    <!-- link fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <!-- link css -->
     <link rel="stylesheet" href="assets/style.css">
     <!-- link bootstrap  -->
     <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
<body class="bg-dark">
   <!-- Start NAVBAR -->
<?php 
  
  include './components/navbarWhitoustSessionName.php';
?>
<!-- End of NAVBAR  -->

<div class="container d-flex flex-row justify-content-around mt-5  col-xl-column col-lg-column py-5  ">
    <div class="first-child">
        <p class=" mt-5 for-font clr-lien  ">Hello!</p>
        <p class="text-white mt-4 fs-3 "> <a class="h-one text-decoration-none  clr-lien" href="./src/public/signin.php">Sign up </a> to start your contacts list.</p>
        <p class="text-white fs-3">Already have an account? <a class=" h-one text-decoration-none event-model  clr-lien" href="./src/public/login.php"> Login here. </a> </p>
    </div>
    <div class="first-child">
        <img src="./src/img/bg2.png" class="img-s" alt="Contacts image">
    </div>
</div>
</body>
</html>
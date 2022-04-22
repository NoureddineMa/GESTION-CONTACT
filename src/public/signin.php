<?php   

// Sign Up page not Sign in
require_once 'includesDb.php';
$user = new USER($db_conn);


if( isset($_POST['signin'])){
  $Name = $_POST['Name'];
  $password = $_POST['password'];
  if($Name === "" || $password ==="") {
    $error[] = "provide username & password !"; 
    if(strlen($password) < 6){
      $error[] = "Password must be atleast 6 characters"; 
    }
  };
 $user->register($Name,$password);
 header ('Location: login.php ');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up </title>
    <!-- link fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <!-- link css -->
     <link rel="stylesheet" href="../../assets/style.css">
     <!-- link bootstrap  -->
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>


<body class="bg-dark">
    <!-- Start NAVBAR -->
<?php 
  
  include '../../components/navbarWhitoustSessionName.php';
?>
<!-- End of NAVBAR  -->


<!-- start form  -->
<form method="post">
<div class="parent-for d-flex justify-content-center align-items-center ">
<div class="parent d-flex flex-column bg-modal w-25 px-5 py-3 rounded border-none bg-white">
<h1 class="text-black text-center mb-5">SIGN UP </h1>


    <input class="w-100 mb-1 unborder px-2 " placeholder="Username" type="text" id="Username" name="Name">
    <div id="errUser" class="mb-3"></div>
    <input class="w-100 mb-1 unborder px-2" type="password" placeholder="password" id="Password" name="password">
    <div id="errPass" class="mb-3"></div>
    <input class="w-100 mb-1 unborder px-2" type="password" placeholder="password verify" id="PasswordV">
    <div id="errPassV" class="mb-3"></div>
    <input class="w-100  bg-submit unborder fw-bold border-0 rounded py-2 " id="signin" type="submit" name="signin" value="Sign in">

    <p class="mt-4 fs-6 text-black text-center sigin-clr">Already have an account?<a class="orange text-decoration-none fw-bold" href="login.php" > Login</a> here.</p> 
  </div>
</div>
</form>
<!-- end form -->
<!-- link js  -->
    <script src="../../assets/js/SignupFormValid.js"></script>

</body>
</html>
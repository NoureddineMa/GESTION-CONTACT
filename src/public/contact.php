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
    <!-- link icos font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
<body class="for-body">
<!-- Start NAVBAR -->
  <?php 
  
        include '../../components/navbar.php';
  ?>
<!-- End of NAVBAR  -->

<!-- start section -->
<div class="container">
<h2 class="text-black mb-5">Contact.</h2>
</div>
<div class="parent container">
    <h3 class="mb-5 under-line h5">Contact List : </h3>
    <table class="table bg-opa rounded">
        <thead>
          <tr>
            <th scope="col" class="py-3">Name</th>
            <th scope="col" class="py-3">Email</th>
            <th scope="col" class="py-3">Phone</th>
            <th scope="col-1" class="py-3">Adresse</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Maher</td>
            <td>Maher@gmail.com</td>
            <td>6 23 32 95 76 </td>
            <td>RUE XXXX VILE XXX N XXX </td>
            <td> <a href=""><i class="fa-solid fa-pen text-success px-4"></i></a> <a href="" ><i class="fa-solid fa-trash-can text-danger"></i></a> </td>
          </tr>
          <tr>
            <td>Wassim</td>
            <td>Wassim@gmail.com</td>
            <td>6 76 57 67 94 </td>
            <td>RUE XXXX VILE XXX N XXX </td>
            <td> <a href=""><i class="fa-solid fa-pen text-success px-4"></i></a> <a href="" ><i class="fa-solid fa-trash-can text-danger"></i></a> </td>
            </td>
          </tr>
          <tr>
            <td>Yahya</td>
            <td>Yahya@gmail.com</td>
            <td>6 65 75 64 57 </td>
            <td>RUE XXXX VILE XXX N XXX </td>
            <td> <a href=""><i class="fa-solid fa-pen text-success px-4"></i></a> <a href="" ><i class="fa-solid fa-trash-can text-danger"></i></a> </td>
          </tr>
        </tbody>
      </table>
</div>

<div class="card text-center w-25 d-flex position mt-5">
    <div class="card-body bg-opa maher">
      <h5 class="card-title text-black">ADD CONTACT</h5>
      <p class="card-text text-black">U can ADD your New Contacts here.</p>
      <a href="#" class="btn bg-submit text-white">ADD CONTACT +</a>
    </div>
  </div>


<!-- end section -->
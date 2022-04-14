<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <!-- link fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <!-- link css -->
     <link rel="stylesheet" href="../../assets/style.css">
     <!-- link bootstrap  -->
     <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- link icos font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- ------------ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- ------------ -->
    <!-- JavaScript Bundle with Popper -->
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

<div class="card text-center d-flex position mt-5 w-25">
    <div class="card-body bg-opa maher">
      <h5 class="card-title text-black">ADD CONTACT</h5>
      <p class="card-text text-black">U can ADD your New Contacts here.</p>
      <button type="button" class="btn bg-clr text-white py-2 px-2  w-50" data-toggle="modal" data-target="#myModal">
           ADD + 
      </button>
      
</div>



      <!-- The Modal -->
      <div class="modal" id="myModal">
         <div class="modal-dialog">
            <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header">
                  <h4 class="modal-title ml-3">You CAN ADD A CONTACT</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <!-- Modal body -->
               <div class="modal-body">
               <div class="form-outline mb-4 ">
          <label class="form-label text-black" for="">Full name *</label>
          <input type="text"  class="form-control form-control"placeholder="Entrer votre nom complet" id="Fname" />
          <div id="erreur-Fname"></div>
        </div>

             <div class="form-outline mb-4">
               <label class="form-label text-black" for="">Email * </label>
               <input type="text"  class="form-control form-control"placeholder="Entrer votre Email"id="email" />
               <div id="erreur-email"></div>
            </div>

            <div class="form-outline mb-4">
              <label class="form-label text-black" for="">phone Number *    </label>
              <input type="text"  class="form-control form-control"placeholder="Entrer votre Number"id="phone" />
              <div id="erreur-Phone"></div>
            </div>

            <div class="form-outline mb-4">
              <label class="form-label text-black" for="">Adresse *</label>
              <input type="text"  class="form-control form-control"placeholder="Entrer votre Adresse" id="adresse" />
              <div id="erreur-adresse"></div>
            </div>
             </div>
               <!-- Modal footer -->
               <div class="modal-footer">
                    <input type="submit" value="ADD A CONTACT" id="add" />
                </div>
                </div>
                </div>
                </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <!-- link js  -->
      <script src="../../assets/js/AddContactFormValid.js"></script>

<!-- modal -->

<!-- end section -->

</body>



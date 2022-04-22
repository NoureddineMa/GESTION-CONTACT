<?php require_once 'includesDb.php';

if (isset($_POST['insert'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Adresse = $_POST['Adresse'];
    $user_id = $_SESSION['user_session'];
    $crud->ADD($Name, $Email, $Phone, $Adresse, $user_id);
    header("location: {$_SERVER['PHP_SELF']}");
}
 ?>
 <!-- link fontawesome  -->
 <link rel="stylesheet" href="../../assets/style.css">

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog ">
    <div class="modal-content bg-white ">

      <!-- Modal Header -->
      <div class="modal-header text-center bg-delete  ">
        <h4 class="modal-title text-center ">Add a Contact</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
         <form method="POST" enctype="multipart/form-data" action="" class="px-4 py-4  d-flex flex-column align-items-center">
            <fieldset> 
                 <div class="form-group">
                   <input type="text" id="Fname" class="form-control unborder w-100 px-2"  placeholder="Veuillez entrez un Nom :" name="Name" onkeyup="ValidationName()">
                   <div id="erreur-Fname"></div> 
                  </div>
                 
                 <div class="form-group">
                   <input type="Email" id="email" class="form-control unborder w-100 px-2"  placeholder="Veuillez entrez un mail :" name="Email">
                   <div id="erreur-email"></div>
                  </div>
                 <div class="form-group">
                   <input type="text" id="phone" class="form-control unborder w-100 px-2"  placeholder="Veuillez entrez le numéro de telephone :" name="Phone">
                   <div id="erreur-Phone"></div>

                 </div>
                 <div class="form-group">
                   <input type="text" id="adresse" class="form-control unborder w-100 px-2" id="adresse"  placeholder="Veuillez entrez l'adresse :" name="Adresse">
                   <div id="erreur-adresse"></div>
                 </div>
                   <!-- Modal footer -->
      <div class="modal-footer mt-3">
         <input type="submit" name="insert" placeholder="ADD" id="insert" class="btn bg-delete" >
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
             </fieldset>
       </form>

    </div>
  </div>
</div>
  <!-- link js  -->
  <script type="text/javascript" src="../../assets/js/AddContactFormValid.js"></script>
  <!-- modal -->

  <!-- end section -->

</body>
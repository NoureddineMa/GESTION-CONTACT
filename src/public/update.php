<?php
session_start();
require_once 'includesDb.php';

$user_id = $_SESSION['user_session'];
  $contact = new CONTACT($db_conn);


  if (isset($_GET['id_contact'])) {

    $id = $_GET['id_contact'];

    $data = extract($contact->getID($id));

  }
  if(isset($_POST['btn-update'])) {
    $id_contact = $_GET['id_contact'];
    $Name   = $_POST['Name'];
    $Email      = $_POST['Email'];
    $Phone     = $_POST['Phone'];
    $Adresse     = $_POST['Adresse'];
    
    if ($contact->update($id_contact, $user_id, $Name, $Email, $Phone, $Adresse)) {
      header('location: contact.php');
    } else {
      echo "error";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <!-- link fontawesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- link css -->
  <link rel="stylesheet" href="../../assets/style.css">
  <!-- link bootstrap  -->
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- link icos font awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- ------------ -->
  
  <!-- ------------ -->
  <!-- JavaScript Bundle with Popper -->
</head>

<body class="bg-dark">
    
<?php include '../../components/navbar.php' ?>

<h2 class="text-center text-white">Update Contact</h2>


  <div class="container mt-3">
    <form method="POST" class="rounded bg-white px-3 py-3 text-center w-50 position">
      <?php $userRow = $crud->getID($user_id); ?>
          
            
      <div class="form-group for-input">
        <input type="text" class="  unborder mb-2 form-control" name="Name" value="<?php  if(isset($Name)) echo $Name; ?> ">
      </div>

      <div class="form-group">
        <input type="email" class="form-control unborder mb-2" name="Email" value="<?php if (isset($Email)) echo $Email; ?>">
      </div>
      <div class="form-group">
        <input type="text" class="form-control unborder mb-2" name="Phone" value="<?php if (isset($Phone)) echo $Phone; ?>">
      </div>
      <div class="form-group">
        <input type="text" class="form-control unborder mb-4" name="Adresse" value="<?php if (isset($Adresse)) echo $Adresse; ?>">
      </div>
      <input type="hidden" name="id_contact " value="<?= isset($id_conatct) ?  $id_conatct : "" ?>">
       
      <input type="submit" name="btn-update" class="btn bg-delete px-3 py-1  " value="Update">
       
    </form>
                                
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
  <script src="../Assets/js/my-bootstrap.js"></script>
</body>

</html>
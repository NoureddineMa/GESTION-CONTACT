<?php
require_once 'includesDb.php';
$user_id = $_SESSION['user_session'];
$stmt = $db_conn->prepare("SELECT * FROM user WHERE id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
?>


<nav class="navbar navbar-expand-lg bg-new mb-5">
        <div class="container">
                <a class="text-decoration-none text-white fs-2" href="home.php">CONTACT</a>
                <div class="nav">
                        <a class="nav-link text-decoration-none text-black  px-2 active fw-bold" aria-current="page" href="./home.php"><?php echo $userRow['Name']; ?></a>
                        <a class="text-decoration-none text-white special px-2 mt-2 fw-bold " href="./contact.php">Contacts</a>
                        <a class="text-decoration-none text-white special px-2 mt-2 fw-bold " href="./logout.php">logout</a>
 </div>
        </div>
</nav>
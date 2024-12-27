<?php
require_once "../../app/classes/VehicleManager.php";
$vehicleManager = new VehicleManager('','','','') ;
$id = $_GET['id'] ?? null;

if($id === null){
    header("Location: ../index.php");
    exit;
}

$vehicles = $vehicleManager->getVehicles();
$vehicle = $vehicles[$id] ?? null;

if(!$vehicle){
    header("Location: ../index.php");
    exit;
}

if($_SERVER['REQUEST_METHOD'] === "POST" ){
    if(isset($_POST['confirm']) && $_POST['confirm'] === 'yes'){
        $vehicleManager->deleteVehicle($id);
    }
    header("Location: ../index.php");
    exit;
}



include './header.php';
?>

<div class="container my-4">
    <h1>Delete Vehicle</h1>
    <p>Are you sure you want to delete <strong></strong>?</p>

    <form method="POST">
        <button type="submit" class="btn btn-danger" name="confirm" value="yes" >Yes, Delete</button>
        <a href="../index.php" class="btn btn-secondary">Cancel</a>       
    </form>
</div>



</body>
</html>
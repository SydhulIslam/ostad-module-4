<?php
require_once "../../app/classes/VehicleManager.php";
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $vehicleManager = new VehicleManager('','','','') ;
    $vehicleManager->addVehicle([
        'vehicle_name' => $_POST['vehicle_name'],
        'vehicle_type' => $_POST['vehicle_type'],
        'vehicle_price' => $_POST['vehicle_price'],
        'vehicle_image' => $_POST['vehicle_image']
    ]);
    header("Location: ../index.php");
    exit;
}

include './header.php';
?>

<div class="container">
    <h1>Add Vehicle</h1>
    
    <form action="" method="POST">

        <div class="mb-3">
            <label for="" class="form-label" >Vehicle Name </label>
            <input type="text" name="vehicle_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label" >Vehicle Type </label>
            <input type="text" name="vehicle_type" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label" >Vehicle Price </label>
            <input type="number" name="vehicle_price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label" >Vehicle Image </label>
            <input type="text" name="vehicle_image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Vehicle</button>
    </form>
</div>



</body>
</html>
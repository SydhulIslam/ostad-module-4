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

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $vehicleManager->editVehicle($id, [
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

<div class="container my-4">
    <h1>Edit Vehicle</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="" class="form-label" >Vehicle Name </label>
            <input type="text" name="vehicle_name" class="form-control" value = "<?= htmlspecialchars($vehicle['vehicle_name']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label" >Vehicle Type </label>
            <input type="text" name="vehicle_type" class="form-control" value="<?= htmlspecialchars($vehicle['vehicle_type']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label" >Vehicle Price </label>
            <input type="number" name="vehicle_price" class="form-control" value="<?= htmlspecialchars($vehicle['vehicle_price']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="" class="form-label" >Vehicle Image </label>
            <input type="text" name="vehicle_image" class="form-control" value="<?= htmlspecialchars($vehicle['vehicle_image']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Vehicle</button>
        <a href="../index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html>
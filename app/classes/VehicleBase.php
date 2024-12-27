<?php
abstract class VehicleBase {
    protected $vehicle_name ;
    protected $vehicle_type ;
    protected $vehicle_price ;
    protected $vehicle_image ;


    public function __construct($vehicle_name, $vehicle_type, $vehicle_price, $vehicle_image){
        $this->vehicle_name = $vehicle_name;
        $this->vehicle_type = $vehicle_type;
        $this->vehicle_price = $vehicle_price;
        $this->vehicle_image = $vehicle_image;
    }

    abstract public function getDetails();
}
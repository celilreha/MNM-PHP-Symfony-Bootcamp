<?php

abstract  class Vehicle{
    protected $plateNo;
    protected $brand;
    protected $model;
    protected $wheelsCount;
    protected $wingspan;

    function __construct($brand, $model){
        $this->brand = $brand;
        $this->model = $model;
    }
    abstract protected function printVehicle();
    
}
class Car extends Vehicle{
    function __construct($plateNo, $brand, $model, $wheelsCount){
        parent::__construct($brand, $model);
        $this->plateNo = $plateNo;
        $this->wheelsCount = $wheelsCount;
    }
    public function printVehicle(){
        echo "Araba taşıtına ait öznitelikler şu şekildedir:
            Plaka No: ".$this->plateNo."
            Marka: ".$this->brand."
            Model: ".$this->model."
            Tekerlek Sayısı: ".$this->wheelsCount."\n";
    }
}
class Motorcycle extends Vehicle{
    function __construct($plateNo, $brand, $model, $wheelsCount){
        parent::__construct($brand, $model);
        $this->plateNo = $plateNo;
        $this->wheelsCount = $wheelsCount;
    }
    public function printVehicle(){
        echo "Motorsiklet taşıtına ait öznitelikler şu şekildedir:
            Plaka No: ".$this->plateNo."
            Marka: ".$this->brand."
            Model: ".$this->model."
            Tekerlek Sayısı: ".$this->wheelsCount."\n";
    }
}
class Plane extends Vehicle{
    function __construct($brand, $model,$wingspan){
        parent::__construct($brand, $model);
        $this->wingspan = $wingspan;
    }
    public function printVehicle(){
        echo "Uçak taşıtına ait öznitelikler şu şekildedir:
            Marka: ".$this->brand."
            Model: ".$this->model."
            Kanat Açıklığı: ".$this->wingspan."\n";
    }
}

?>
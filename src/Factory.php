<?php 


namespace App;

class Factory{


    private $model;

    private $config;


    public function __construct($model,$configuration){

        $this->model = $model;
        $this->config = $configuration;
    }


    public function getFactoryGoods(){

        return $this->model.' Model '. $this->config.' Configuration ';
    }



}




class LaptopFactory{


    public static function makeLaptop($model,$config){

        return new Factory($model,$config);
    }
}



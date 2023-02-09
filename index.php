<?php

class IMAGES{

    public $directory;
    public $img_width;
    public $img_height;

    public function __construct($directory,$img_width,$img_height){
        $this -> directory = $directory;
        $this -> img_width = $img_width;
        $this -> img_height = $img_height;
    }

    public function viewImg(){

        $dir = scandir($this -> directory);
       

        

    }

   

} 

    $images = new IMAGES(__DIR__, "150px", "150px");

    $images -> viewImg();
    var_dump($images);




?>
to be continued!!

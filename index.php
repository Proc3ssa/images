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

    public function exploded($filename){
        $split= explode('.', $filename);
        $extention = $split[1];

        $extentions = array("png","PNG","jpeg","JPEG","gif","GIF");

        if(in_array($extention, $extentions)){
             return true;
        }
        else{
            return false;
        }

    }

    public function replace($dir): string{
    
        $new_dir = str_replace('/','/',$dir );
        return $new_dir;
    }

    public function castImage($image){
        
        $width = $this -> img_width;
        $height = $this -> img_height;
        $dir = $this -> directory;

        echo '
        <img src="'.$dir.'/"
        '.$this -> replace($image).' width="'.$width.'" height="'.$height.'">';

    }

    public function viewImg(){

        $dir = scandir($this -> directory);

        foreach($dir as $dirs){

            if(is_file($dirs)){
            if($this -> exploded($dirs)){
               
                echo $this -> castImage($dirs);
            }
           
            }


        }

        

    }

   

} 

    $images = new IMAGES(__DIR__, "150", "150");

    $images -> viewImg();
   





?>

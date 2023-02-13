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
 
        $new_dir = str_replace("\\",'/',$dir );
        return $new_dir;
    }

    public function castImage($image):string{
       
        $width = $this -> img_width;
        $height = $this -> img_height;
        $dir = $this -> directory."/".$image;

       return $this -> replace('
        <img src="'.$dir.'" width="'.$width.'" height="'.$height.'" alt="'.$image.'">');

    }

    public function viewImg(){

        $dir = scandir($this -> directory);

        foreach($dir as $dirs){

            if(is_file($dirs)){
            if($this -> exploded($dirs)){
               
                echo $this -> castimage($dirs);
            }
         
           
            }


        }

        

    }

   

} 

    $images = new IMAGES(__DIR__.'/images', "150", "150");

    $images -> viewImg();

    
   





?>

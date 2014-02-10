<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dokument bez tyt</title>
</head>

<body>

<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

  class Napis {
    var $string;
    var $stringTablica;
    
    
    public function setString($string){
        
        $this->string = $string;

    }

    public function getString(){
        
        return $this->string;
        
    }

    
    public function rozbicieStringa(){
        
       $rozbity = $this->getString();
       $rozbityArray = str_split($rozbity,1);

       $i = 1;
      foreach ($rozbityArray as $value) {
      
        
        
        
        $stringTablica[$i] = $value;
        if($stringTablica[$i] == chr(32)){
             echo "<div class=\"marek2\">&nbsp;</div>";
            $i++;
            continue;
        }
        echo "<div class=\"marek\">".$stringTablica[$i]."</div>";
        $i++;
       
      }
      
   
    }
    
    
    
    
    
}
   
     
 
?>
</body>
</html>
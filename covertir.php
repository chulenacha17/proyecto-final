
<?php
   extract($_POST);

   

      if(isset($mibtn)):
        $controlador = new convertirControlador();
        $res=$controlador->Convertir( $textnumero);
        echo $res;

     endif;

   

     class convertirControlador {
        public  function Convertir($numero) {
    
           
            
           return Convertir($numero);
        }

    }
    
     function convertir($numero) {
       
         
             $res = "";
             $unidad = ["cero","uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve"];
             $decenaEspecial = ["once","doce","trence","catorce","quince","dieciseis","diecisiete","dieciocho","diecinueve"];
             $decena = ["diez","veinte","treinta","cuarenta","cincuenta","seseta","setenta","ochenta","noventa"];
             $centena = ["ciento","doscientos","trecientos","cutrocientos","quinientos","seiscientos","setecientos","ochocientos","novecientos"];
             $unidadDeMil = ["mil","mil","mil","mil","mil","mil","mil","mil","mil","mil"];
     
       if ($numero){
          
           $d1="";
           $d2="";
           $d3="";
           $d4= "";
     
         $numtexto=$numero."";
     
         $d1= substr($numtexto, 0,1);
         $d2= substr($numtexto, 1,1);
         $d3= substr($numtexto, 2,1);
         $d4= substr($numtexto, 3,1);
         
         echo $d1.$d2.$d3.$d4." <br>" ; 
     
         if($numero<=10) {
     
             if($numero<10){
                 $res= $unidad[$numero];
             }else{
                 $res=$decena[$d2];
             }    
 
         }else if($numero<20){
             $numero-=11;
             $res= $decenaEspecial[$numero];
         }else if($numero<100){
 
             if($d2==0){
                 $numero/=10;
                 $res= $decena[$numero-1];
             }else{
                 
                 $res=$decena[$d1-1]." y ". $unidad[$d2];
             }
 
         }else if($numero<1000){
 
             if($d2==0 && $d3==0){
                 $res="cien";
         
         }else if ($d3==0){
 
             $res=$centena[$d1-1]." ". $decena[$d2-1];
 
            } else  if($d2==0){
              $res=$centena[$d1-1]." ". $decenaEspecial[$d2];
        
         }else if( $d2== 0){
             $res=$centena[$d1-1]." ". $decena[$d3];
             
         }else{
             $res=$centena[$d1-1]." ". $decena[$d2-1]." y ". $unidad[$d3];
         }
     
         } else if($numero>1000){
 
             if($d1==1 && $d2==0 && $d3==0 && $d4==0){
                 $res= "mil";
 
             }else if($d2==0){
                 
                 $res= $unidadDeMil[$d1-1]." ".$decenaEspecial[$d4-1];
                  
          } else if ($d2==0 ){  
             $numero-=11 ;
              $res= $unidadDeMil[$d1-1]." ". $decena[$d3-1]." y ". $unidad[$d4];
             
            
          } else{ 
             
             $res= $unidadDeMil[$d1]." ".$centena[$d2-1]." ".$decena[$d3-1]." y ".$unidad[$d4-1]; 
 
         
         }
     
       
     }
     
       }
     
       return $res;
     }
     
  
 
    
 

?>
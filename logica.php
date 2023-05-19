<?php  
echo '<h1>Tu registro fue el siguiente</h1>';
echo '<br>nombre</br>';
    isset($_POST["nombre"]) ? print $_POST["nombre"]:"";
echo '<br> Apellido</br>';
    isset($_POST["apellido"]) ? print $_POST["apellido"]:"";
echo '<br>email</br>';
    isset($_POST["email"]) ? print $_POST["email"]: "";
echo '<br>telefono</br>';
    isset($_POST["telefono"]) ? print $_POST["telefono"]: "";
echo '<br> Nivel de estudio </br>';
     isset($_POST["nivelEst"]) ? print $_POST["nivelEst"]: "";
echo '<br> nivel de ingles </br>';
 $idioma = isset($_POST["nivelIng"]) ? print $_POST["nivelIng"]: "";    
echo '<br>lenguajes</br>';
   $lenguaje = isset($_POST["lenguaje"]) ?  count($_POST["lenguaje"]):""; 
   echo $lenguaje;  

    if ($lenguaje <= 2 && (($idioma==1)||($idioma==2) || ($idioma==3))){
        header("Location:basico.php");
    
    }elseif($lenguaje <= 5 && (($idioma==1)||($idioma==2) || ($idioma==3))){
        header("Location:intermedio.php");

    }elseif($lenguaje >= 6 && (($idioma==1)||($idioma==2) || ($idioma==3))){
        header("Location:avanzado.php");

    } 

    // switch ($lenguaje) {
    //     case ($lenguaje === 1):
    //             echo "no pasó";
    //         break;
    //     case ($lenguaje <= 3):
            
    //         break;
        
    //     case ($lenguaje >= 4 && $idioma === 2):

    //         break;

    //     default:
    //         # code...
    //         break;
    //}


    // header("Location:../basico.php");
    // }else if($lenguaje >= 4 && $idioma == 2){
    //     //header("Location:../intermedio.php");
    //     echo "2";
    //         }else if($lenguaje >= 6 && $idioma == 3){
    //             //header("Location:../avanzado.php");
    //             echo "3";
    //         }       
?>  


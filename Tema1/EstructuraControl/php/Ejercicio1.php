<?php 
        $hora=$_POST['hora'];


        switch ($hora) {
            case 6:
            case 7:
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
                echo "Buenos dias";
                break;
            case 13:
            case 14:
            case 15:
            case 16:
            case 17:
            case 18:
            case 19:
            case 20:
                echo "Buenas tardes";
                break;
            case 21:
            case 22:
            case 23:
            case 24:
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo "Buenas noches";
                break;
            
            default:
                echo "Error";
                break;
        }
    
?>
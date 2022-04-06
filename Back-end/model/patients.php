<?php 

require_once "../Back-end/model/DB.php";


class patients extends DB

{
    
//     public function signUp($data){
        
//         $reff=md5($data->Reference);
//         $query = "INSERT INTO `patient` (`Reference`, `nom`, `prenom`, `email`, `age`) VALUES (?, ?, ?, ?, ?)";

//         $log = $this->connect()->prepare($query);
//         $log->execute([$reff,$data->nom,$data->prenom,$data->email,$data->age]);

//     }


public function SignUp($data)
    {

        $query = "INSERT INTO patient(Reference, nom, prenom, email, age) VALUES ('$data[Reference]','$data[nom]','$data[prenom]','$data[email]','$data[age]')";
        $log = $this->connect()->prepare($query);
        $log->execute();
        if($log){
            return true;
        }else{
            return false;
        }

    }
    
    // public function signinPatient($reff)
    // {
    //     if(isset($_POST['submit']))
    //     {

           
    //         $query = "SELECT * FROM `patient` WHERE  Reference='$reff'";

    //         $log = $this->connect()->prepare($query);
    //         $log->execute();
    //         $res = $log->fetch(PDO::FETCH_ASSOC);
    //         return $res;
    //     }
    // }









}

?>


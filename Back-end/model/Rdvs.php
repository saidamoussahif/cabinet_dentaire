<?php

require_once "../Back-end/model/DB.php";

class Rdvs extends DB
{


    public function read($id)
    {
        
            $query = "SELECT * FROM `rdv` WHERE patient= ? ";
            $log = $this->connect()->prepare($query);
            if( $log->execute([$id])){

                return $log->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return false ;
            }
            

    }

    public function create($data)
    {
        $sql= "INSERT INTO `rdv` (`Sujet_RDV`, `date`, `heure`, `patient`) VALUES ( ?, ?, ?, ?)";

        $log = $this->connect()->prepare($sql);
        return $log->execute([$data->Sujet_RDV,$data->date,$data->heure,$data->patient]);
    }


    public function update($data)
    {
        $sql = "update rdv set Sujet_RDV = ?, date =?, heure = ?, patient = ? where id=?";

        $log = $this->connect()->prepare($sql);
        return $log->execute([$data->Sujet_RDV,$data->date,$data->heure,$data->patient,$data->id]);
    }


    public function delete($data)
    {
        $sql = "DELETE FROM rdv WHERE id = ? ";

        $log = $this->connect()->prepare($sql);
        return $log->execute([$data->id]);
    }
      
   



    
  




   
}







?>
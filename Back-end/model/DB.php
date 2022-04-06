<?php 

class DB{
    protected $host ='localhost';
    protected $dbname='prise_rdv';
    protected $username='root';
    protected $password='';
    
    public function Connect(){

        try{
            
            $conn=new PDO("mysql:host=localhost;dbname=prise_rdv","root",""); 
            return $conn; 
           }
           catch (PDOException $e){
            echo $e->getMessage();
            }
           
    }
}
?>

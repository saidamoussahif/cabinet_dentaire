<?php
require_once __DIR__."/../model/Rdvs.php";

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
    class Rdv {
        public function read($id){

            if ( $_SERVER["REQUEST_METHOD"] == "GET") {
               $rdv= new Rdvs();
               $rslt = $rdv->read($id);
               if($rslt){

                     echo json_encode($rslt);
               }else{
                   echo json_encode(['message'=>'Aucun RDV existe']);
               }
             


            }else{
                echo json_encode(['message'=>'changer la methode']);
            }
        }

            public function create()
            {
                if ( $_SERVER["REQUEST_METHOD"] == "POST") {
                    $rdv= new Rdvs();
                    $data= json_decode(file_get_contents("php://input"));
                   
                    if($rdv->create($data)){
                        echo json_encode(['message'=>'RDV bien ajoute ']);
                    }else{
                        echo json_encode(['message'=>'Aucun RDV ajoute']);
                    }

                }else{
                    echo json_encode(['message'=>'verifier la methode']);
                }
            }

            public function update()
            {
                if ( $_SERVER["REQUEST_METHOD"] == "PUT") {
                    $rdv= new Rdvs();
                    $data= json_decode(file_get_contents("php://input"));
                   
                    if($rdv->update($data)){
                        echo json_encode(['message'=>'RDV bien modifie ']);
                    }else{
                        echo json_encode(['message'=>'Aucun RDV modifier']);
                    }

                }else{
                    echo json_encode(['message'=>'verifier la methode']);
                }
            }

            public function delete(){
                if ( $_SERVER["REQUEST_METHOD"] == "DELETE"){
                $rdv= new Rdvs();
                $data = json_decode(file_get_contents("php://input"));

                if($rdv->delete($data)){
                    echo json_encode(
                        array('message'=>'RDV bien supprimer')
                    );
                }else{
                    echo json_encode(
                        array('message'=>'RDV n a pas supprimer ')
                    );
                }

                }
            }















         


    }













?>
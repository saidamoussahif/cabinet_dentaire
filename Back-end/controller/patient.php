<?php
      require_once __DIR__."/../model/patients.php";

      header('Access-Control-Allow-Origin: *');
      header('Content-Type: application/json');
      header('Access-Control-Allow-Methods: POST');
       header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
          class patient {
      //         public function Register(){

                  
      //             if ( $_SERVER["REQUEST_METHOD"] == "POST") {
      //                   $patient= new patients();
      //                   $data= json_decode(file_get_contents("php://input"));
                       
      //                   if($patient->signUp($data)){
      //                       echo json_encode(['message'=>'bien enregistrer']);
      //                   }else{
      //                       echo json_encode(['message'=>'Aucun enregistrement']);
      //                   }
    
      //               }else{
      //                   echo json_encode(['message'=>'verifier la methode']);
      //               }

      //         }





      public function SignUp()
      {
          $methods = new patients();
          $data = array(
              "Reference" => strtoupper($_POST['nom']) . '-' . rand(1000, 9999),
              "nom" => $_POST['nom'],
              "prenom" => $_POST['prenom'],
              "email" => $_POST['email'],
              "age" => $_POST['age']
          );
  
          if($methods->SignUp($data) )
          {
              http_response_code(200);
              echo json_encode(array("message" => "Connecte"));
          }
          else
          {
              http_response_code(400);
              echo json_encode(array("message" => "erreur"));
          }
      }














     

    // public function login()
    // {
         
    //     $reff = $_POST['Reference'];

    //     $signin = new patients();
    //     $var = $signin->signinPatient($reff);

    //       if($var)
    //       {
    //         echo json_encode(array("message" => "connecté"));
    //       }
    //       else
    //       {
    //         echo json_encode(array("message" => "erreur"));
    //       }


    // }



    
   







            
}
?>
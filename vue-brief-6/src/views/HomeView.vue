<template>
<div class="home">

  <section class="container d-flex">
    <p>Bienvenue aux nouveaux patients!
Soucieuse de desservir les résidents de Safi, la Dre Émilie Jolicoeur a ouvert sa deuxième clinique en novembre 2012 dans cette jolie municipalité.<br> Ayant aménagé dans des locaux entièrement neufs, le Centre de Santé Dentaire Safi jouit d’un environnement à la fois moderne et chaleureux<br> à l’image des professionnels dentaires qui y travaillent.<br>
En somme, depuis son arrivée, le Centre de Santé Dentaire Safi fait sans contredit le bonheur des gens de la région. </p>
       
             <img src="../assets/doctor.svg" class="rounded float-end" alt="#" style="width:600px ;"> 
  </section>

  <div class="col-lg-12 ">
    <button class="float-start btn btn-success" @click="rdvModalDialog(true) ">
      Prendre un rendez-vous
    </button>
    <button class="float-start btn btn-warning" @click="connectModalDialog(true)" style="margin-left:20px">
     Connectez-vous
    </button>
  </div>




    

        <!-- form prise de RDV -->
<div class="bg-modal"> 
	<div class="modal-contents">
		  <div id="overlay" v-if="showRDVModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title text-success">Formulaire de prise de rendez-vous</h5>
                 <button aria-hidden="true" @click="rdvModalDialog(false)"><FIcons :icon="['fas','times']"/></button>
                </div>
                <div class="modal-body p-4">
                    <form action="#" method="post">
                       <div class="form-floating mb-3" >
                           <input type="text" name="name"  class="form-control" id="clientNameFloat" placeholder=""/>
                           <label for="studentNameFloat"> Sujet de rendez-vous</label>
                           <span class="error-feedback" >  </span>
          
                       </div>
                        <div class="form-floating mb-3" >
                           <input type="text" name="date" class="form-control" id="clientNameFloat" placeholder=""/>
                           <label for="studentNameFloat"> Date</label>
                           <span class="error-feedback" >  </span>
          
                       </div>
                        <div class="form-floating mb-3">
                           <input type="email" name="email" class="form-control" id="clientEmailFloat" placeholder=""/>
                           <label for="clientEmailFloat"> Heure</label>
                              <span class="error-feedback" >  </span>
                       </div>
                      
                       <hr class="bg-success">
                       <div class="d-grid gap-2">
                           <button class="btn btn-success">Réserver</button>
                      
                       </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
	</div>
</div> 

        <!--Formulaire de connection  -->
      <div class="bg-modal"> 
	<div class="modal-contents">
		  <div id="overlay" v-if="showconnectModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title text-success">Connectez-vous</h5>
                 <button aria-hidden="true" @click="connectModalDialog(false)"><FIcons :icon="['fas','times']"/></button>
                </div>
                <div class="modal-body p-4">
                    <form action="#" method="post">
                       <div class="form-floating mb-3" >
                           <input type="text" name="name"  class="form-control" id="clientNameFloat" placeholder=""/>
                           <label for="studentNameFloat"> Référence</label>
                           <span class="error-feedback"></span>
                       </div>
                       <hr class="bg-success">
                       <div class="d-grid gap-2">
                           <button class="btn btn-success">Envoyer</button>
                        
                      
                       </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
	</div>
</div> 



 








<div class="card-group">
  <div class="card">
    <img src="../assets/ordonnance.svg" class="card-img-top" alt="">
    <div class="card-body">
      <h3 class="card-title">Flexibilité de Gestion</h3>
      <p class="card-text">
Grâce à DENTISTIQ vous pouvez consulter les fiches patients et avoir un aperçu des RDV <br>des consultations, des imageries, des ordonnances et de la situation financière de chaque patient.
</p>
    </div>
  </div>

  <div class="card">
    <img src="../assets/treatment.svg" style="hight=300px" class="card-img-top" alt="">
    <div class="card-body">
      <h3 class="card-title">Accès Instantané</h3>
      <p class="card-text">
DENTISTIQ vous permet de suivre chaque détail de votre activité professionnelle depuis votre Smartphone, Tablette ou Ordinateur à tout moment.</p>
      
    </div>
  </div>

  <div class="card">
    <img src="../assets/security.svg"  class="card-img-top" alt="">
    <div class="card-body">
      <h3 class="card-title">Vision détaillée</h3>
      <p class="card-text">
DENTISTIQ met à votre disposition un Tableau de Bord qui vous permet d'avoir un aperçu global et visuel sur les chiffres de votre Cabinet ou Clinique dentaire.</p>
      
    </div>
  </div>
</div> 


 























  <FooterView/>      
</div>

</template>
    


//  <script>
//  import { useVuelidate } from "@vuelidate/core";
// import {required, date, minLength } from "@vuelidate/validators";
import FooterView from '../components/FooterView';
// import axios from "axios";

export default {
  name: 'HomePageView',
   components : {
      FooterView
     },
 data(){
   return {
     showRDVModal: false,
     showconnectModal: false,
   };
 },
 methods : {
   rdvModalDialog(val){
     this.showRDVModal = val ;
   },
   connectModalDialog(val){
     this.showconnectModal = val ;
   },

 addModalDialog(val){ 
             this.showAddModal = val;
         },
            UpdateModalDialog(val){ 
             this.showUpdateModal = val;
         },
            deleteModalDialog(val){ 
             this.showDeleteModal = val;
         },
            deleteAllModalDialog(val){
             this.showDeleteAllModal = val;
         },
        //  async getRdvData(){
        //    let res = await axios.get("http://localhost/brief6/brief6/src/API/RDV.php?action=read");
        //    const restData = res.data;
        //    if(res.status == 200){
        //      if(restData.error)
        //    }
        //  },
         addNewRdv(){
          this.v$.newRdv.$validate();
          if(!this.v$.newRdv.$error){
              console.log("Ajouter un nouveau Rdv  : valide avec Successe");
          }else{
                console.log("Ajouter un nouveau Rdv : non valide");
          }
         },
          UpdateRdv(){
          this.v$.currentRdv.$validate();
          if(!this.v$.currentRdv.$error){
              console.log("modifier Rdv : valide avec Successe");
          }else{
                console.log("modifier Rdv : non valide");
          }
         },
 },
};


 </script>   



<style scoped>
.home{
    background-color: cadetblue;
}
.home .container p{
  margin-top:150px;
}
.float-start{
  margin-left: 100px;
}
.col-lg-12{
  margin-bottom: 10px;
}
#overlay{
     position: fixed;
     top: 0;
     bottom: 0;
     left: 0;
     right: 0;
     background-color:rgb(0 0 0 / 47%);
 }

.card-g{
     height: 60vh !important ; 
 }
 .card-img-top{
     height: 50%;
 }

</style>





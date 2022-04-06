<template>
  <div>
    <section class="container d-flex">
         <p>DENTISTIQ intègre un système de prise de rendez-vous en ligne<br> simple et rapide, accessible 24h/24 et 7j/7 pour vos patients.<br> Nul besoin d’une solution externe en parallèle.<br>Saisie complète des informations sur le patient dans un seul endroit. <br> recherche ou modification de ces dernier.<br> 
         Une prise de rendez-vous simplifiée et
        sécurisée avec votre chirugien-dentiste.<br>
       </p>
        <img src="../assets/drdraw.png" class="rounded float-end" alt="#" style="width:500px ;"> 
     </section>
    <div class="card-group">
  <div class="card card-g">
    <img src="../assets/online.svg" class="card-img-top" alt="" style="height=5vh">
    <div class="card-body">
      <h3 class="card-title">Flexibilité de Gestion</h3>
      <p class="card-text">
Grâce à DENTISTIQ vous pouvez consulter les fiches patients et avoir un aperçu des RDV <br>des consultations, des imageries, des ordonnances et de la situation financière de chaque patient.
</p>
      
    </div>
  </div>
  <div class="card card-g">
    <img src="../assets/patient.svg" style="hight=300px" class="card-img-top" alt="">
    <div class="card-body">
      <h3 class="card-title">Accès Instantané</h3>
      <p class="card-text">
DENTISTIQ vous permet de suivre chaque détail de votre activité professionnelle depuis votre Smartphone, Tablette ou Ordinateur à tout moment.</p>
      
    </div>
  </div>
  <div class="card card-g">
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


<script>
import FooterView from '../components/FooterView'

export default {
  name: 'AproposView',
   components : {
       FooterView
     },
 
};


 </script>   


 <style scoped>
 
 .card-g{
     height: 60vh !important ; 
 }
 .card-img-top{
     height: 50%;
 }
 
 </style>
<template>
  <div>
          <!-- <img src="../assets/booking-image.png" class="rounded float-end" alt="#" style="width:100% ;"> -->
          <!-- <p class="text-center">DENTISTIQ met à votre disposition un Tableau de Bord qui vous permet<br> d'avoir un aperçu global et visuel sur les chiffres de votre Cabinet ou Clinique dentaire.

</p> -->

<div class="container d-flex" style=" left:50% ">
  <div id="overlay">
            <div class="modal-dialog">
                <div class="modal-content" style="width:450px; height:90vh;">
                    <div class="modal-header">
                    <h5 class="modal-title text-success" style="margin-left:130px">Créer un compte</h5>
                     <!-- <button aria-hidden="true"><FIcons :icon="['fas','times']"/></button> -->
                </div>
                     
                <div class="modal-body p-4">
                    <form action="#" method="post" @click.prevent>
                       <div class="form-floating mb-3" >
                           <input type="text" class="form-control" id="clientNameFloat" placeholder="saida"/>
                           <label for="clientNameFloat"><FIcons :icon="['far','user']"/>  Nom</label>
                           <span class="error-feedback" >  </span>
          
                       </div>
                        <div class="form-floating mb-3" >
                           <input type="text" class="form-control" id="clientNameFloat" placeholder="saida"/>
                           <label for="clientNameFloat"> <FIcons :icon="['far','user']"/>  Prénom</label>
                           <span class="error-feedback"></span>
          
                       </div>
                        <div class="form-floating mb-3">
                           <input type="email" class="form-control" id="clientEmailFloat" placeholder="saida"/>
                           <label for="clientEmailFloat"> <FIcons :icon="['far','envelope']"/> Email</label>
                              <span class="error-feedback" >  </span>
                       </div>
                        <div class="form-floating mb-3">
                           <input type="tel" class="form-control" id="clientAgeFloat" placeholder="saida" />
                           <label for="clientAgeFloat"> <FIcons :icon="['far','user']"/> Age</label>
                              <span class="error-feedback">  </span>
                       </div>
                       <div class="form-floating mb-3">
                           <input type="tel" class="form-control" id="clientPhoneFloat" placeholder="saida" />
                           <label for="clientPhoneFloat"> <FIcons :icon="['fas','phone']"/> Tél</label>
                              <span class="error-feedback">  </span>
                       </div>
                       <hr class="bg-success">
                       <div class="d-grid gap-2">
                           <button class="btn btn-success" >Envoyer</button>
                      
                       </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
     

        <img src="../assets/drdraw.png" class="rounded float-end shadow-lg p-6 " alt="#" style="width:650px; height:87vh; margin-top:35px; padding-left:50px;">
  </div>     
  </div>
</template>


<script>


export default {
  name: 'SinscrireView',
   components : {
       
     },
 
};


 </script>   
 

 <style scoped>
 
 
 </style>
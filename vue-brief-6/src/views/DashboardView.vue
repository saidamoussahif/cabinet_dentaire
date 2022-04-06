<template>


<div>
   <!-- show RDV Details : Tables-->
        <table class="table table-border table-striped caption-top ">
     
            <thead>
                <tr class="bg-success text-align text-center">
                    <th> <FIcons :icon="['fas','id-badge']"/> ID</th>
                     <th> <FIcons :icon="['fas','user']"/> Sujet_RDV</th>
                      <th> <FIcons :icon="['fas','date']"/> Date</th>
                       <th> <FIcons :icon="['fas','time']"/> Heure</th>
                        <th> <FIcons :icon="['fas','cog']"/> Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>1</td>
                    <td>Blanchissement</td>
                    <td>4-04-2022</td>
                    <td>12:00</td>
                    <td>
                        <button class="btn btn-danger"  @click="deleteModalDialog(true)">
                            <FIcons :icon="['fas','user-times']"/>Supprimer</button>
                            
                            &nbsp;

                              <button class="btn btn-warning" @click="UpdateModalDialog(true)">
                             <FIcons :icon="['fas','user-edit']"/> Modifier
            </button>
                    </td>   
                </tr>
                <tr class="text-center">
                    <td>1</td>
                    <td>Saida Moussahif</td>
                    <td>moussahifsaida@gmail.com</td>
                    <td>675427389</td>
                    <td>
                        <button class="btn btn-danger" @click="deleteModalDialog(true)">
                            <FIcons :icon="['fas','user-times']"/>Supprimer</button>

                            &nbsp;

                        <button class="btn btn-warning" @click="UpdateModalDialog(true)">
                            <FIcons :icon="['fas','user-edit']"/>Modifier</button>
                    </td>   
                </tr>
               
            </tbody>
        </table>
</div>










</template>

    <script> 
    // import { ValidationError } from "webpack"
    import { useVuelidate } from "@vuelidate/core";
    import {required, date, minLength } from "@vuelidate/validators";

export default {
  name: "DashboardView",
  data(){
      return{
          v$ : useVuelidate(),
           RdvData:[],
            showAddModal: false,
            showUpdateModal: false,
            showDeleteModal: false,
            showDeleteAllModal: false,
            newRdv: {
                Sujet_RDV:"",
                date:"",
                heure:"",
      },
       currentRdv: {},
  };
 
},
Validations(){
    return{
        newRdv : {
                Sujet_RDV:{required, minLength: minLength(5)},
                date: {required, date},
                heure: {required, minLength: minLength(10)},
        },
        currentStudent : {
                     Sujet_RDV: {required, minLength: minLength(5)},
                     date: {required, date},
                     heure: {required, minLength: minLength(10)},
                 },
    };
},
        methods: {
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
                addNewRdv(){
                this.v$.newRdv.$validate();
                if(!this.v$.newRdv.$error){
                    console.log("Add New Rdv : validated Successfully");
                }else{
                        console.log("Add New Rdv : not validated");
                }
                },
                UpdateRdv(){
                this.v$.currentRdv.$validate();
                if(!this.v$.currentRdv.$error){
                    console.log("Update Rdv : validated Successfully");
                }else{
                        console.log("Update Rdv : not validated");
                }
                },
                },
        };


 </script> 

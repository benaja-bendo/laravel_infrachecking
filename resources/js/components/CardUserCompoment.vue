<template>
    <div class="container">
        <h2>{{titre}}</h2>
        <div class="row">
            <div class="col-md-8">
                <info-user-component v-bind:utilisateur="utilisateur"></info-user-component>
            </div>
            <div class="col-md-4">
                <liste-user-component @data="change"></liste-user-component>
            </div>
        </div>
    </div>
</template>

<script>
    // import list-user-component from './';
 export default {
     name:'card-user',
     data(){
        return{
            titre:'Tous les utilisateurs',
            utilisateur:{}
        }
     },
     methods:{
         change(variable){
             this.utilisateur= variable;
         }
     }
 }
</script>

<style>

</style>

<template>
    <div>
        <div class="card">
            <div class="card-header">Information sur l'utilisateur</div>
            <div class="d-flex justify-content-end mt-3">
                <a class="btn btn-primary mr-3" href="">Exporter en Excel</a>
                <a class="btn btn-primary mr-3" href="">Exporter en PDF</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <p><img :src="utilisateur.image" width="90" height="90"></p>
                        <p>{{utilisateur.name }}</p>
                        <p>{{ utilisateur.adresse }}</p>
                        <p>{{ utilisateur.tel }}</p>
                        <p>{{ utilisateur.email }}</p>
                    </div>
                    <table-presence-component v-bind:id="id"></table-presence-component>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name:'info-user',
        data(){
            return{
                nom:'le nom',
                adresse:"l'adresse",
                tel:'numero de telephone',
                email:'email',
                id:''
            }
        },
        props:['utilisateur']
    }
</script>
<style scope>
    .hiden{
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        /*text-align:center;*/
    }
</style>

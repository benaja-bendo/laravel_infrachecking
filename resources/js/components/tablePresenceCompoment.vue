<template>
    <div class="col-md-8">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Mois</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
                <option selected>choisir...</option>
                <option value="1">Janvier</option>
                <option value="2">Fevrier</option>
                <option value="3">Mars</option>
                <option value="3">Avril</option>
                <option value="3">Mai</option>
                <option value="3">Juin</option>
                <option value="3">Juillet</option>
                <option value="3">Aout</option>
                <option value="3">Septembre</option>
                <option value="3">Octobre</option>
                <option value="3">Novembre</option>
                <option value="3">Decembre</option>
            </select>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">arriver</th>
                <th scope="col">début-pause</th>
                <th scope="col">fin-pause</th>
                <th scope="col">Depart</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">01/01/20</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                utilisateur:''
            }
        },
        methods:{

        },
        props:['id']
    }
</script>

<style>

</style>

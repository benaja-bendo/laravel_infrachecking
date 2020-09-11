<template>
    <div>
        <div class="d-flex justify-content-end mb-4">
            <input @keyup="searchUsers" v-model="q" class="form-control mr-sm-2" type="search" placeholder="Search user"
                   aria-label="Search">
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">tel</th>
                <th scope="col">action</th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="utilisateur in utilisateurs" :key="utilisateur.id">
                <th scope="row">{{ utilisateur.name }}</th>
                <td>{{ utilisateur.tel }}</td>
                <td>
                    <button @click="envoie(utilisateur)" class="btn-info">voir</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                utilisateurs: {},
                q:'',
            }
        },
        created() {
            axios.get('http://192.168.100.42:80/users/json')
                .then(Response => this.utilisateurs = Response.data)
                .catch(Error => console.log(Error))
        },
        methods:{
            searchUsers(){
                if (this.q.length > 0){
                    axios.get('http://192.168.100.42:80/users/json/' + this.q)
                        .then(Response => this.utilisateurs = Response.data)
                        .catch(Error => console.log(Error))

                }else{
                    axios.get('http://192.168.100.42:80/users/json/')
                        .then(Response => this.utilisateurs = Response.data)
                        .catch(Error => console.log(Error))
                }
            },
            envoie:function(utilisateur){
                this.$emit('data',utilisateur);
            }

        }

    }

</script>

<style></style>

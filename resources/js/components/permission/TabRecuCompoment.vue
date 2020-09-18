<template>
    <div>
        <div :key="permissions.id" v-for="permission in permissions" class="h_card card mb-3">
            <h5 class="card-title">{{ permission.name }} {{ permission.prenom }}</h5>
            {{ permission.crennaux }} | {{ permission.date_de_pernission }}
            <button @click="envoyer(permission)" class="btn-info">voir</button>
        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                permissions:{}
            }
        },
        created() {
            axios.get('http://127.0.0.1:8000/permissions/json')
                .then(Response => this.permissions = Response.data)
                .catch(Error => console.log(Error));
        },
        methods:{
            envoyer:function (permission) {
                this.$emit('envoyerData',permission);
            }
        }
    }
</script>

<style scoped>
    .h_card {
        padding: 0.5rem;
        cursor: pointer;
        border-color: #1b4b72;
    }
</style>

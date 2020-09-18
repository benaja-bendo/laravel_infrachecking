<template>
    <div>
        <div :key="permissions.id" v-for="permission in permissions" class="h_card card mb-3">
            <h5 class="card-title">{{ permission.name }} {{ permission.prenom }} |
                <span class="badge-info">{{ permission.reponse_de_permission }}</span></h5>
            {{ permission.crennaux }}/{{ permission.date_de_pernission }}
            <p>{{ permission.commentaire }}</p>
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
        methods:{

        },
        created() {
            axios.get('http://127.0.0.1:8000/permissions/jsonH/')
                .then(Response => this.permissions = Response.data)
                .catch(Error => console.log(Error))
        }
    }
</script>

<style scoped>
    .h_card {
        padding: 0.5rem;
        cursor: pointer;
    }
</style>

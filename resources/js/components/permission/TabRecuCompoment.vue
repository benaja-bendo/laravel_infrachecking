<template>
    <div>
        <div class="h_card card">
            <h5 class="card-title">Nom du prof</h5>
            crennaux | Date de permission
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {}
        },
        created() {
            axios.get('http://127.0.0.1:8000/users/json')
                .then(Response => this.utilisateurs = Response.data)
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

<template>
    <div>
        <div class="h_card card" v-if="isVisible">
            <h5 class="card-title">Nom du prof | <span class="badge-info">accepter</span></h5>
            crennaux | Date de permission
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isVisible:false,
            }
        }
    }
</script>

<style scoped>
    .h_card {
        padding: 0.5rem;
        cursor: pointer;
    }
</style>

<template>
    <div>
        <div class="card" v-if="isVisible">
            <div class="card-body">
                <h5 class="card-title">{{ recu.name }} {{ recu.prenom }}</h5>
                <p class="card-text">{{recu.motif}}</p>
                <p>{{ recu.crennaux }} | {{ recu.date_de_pernission }}</p>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                isVisible: true,
            }
        },
        props: ['recu'],
        methods:{


        },
        updated() {
            console.log('enfant a ete maj');
            this.isVisible = true;
        }
    }
</script>


<style scoped>

</style>

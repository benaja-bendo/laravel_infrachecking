<template>
    <div>
        <div class="card" v-if="isVisible">
            <div class="card-body">
                <h5 class="card-title">Nom du prof</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <p>crennaux | Date de permission</p>
            </div>
        </div>
    </div>
</template>

<script>
    import {bus} from '../../app'

    export default {
        data() {
            return {
                isVisible: true,
            }
        },
        props: ['permission'],
        methods:{

        }
    }
</script>


<style scoped>

</style>

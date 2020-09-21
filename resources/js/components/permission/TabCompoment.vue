<template>
    <tabs>
        <tab title="Reçu">
            <tabRecu-component @envoyerData="save"></tabRecu-component>
        </tab>
        <tab title="Historique">
            <tabHistory-component></tabHistory-component>
        </tab>
    </tabs>
</template>

<script>
    import {Tabs, Tab} from 'vue-slim-tabs'

    export default {
        data(){
            return{
                permission:{},
            }
        },
        components: {
            Tabs, Tab
        },
        props: {},

        methods: {
            save(variable) {
                console.log(variable);
                this.permission= variable;
                this.$emit('renvoyer',this.permission);
            }
        },



    }
</script>

<style src="vue-slim-tabs/themes/default.css">
    /*ul{*/
    /*    display: flex;*/
    /*    list-style: none;*/
    /*}*/
    /*ul li{*/
    /*    padding: 0 9px;*/
    /*}*/

</style>

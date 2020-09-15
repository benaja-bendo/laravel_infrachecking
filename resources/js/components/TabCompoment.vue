<template>
    <tabs>
        <tab title="Reçu">
            Liste des permissions reçu
        </tab>
        <tab title="Historique">
            Liste des historiques
        </tab>
    </tabs>
</template>

<script>
    import { Tabs, Tab } from 'vue-slim-tabs'

    export default {
        components: {
            Tabs, Tab
        }
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

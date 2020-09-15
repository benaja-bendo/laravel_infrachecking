<template>
    <tabs>
        <tab title="Reçu">
            <tabRecu-component></tabRecu-component>
        </tab>
        <tab title="Historique">
            <tabHistory-component></tabHistory-component>
        </tab>
    </tabs>
</template>

<script>
    import { Tabs, Tab } from 'vue-slim-tabs'

    export default {
        components: {
            Tabs, Tab
        },
        props:{

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

<template>
    <div class="container">
        <div class="permission">
            <div class="navigation" style="height: 500px;">
                <div class="nav_onglet">
                </div>
                <div class="nav_content">
                    <tab-component @renvoyer="save"></tab-component>
                </div>
            </div>

            <div class="content">
                <tabcontent-component v-bind:recu="permission"></tabcontent-component>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                permission: '',

            }
        },
        methods: {
            save(variable) {
                this.permission = variable;
            }
        }
    }
</script>

<style>

</style>

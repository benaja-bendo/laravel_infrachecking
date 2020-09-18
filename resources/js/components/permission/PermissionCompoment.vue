<template>
    <div class="container">
        <div class="permission">
            <div class="navigation">
                <div class="nav_onglet">
                </div>
                <div class="nav_content">
                    <tab-component @renvoyer="save"></tab-component>
                </div>
            </div>

            <div class="content">
                <div class="content_item">
                    <tabcontent-component v-bind:recu="permission"></tabcontent-component>
                </div>
                <div class="content_footer">
                    <h4>traitement de la permission</h4>
                    <div class="form-group">
                        <label for="message">Méssage(facultatif)</label>
                        <textarea id="message" class="form-control"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-primary">accepter</button>
                        <button class="btn btn-danger">refuser</button>
                    </div>
                </div>
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

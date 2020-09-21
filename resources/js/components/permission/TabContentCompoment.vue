<template>
    <div>
        <div class="content_item">
            <div class="card" v-if="isVisible">
                <div class="card-body">
                    <h5 class="card-title">{{ recu.name }} {{ recu.prenom }}</h5>
                    <p class="card-text">{{recu.motif}}</p>
                    <p>{{ recu.crennaux }} | {{ recu.date_de_pernission }}</p>
                </div>
            </div>
        </div>
        <div class="content_footer">
            <form>
                <h4>traitement de la permission</h4>
                <div class="form-group">
                    <label for="message">Méssage(facultatif)</label>
                    <textarea id="message" class="form-control"></textarea>
                </div>
                <div>
                    <button class="btn btn-primary" @click.prevent="accepter">accepter</button>
                    <button class="btn btn-danger" @click.prevent="refuser">refuser</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                isVisible: true,
                permission_id:'',
                message:'',
                reponse:''
            }
        },
        props: ['recu'],
        methods: {
            accepter(){
                this.permission_id = this.recu.id;
                this.message = document.querySelector('#message').value;
                this.reponse  = 'oui';
                axios.patch('http://127.0.0.1:8000/permissions/'+ this.permission_id +'/'+this.message+'/'+this.reponse,{
                    permission_id: this.permission_id,
                    message:this.message,
                    reponse:this.reponse
                }).then(
                    response => console.log(response)
                ).catch(error => console.log(error))
                document.querySelector('#message').value =''
            },
            refuser(){
                // let message = document.querySelector('#message');
                // let reponse = 'non';
                // axios.post('http://127.0.0.1:8000/permissions/json')
                //     .then(Response => this.permissions = Response.data)
                //     .catch(Error => console.log(Error));
                // console.log(message.value,reponse)
            }
        },
        updated() {
            console.log('enfant a ete maj');
            this.isVisible = true;
        }

    }
</script>


<style scoped>

</style>

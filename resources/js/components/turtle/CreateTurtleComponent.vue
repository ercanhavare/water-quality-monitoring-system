<template>
    <div>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <form @submit.prevent="save" @keydown="form.onKeydown($event)">
                        <div class="form-group">
                            <label for="turtleName">Turtle Name</label>
                            <input type="turtleName" v-model="form.turtleName" class="form-control" id="turtleName" aria-describedby="turtleNameHelp" placeholder="Enter Turtle Name">
                            <small id="turtleNameHelp" class="form-text text-muted">Please enter turtle device name</small>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" v-model="form.password" class="form-control" id="inputPassword" aria-describedby="psswrdHelp" placeholder="Password">
                            <small id="psswrdHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
                        </div>
                        <button :disabled="form.busy" type="submit" class="btn btn-primary"
                                style="float:right;">Buy a Turtle
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CreateTurtleComponent",
        props:['userid'],
        data(){
            return{
                user_id:JSON.parse(this.userid),
                form: new Form({
                    turtleName: '',
                    password:'',
                }),
            }
        },
        methods:{
            save() {
                // Submit the form via a POST request
                this.form.post('/users/'+this.user_id+'/store-new-device')
                    .then(() => {
                        //console.log(data);
                        window.location.href = "/my-devices"
                    }).catch(() => {
                    alert("İşlem sırasında hata oluştu.");
                })
            },
        },
    }
</script>

<style scoped>

</style>
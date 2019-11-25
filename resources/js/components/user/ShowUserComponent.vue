<template>
    <div>
        <div class="container">
            <div class="card">
                <div class="card-header text-right">
                    <span><a href="">Edit Profile</a></span>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Full Name</th>
                            <td>{{user.full_name}}</td>
                        </tr>
                        <tr>
                            <th>E-mail</th>
                            <td>{{user.email}}</td>
                        </tr>
                        <tr>
                            <th>Mobile Phone</th>
                            <td>{{user.mobile_phone}}</td>
                        </tr>
                        <tr>
                            <th>Addres</th>
                            <td>{{user.address}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{status}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ShowUserComponent",
        props: ['user'],
        data() {
            return {
                user_info: this.user,
                status:"",
            }
        },
        methods: {

        },
        mounted() {
            console.log(this.user_info)
            if(this.user_info.status==1)
                this.status="Active"
            else
                this.status="Passive"
        }
    }
</script>

<style scoped>

</style>
<template xmlns:v-slot="http://www.w3.org/1999/XSL/Transform">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Users</h3>

                    <div class="card-tools">
                        <a href="/users/create" class="btn btn-success"><i class="fas fa-user-plus fa-fw"></i> Add New
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <v-client-table :data="users" :columns="columns" :options="options">
                        <template v-slot:ops="user">
                            <a class="fa fa-edit" :href="edit(user.row.id)"> Edit </a> |
                            <a class="fa fa-eye" :href="show(user.row.id)"> Show </a> |
                            <a class="fa fa-trash" :href="remove(user.row.id)"> Delete </a>
                        </template>
                    </v-client-table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!--/////////////////////////////////////////////////////////////////////////////////////////////-->
    </div>
</template>

<script>
    export default {
        name: "UsersComponent",
        props: ['usersdata'],
        data() {
            return {
                // table
                users: JSON.parse(this.usersdata),
                columns: ['id', 'name', 'surname', 'email', 'type', 'ops'],
                options: {
                    headings: {
                        name: 'Ad',
                        surname: 'Ad',
                        email: 'Ad',
                        type: 'Tür',
                        ops: '',
                    },
                }
            }
        },
        methods: {
            createUser() {
                /* this.form.post('users')*/

            },
            edit: function (id) {
                return '/users/' + id + '/edit';
            },
            show: function (id) {
                return '/users/' + id;
            },
            remove: function (id) {
                return '/users/' + id + '/delete';
            }
        },
        mounted() {
            console.log(this.usersdata)
        }
    }
</script>

<style scoped>

</style>
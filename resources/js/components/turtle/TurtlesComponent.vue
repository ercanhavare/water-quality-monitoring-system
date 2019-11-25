<template xmlns:v-slot="http://www.w3.org/1999/XSL/Transform" xmlns:href="http://www.w3.org/1999/xhtml">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Turtles</h3>

                    <div class="card-tools">
                        <a :href="'/users/'+my_user_id+'/add-new-device'" class="btn btn-success"><i
                                class="fas fa-user-plus fa-fw"></i> Add New </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <v-client-table :data="turtles" :columns="columns" :options="options">
                        <template v-slot:ops="turtle">
                            <a class="fa fa-edit" :href="edit(turtle.row.id)"> Edit </a> |
                            <a class="fa fa-eye" :href="show(turtle.row.id)"> Show </a>
                            <a class="fa fa-trash" :href="remove(turtle.row.id)"> Delete </a>
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
        name: "TurtlesComponent",
        props: ['turtledata', 'userid'],
        data() {
            return {
                // table
                turtles: JSON.parse(this.turtledata),
                my_user_id: JSON.parse(this.userid),
                columns: ['id', 'name', 'write_api_key', 'read_api_key', 'status', 'ops'],
                options: {
                    headings: {
                        name: 'Turtle',
                        status: 'Status',
                        ops: '',
                    },
                },
            }
        },
        methods: {
            createTurtle() {
                /* this.form.post('users')*/

            },
            edit: function (id) {
                return '/turtles/' + id + '/edit';
            },
            show: function (id) {
                return '/turtles/' + id + '/show';
            },
            remove: function (id) {
                return '/turtles/' + id;
            }
        },
        created() {
        },
        mounted() {
            console.log(this.turtles)
        }
    }
</script>

<style scoped>

</style>
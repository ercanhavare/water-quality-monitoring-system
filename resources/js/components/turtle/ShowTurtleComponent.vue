<template>
    <div>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <span><a :href="'/turtle-new-sensors-data/'+turtle_info.turtle_key">Get Sensors Data</a></span>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Turtle Name</th>
                            <td>{{turtle_info.name}}</td>
                        </tr>
                        <tr>
                            <th>Turtle Key</th>
                            <td>{{turtle_info.turtle_key}}</td>
                        </tr>
                        <tr>
                            <th>Write API Key</th>
                            <td>{{turtle_info.write_api_key}}</td>
                        </tr>
                        <tr>
                            <th>Read API Key</th>
                            <td>{{turtle_info.read_api_key}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{turtle_info.status}}</td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{turtle_info.created_at}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ShowTurtleComponent",
        props:["turtle_data"],
        data(){
          return{
              turtle_info:this.turtle_data,
          }
        },
        methods:{

        },
        beforeMount() {

        }
    }
</script>

<style scoped>

</style>
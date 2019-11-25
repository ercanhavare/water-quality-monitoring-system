<template>
    <div>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <form @submit.prevent="updateUser" @keydown="form.onKeydown($event)">
                        <div class="form-group col-md-6">
                            <input v-model="form.full_name" type="text" name="full_name" placeholder="Full Name"
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('full_name') }">
                            <has-error :form="form" field="full_name"></has-error>
                        </div>

                        <div class="form-group col-md-6">
                            <input v-model="form.email" type="text" name="email" placeholder="E-mail Address"
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                            <has-error :form="form" field="email"></has-error>
                        </div>

                        <div class="form-group col-md-6">
                            <input v-model="form.mobile_phone" type="text" name="mobile_phone"
                                   placeholder="Mobile Phone"
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('mobile_phone') }">
                            <has-error :form="form" field="mobile_phone"></has-error>
                        </div>

                        <div class="form-group col-md-6">
                            <textarea v-model="form.address" name="address" id="address" placeholder="Address"
                                      class="form-control"
                                      :class="{ 'is-invalid': form.errors.has('address') }"></textarea>
                            <has-error :form="form" field="address"></has-error>
                        </div>

                        <div class="form-group col-md-6">
                            <input v-model="form.password" type="password" name="password" id="password"
                                   placeholder="Password"
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                            <has-error :form="form" field="password"></has-error>
                        </div>

                        <div class="form-group col-md-6">
                            <input v-model="form.rpassword" type="password" name="rpassword" id="rpassword"
                                   placeholder="Rtype Password"
                                   class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                            <has-error :form="form" field="rpassword"></has-error>
                        </div>

                        <button :disabled="form.busy" type="submit" class="btn btn-primary ml-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "EditUserComponent",
        props: ['user'],
        data() {
            return {
                user: JSON.parse(this.user),
                form: new Form({
                    full_name: '',
                    email: '',
                    mobile_phone: '',
                    address: '',
                    password: '',
                    rpassword: ''
                }),
            }
        },
        methods: {
            updateUser() {
                // vform
                this.form.put('api/user/' + this.user.id)
                    .then(() => {
                        //console.log(data);
                        window.location.href = "/user/" + this.user.id + "/profile"
                    }).catch(() => {
                    alert("İşlem sırasında hata oluştu.");
                })
            },
        },
    }
</script>

<style scoped>

</style>
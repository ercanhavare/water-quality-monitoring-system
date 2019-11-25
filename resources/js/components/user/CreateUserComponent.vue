<template>
    <div>
        <form method="POST" action="">
            <div class="card-group col-md-12">
                <div class="card pt-4 pb-4">
                    <div class="card-body">

                        <div class="input-group mb-3 col-sm-12">
                            <input id="name" type="text" class="form-control"
                                   name="name" placeholder="Full name" required autofocus>
                            <div class="input-group-append">
                                <span class="fa fa-user input-group-text"></span>
                            </div>
                        </div>

                        <div class="input-group mb-3 col-sm-12">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>

                            <div class="input-group-append">
                                <span class="fa fa-envelope input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group mb-3 col-sm-12">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password"
                                   required>

                            <div class="input-group-append">
                                <span class="fa fa-lock input-group-text"></span>
                            </div>
                        </div>
                        <div class="input-group mb-3 col-sm-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                   placeholder="Rtype password" required>

                            <div class="input-group-append">
                                <span class="fa fa-lock input-group-text"></span>
                            </div>
                        </div>

                        <!-- /.col -->
                    </div><!-- /.card-body -->
                </div>
                <div class="card pt-4 pb-4">
                    <div class="card-body">
                        <div class="input-group mb-3 col-sm-12">
                            <input id="mobile_phone" type="tel" class="form-control" name="mobile_phone"
                                   placeholder="Mobile Phone" required>

                            <div class="input-group-append">
                                <span class="fa fa-phone input-group-text"></span>
                            </div>
                        </div>

                        <div class="input-group mb-3 col-sm-12">

                            <select name="country_id" id="country_id" class="form-control" required>
                                <option value="1">Turkey</option>
                                <option value="2">Cyprus</option>
                                <option value="3">England</option>
                            </select>

                            <div class="input-group-append">
                                <span class="fa fa-city input-group-text"></span>
                            </div>
                        </div>

                        <div class="input-group mb-3 col-sm-12">
                            <input id="address" type="text" class="form-control" name="address" placeholder="Address"
                                   required>
                            <div class="input-group-append">
                                <span class="fa fa-address-book input-group-text"></span>
                            </div>
                        </div>

                        <div class="input-group mb-3 col-sm-12">
                            <input id="postcode" type="text" class="form-control" name="postcode" placeholder="Postcode"
                                   required>
                            <div class="input-group-append">
                                <span class="fa fa-address-book input-group-text"></span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary btn-block">
                                Save
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "CreateUserComponent"
    }
</script>

<style scoped>

</style>
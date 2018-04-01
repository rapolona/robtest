<template>
    <transition name="fade">
    <div class="row">
        <div class="col-md-6">
            <h2 class="sub-header">Users Form</h2>
        </div>
        <div class="col-md-6 text-right">
            <button class="btn btn-primary" @click="backToList">Back to User List</button>
        </div>
        <div class="col-md-12">
            <form role="form">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group" :class="{ 'control' : true }">
                            <input type="text" v-validate="'required|alpha'" name="first_name" :class="{ 'input' : true, 'is_danger' : errors.has('first_name')}" id="first_name" class="form-control input-sm" placeholder="First Name">
                            <span v-show="errors.has('first_name')" class="help is-danger">{{ errors.first('email') }}</span>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <hr />
                </div>

                <input type="button" @click='register' value="Register" class="btn btn-info btn-block">

            </form>
        </div>
    </div>
    </transition>
</template>

<script>
    export default {
        data : function(){
            return {
                user_id : null,
                firstname : null,
                lastname: null,
                username: null,
                email : null,
                password : null,
                address : null,
                postal_code : null,
                phone_number : null
            };
        },
        created(){

        },
        methods : {
            register(){
              alert('register');
            },
            backToList(){
                this.$parent.showForm = false;
                this.$parent.showList = true;
            }
        }
    }
</script>
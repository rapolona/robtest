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
                            <input v-model="user.firstname" type="text" v-validate="'required|alpha'" name="firstname" :class="{ 'input' : true, 'is_danger' : errors.has('firstname')}" id="firstname" class="form-control input-sm" placeholder="First Name">
                            <span v-show="errors.has('firstname')" class="help is-danger">{{ errors.first('fristname') }}</span>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group" :class="{ 'control' : true }">
                            <input v-model="user.lastname" type="text" v-validate="'required|alpha'" name="lastname" :class="{ 'input' : true, 'is_danger' : errors.has('lastname')}" id="lastname" class="form-control input-sm" placeholder="Last Name">
                            <span v-show="errors.has('lastname')" class="help is-danger">{{ errors.first('lastname') }}</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group" :class="{ 'control' : true }">
                            <input v-model="user.email" type="text" v-validate="'required|alpha'" name="email" :class="{ 'input' : true, 'is_danger' : errors.has('email')}" id="email" class="form-control input-sm" placeholder="Email">
                            <span v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</span>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group" :class="{ 'control' : true }">
                            <input v-model="user.username" type="text" v-validate="'required|alpha'" name="username" :class="{ 'input' : true, 'is_danger' : errors.has('username')}" id="username" class="form-control input-sm" placeholder="Username">
                            <span v-show="errors.has('username')" class="help is-danger">{{ errors.first('username') }}</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input v-model="user.password" type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                        </div>
                    </div>
                </div>

                <hr />

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group" :class="{ 'control' : true }">
                            <input v-model="user.address" type="text" v-validate="'required|alpha'" name="address" :class="{ 'input' : true, 'is_danger' : errors.has('address')}" id="address" class="form-control input-sm" placeholder="Address">
                            <span v-show="errors.has('address')" class="help is-danger">{{ errors.first('address') }}</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group" :class="{ 'control' : true }">
                            <input v-model="user.postal_code" type="text"  v-validate="'required|alpha'" name="postal_code" :class="{ 'input' : true, 'is_danger' : errors.has('postal_code')}" id="postal_code" class="form-control input-sm" placeholder="Postal Code">
                            <span v-show="errors.has('postal_code')" class="help is-danger">{{ errors.first('postal_code') }}</span>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group" :class="{ 'control' : true }">
                            <input v-model="user.phone_number" type="text" v-validate="'required|alpha'" name="phone_number" :class="{ 'input' : true, 'is_danger' : errors.has('phone_number')}" id="phone_number" class="form-control input-sm" placeholder="Phone Number">
                            <span v-show="errors.has('phone_number')" class="help is-danger">{{ errors.first('phone_number') }}</span>
                        </div>
                    </div>
                </div>
                

                <input type="button" @click='submitForm' value="Register" class="btn btn-info btn-block">

            </form>
        </div>
    </div>
    </transition>
</template>

<script>
    export default {
        data : function(){
            return {
                user : {
                    id : null,
                    firstname : null,
                    lastname: null,
                    username: null,
                    email : null,
                    password : null,
                    address : null,
                    postal_code : null,
                    phone_number : null
                }
            };
        },
        created(){

        },
        methods : {
            submitForm(){
                if(this.user.id!=null && this.user.id > 0){
                    this.register();
                }else{
                    this.updateUser();
                }
            },
            register(){
                let _self = this;
                Vue.axios.post('/api/user', { this.user }).then((response) => {
                    _self.backToList();
                });
            },
            updateUser(){
                let _self = this;
                Vue.axios.update('/api/user/${this.user.id}/update', { this.user }).then((response) => {
                    _self.backToList();
                });
            },
            backToList(){
                this.$parent.showForm = false;
                this.$parent.showList = true;
            }
        }
    }
</script>
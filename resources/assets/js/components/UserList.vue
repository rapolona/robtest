<template>
    <transition name="fade">
    <div class="row">
        <div class="col-md-6">
            <h2 class="sub-header">Users List</h2>
        </div>
        <div class="col-md-6 text-right">
            <button class="btn btn-primary" @click="gotToForm">Add User</button>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th><input type="checkbox" /> </th>
                        <th>#</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th><input type="checkbox" value="1" v-model="ids" /> </th>
                        <td>1,001</td>
                        <td>Lorem</td>
                        <td>ipsum</td>
                        <td>dolor</td>
                        <td>sit</td>
                        <td>09158953507</td>
                        <td>
                            <button class="btn btn-primary">Update</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </transition>
</template>

<script>
    export default {
        data : function() {
            return {
                users : [],
                ids : [],
                id  : null
            };
        },
        created(){
            let _self =  this;
            Vue.axios.get('/api/users',  this.user, this.$parent.tokenHeader ).then((response) => {
                _self.users = response.data.data;
            });
        },
        methods : {
            gotToForm(){
                this.$parent.showForm = true;
                this.$parent.showList = false;
            },
            deleteUser(){

            },
            deleteUsers(){

            }
        }
    }
</script>
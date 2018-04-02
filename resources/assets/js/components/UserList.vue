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
                    <tr v-for="user in users">
                        <th><input type="checkbox" :value="user.id" v-model="ids" /> </th>
                        <td>{{ user.id }}</td>
                        <td>{{ user.firstname }}</td>
                        <td>{{ user.username }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.profile.address }}</td>
                        <td>{{ user.profile.phone_number }}</td>
                        <td>
                            <button :data-id="user.id" class="btn btn-primary">Update</button>
                            <button :data-id="user.id" class="btn btn-danger">Delete</button>
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
            Vue.axios.get('/api/users', {} , this.$parent.tokenHeader ).then((response) => {
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
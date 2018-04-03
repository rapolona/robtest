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
                        <th></th>
                        <th>#</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
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
                        <td>
                            <button :data-id="user.id" @click="editUser" class="btn btn-primary">Edit</button>
                            <button :data-id="user.id"  class="btn btn-danger" v-confirm="{ok : dialog => deleteUser(dialog, user.id), cancel : doNothing, message : 'Continue to delete this record?' }">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12 text-right">
            <button class="btn btn-primary"  v-confirm="{ok : dialog => deleteUsers(dialog), cancel : doNothing, message : 'Continue to delete selected records?' }">Delete Selected</button>
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
            this.fetchList();
        },
        methods : {
            fetchList(){
                let _self =  this;
                _self.users = [];
                Vue.axios.get('/api/users', {} , this.$parent.tokenHeader ).then((response) => {
                    _self.users = response.data.data;
                });
            },
            gotToForm(){
                this.$parent.showForm = true;
                this.$parent.showList = false;
            },
            editUser(event){
                this.$parent.userId = event.currentTarget.getAttribute('data-id');
                this.gotToForm();
            },
            deleteUser(dialog, id){
                Vue.axios.delete('/api/user/' + id, {} , this.$parent.tokenHeader ).then((response) => {
                    console.log(response);
                });
                dialog.close();
                this.fetchList();
            },
            deleteUsers(dialog){
                Vue.axios.delete('/api/users', {
                    ids : this.ids.join(',')
                } , this.$parent.tokenHeader ).then((response) => {
                    console.log(response);
                });
                dialog.close();
                this.fetchList();
            },
            doNothing (){
                // do nothing
            }
        }
    }
</script>
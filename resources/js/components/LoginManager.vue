<template>
    <div id="login-manager" class="container">

        <button @click="toggleLoginForm" class="btn btn-primary">LOGIN</button> <br>
        <form v-if="loginShow">
            <label for="email">EMAIL</label> <br>
            <input type="email" name="email">
        </form>
        <button class="btn btn-primary">REGISTER</button>

    </div>
    

</template>

<script>
export default {
    data: function(){
        return{
            loginShow: false,
            registerShow: false
        };
    },
    methods: {

        toggleLoginForm: function() {

            this.loginShow = !this.loginShow;
        },
    },
    mounted() {
        console.log('login');    
    },
};
</script>
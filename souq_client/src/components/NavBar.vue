<template>
    <div class="navbar">
        <span class="logo">SOUQ</span>
        <span class="navContainer">
            <span title="Ma carte" class="icon_item"><i class="fal fa-shopping-bag"></i></span>
            <span id="userSpace" v-on:click="togle_user_menu" title="Mon espace" class="icon_item"><i class="fal fa-user"></i>
                <ClientLogin v-if="token === '0x00'"/>
            </span>
            <span title="Menu" class="icon_item"><i class="fal fa-bars"></i></span>
        </span>
    </div>
</template>

<script>
import ClientLogin from "./ClientLogin";
import axios from "axios";

export default {
    data(){
        return{
            token:null
        }
    },
    name:"NavBar",
    components:{
        ClientLogin
    },
    mounted() {
        axios
            .post("http://localhost:8888/souq_serve/services/Session_Service.php")
            .then(response => (this.token = response.data))
    },
    methods:{
        togle_user_menu: function () {
            let connectionForm = document.getElementById("loginFrom");
            if (connectionForm.style.display === "none")
                connectionForm.style.display = "block";
            else
                connectionForm.style.display = "none";
        }
    }
}
</script>

<style>
    .navbar{
        width: 100%;
        height: 64px;
        position: relative;
        top: 0;
        left: 0;
        justify-content: flex-end;
        display: flex;
        flex-direction: row;
    }
    .navContainer{
        justify-content: flex-end;
        display: flex;
        flex-direction: row;
        flex-grow: 15;
    }
    .logo{
        justify-self: flex-end;
        align-self: center;
        justify-self: center;
        margin-left: 0px;
        font-size: 48px;
        flex-grow: 1;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: #e67e22;
    }
    .icon_item{
        cursor: pointer;
        align-self: center;
        justify-self: center;
        position: relative;
        padding: 20px;
        font-size: 24px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: #d35400;
    }
    .icon_item:hover{
        background-color: #d35400;
        color: #ffffff;
    }
</style>
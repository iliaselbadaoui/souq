<template>
    <div v-on:click="formEvent" class="loging_form" id="loginFrom" style="display: none;">
        <input type="email" required placeholder="Email" class="input" id="clientEmail"/>
        <input type="password" required placeholder="Mot de passe" class="input" id="clientPass"/>
        <button class="connect" v-on:click="connect" >Connecter</button>
        <div class="err" v-if="lerror" >login incorrecte</div>
    </div>
</template>

<script>
    import { mapState } from 'vuex'
    export default {
        name: "ClientLogin",
        computed:{
            ...mapState([
                'lerror'
            ])
        },
        methods:{
            formEvent:function (event) {
                event.stopPropagation();
            },
            connect:function () {
                let email = document.getElementById('clientEmail');
                let pass = document.getElementById('clientPass');
                let xhr = new XMLHttpRequest();
                let data = new FormData();

                xhr.open('POST','http://localhost:8888/souq_serve/services/Client_Service.php', true);
                data.append("op", "login");
                data.append("pass", pass.value);
                data.append("email", email.value);
                xhr.send(data);
                xhr.onreadystatechange = function () {
                    if(xhr.status === 200 && xhr.readyState === 4)
                    {
                        if(xhr.responseText === 'false')
                            this.lerror = 1;
                        else
                        {
                            return 0;
                        }
                    }
                }
            }
        }
    }
</script>

<style scoped>
.loging_form{
    width: 300px;
    height: 300px;
    position: absolute;
    top: 64px;
    right: 0;
    display: flex;
    flex-direction: column;
    background-color: #2c3e50;
    color: #ffffff;
}
.input{
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 64px;
    height: 32px;
    font-size: 16px;
    text-indent: 8px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    outline: none;
    border: 2px solid transparent;
    border-radius: 8px;
}
.input:focus{
    border-color: #e67e22;
}
.connect{
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 32px;
    background-color: #e67e22;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 16px;
    padding: 8px;
    cursor: pointer;
    color: #ffffff;
    border: none;
    border-radius: 8px;
    outline: none;
}
.err{
    width: 100%;
    text-align: center;
    position: absolute;
    bottom: 0;
    background-color: #e74c3c;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: white;
}
</style>
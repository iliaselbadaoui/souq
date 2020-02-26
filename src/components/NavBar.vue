<template>
    <div class="navbar">
        <span class="logo">SOUQ</span>
        <span class="navContainer">
            <span class="icon_item"><i class="fal fa-shopping-cart"></i></span>
            <span class="icon_item"><i class="fal fa-bars"></i></span>
        </span>
    </div>
</template>

<script>
export default {
    name:"NavBar"
}
</script>

<style>
    .navbar{
        width: 100%;
        height: 72px;
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
        margin-left: 8px;
        font-size: 48px;
        flex-grow: 1;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: #e67e22;
    }
    .icon_item{
        cursor: pointer;
        align-self: center;
        justify-self: center;
        padding: 16px;
        font-size: 32px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: #d35400;
    }
    .icon_item:hover{
        background-color: #d35400;
        color: #ffffff;
    }
</style>
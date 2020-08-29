<template>
    <div class="product" :style="{ backgroundImage: `url('${link}')` }">
        <div class="product_name"><div>{{product_name}}</div></div>
        <span class="product_price"><i class="fal fa-tag"></i> {{price}}DH</span>
        <div class="Add_SeeMore">
            <button class="seeMore flex_btn1" v-on:click="toogle_desc" title="Lire plus"><i class="fal fa-glasses-alt"></i></button>
            <button class="addToCart flex_btn1" title="Ajouter au pannier"><i class="fal fa-cart-plus"></i></button>
        </div>
        <div class="description" state="0" :id="prod_desc_id">
            <div class="description_cont">
                {{description}}
            </div>
            <div :class="get_stock_class">
                Quantity : {{quantity}}
            </div>
        </div>
    </div>
</template>

<script>
    let id = 0;
    export default {
        name: "Product",
        data(){
            let prod_desc_id = "prod_desc"+(id++);
            return{prod_desc_id};
        },
        computed:{
            get_stock_class: function () {
                let qns = "inStock";
                if(this.quantity === '0')
                    qns = "stockOut";
                return qns
            }
        },
        props:{
            price:{type:String, required:true},
            product_name:{type:String, required:true},
            link:{type:String, required:true},
            description:{type:String, default:"OUPS!"},
            quantity:{type:String}
        },
        methods:{
            toogle_desc: function(){
                let desc = document.getElementById(this.prod_desc_id);
                let others = document.getElementsByClassName("description");
                let i;
                for (i = 0; i < others.length; i++) {
                    if(others.item(i).getAttribute("state") === "1")
                    {
                        break ;
                    }
                }
                if(desc.getAttribute("state") === "0")
                {
                    if (others.item(i)){
                        others.item(i).style.display = "none";
                        others.item(i).setAttribute("state", "0");
                    }
                    desc.style.display = "block";
                    desc.setAttribute("state", "1");
                }
                else
                {
                    desc.style.display = "none";
                    desc.setAttribute("state", "0");
                }
            }
        }
    }
</script>

<style scoped>
    .product{
        width: 300px;
        height: 200px;
        position: relative;
        background-size: 300px 200px;
        background-repeat: no-repeat;
        margin: 16px;
        display: inline-block;
    }
    .product_name{
        width: 100%;
        height: 24px;
        position: absolute;
        bottom: 32px;
        z-index: 0;
        left: 0;
        background: #ffffff;
        opacity: .7;
    }
    .product_name span
    {
        position: absolute;
        z-index: 1;
        opacity: 1;
        font-family: Roboto;
        color: #000;
        font-weight: bold;
        font-size: 16px;
    }
    .product_price{
        position: absolute;
        top: 0;
        left: 0;
        background: #e67e22;
        color: white;
        padding: 4px;
        border-bottom-right-radius: 8px;
    }
    .Add_SeeMore{
        width: 100%;
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: 1;
        display: flex;
        flex-direction: row;
    }
    .flex_btn1{
        flex-grow: 1;
        display: block;
        border: none;
        height: 32px;
        font-size: 24px;
        font-weight: bold;
        outline: none;
        cursor: pointer;
    }
    .addToCart{
        background-color: #d35400;
        color: #ffffff;
    }
    .addToCart:active{
        background-color: #e67e22;
        color: #ffffff;
    }
    .seeMore{
        background-color: #2c3e50;
        color: #ffffff;
    }
    .seeMore:active{
        background-color: #34495e;
        color: #ffffff;
    }
    .description_cont
    {
        padding: 8px;
        color: white;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .description{
        position: absolute;
        left: 316px;
        z-index: 3;
        width: auto;
        max-width: 512px;
        min-width: 300px;
        height: auto;
        border-radius: 16px;
        top: 0;
        background-color: #2c3e50;
        display: none;
        flex-direction: column;
        overflow: hidden;
    }
    .product:hover description{
        display: flex;
    }
    .stockOut{
        padding: 8px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 14px;
        color: white;
        background-color: #e74c3c;
    }
    .inStock{
        padding: 8px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 14px;
        color: white;
        background-color: #16a085;
    }
</style>
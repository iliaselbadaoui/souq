<template>
    <div class="ProductList">
        <Product v-for="product in products" :quantity="product.quantity" :description="product.description" :price="product.price" :link="product.photo" :product_name="product.name" v-bind:key="product.id"/>
    </div>
</template>

<script>
    import Product from "./Product";
    import axios from "axios"
    let APIData = new FormData();
    APIData.append("op", "GetAll");
    export default {
        name: "ProductList",
        components: {Product},
        data () {
            return {
            products : null
            }
        },
        mounted() {
            axios
                .post("http://localhost:8888/souq_serve/services/Product_Service.php", APIData)
                .then(response => (this.products = response.data))
        },
        comments:{
            Product
        }
    }
</script>

<style scoped>
.ProductList{
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    padding: 16px;
    justify-content: flex-start;
}
</style>
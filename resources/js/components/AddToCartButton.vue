<template>
    <a @click.prevent="addToCart" href><i class="icon-shopping-cart2"></i> Order Now</a>
</template>
<script>
export default {
    props: {
        product: {
            required: true,
            type: Object
        }
    },

    mounted() {
        console.log(this.product);


    },
    methods: {
        async addToCart() {
            // alert("Hello Trishu");
            // alert(this.product.id)
            // return
            let response = await axios.post('/cart', {
                'product_id': this.product.id
            });
            this.$root.$emit('changeBasketCount', response.data.basket_count)

            console.log(response.data);
        }
    }



}
</script>
<style></style>
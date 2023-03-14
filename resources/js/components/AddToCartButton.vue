<template>
    <a @click.prevent="addTocart" href><i class="icon-shopping-cart2"></i> Order Now</a>
</template>
<script>
export default {
    props: {
        product: {
            required: true,
            type: Object

        }

    },
    methods: {
        async addTocart() {
            // alert('hello trishu')
            // alert(this.product.id)
            // return
            let response = await axios.post('/cart', { 'product_id': this.product.id });

            console.log(response.data);
        }
    }

}
</script>
<style></style>
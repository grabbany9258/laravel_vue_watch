<template>
    <span class="badge rounded-pill bg-warning align-top">{{ basketCount }}</span>
</template>
<script>
export default {
    // data() {
    //     return {
    //         basketCount: ''
    //     }
    // }
    props: {
        basketCount: {
            required: true
        }
    },
    mounted() {
        this.$root.$on('changeBasketCount', (newBasketCount) => {
            this.basketCount = newBasketCount
        })
    }

}
</script>
<style></style>
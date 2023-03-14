require("./bootstrap");

import { createApp } from "vue";
import axios from "axios";
// import test from "./components/test.vue";
import AddToCart from "./components/AddToCartButton.vue";
const app = createApp({});
// app.component("test", test);
app.component("add-to-cart-button", AddToCart);

app.mount("#app");

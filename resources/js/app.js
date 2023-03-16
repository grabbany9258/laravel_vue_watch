require("./bootstrap");

import { createApp } from "vue";
import axios from "axios";
// import test from "./components/test.vue";
import AddToCart from "./components/AddToCartButton.vue";
import BadgeIcon from "./components/BadgeIcon.vue";
const app = createApp({});
// app.component("test", test);
app.component("add-to-cart-button", AddToCart);
app.component("badge-icon", BadgeIcon);

app.mount("#app");

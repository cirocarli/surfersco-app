import { createApp } from "vue";
import About from "./components/About.vue";
import Carousel from "./components/Carousel.vue";
import Forms from "./components/Forms.vue";
import Home from "./components/Home.vue";
import Navbar from "./components/Navbar.vue";
import Todo from "./components/Todo.vue";
import "../css/app.css";

const app = createApp();
app.component("about", About);
app.component("carousel", Carousel);
app.component("forms", Forms);
app.component("home", Home);
app.component("navbar", Navbar);
app.component("todo", Todo);
app.mount("#app");

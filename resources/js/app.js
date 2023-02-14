// // import './bootstrap';

// import { createApp } from 'vue/dist/vue.esm-bundler';

// const Counter = {
//     data() {
//         return {
//             counter: 0,
//         };
//     },
//     mounted() {
//         setInterval(() => {
//             this.counter++;
//         }, 1000);
//     },
// };

// createApp(Counter).mount("#counter");

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";

createInertiaApp({
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
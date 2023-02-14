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

import 'vuetify/lib/styles/main.sass'				// 追加
import { createVuetify } from 'vuetify'				// 追加
// import App from './components/App.vue'				// 追加
import '@mdi/font/css/materialdesignicons.css'

// import { aliases, mdi } from 'vuetify/iconsets/mdi-svg'		// 追記
// import '@mdi/font/css/materialdesignicons.css'				// 追記

const vuetify = createVuetify()
// const vuetify = createVuetify({
//     icons: {
//       defaultSet: 'mdi',
//       aliases,
//       sets: {
//         mdi,
//       },
//     },
//   })


createInertiaApp({
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(vuetify)
            .mount(el);
    },
});
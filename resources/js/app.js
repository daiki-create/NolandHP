// import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler';

const Counter = {
    data() {
        return {
            counter: 0,
        };
    },
    mounted() {
        setInterval(() => {
            this.counter++;
        }, 1000);
    },
};

createApp(Counter).mount("#counter");
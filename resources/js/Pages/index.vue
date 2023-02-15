<template>
    <layout>
        <template v-slot:top-img>
            <div style="width: 100vw;height: 80vh; background-size: cover; background-image: url('/images/top-img.jpeg');"></div>
        </template>
        <template v-slot>
            <h1>What's new</h1>
        </template>
    </layout>
</template>

<script>
    import { InertiaLink } from '@inertiajs/inertia-vue3'
    import Layout from './Layouts/Layout.vue'

    export default {
        data: () => ({
        }),
        components: {
            Layout,
        },
    }
</script>
  
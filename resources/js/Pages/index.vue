<template>
    <layout>
        <template v-slot:top-img>
            <div style="width: 100vw;height: 80vh; background-size: cover; background-image: url('/images/top-img.jpeg');"></div>
        </template>
        <template v-slot>
            <h1>What's new</h1>

            <v-row class="mt-2">
                <v-col
                  cols="4"
                  sm="4"
                  v-for="wn in whats_new"
                  :key="wn"
                >
                    <v-card
                        class="mx-auto"
                        max-width="344"
                    >
                        <v-img
                        src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
                        height="200px"
                        cover
                        ></v-img>

                        <v-card-title>
                            {{ wn.title }}
                        </v-card-title>

                        <v-card-subtitle>
                            {{ wn.subtitle }}
                        </v-card-subtitle>

                        <v-card-actions>
                        <v-btn
                            color="orange-lighten-2"
                            variant="text"
                        >
                            Explore
                        </v-btn>

                        <v-spacer></v-spacer>

                        <v-btn
                            :icon="wn.show ? 'mdi-chevron-up' : 'mdi-chevron-down'"
                            @click="wn.show = !wn.show"
                        ></v-btn>
                        </v-card-actions>

                        <v-expand-transition>
                        <div v-show="wn.show">
                            <v-divider></v-divider>

                            <v-card-text>
                                {{ wn.text }}
                            </v-card-text>
                        </div>
                        </v-expand-transition>
                    </v-card>
                </v-col>
            </v-row>
        </template>
    </layout>
</template>

<script>
    import { InertiaLink } from '@inertiajs/inertia-vue3'
    import Layout from './Layouts/Layout.vue'

    export default {
        data: () => ({
            whats_new: [
                {
                    title: "title",
                    subtitle: "subtitle",
                    text: "text",
                    show: false
                },
                {
                    title: "title2",
                    subtitle: "subtitle",
                    text: "text",
                    show: false
                },
                {
                    title: "title3",
                    subtitle: "subtitle",
                    text: "text",
                    show: false
                },
            ]
        }),
        components: {
            Layout,
        },
    }
</script>
  
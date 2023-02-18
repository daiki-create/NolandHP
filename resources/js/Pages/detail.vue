<template>
  <layout>
    <template v-slot>
      <article class="p-4">
        <h1 class="mb-2 font-bold" style="font-size: 1.6rem; color: rgb(8, 138, 181);">{{ blog.title }}</h1>
        <cite style="color: #555; font-size: 0.9rem;">執筆者：{{ blog.writer }}</cite>
        <cite class="ml-4" style="color: #555; font-size: 0.8rem;">{{ blog.created_at }}</cite>
        <div class="mt-6" style="white-space: pre-wrap;word-wrap:break-word">
          {{ blog.body }}
        </div>
      </article>
    </template>

    <!-- <template v-slot:side-reccomend>
      <v-sheet
        rounded="lg"
        min-height="268"
        class="pa-md-2 mx-lg-auto"
      >
        おすすめ記事
      </v-sheet>
      <br>
    </template> -->

    <!-- <template v-slot:side-addvertise>
      <v-sheet
        rounded="lg"
        min-height="268"
        class="pa-md-2 mx-lg-auto"
      >
        広告
      </v-sheet>
      <br>
    </template> -->

    <!-- <template v-slot:side-writer>
      <v-sheet
        rounded="lg"
        min-height="268"
        class="pa-md-2 mx-lg-auto"
      >
        執筆者
      </v-sheet>
    </template> -->
    
  </layout>
</template>

<script>
  import { InertiaLink } from '@inertiajs/inertia-vue3'
  import { Inertia } from "@inertiajs/inertia";
  import Layout from './Layouts/Layout.vue'

  export default {
      data: () => ({
        // blogs: blogs
      }),
      props: {
        blog: Object,
      },
      components: {
          Layout,
      },
  }
</script>

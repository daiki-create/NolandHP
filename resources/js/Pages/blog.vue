<template>
  <layout>
    <template v-slot>
      <h1>最新記事</h1>
      <!-- <v-list
      :items="items"
      item-props
      lines="three"
      >
        <template v-slot:subtitle="{ subtitle }">
          <div v-html="subtitle"></div>
        </template>
      </v-list> -->
      <table>
        <tbody>
          <tr
            v-for="blog in blogs"
            :key="blog.id"
            
          >
            <!-- <td style="width: 60%;"> -->
            <td style="padding: 15px 10px;">
              <a href="">
                <div>
                  <span class="font-bold" style="color: #333; font-size: 1.2rem;">{{ blog.title }}</span>
                  <span class="font-bold" style="color: rgb(15, 99, 189); font-size: 1rem;">【{{ blog.category }}】</span>
                  <div class="line-clamp-3 mb-1" style="color: #666; font-size: 0.8rem; ">
                    {{ blog.summary }}
                  </div>
                  <div class="font-bold" style="font-size: 0.9rem; color: rgb(8, 138, 181); text-align: right;">
                    記事を読む >
                  </div>
                </div>
              </a>
            </td>
            <!-- <td style="width: 40%; padding: 10px;">
              <a href="">
                <img v-if="blog.sumbnail" v-bind:src='`/blog_sumbnails/posts/${blog.sumbnail}`' alt="ブログサムネイル">
                <img v-else src="/blog_sumbnails/no-image.jpg" alt="ブログサムネイル">
              </a>
            </td> -->
          </tr>
        </tbody>
      </table>
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
        blogs: Array,
      },
      components: {
          Layout,
      },
  }
</script>

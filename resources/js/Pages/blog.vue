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
          <tr>
            <td style="width: 60%;">
              <a href="">
                <div>
                  <h3>Title</h3>
                  <h5>category</h5>
                  <p>
                    内容内容内容内容内容
                  </p>
                  <h3>
                    記事を読む >
                  </h3>
                </div>
              </a>
            </td>
            <td style="width: 40%;">
              <a href="">
                <img src="https://data.editor-ac.com/data/thumbnails/templates/499f801f48c046e907dae5d7d59f8dcf/499f801f48c046e907dae5d7d59f8dcf-1500.webp" alt="">
              </a>
            </td>
          </tr>
          <br>

          <tr>
            <td style="width: 60%;">
              <a href="">
                <div>
                  <h3>Title</h3>
                  <h5>category</h5>
                  <p>
                    内容内容内容内容内容
                  </p>
                  <h3>
                    記事を読む >
                  </h3>
                </div>
              </a>
            </td>
            <td style="width: 40%;">
              <a href="">
                <img src="https://data.editor-ac.com/data/thumbnails/templates/499f801f48c046e907dae5d7d59f8dcf/499f801f48c046e907dae5d7d59f8dcf-1500.webp" alt="">
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </template>

    <template v-slot:side-reccomend>
      <v-sheet
        rounded="lg"
        min-height="268"
        class="pa-md-2 mx-lg-auto"
      >
        おすすめ記事
      </v-sheet>
      <br>
    </template>
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
  import Layout from './Layouts/Layout.vue'

  export default {
      data: () => ({
        items: [
          { type: 'subheader', title: '最近' },

          {
            prependAvatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg',
            title: 'Brunch this weekend?',
            subtitle: `<span class="text-primary">Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?`,
          },
          { type: 'divider', inset: true },
          {
            prependAvatar: 'https://cdn.vuetifyjs.com/images/lists/2.jpg',
            title: 'Summer BBQ',
            subtitle: `<span class="text-primary">to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend.`,
          },
          { type: 'divider', inset: true },
          {
            prependAvatar: 'https://cdn.vuetifyjs.com/images/lists/3.jpg',
            title: 'Oui oui',
            subtitle: '<span class="text-primary">Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?',
          },
        ]
      }),
      components: {
          Layout,
      },
  }
</script>

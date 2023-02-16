<template>
  <layout>
      <template v-slot:top-img>
        <div style="background-position: center;width: 100vw;height: 80vh; background-size: cover; background-image: url('/images/about-top-img.jpg'); display: flex; align-items: center;">
          <div style="color: white; margin: auto;">
              <div style="font-size: 2rem; text-shadow: 1px 1px #aaa; text-align: center;">
                Noland制作の事業内容
              </div>
          </div>
      </div>
      </template>
      <template v-slot>
        <!-- <h1>Noland制作(個人事業)</h1> -->

        <v-table class="mt-4">
          <thead>
            <tr>
              <th class="text-left">
                事業概要
              </th>
              <th class="text-left">
                内容
              </th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="work in works"
              :key="work.name"
            >
              <td>{{ work.name }}</td>
              <td>{{ work.calories }}</td>
            </tr>
          </tbody>
        </v-table>

        <v-table class="mt-8">
          <tbody>
            <tr
              v-for="info in infos"
              :key="info.name"
            >
              <td>{{ info.name }}</td>
              <td>{{ info.calories }}</td>
            </tr>
          </tbody>
        </v-table>
      </template>
  </layout>
</template>

<script>
  import { InertiaLink } from '@inertiajs/inertia-vue3'
  import Layout from './Layouts/Layout.vue'

  export default {
      data: () => ({
        works: [
          {
            name: 'システム開発',
            calories: "Web開発 / クラウド移行支援 / AI開発",
          },
          {
            name: 'サービス開発',
            calories: "プログラミング学習支援サービス「MatchPro」",
          },
        ],
        infos: [
          {
            name: '屋号',
            calories: "Noland制作",
          },
          {
            name: '屋号取得',
            calories: "2020年xx月",
          },
          {
            name: '所在地',
            calories: "神奈川県横浜市神奈川区xxx町x-xx",
          },
        ],
      }),
      components: {
          Layout,
      },
  }
</script>

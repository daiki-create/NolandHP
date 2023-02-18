<template>
  <layout>
    <template v-slot>
      <div style="display:flex; align-items: center;">
        <v-icon
        size="large"
        color="blue-grey-darken-2"
        class="mr-2"
        >
          mdi-check-circle
        </v-icon>
        <h1 class="font-bold">送信完了</h1>
      </div>
      <p class="mt-8" style="font-size:0.9rem; min-height: 40vh;">
        この度はお問い合わせメールをお送りいただきありがとうございます。 <br>
        <br>
        後ほど、担当者よりご連絡をさせていただきます。 <br>
        今しばらくお待ちくださいますようよろしくお願い致します。
      </p>
  </template>
  </layout>
</template>

<script>
  import { InertiaLink } from '@inertiajs/inertia-vue3'
  import Layout from './Layouts/Layout.vue'

  export default {
      name: "ContactsCreate",
      components: {
          Layout,
      },
      data() {
          return {
          }
      },
    }
</script>

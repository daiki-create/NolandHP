<template>
  <layout>
    <template v-slot>
      <div style="display:flex; align-items: center;">
        <v-icon
        size="large"
        color="blue-grey-darken-2"
        class="mr-2"
        >
          mdi-email
        </v-icon>
        <h1 class="font-bold">お問い合わせ</h1>
      </div>
      
      <div class="mt-8">
        <form>
            <input-field name="name" label="お名前" placeholder="姓 名"/>
            <input-field name="email" label="メールアドレス" placeholder="xxx@example.com"/>
            <input-field name="company" label="ご所属" placeholder="株式会社xxx / xxx大学 など" />

            <label class="text-blue-500 pt-2 uppercase text-xs font-bold">お問い合わせ内容</label>
            <textarea name="message" id="message" rows="6" class="mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ご質問などお気軽にお問い合わせください"></textarea>
            
            <div class="flex justify-end relative pb-4">
                <!-- <button class="py-2 px-4 text-blue-500 border order-blue-500 mr-5 hover:bg-gray-100 hover:border-blue-300 rounded">キャンセル</button> -->
                <button class="mt-4 bg-blue-500 border border-blue-500 py-2 px-4 text-white hover:bg-blue-400 mr-1 rounded">送信</button>
            </div>
        </form>
    </div>
  </template>
  </layout>
</template>

<script>
  import { InertiaLink } from '@inertiajs/inertia-vue3'
  import Layout from './Layouts/Layout.vue'
  
  import InputField from "../Components/InputField.vue";

  export default {
      name: "ContactsCreate",
      components: {
          Layout,
          InputField,
      },
      data() {
          return {
              form: {
                  'name': '',
                  'email': '',
                  'company': '',
                  'message': '',
              }
          }
      },
    }
</script>

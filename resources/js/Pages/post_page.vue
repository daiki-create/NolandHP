<template>
  <layout>
    <template v-slot>
      <div style="display:flex; align-items: center;">
        <v-icon
        size="large"
        color="blue-grey-darken-2"
        class="mr-2"
        >
          mdi-arrow-up-bold-box-outline
        </v-icon>
        <h1 class="font-bold">記事投稿</h1>
      </div>
      
      <div class="mt-8">
        <!-- <p style="color: red;">{{ message }}</p> -->

        <form @submit.prevent="submit">

          <!-- <input v-model="form.title" type="text" name="title" id="title"> -->


            <!-- <input-field name="writer" label="執筆者" placeholder="執筆者"/>
            <input-field name="title" label="タイトル" placeholder="タイトル"/>
            <input-field name="category" label="カテゴリー" placeholder="カテゴリー"/> -->
          <div class="relative pb-4">
            <label class="text-blue-500 pt-2 uppercase text-xs font-bold">サムネイル</label><br>
            <input @change="onImageUploaded" type="file">
          </div>

          <div>
            <img v-bind:src="url" alt="">
          </div>

          <div class="relative pb-4">
            <label class="text-blue-500 pt-2 uppercase text-xs font-bold absolute">執筆者</label>
            <input v-model="form.writer" type="text" class="pt-8 w-full text-gray-900 border-b pb-2 focus:outline-none focus:border-blue-400" placeholder="執筆者">
          </div>

          <div class="relative pb-4">
            <label class="text-blue-500 pt-2 uppercase text-xs font-bold absolute">タイトル</label>
            <input v-model="form.title" type="text" class="pt-8 w-full text-gray-900 border-b pb-2 focus:outline-none focus:border-blue-400" placeholder="タイトル">
          </div>

          <div class="relative pb-4">
            <label class="text-blue-500 pt-2 uppercase text-xs font-bold absolute">カテゴリー</label>
            <input v-model="form.category" type="text" class="pt-8 w-full text-gray-900 border-b pb-2 focus:outline-none focus:border-blue-400" placeholder="カテゴリー">
          </div>

          <div class="relative pb-4">
            <label class="text-blue-500 pt-2 uppercase text-xs font-bold">サマリー</label>
            <textarea v-model="form.summary" rows="6" class="mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="サマリー"></textarea>
          </div>

          <div class="relative pb-4">
            <label class="text-blue-500 pt-4 uppercase text-xs font-bold">記事の内容</label>
            <textarea v-model="form.body" rows="6" class="mt-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="記事の内容"></textarea>
          </div>


            <div class="flex justify-end relative pb-4">
                <!-- <button class="py-2 px-4 text-blue-500 border order-blue-500 mr-5 hover:bg-gray-100 hover:border-blue-300 rounded">キャンセル</button> -->
                <button class="mt-4 bg-blue-500 border border-blue-500 py-2 px-4 text-white hover:bg-blue-400 mr-1 rounded">投稿</button>
            </div>
        </form>
    </div>
  </template>
  </layout>
</template>

<script>
  import { InertiaLink } from '@inertiajs/inertia-vue3'
  import Layout from './Layouts/Layout.vue'
  import { useForm } from '@inertiajs/inertia-vue3';

  const form = useForm({
    writer: '',
    title: '',
    category: '',
    summary: '',
    body: '',
    sumbnail: ''
  });

  const message = ""

  export default {
      name: "ContactsCreate",
      components: {
          Layout,
      },
      data() {
          return {
              form: form,
              message: message,
              url: null
          }
      },
      methods: {
        submit: function () {
          console.log("submit")
          console.log(form)
          new Promise((result)=>{
            form.post('/blogs');
            result()
          }).then(()=>{
            console.log("post success")
            // this.message = "投稿しました"
          }).
          catch(err => alert(err))
        },
        onImageUploaded(e) {
          // event(=e)から画像データを取得する
          const image = e.target.files[0]
          this.createImage(image)
        },
        createImage(image) {
          const reader = new FileReader()
          // imageをreaderにDataURLとしてattachする
          reader.readAsDataURL(image)
          // readAdDataURLが完了したあと実行される処理
          reader.onload = () => {
            // this.sumb = reader.result
            // console.log(reader.result)
            this.url = reader.result
            this.form.sumbnail = reader.result
          }
        },
    }
  }
</script>

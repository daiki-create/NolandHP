<template>
    <v-app id="inspire">
      <v-app-bar
        class="px-3"
        color="white"
        flat
        density="compact"
      >
        <img style="max-height: 100%" src="https://t3.ftcdn.net/jpg/04/06/91/62/360_F_406916265_hxmrv7wgw9SZN9871yebxQJAX7HsHdNp.jpg"/>
  
        <v-spacer></v-spacer>
  
        <nav>
            <ul style="display:flex; align-items:center">
                <li style="padding:0 20px;">
                    <Link href="/">TOP</Link>
                </li>
                <li style="padding:0 20px;">
                    <Link href="/about">ABOUT</Link>
                </li>
            </ul>
        </nav>

        <v-tabs
          centered
          color="grey-darken-2"
        >
        
          <!-- <v-tab><Link href="/">TOP</Link></v-tab>
          <v-tab><Link href="/about">ABOUT</Link></v-tab> -->
          <!-- <v-tab href="#">TOP</v-tab>
          <v-tab href="#about">ABOUT</v-tab> -->
          <!-- <v-tab to="/">TOP</v-tab>
          <v-tab to="/about">ABOUT</v-tab> -->
        </v-tabs>
      </v-app-bar>
  
      <v-main class="bg-grey-lighten-3">
        <slot name="top-img"/>
        <v-container>
          <v-row>
            <v-col
              cols="12"
              sm="2"
            >
            </v-col>
  
            <v-col
              cols="12"
              sm="8"
            >
              <v-sheet
                min-height="700vh"
                rounded="lg"
                class="pa-md-4 mx-lg-auto"
              >
                <slot/>
              </v-sheet>
            </v-col>
  
            <v-col
              cols="12"
              sm="2"
            >
              <v-sheet
                rounded="lg"
                min-height="268"
                class="pa-md-2 mx-lg-auto"
              >
                おすすめ記事
              </v-sheet>
              <br>
              <v-sheet
                rounded="lg"
                min-height="268"
                class="pa-md-2 mx-lg-auto"
              >
                広告
              </v-sheet>
              <br>
              <v-sheet
                rounded="lg"
                min-height="268"
                class="pa-md-2 mx-lg-auto"
              >
                プロフィール
              </v-sheet>
            </v-col>
          </v-row>
        </v-container>
      </v-main>
    </v-app>
  </template>
  
  <script setup>
    import { Link } from '@inertiajs/inertia-vue3';
  </script>
  
  <script>
    export default {
        data: () => ({
        
        }),
    }
  </script>
  
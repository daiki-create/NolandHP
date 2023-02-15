<template>
    <v-app id="inspire">
      <v-app-bar
        class="px-3"
        color="white"
        flat
        density="compact"
      >  

        <img style="max-height: 100%;" src="https://t3.ftcdn.net/jpg/04/06/91/62/360_F_406916265_hxmrv7wgw9SZN9871yebxQJAX7HsHdNp.jpg"/>

        <v-spacer></v-spacer>
  
        <nav>
            <ul style="display:flex; align-items:center">
                <li style="padding:0 20px;">
                    <Link href="/">HOME</Link>
                </li>
                <li style="padding:0 20px;">
                    <Link href="/about">ABOUT US</Link>
                </li>
                <li style="padding:0 20px;">
                  <Link href="/blog">BLOG</Link>
              </li>
              <li style="padding:0 20px;">
                <Link href="/contact">CONTACT</Link>
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
        <v-container class="mt-8">
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
              <slot name="side-reccomend"/>
              <slot name="side-addvertise"/>
              <slot name="side-writer"/>

            </v-col>
          </v-row>
        </v-container>

        <v-footer class="bg-grey-lighten-1 mt-20">
          <v-row justify="center" no-gutters>
            <v-btn
              :key="link"
              color="white"
              variant="text"
              class="mx-2"
              rounded="xl"
              href="/"
            >
              HOME
            </v-btn>
            <v-btn
              :key="link"
              color="white"
              variant="text"
              class="mx-2"
              rounded="xl"
              href="/about"
            >
              ABOUT US
            </v-btn>
            <v-btn
              :key="link"
              color="white"
              variant="text"
              class="mx-2"
              rounded="xl"
              href="/blog"
            >
              BLOG
            </v-btn>
            <v-btn
              :key="link"
              color="white"
              variant="text"
              class="mx-2"
              rounded="xl"
              href="/contact"
            >
              CONTACT
            </v-btn>
            <v-col class="text-center mt-4" cols="12">
              {{ new Date().getFullYear() }} — <strong>Noland制作</strong>
            </v-col>
          </v-row>
        </v-footer>
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
  
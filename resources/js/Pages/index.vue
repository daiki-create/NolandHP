<template>
    <v-app id="inspire">
      <v-app-bar
        class="px-3"
        color="white"
        flat
        density="compact"
      >
        <!-- <v-avatar
          color="grey-darken-1"
          size="32"
        ></v-avatar> -->
  
        <v-spacer></v-spacer>
  
        <v-tabs
          centered
          color="grey-darken-2"
        >
          <v-tab to="/">トップ</v-tab>
          <v-tab to="/about">事業概要</v-tab>
          <v-tab to="/blog">ブログ</v-tab>
          <v-tab to="/contact">お問い合わせ</v-tab>
        </v-tabs>
        <!-- <v-spacer></v-spacer> -->
  
        <!-- <v-avatar
          class="hidden-sm-and-down"
          color="grey-darken-1"
          size="32"
        ></v-avatar> -->
      </v-app-bar>
  
      <v-main class="bg-grey-lighten-3">
        <v-container>
          <v-row>
            <v-col
              cols="12"
              sm="2"
            >
              <!-- <v-sheet
                rounded="lg"
                min-height="268"
              >
                test
              </v-sheet> -->
            </v-col>
  
            <v-col
              cols="12"
              sm="8"
            >
              <v-sheet
                min-height="700vh"
                rounded="lg"
              >
                <!--  -->
              </v-sheet>
            </v-col>
  
            <v-col
              cols="12"
              sm="2"
            >
              <v-sheet
                rounded="lg"
                min-height="268"
              >
                index
              </v-sheet>
            </v-col>
          </v-row>
        </v-container>
      </v-main>
    </v-app>
  </template>
  
  <script>
    export default {
      data: () => ({
        
      }),
    }
  </script>
  
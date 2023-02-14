<script>
export default {
    data() {
        return {
            greeting: "Hello World!",
        };
    },
};
</script>

<template>
    <p class="greeting">{{ greeting }}</p>

    <div>
        <v-icon icon="mdi-account" class="ma-4" />
        <v-btn
          icon="mdi-account"
          color="success"
          class="ma-4"
        ></v-btn>
      </div>

      <!-- <div>
        <v-icon :icon="mdiAccount" class="ma-4" />
        <v-btn
          :icon="mdiAccount"
          color="success"
          class="ma-4"
        ></v-btn>
      </div>
      
      <script setup>
        import { mdiAccount } from '@mdi/js'
      </script> -->

</template>

<style>
.greeting {
    color: red;
    font-weight: bold;
}
</style>
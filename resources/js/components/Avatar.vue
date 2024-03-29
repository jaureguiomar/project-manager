<template>
   <li>
      <a v-if="link" href="#" data-toggle="tooltip" data-placement="top" :title="name">
         <img :alt="name" class="avatar" :src="image" />
      </a>
      <img v-else :alt="name" :src="image" class="avatar" data-toggle="tooltip" :data-title="name" />
   </li>
</template>

<script lang="ts">
import { defineComponent } from "vue";
export default defineComponent({
   name: "Avatar",
   props: {
      name: {
         type: String,
         required: true
      },
      image: {
         type: String,
         required: true
      },
      link: {
         type: Boolean,
         required: false,
         default: true
      }
   },
   setup() {
      return {};
   }
});
</script>

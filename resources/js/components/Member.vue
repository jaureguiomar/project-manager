<template>
   <a class="media media-member" href="/user">
      <img :alt="name" :src="image" class="avatar avatar-lg" />
      <div class="media-body">
         <h6 class="mb-0" data-filter-by="text">{{ name }}</h6>
         <span data-filter-by="text" class="text-body">{{ role }}</span>
      </div>
   </a>
</template>

<script lang="ts">
import { defineComponent } from "vue";
export default defineComponent({
   name: "Member",
   props: {
      name: {
         type: String,
         required: true
      },
      image: {
         type: String,
         required: true
      },
      role: {
         type: String,
         required: true
      }
   },
   setup() {
      return {};
   }
});
</script>

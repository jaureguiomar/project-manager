<template>
   <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="user-manage-12">
      <label class="custom-control-label" for="user-manage-12">
         <span class="d-flex align-items-center">
            <img :alt="name" :src="image" class="avatar mr-2" />
            <span class="h6 mb-0" data-filter-by="text">{{ name }}</span>
         </span>
      </label>
   </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
export default defineComponent({
   name: "MemberCheck",
   props: {
      name: {
         type: String,
         required: true
      },
      image: {
         type: String,
         required: true
      }
   },
   setup() {
      return {};
   }
});
</script>

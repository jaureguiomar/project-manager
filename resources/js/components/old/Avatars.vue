<template>
   <ul class="avatars" :class="classes">
      <slot name="content"></slot>
   </ul>
</template>

<script lang="ts">
import { defineComponent } from "vue";
export default defineComponent({
   name: "Avatar",
   props: {
      classes: String
   },
   setup() {
      return {};
   }
});
</script>

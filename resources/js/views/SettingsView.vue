<template>
   <h1>Settings page</h1>
</template>

<script lang="ts">
import { defineComponent, PropType } from "vue";
import { Route } from "../types/route";

export default defineComponent({
   name: "HomView",
   props: {
      params: {
         type: Array as PropType<Route[]>,
         required: true
      }
   },
   setup() {
      return {};
   }
});
</script>

<template>
   <h1>Settings page</h1>
</template>

<script lang="ts">
import { defineComponent, PropType } from "vue";
import { Param } from "../types/param";

export default defineComponent({
   name: "HomView",
   props: {
      params: {
         type: Array as PropType<Param[]>,
         required: true
      }
   },
   setup() {
      return {};
   }
});
</script>
../types/param

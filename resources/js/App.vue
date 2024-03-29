<template>
   <h1 v-if="route == '/'">Home</h1>
   <Team v-else-if="route == '/team'" />
   <Project v-else-if="route == '/project'" />
   <h1 v-else>Error</h1>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted } from "vue";
import Team from "./views/Team.vue";
import Project from "./views/Project.vue";

export default defineComponent({
   name: "App",
   components: {
      Team,
      Project
   },
   setup() {
      const route = ref("");
      onMounted(() => {
         const href = window.location.href;
         const hrefSanitized = href.replace("#", "");
         const hrefSplit = hrefSanitized.split("http://127.0.0.1:8001");
         if(hrefSplit.length == 2)
            route.value = hrefSplit[1];
      });
      return {
         route
      };
   }
});
</script>

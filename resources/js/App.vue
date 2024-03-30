<template>
   <h1 v-if="route == '/'">Home</h1>
   <TeamView v-else-if="route == '/team'" />
   <ProjectView v-else-if="route == '/project'" />
   <TaskView v-else-if="route == '/task'" />
   <KanbanView v-else-if="route == '/kanban'" />
   <h1 v-else>Error</h1>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted } from "vue";
import TeamView from "./views/TeamView.vue";
import ProjectView from "./views/ProjectView.vue";
import TaskView from "./views/TaskView.vue";
import KanbanView from "./views/KanbanView.vue";

export default defineComponent({
   name: "App",
   components: {
      TeamView,
      ProjectView,
      TaskView,
      KanbanView
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

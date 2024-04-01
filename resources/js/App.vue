<template>
   <HomeView :params="params" v-if="route == '/'" />
   <TeamView :params="params" v-else-if="route == '/team'" />
   <ProjectView :params="params" v-else-if="route == '/project'" />
   <TaskView :params="params" v-else-if="route == '/task'" />
   <KanbanView :params="params" v-else-if="route == '/kanban'" />
   <h1 v-else>Error</h1>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted } from "vue";
import HomeView from "./views/HomeView.vue";
import TeamView from "./views/TeamView.vue";
import ProjectView from "./views/ProjectView.vue";
import TaskView from "./views/TaskView.vue";
import KanbanView from "./views/KanbanView.vue";
import { Route } from "./types/route";

export default defineComponent({
   name: "App",
   components: {
      HomeView,
      TeamView,
      ProjectView,
      TaskView,
      KanbanView
   },
   setup() {
      const route = ref("");
      const params = ref<Route[]>([]);

      onMounted(() => {
         const href = window.location.href;
         const hrefSanitized = href.replace("#", "");
         const hrefSplit = hrefSanitized.split("http://127.0.0.1:8001");
         if(hrefSplit.length == 2) {
            const hrefRoute = hrefSplit[1];
            const hrefParamsSplit = hrefRoute.split("?");
            let url = "";
            let parameters:Route[] = [];
            if(hrefParamsSplit.length == 1) {
               url = hrefParamsSplit[0];
            } else if(hrefParamsSplit.length == 2) {
               url = hrefParamsSplit[0];

               const allParams = hrefParamsSplit[1];
               const allParamsSplit = allParams.split("&");
               for(let i = 0; i < allParamsSplit.length; i++) {
                  const param = allParamsSplit[i];
                  const paramSplit = param.split("=");
                  if(paramSplit.length == 2) {
                     parameters.push({
                        key: paramSplit[0],
                        value: paramSplit[1]
                     });
                  }
               }
            } else {
               console.log("url format error (params)");
            }

            route.value = url;
            params.value = parameters;
         }
      });
      return {
         route,
         params
      };
   }
});
</script>

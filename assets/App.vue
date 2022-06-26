<script setup>

import Words from "./Words.vue"
import Frames from "./Frames.vue"
import LatestFrame from "./LatestFrame.vue"
</script>

 <template>

   <div id="leftWord">
      <h1>Latest Frame</h1>
      <LatestFrame />
      <h1>All Frames</h1>
      <Frames />
   </div>

   <div id="rightWord">
     <h1>Words</h1>
     <Words />
   </div>

</template>
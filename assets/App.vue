<script setup>
import Movies from "./Movies.vue"
import Words from "./Words.vue"
import Actions from "./Actions.vue"
import Frames from "./Frames.vue"
import LatestFrame from "./LatestFrame.vue"
</script>

 <template>

   <div id="left">
      <h1>Latest Frame</h1>
      <LatestFrame />

      <h1>All Frames</h1>
      <Frames />
   </div>

   <div id="middle">
     <h1>Movies</h1>
     <Movies />
     <h1>Actions Queue</h1>
      <Actions />
   </div>

   <div id="right">
     <h1>Words</h1>
     <Words />
   </div>

</template>
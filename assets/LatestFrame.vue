<script>
export default {
      data() {
        return {
          loading: false,
          count:0,
          frames: null,
          latestFrame: [{
            "id": 2,
            "name": "001",
            "filename": "test content",
            "text": "The Quick Fox Jumped Over The Lazy Dog",
            "optimiser": "Adam",
            "LR": ".01",
            "maxEpochs": 2,
            "seEpochs": 3,
            "seed": 42,
            "destination": "/hal"
	          }]
        }
        }
     
  //    created() {
        // Simple GET request using fetch
     //  fetch("http://www.emcradio.com/index.php/Latestframejs")
     //   .then(response => response.json())
     //   .then(data => (this.frames = data));
 //     },
    }
</script>

<template>
   <ul id="latestFrame">
 <li v-for="item in latestFrame" :key="item.id">
  {{ item.name }} - {{ item.text }}
</li>
   </ul>
</template>
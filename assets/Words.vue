<script>
export default {
      data() {
        return {
          loading: false,
          count:0,
          DynamicId: 'Dog',
          word: [{ id: 1, word: "Superman", category: "name" }],
          error: null,
        }
      },
      created() {
        // Simple GET request using fetch
       fetch("http://www.emcradio.com/index.php/wordjs")
        .then(response => response.json())
        .then(data => (this.word = data));
      },
    }
</script>

<template>
   <ul id="wordList">
 <li v-for="item in word" :key="item.id">
  {{ item.word }}
</li>
   </ul>
</template>
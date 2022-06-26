<script setup >


  const { createApp } = Vue
  createApp({
    delimiters: ['${', '}'],
    data() {
      return {
        loading: false,
        count:0,
        DynamicId: 'Dog',

        error: null,
      }
    },
    created() {
      // Simple GET request using fetch
     // fetch("http://www.emcradio.com/index.php/wordjs")
     // .then(response => response.json())
    // .then(data => (this.word = data));
    }
  }).mount('#Dog')
</script>

<template>
-----------dog -----------
   <ul id="wordList">

          <li v-for = "item in props.word" :key ="item.id">
           ${ item.id }
        
          </li>

         </ul>
</template>
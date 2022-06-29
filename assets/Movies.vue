<script >

export default {

      data() {
        return {
          loading: false,
          count:0,
          payload:[],
          frames: [],
        }
      },
      created() {
        // Simple GET request using fetch
       this.getPayload()
     },
      methods:{
        getPayload(){
          console.log("Hi I'm Payload")
          fetch("http://www.emcradio.com/index.php/moviejs")
          .then(response => response.json())
          .then(data => (this.frames = data))
          .then(data => (this.payload = data))
          ;
        },
        getHal(){
        console.log("Hi I'm Hal")
        //this.payload = this.frames
        this.payload = this.frames.filter((frame) => frame.destination == "/hal")
        //this.getPayload()
        return
        },
        getAll(){
        //this.payload = this.frames
        this.payload = this.frames
        return
        // return  this.frames.filter((frame) => frame.destination != "/blobby")
        },
        getMildred(){
        console.log("Hi I'm Mildred")
        //this.payload = this.frames
        this.payload = this.frames.filter((frame) => frame.destination == "/mildred")
        //       this.getPayload()
         return 
        },
        getMovie(moviename){
        console.log(moviename)
        //this.payload = this.frames
        this.payload = this.frames.filter((frame) => frame.name == moviename)
        //       this.getPayload()
         return 
        },
      }
    }
</script>

<template>
<button v-on:click="getAll"> All </button>
<button v-on:click="getHal"> Hal </button>
<button v-on:click="getMildred"> Mildred </button>

  <table id="movieList">
  <tr>
    <th> Id</th>
    <th> Server </th>
    <th> Iterations </th>
    <th> Learning rate </th>
  </tr>
   <tr v-for="item in payload" :key="item.id">
    <td> {{ item.id}} </td>
    <td v-on:click="getMovie(item.name)" >{{ item.server }} </td>
    <td> {{ item.iterations }}</td>
    <td> {{ item.learning_rate }}</td>
  </tr>
  </table>
</template>
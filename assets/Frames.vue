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
          fetch("http://www.emcradio.com/index.php/framejs")
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

  <table id="frameList">
  <tr>
    <th> id</th>
    <th> name</th>
    <th> text</th>
    <th> optimiser</th>
    <th> LR</th>
    <th> MaxEpochs</th>
    <th> seEpochs</th>
    <th> Seed</th>
    <th> destination</th>
  </tr>
   <tr v-for="item in payload" :key="item.id">
    <td> {{ item.id}} </td>
    <td v-on:click="getMovie(item.name)" >{{ item.name }} </td>
    <td> {{ item.text }}</td>
    <td> {{ item.optimiser }}</td>
    <td> {{ item.LR }}</td>
    <td> {{ item.maxEpochs }}</td>
    <td> {{ item.seEpochs }}</td>
    <td> {{ item.seed }}</td>
    <td> {{ item.destination }}</td>
  </tr>
  </table>
</template>
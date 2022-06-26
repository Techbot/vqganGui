<script >

export default {

      data() {
        return {
          count:0,

        }
      },
      methods:{
      }
    }
</script>

<template>
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
</template>
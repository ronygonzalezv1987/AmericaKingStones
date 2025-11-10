<template>
    <div class="container">
        <div class="counter-compotision">
          <h1>CounterComposition: {{ counter }}</h1>
          <input class="btn btn-primary" type="submit" @click="addCounter" value="Increase">
          
        </div>
    </div>
</template>

<script lang="ts" setup>
/*     export default {
        mounted() {
            console.log('Component mounted.')
        }*/

 import {Ref,ref } from "vue"; 
  let counter:Ref<number>=ref(0)
  const addCounter=():void=>{
        counter.value++
        console.log("This is #"+counter.value);
    }

</script>
<style lang="scss">

</style>
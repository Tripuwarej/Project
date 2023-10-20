<template>
   <h1>
       {{msg}}
   </h1>
</template>

<script>
    export default {
       name: "Home",
       setup(){
       const msg = "Hello มาแล้วจ้า vue อิอิ"
       return {msg}
       }
    }
</script>

<style>
</style>

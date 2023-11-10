<!-- <script setup>

defineProps ({ 
    show: {
         type: boolean,
        }
});

defineEmits(["close"]);

</script>
 
<template>

<div
    v-if ="show"
    class="h-screen fixed top-0 right-0 w-full bg-black/25 backdrop-blur"
    >
    </div>


<div class="fixe bg-slate-200 w-48 h-screen top-0 transition-all duration-500"
:class="show? 'right-0' : '-right-full'"
>

<button v-on:click="$emit('close')" 
class="absolute corsor-pointer m-1 
hover:text-red-500 transition"> x </button>

</div>

</template>
 
<style>

</style> -->
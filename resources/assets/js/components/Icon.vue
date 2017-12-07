<template>
    <svg><use v-bind:xlink:href="icon"></use></svg>
</template>

<script>
    export default {
        name: 'app-icon',
        
        props: ['name'],
        
        computed: {
            icon() {                
                return '#' + this.name
            }
        }
    }
</script>

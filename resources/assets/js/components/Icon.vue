<template>
    <svg><use v-bind:xlink:href="icon"></use></svg>
</template>

<script>
    export default {
        name: 'app-icon',
        
        props: ['name'],
        
        computed: {
            icon() {
                console.log('icon called:' + this.name)
                
                return '#' + this.name
            }
        }
    }
</script>

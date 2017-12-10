<template>
    <span class="fal fa-fw" :class="this.icon"></span>
    <!-- <svg><use v-bind:xlink:href="icon"></use></svg> -->
</template>

<script>
    export default {
        name: 'app-icon',
        
        props: ['name'],
        
        computed: {
            icon() {
                return 'fa-' + this.name
            }
        }
    }
</script>

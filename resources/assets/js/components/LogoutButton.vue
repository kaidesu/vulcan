<template>
    
    <a class="btn btn-outline-danger" href="#" @click.prevent="logout">
        Logout
    
        <form id="logout-form" action="/logout" method="POST" style="display: none;">
            <input type="hidden" name="_token" :value="csrf_token">
        </form>
    </a>
</template>

<script>
    export default {
        name: 'logout-button',
        
        props: ['csrf'],
        
        data() {
            return {
                csrf_token: ''
            }
        },
        
        methods: {
            logout() {
                document.getElementById("logout-form").submit()
            }
        },
        
        created() {
            if (this.csrf) {
                this.csrf_token = this.csrf
            }
        }
    }
</script>

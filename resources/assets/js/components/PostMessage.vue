<template>
    <form @submit.prevent="post">
        <div class="input-group mb-5">
            <input type="text" class="form-control" placeholder="What's on your mind?" autofocus v-model="body">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        name: 'post-message',
        
        data() {
            return {
                body: null
            }
        },
        
        props: [
            'messages'
        ],
        
        methods: {
            post() {
                let vm = this
                
                axios.post('/api/message', {
                    'body': this.body
                }).then((response) => {
                    console.log(response.data)
                    
                    vm.body = null
                })
            }
        }
    }
</script>

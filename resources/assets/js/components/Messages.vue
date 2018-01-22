<template>
    <div class="card mb-3">
        <div class="card-body">
            <div class="media mb-3 border border-top-0 border-left-0 border-right-0" v-for="message in messages">
                <div class="mr-3">
                    <img v-if="message.user" src="/img/thinking-orbit.svg" width="60">
                    <img v-else src="/img/artificial-intelligence.svg" width="60">
                </div>
                
                <div class="media-body">
                    <p>
                        <strong v-if="message.user">{{ message.user.name }}</strong>
                        <strong v-else>Vulcan</strong>
                    </p>
                    
                    <p>{{ message.body }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'messages',
        
        data: function () {
            return {
                messages: []
            }
        },
        
        mounted() {
            let vm = this
            
            axios.get('/messages')
                .then(function(response) {
                    vm.messages = response.data
                })
        }
    }
</script>

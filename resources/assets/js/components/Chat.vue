<template>
    <div>
        <nav class="col-sm-4 col-md-3 hidden-xs-down bg-faded chat">
            <ul class="chat-list">
                <li class="chat-message" v-for="message in messages">
                    <img src="https://placeholdit.imgix.net/~text?w=100&h=100" class="chat-message-avatar">
                    <div class="chat-message-text">
                        <strong>{{ message.user }}:</strong>
                        {{ message.text }}
                    </div>
                </li>
            </ul>
        </nav>

        <div class="col-sm-4 col-md-3 hidden-xs-down bg-faded chat-actions">
            <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn" :class="{ 'btn-secondary': !listening, 'btn-danger': listening }" type="button" @click="toggleListening()"><i class="fa fa-fw" :class="{ 'fa-microphone-slash': !listening, 'fa-microphone': listening }"></i></button>
                </span>

                <input type="text" class="form-control" placeholder="Type a message" v-model="message" @keyup.enter="sendMessage()">

                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button" @click="sendMessage()"><i class="fa fa-paper-plane fa-fw"></i></button>
                </span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'chat',

        data() {
            return {
                listening: false,

                message: '',

                messages: []
            }
        },

        methods: {
            sendMessage() {
                this.pushMessage('User', this.message);

                this.fetchResponse(this.message);

                this.message = '';
            },

            fetchResponse(message) {
                var vm = this;

                axios.post('/api/v1/response', {
                    'text': message
                }).then(function(response) {
                    vm.pushMessage('Bot', response.data.response);
                }).catch(function (error) {
                    console.log(error);
                });
            },

            pushMessage(name, message) {
                this.messages.push({
                    user: name,
                    text: message
                });

                this.scrollChat();
            },

            scrollChat() {
                this.$nextTick(function () {
                    var container = this.$el.querySelector(".chat");
                    container.scrollTop = (container.scrollHeight);
                });
            },

            toggleListening() {
                this.listening = !this.listening;
            }
        }
    }
</script>

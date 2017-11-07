<template>
    <div
        class="alert alert--flash"
        :class="'alert-' + level"
        role="alert"
        v-text="body"
        v-show="show">
    ></div>
</template>

<script>
    export default {
        name: 'flash',
        
        props: {
            message: {
                type: String,
                default: ''
            },
            
            level: {
                type: String,
                default: 'success'
            }
        },
        
        data() {
            return {
                body: '',
                show: false
            }
        },
        
        created() {
            if (this.message) {
                this.flash(this.message)
            }
            
            window.events.$on('flash', message => this.flash(message))
        },
        
        methods: {
            flash() {
                this.body = this.message
                this.show = true
                
                this.hide()
            },
            
            hide() {
                setTimeout(() => {
                    this.show = false
                }, 3000)
            }
        }
    }
</script>

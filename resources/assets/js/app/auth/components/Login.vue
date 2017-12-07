<template>
    <div class="container-fluid d-flex justify-content-center">
        <div class="col-6 text-center">
            <h4 class="mb-4 text-white">Log in to your personal server</h4>
            
            <form role="form" @submit.prevent="submit">
                <div class="form-group" :class="{ 'has-error': errors.email }">
                    <input type="email" class="form-control" placeholder="E-mail" v-model="email">
                    
                    <span class="help-block text-white" v-if="errors.email">
                        {{ errors.email[0] }}
                    </span>
                </div>
                
                <div class="form-group" :class="{ 'has-error': errors.password }">
                    <input type="password" class="form-control" placeholder="Password" v-model="password">
                    
                    <span class="help-block text-white" v-if="errors.password">
                        {{ errors.password[0] }}
                    </span>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Log In</button>
                </div>
            </form>
            
            <div class="alert alert-danger" v-if="errors.message">
                {{ errors.message }}
            </div>
        </div>
    </div>
</template>

<script>
    import { mapActions } from 'vuex'
    
    export default {
        data() {
            return {
                email: null,
                password: null,
                errors: []
            }
        },
        
        methods: {
            ...mapActions({
                login: 'auth/login'
            }),
            
            submit() {
                this.login({
                    payload: {
                        email: this.email,
                        password: this.password
                    },
                    
                    context: this
                }).then(() => {
                    this.$router.replace({ name: 'home' })
                })
            }
        }
    }
</script>

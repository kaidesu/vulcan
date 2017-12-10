<template>
    <div class="page-content__header">
        <b-navbar type="dark" variant="dark" class="bg-gradient" toggleable>
            <b-navbar-nav class="ml-auto">
                <b-nav-item-dropdown :text="user.data.name" right v-if="user.data">
                    <b-dropdown-item href="#" @click.prevent="signout">Logout</b-dropdown-item>
                </b-nav-item-dropdown>
            </b-navbar-nav>
        </b-navbar>
        
        <app-banner></app-banner>
    </div>
</template>

<script>
    import { mapGetters, mapActions } from 'vuex'

    export default {
        name: 'app-header',
        
        computed: mapGetters({
            user: 'auth/user'
        }),
        
        methods: {
            ...mapActions({
                logout: 'auth/logout'
            }),
            
            signout() {
                this.logout().then(() => {
                    this.$router.replace({ name: 'login' })
                })
            }
        }
    }
</script>

<template>
    <div>
        <h1>Settings</h1>

        <passport-clients></passport-clients>
        <passport-authorized-clients></passport-authorized-clients>
        <passport-personal-access-tokens></passport-personal-access-tokens>
    </div>
</template>

<script>
    import AuthorizedClients from '../components/passport/AuthorizedClients.vue';
    import Clients from '../components/passport/Clients.vue';
    import PersonalAccessTokens from '../components/passport/PersonalAccessTokens.vue';

    export default {
        name: 'settings',

        components: {
            'passport-authorized-clients': AuthorizedClients,
            'passport-clients': Clients,
            'passport-personal-access-tokens': PersonalAccessTokens
        }
    }
</script>

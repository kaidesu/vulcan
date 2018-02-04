<template>
    <div>
        <div class="card">
            <div class="card-body" v-if="tokens.length === 0">
                <p class="mb-0">
                    You have not created any personal access tokens.
                </p>
            </div>

            <table class="table table-borderless mb-0" v-if="tokens.length > 0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr v-for="token in tokens">
                        <td class="align-middle">{{ token.name }}</td>

                        <td class="text-right align-middle">
                            <button class="btn btn-sm btn-danger" @click="revoke(token)">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <a class="btn btn-primary text-white mt-3" v-b-modal.modal-create-token>
            Create New Token
        </a>

        <!-- Create Token Modal -->
        <b-modal id="modal-create-token" title="Create Token" v-model="show.createTokenForm">
            <!-- Form Errors -->
            <div class="alert alert-danger" v-if="form.errors.length > 0">
                <p><strong>Whoops!</strong> Something went wrong!</p>
                <br>
                <ul>
                    <li v-for="error in form.errors">
                        {{ error }}
                    </li>
                </ul>
            </div>

            <!-- Create Token Form -->
            <form role="form" @submit.prevent="store">
                <!-- Name -->
                <div class="form-group">
                    <label for="name">Name</label>

                    <input id="create-token-name" type="text" class="form-control" name="name" v-model="form.name">
                </div>

                <!-- Scopes -->
                <div class="form-group" v-if="scopes.length > 0">
                    <label class="col-md-4 control-label">Scopes</label>

                    <div class="col-md-6">
                        <div v-for="scope in scopes">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"
                                        @click="toggleScope(scope.id)"
                                        :checked="scopeIsAssigned(scope.id)">

                                        {{ scope.id }}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Modal Actions -->
            <div slot="modal-footer" class="w-100">
                <button type="button" class="btn btn-default" @click="show.createTokenForm=false">Close</button>

                <button type="button" class="btn btn-primary" @click="store">
                    Create
                </button>
            </div>
        </b-modal>

        <!-- Access Token Modal -->
        <b-modal id="modal-access-token" title="Personal Access Token" size="lg" v-model="show.accessToken">
            <p>
                Here is your new personal access token. This is the only time it will be shown so don't lose it!
                You may now use this token to make API requests.
            </p>

            <div class="card bg-light">
                <div class="card-body">
                    <pre>{{ accessToken }}</pre>
                </div>
            </div>
            
            <!-- Modal Actions -->
            <div slot="modal-footer" class="w-100">
                <button type="button" class="btn btn-default" @click="show.accessToken=false">Close</button>
            </div>
        </b-modal>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                accessToken: null,

                tokens: [],
                scopes: [],

                form: {
                    name: '',
                    scopes: [],
                    errors: []
                },
                
                show: {
                    createTokenForm: false,
                    accessToken: false
                }
            };
        },

        mounted() {
            this.prepareComponent();
        },

        methods: {
            prepareComponent() {
                this.getTokens();
                this.getScopes();
            },

            getTokens() {
                axios.get('/oauth/personal-access-tokens')
                        .then(response => {
                            this.tokens = response.data;
                        });
            },

            getScopes() {
                axios.get('/oauth/scopes')
                        .then(response => {
                            this.scopes = response.data;
                        });
            },

            store() {
                this.accessToken = null;

                this.form.errors = [];

                axios.post('/oauth/personal-access-tokens', this.form)
                        .then(response => {
                            this.form.name = '';
                            this.form.scopes = [];
                            this.form.errors = [];

                            this.tokens.push(response.data.token);

                            this.showAccessToken(response.data.accessToken);
                        })
                        .catch(error => {
                            if (typeof error.response.data === 'object') {
                                this.form.errors = _.flatten(_.toArray(error.response.data));
                            } else {
                                this.form.errors = ['Something went wrong. Please try again.'];
                            }
                        });
            },

            toggleScope(scope) {
                if (this.scopeIsAssigned(scope)) {
                    this.form.scopes = _.reject(this.form.scopes, s => s == scope);
                } else {
                    this.form.scopes.push(scope);
                }
            },

            scopeIsAssigned(scope) {
                return _.indexOf(this.form.scopes, scope) >= 0;
            },

            showAccessToken(accessToken) {
                this.accessToken = accessToken
                this.show.accessToken = true
            },

            revoke(token) {
                axios.delete('/oauth/personal-access-tokens/' + token.id)
                        .then(response => {
                            this.getTokens();
                        });
            }
        }
    }
</script>

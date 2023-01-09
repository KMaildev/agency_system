<template>
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Register
                    </div>

                    <div class="card-body">
                        <form @submit.prevent="register">

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">
                                    Name
                                </label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control"
                                        :class="['form-control', errors.name ? 'is-invalid' : '']" name="name"
                                        v-model="name">
                                    <small class="text-danger">
                                        {{ errors.name }}
                                    </small>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">
                                    Email Address
                                </label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                        autocomplete="email" v-model="email">
                                    <small class="text-danger">
                                        {{ errors.email }}
                                    </small>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">
                                    Password
                                </label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password"
                                        autocomplete="new-password" v-model="password">
                                    <small class="text-danger">
                                        {{ errors.password }}
                                    </small>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Register',

    data() {
        return {
            name: '',
            email: '',
            password: '',
        }
    },

    props: {
        errors: Object
    },

    methods: {
        register() {
            var data = new FormData();
            data.append('name', this.name);
            data.append('email', this.email);
            data.append('password', this.password);
            this.$inertia.post('/post_register', data)
                .then(() => console.log('Ok'))
        },
    }
}
</script>
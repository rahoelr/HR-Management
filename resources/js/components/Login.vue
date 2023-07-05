<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-logo">
                    <img src="storage/logo_floo.png" alt="logo" id="floo-logo">
                </div>
            </div>
            <div class="col-md-6">
                <div class="vertical-center">
                    <form @submit.prevent="authenticate">
                        <div v-if="loginError" class="error">{{ loginError }}</div>
                        <h2>Welcome Back</h2>
                        <p class="text-muted" style="margin-bottom: 30px">Login to make attendance </p>
                        <div class="form-group">
                            <input type="email" class="form-control my-3" id="email" placeholder="Floo Email"
                                v-model="email" required style="width: 300px; height: 40px;">
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <input type="password" class="form-control my-3" id="password" v-model="password"
                                    required placeholder="Password" style="width: 300px; height: 40px;">
                            </div>
                            <div class="text-end">
                                <a href="#" style="color: #63676F">Forgot Password</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary custom-btn my-3"
                            style="font-style: bold; width: 300px; height: 40px;">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            <p class="text-muted text-center" style="color: #63676F">PT. Floo Integra Digital</p>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                email: '',
                password: '',
                loginError: ''
            };
        },
        methods: {
            async authenticate() {
                try {
                    const response = await axios.post('/login', {
                        email: this.email,
                        password: this.password
                    });

                    if (response.status === 200) {
                        // Handle successful authentication, e.g., redirect to the dashboard page.
                        window.location.href = '/dashboard';
                    } else {
                        // Handle authentication failure, e.g., display error message.
                        this.loginError = 'Login Failed!';
                    }
                } catch (error) {
                    // Handle error during authentication, e.g., display error message.
                    this.loginError = 'An error occurred during login.';
                }
            }
        }
    };
</script>
<style>
    .vertical-center {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 90vh;
    }

    .vertical-center .form-group {
        width: 300px;
    }

    .img-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 90vh;
    }

    .custom-btn {
        background-color: #64B58A !important;
        /* Custom background color with !important */
        color: white !important;
        border: none;
        width: 300px;
        /* Custom text color with !important */
        /* Add other custom styles here */
    }


    @media only screen and (max-width: 600px) {
        .row {
            display: flex;
            flex-direction: column;
        }

        .vertical-center {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .img-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
            padding: 30px;
        }

        .custom-btn {
            background-color: #64B58A !important;
            /* Custom background color with !important */
            color: white !important;
            border: none;
            /* Custom text color with !important */
            /* Add other custom styles here */
        }

        #floo-logo {
            width: 70%;
        }
    }
</style>

<template>
  <div class="container-fluid mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div v-if="loginFailed" class="alert alert-danger">Email atau Password Anda salah.</div>
        <div class="card border-0 rounded shadow">
          <div class="card-body">
            <h4>LOGIN</h4>
            <hr />
            <form @submit.prevent="login">
              <div class="form-group">
                <label>Email address</label>
                <input type="email" v-model="user.email" class="form-control" placeholder="Email Address" />
              </div>
              <div v-if="validation.email" class="mt-2 alert alert-danger">
                {{ validation.email[0] }}
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" v-model="user.password" class="form-control" placeholder="Password" />
              </div>
              <div v-if="validation.password" class="mt-2 alert alert-danger">
                {{ validation.password[0] }}
              </div>
              <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  data() {
    return {
      user: {
        email: 'welldyrosman@gmail.com',
        password: 'Password123'
      },
      validation: [],
      loginFailed: null
    }
  },
  methods: {
    login() {
      axios.post('http://localhost:8000/api/login', this.user).then((response) => {

        //set token
        localStorage.setItem('token', response.data.token)

        //redirect ke halaman dashboard
        this.$router.push('/dashboard')
        // this.loginFailed = true
      })
    }
  }
}
</script>

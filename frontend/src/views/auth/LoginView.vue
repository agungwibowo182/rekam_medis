<template>
  <div id="kt_body" class="bg-body">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Authentication - Sign-in -->
      <div
        class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
        :style="
          'background-image: url(' + require('@/assets/media/illustrations/sketchy-1/14.png') + ')'
        "
      >
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
          <!--begin::Logo-->
          <router-link to="/demo1/dist/index.html" class="mb-12">
            <img
              alt="Logo"
              src="../assets/template/dist/assets/media/logos/logo-2.svg"
              class="h-40px"
            />
          </router-link>
          <!--end::Logo-->
          <!--begin::Wrapper-->
          <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            <form class="form w-100" novalidate @submit.prevent="signIn" id="kt_sign_in_form">
              <!--begin::Heading-->
              <div class="text-center mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3">Sign In to Metronic</h1>
                <!--end::Title-->
                <!--begin::Link-->
                <div class="text-gray-400 fw-bold fs-4">
                  New Here?
                  <router-link
                    to="/demo1/dist/authentication/flows/basic/sign-up.html"
                    class="link-primary fw-bolder"
                    >Create an Account</router-link
                  >
                </div>
                <!--end::Link-->
              </div>
              <!--begin::Heading-->
              <!--begin::Input group-->
              <div class="fv-row mb-10">
                <!--begin::Label-->
                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input
                  v-model="email"
                  class="form-control form-control-lg form-control-solid"
                  type="text"
                  name="email"
                  autocomplete="off"
                />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="fv-row mb-10">
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack mb-2">
                  <!--begin::Label-->
                  <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                  <!--end::Label-->
                  <!--begin::Link-->
                  <router-link
                    to="/demo1/dist/authentication/flows/basic/password-reset.html"
                    class="link-primary fs-6 fw-bolder"
                    >Forgot Password ?</router-link
                  >
                  <!--end::Link-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Input-->
                <input
                  v-model="password"
                  class="form-control form-control-lg form-control-solid"
                  type="password"
                  name="password"
                  autocomplete="off"
                />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              <!--begin::Actions-->
              <div class="text-center">
                <!--begin::Submit button-->
                <button
                  type="submit"
                  id="kt_sign_in_submit"
                  class="btn btn-lg btn-primary w-100 mb-5"
                >
                  <span class="indicator-label">Continue</span>
                  <span v-if="isLoading" class="indicator-progress"
                    >Please wait...<span
                      class="spinner-border spinner-border-sm align-middle ms-2"
                    ></span
                  ></span>
                </button>
                <!--end::Submit button-->
                <!--begin::Separator-->
                <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                <!--end::Separator-->
                <!--begin::Google link-->
                <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                  <img
                    alt="Logo"
                    src="../assets/template/dist/assets/media/logos/logo-2.svg"
                    class="h-20px me-3"
                  />Continue with Google</a
                >
                <!--end::Google link-->
                <!--begin::Google link-->
                <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                  <img
                    alt="Logo"
                    src="../assets/template/dist/assets/media/logos/logo-2.svg"
                    class="h-20px me-3"
                  />Continue with Facebook</a
                >
                <!--end::Google link-->
                <!--begin::Google link-->
                <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                  <img
                    alt="Logo"
                    src="../assets/template/dist/assets/media/logos/logo-2.svg"
                    class="h-20px me-3"
                  />Continue with Apple</a
                >
                <!--end::Google link-->
              </div>
              <!--end::Actions-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="d-flex flex-center flex-column-auto p-10">
          <!--begin::Links-->
          <div class="d-flex align-items-center fw-bold fs-6">
            <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
            <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2"
              >Contact</a
            >
            <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2"
              >Contact Us</a
            >
          </div>
          <!--end::Links-->
        </div>
        <!--end::Footer-->
      </div>
      <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Main-->
  </div>
</template>

<script>
import { reactive, ref } from 'vue'
import { useRouter } from 'vue-router'
import axios from 'axios'

export default {
  setup() {
    //inisialisasi vue router on Composition API
    const router = useRouter()

    //state user
    const user = reactive({
      email: '',
      password: ''
    })

    //state validation
    const validation = ref([])

    //state loginFailed
    const loginFailed = ref(null)

    //method login
    function login() {
      //define variable
      let email = user.email
      let password = user.password

      //send server with axios
      axios
        .post('http://localhost:8000/api/login', {
          email,
          password
        })
        .then((response) => {
          if (response.data.success) {
            //set token
            localStorage.setItem('token', response.data.token)

            //redirect ke halaman dashboard
            return router.push({
              name: 'dashboard'
            })
          }

          //set state loggedIn to true
          loginFailed.value = true
        })
        .catch((error) => {
          //set validation dari error response
          validation.value = error.response.data
        })
    }

    return {
      user, // <-- state user
      validation, // <-- state validation
      loginFailed, // <-- state loggedIn
      login // <-- method login
    }
  }
}
</script>

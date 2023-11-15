import { boot } from 'quasar/wrappers'
import axios from 'axios'

axios.defaults.withCredentials = true
const api = axios.create({ 
  baseURL: 'http://localhost:8000',
  // headers: {
  //   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
  // }
})
// axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// Redirect if Unauthorized

let _router = null

/* api.interceptors.response.use(
    (response) => response,
    (error) => {
      // Check if the error response status is 401 (Unauthorized)
      if (error.response.status === 401) {
        // Handle the 401 error here, e.g., redirect to login page
        _router.push('/')
        console.error('Unauthorized access. Please log in again.')
      }else if (error.response.status === 419) {
        axios.get('http://localhost:8000/sanctum/csrf-cookie')
      }
      return Promise.reject(error)
    }
  ) */
export default boot(({ app, router }) => {
  // for use inside Vue files (Options API) through this.$axios and this.$api

  app.config.globalProperties.$axios = axios
  // ^ ^ ^ this will allow you to use this.$axios (for Vue Options API form)
  //       so you won't necessarily have to import axios in each vue file

  app.config.globalProperties.$api = api
  // ^ ^ ^ this will allow you to use this.$api (for Vue Options API form)
  //       so you can easily perform requests against your app's API

  _router = router
})

export { axios, api }

import { boot } from 'quasar/wrappers'
import axios from 'axios'

const api = axios.create({ baseURL: 'localhost:8000' })

// Redirect if Unauthorized
api.interceptors.response.use(
    (response) => response,
    (error) => {
      // Check if the error response status is 401 (Unauthorized)
      if (error.response.status === 401) {
        // Handle the 401 error here, e.g., redirect to login page
        store.clear()
        _router.push('/login')
        console.error('Unauthorized access. Please log in again.')
      }
      return Promise.reject(error)
    }
  )

export default boot(({ app }) => {
  // for use inside Vue files (Options API) through this.$axios and this.$api

  app.config.globalProperties.$axios = axios
  // ^ ^ ^ this will allow you to use this.$axios (for Vue Options API form)
  //       so you won't necessarily have to import axios in each vue file

  app.config.globalProperties.$api = api
  // ^ ^ ^ this will allow you to use this.$api (for Vue Options API form)
  //       so you can easily perform requests against your app's API
})

export { axios, api }
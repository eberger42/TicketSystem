<template>
  <q-page class="flex flex-center ">
      <div class="column q-pa-md">
          <q-card class="bg-primary-light">
            <q-card-section class="bg-primary text-white">
              <div class="text-h3 text-center">Login</div>
            </q-card-section>

            <q-card-section align="right">
              <q-form class="row q-pa-md justify-center"  @submit="submit" >
                <div class="q-gutter-y-md">
                  <div class="q-gutter-y-sm">
                    <div class="text-h5 text-left text-bold text-light">Username</div>
                    <q-input
                      class="q-mt-none col text-dark"
                      bg-color="primary-light-2"
                      square standout
                      v-model="form.username"
                      label="Username"
                      lazy-rules
                      :rules="[ val => val && val.length > 4 || 'Length > 4']"
                    />
                    <div class="text-h5 text-left text-bold text-light">Password</div>
                    <q-input
                      class="q-mt-none col text-dark"
                      color="primary"
                      text-green
                      bg-color="primary-light-2"
                      square standout
                      v-model="form.password"
                      label="Password"
                      lazy-rules
                      :rules="[ val => val && val.length > 4 || 'Length > 4']"
                      />
                  </div>
                  <div class="row justify-center">
                    <q-btn class="text-dark" color="primary-light-2" dense size="lg" label="Submit" type="submit" />
                </div>
                </div>
              </q-form>
              <div class="row justify-center">
                <q-btn class="text-dark" color="primary-light-2" dense label="Register" to="/register" />
                <q-btn class="text-dark" color="primary-light-2" dense label="TestLogin" @click="TestLogin" />
              </div>
            </q-card-section>
          </q-card>
        </div>

  </q-page>

</template>
<script setup>
  import { ref } from 'vue'
  import { api } from 'boot/axios'
  import { useRouter } from 'vue-router'

  const form = ref(
    {
      username: '',
      passsword: ''
    }
  )
  const router = useRouter()

  const submit = async () => {
    // Login...
    const { data } = await api.post('/login', {
      email: form.value.username,
      password: form.value.password
    }).then(response => {
          console.log(response.data);
      })
      .catch(err => {
          console.error(err);
      });

  }

  const TestLogin = async () => {

    await api.post('/login', {
      email: 'test@example.com',
      password: 'password'
    }).then(response => {
      console.log(response.data);
    })
    .catch(err => {
      console.error(err);
    });
  }

</script>

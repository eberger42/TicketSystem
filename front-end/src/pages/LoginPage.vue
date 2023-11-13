<template>
  <q-page class="flex flex-center">
    <div class="column q-pa-md shadow-class shadow-3">

      <div class="row flex-center q-pa-sm ">
        <div class="text-h2">Login</div>
      </div>
      <q-form class="row q-pa-md justify-center"  @submit="submit" >
        <div class="q-gutter-y-md">
          <div class="q-gutter-y-sm">
            <q-input
              class="col"
              square standout
              v-model="form.username"
              label="Username"
              lazy-rules
              :rules="[ val => val && val.length > 4 || 'Length > 4']"
            />
            <q-input
              class="col"
              square standout
              v-model="form.password"
              label="Password"
              lazy-rules
              :rules="[ val => val && val.length > 4 || 'Length > 4']"
              />
          </div>
          <div class="row justify-center">
            <q-btn label="Submit" type="submit" color="primary"/>
        </div>
        </div>
      </q-form>
      <div class="row justify-center">
        <q-btn label="Register" to="/register"/>
        <q-btn label="TestLogin" @click="TestLogin"/>
        <q-btn label="Test" @click="Test"/>
      </div>
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

const Test = async () => {

  await api.get('/comments').then(response => {
    console.log(response.data);
  })
  .catch(err => {
    console.error(err);
  });
}
</script>

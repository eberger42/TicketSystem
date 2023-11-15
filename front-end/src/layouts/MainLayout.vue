<template>
  <q-layout view="hHh Lpr lFf">
    <q-header elevated>
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          icon="menu"
          aria-label="Menu"
          @click="toggleLeftDrawer"
        />

        <q-toolbar-title>
          Ticketing App
        </q-toolbar-title>

        <q-btn
          stretch
          flat
          color="primary"
          text-color="light"
          label="Login"
          to="login"
        />
      </q-toolbar>
    </q-header>

    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      bordered
    >
      <q-list>
        <q-item-label
          header
        >
          Essential Links
        </q-item-label>

        <EssentialLink
          v-for="link in essentialLinks"
          :key="link.title"
          v-bind="link"
        />
      </q-list>
    </q-drawer>

    <q-page-container class="bg-background">
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script setup>
import { defineComponent, ref, onMounted } from 'vue'
import EssentialLink from 'components/EssentialLink.vue'
import { api } from 'boot/axios'

const leftDrawerOpen = ref(false)

const linksList = [
  {
    title: 'Home',
    caption: 'Ticket System',
    icon: 'home',
    link: '/'
  },
  {
    title: 'Tickets',
    caption: 'Tickets Page',
    icon: 'code',
    link: '/ticket'
  },
  {
    title: 'Articles',
    caption: 'Knowledge Base Articles',
    icon: 'book',
    link: '/article'
  }
]
const essentialLinks = linksList

onMounted(async () => {
  await api.get('/sanctum/csrf-cookie')
  await api.post('/login', {
    email: 'test@example.com',
    password: 'password'
  }).then(response => {
    console.log(response.data);
  })
  .catch(err => {
    console.error(err);
  });
})

function toggleLeftDrawer(){
  leftDrawerOpen.value = !leftDrawerOpen.value
}


</script>

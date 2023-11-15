<template>
  <q-page class="flex flex-center ">
    <div class="row items-center justify-center">
      <div class="col-12 text-h4 text-center">About Us</div>
      <div class="col-3"></div>
      <div class="col-6 text-body1 text-center">
        This is a project to learn a variety of different Technologies
        including, Quasar, Laravel, MySQL, and AWS. We are building out a
        ticket system that will be used to track issues and gather data.

      </div>
      <div class="col-3"></div>
      <div class="col-12 q-pa-md"> <q-separator  inset /></div>
      <q-card class="col-3">
        <q-img src="https://media.licdn.com/dms/image/C4E03AQG3Z7bV8CjRVg/profile-displayphoto-shrink_200_200/0/1608742515419?e=1705536000&v=beta&t=SOofKAGpXvquE1p-tAFPaExoFwyQI_4Y6nx5UI4r7pU">
          <div class="absolute-bottom text-h6">
            Nathan Ahrens
          </div>
        </q-img>

        <q-card-section>
          Sr. Software Developer at The J.M. Smucker Company
        </q-card-section>
      </q-card>
      <div class="col-1"></div>
      <q-card class="col-3">
        <q-img src="https://media.licdn.com/dms/image/C4E03AQFAzcunS6E2WQ/profile-displayphoto-shrink_100_100/0/1549376975597?e=1705536000&v=beta&t=4UxAhZsBc5qMIwf7iGbIAK9tWhW7HojaGEYRz4Yp1D4">
          <div class="absolute-bottom text-h6">
            Erich Berger
          </div>
        </q-img>

        <q-card-section>
          Integrated Systems Associate Engineer at IVideo Technologies
        </q-card-section>
      </q-card>
    </div>
  </q-page>
</template>

<script>
import { defineComponent } from 'vue'

export default defineComponent({
  name: 'IndexPage'
})
</script>

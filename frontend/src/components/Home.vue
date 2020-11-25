<template>
   <section class=" w-full h-full top-0">
        <div class="absolute top-0 w-full h-full bg-red-500"></div>
        <div class="container mx-auto px-4 h-full mt-5">
          <div class="flex content-center items-center ">
              <div class="w-full">
                  <div class="relative  shadow-lg rounded-lg bg-gray-100 border-0">
                    <div class=" flex justify-between">
                    <h1 class="text-center text-2xl py-5 ml-5">Congress <span v-if="user"> {{ user.name }} </span> you have Successfully Login</h1>
                    <button class="bg-red-500  m-5 px-5 rounded-lg  shadow-lg  text-white hover:bg-red-600" @click="logmeOut">Logout</button>
                    </div>
                  </div>
              </div>
          </div>
        </div>
   </section>
</template>

<script>
import axios from 'axios'
export default {
    name: 'Home',
    data() {
      return {
        user: null
      }
    },
    async created(){
      const response = await axios.post('user');
      this.user = response.data;
    },
    methods: {
      logmeOut(){
        localStorage.removeItem('token');
        this.$router.push('/');
      }
    },
}
</script>

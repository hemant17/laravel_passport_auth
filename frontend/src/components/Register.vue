<template>
     <section class=" w-full h-full top-0">
        <div class="absolute top-0 w-full h-full bg-red-500"></div>
          <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
              <div class="w-full lg:w-4/12 px-4 pt-32">
                  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-100 border-0">
                      <div class="rounded-t mb-0 px-6 py-6">
                               <div class="text-center ">
                                  <button class="bg-gray-600 text-white active:bg-gray-700 text-sm font-bold uppercase py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full" type="button" style="transition: all 0.15s ease 0s;" @click="$router.push('/')">Log In</button>
                              </div>
                        </div>
                     <hr class=" border-b-1 border-gray-400">
                      <div class="flex-auto px-4 lg:px-10 py-10 pt-7">
                          <div class="text-gray-500 text-center mb-3 font-bold">Login</div>
                          <form @submit.prevent="handleSubmit">
                              <div class="relative w-full mb-3">
                                  <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Name</label>
                                  <input type="text" v-model="name" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Name" style="transition: all 0.15s ease 0s;">
                              </div>
                              <div class="relative w-full mb-3">
                                  <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Email</label>
                                  <input type="email" v-model="email" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Email" style="transition: all 0.15s ease 0s;">
                              </div>
                              <div class="relative w-full mb-3">
                                  <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Password</label>
                                  <input type="password" v-model="password" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Password" style="transition: all 0.15s ease 0s;">
                              </div>
                               <div class="relative w-full mb-3">
                                  <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Confirm Password</label>
                                  <input type="password" v-model="passowrd_confirm" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Confirm Password" style="transition: all 0.15s ease 0s;">
                              </div>
                              <div>
                              </div>
                              <div class="text-center mt-6">
                                  <button class="bg-gray-600 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full" style="transition: all 0.15s ease 0s;" >Register In</button>
                              </div>
                          </form>
                      </div>
                        
                  </div>
              </div>
            </div>
         </div>
      </section>
</template>

<script>
import axios from 'axios';
export default {
    name:'Register',
  data() {
    return {
      name:'',
      email:'',
      password:'',
      passowrd_confirm:''
    }
  },
  methods: {
    async handleSubmit(){
      await axios.post('register',{
        name:this.name,
        email:this.email,
        password:this.password,
        passowrd_confirm:this.passowrd_confirm
      });
      this.$router.push('login');
      
    }
  }
}
</script>

<style>

</style>
<template>
  <div class="-m-2 text-center" v-if="error">
                                    <div class="p-2">
                                        <div class="inline-flex items-center bg-white leading-none text-red-600 rounded-full p-2 shadow text-teal text-sm">
                                        <span class="inline-flex bg-red-500 text-white rounded-full h-6 px-3 justify-center items-center">Error</span>
                                        <span class="inline-flex px-2">{{ error }}</span>
                                        </div>
                                    </div>
                                </div>
</template>

<script>
export default {
    name: 'Error',
    props:['error']
}
</script>

<template>
    <div class="flex items-center justify-between py-4">
            <button @click.prevent="addToCart" class="bg-500 text-white p-2" style="background-color:red;!important"
              
            >
              Ajouter au panier
            </button>
    </div>
</template>

<script setup>
    const productId = defineProps(['productId']);
    const addToCart =async()=> {
      await axios.get('/sanctum/csrf-cookie');
      await axios.get('/api/user')
      .then(async(res)=>{
        console.log(res);
      })
      .catch(err=> console.log(err));
    }
</script>
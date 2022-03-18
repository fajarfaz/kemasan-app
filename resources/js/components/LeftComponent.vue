<template>
    <div class="container w-full h-full p-10 flex flex-col space-y-8 text-white pt-32 pl-14">
        <p class="text-5xl">
           <label class=" font-semibold">Premium</label>
           <label >Packaging</label>
       </p>
       <label class="text-lg">The best quality packaging with a modern minimalist design and can be customized.</label>
       <div class="flex flex-row space-x-4 px-4 mx-auto">
        <div class="border-1 border-white h-8 w-8 flex rounded-full p-1 hover:shadow-xl hover:shadow-white/70 duration-300">
            <span class="h-full w-full rounded-full bg-white"> </span>
        </div>
        <div class="border-1 border-yellow-500 h-8 w-8 flex rounded-full p-1 hover:shadow-xl hover:shadow-yellow-500/70 duration-300">
            <span class="h-full w-full rounded-full bg-yellow-500"> </span>
        </div>
        <div class="border-1 border-blue-500 h-8 w-8 flex rounded-full p-1 hover:shadow-xl hover:shadow-blue-500/70 duration-300">
            <span class="h-full w-full rounded-full bg-blue-500"> </span>
        </div>
        <div class="border-1 border-red-500 h-8 w-8 flex rounded-full p-1 hover:shadow-xl hover:shadow-red-500/70 duration-300">
            <span class="h-full w-full rounded-full bg-red-500"> </span>
        </div>
        <div class="border-1 border-purple-500 h-8 w-8 flex rounded-full p-1 hover:shadow-xl hover:shadow-purple-500/70 duration-300">
            <span class="h-full w-full rounded-full bg-purple-500"> </span>
        </div>
    </div>

    <div class="border-8 border-white relative bg-gray-800/50 rounded-xl mx-10 p-4">
        <div class="absolute w-ful h-full border-2 border-gray-50/20 inset-0"></div>
        <div class="grid grid-cols-2 absolute w-2 z-10 -left-2 inset-y-4 "> 
         <span class="bg-gray-400"></span>
         <span class="bg-gray-800"></span>
     </div>
     <div class="grid grid-cols-2 absolute w-2 z-10 -right-2 inset-y-4 "> 
        <span class="bg-gray-800"></span>
        <span class="bg-gray-400"></span>           
    </div>
        <div class="grid grid-rows-2 absolute h-2 z-10 -top-2 inset-x-4 "> 
          <span class="bg-gray-400"></span> 
          <span class="bg-gray-800"></span>                
      </div>
      <div class="grid grid-rows-2 absolute h-2 z-10 -bottom-2 inset-x-4 "> 
         <span class="bg-gray-800"></span>           
         <span class="bg-gray-400"></span>             
     </div>

    <div class="space-y-4 flex flex-col">
        <div class="flex flex-row space-x-4 justify-between w-full">
            <label class="text-1xl">3 pcs</label>
            <label class="text-3xl font-semibold">Rp. 8.670</label>
        </div>

        <div class="text-3xl w-full bg-white rounded-lg flex flex-row items-center text-gray-800 relative rounded-xl">
            <button class="font-semibold text-xl absolute inset-y-0 left-4">-</button>
            <input type="number" name="" class="w-full rounded-xl px-4 text-center py-1">
            <button class="font-semibold text-xl absolute inset-y-0 right-4">+</button>
        </div>
        <button class="bg-blue-500 py-2.5 w-full rounded-lg font-semibold tracking-widest cursor-pointer hover:bg-blue-600 z-10 duration-300">Add to cart</button>
    </div>
</div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

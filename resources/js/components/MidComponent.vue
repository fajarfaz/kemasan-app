<template>
    <div class="container w-full h-full py-10 relative pt-24">

        <div class="relative p-4">
            <div class="absolute h-auto inset-x-0 top-0 flex flex-col space-y-2 text-white">
                <label class="text-center font-semibold tracking-wider">11.5 Cm</label>
                <span class="h-0.5 w-8/12 bg-white ml-12 border-b-2 border-red-200"></span>
            </div>

            <div class="absolute h-auto inset-y-10 right-0 flex flex-row space-x-4 text-gray-800 items-center">              
                <span class="w-0.5 h-5/6 bg-white"></span>
                <label class="text-center font-semibold tracking-wider">11.5 Cm</label>
                <label class="absolute -left-16 top-16 rotate-90 w-max">one way Valve 6 points</label>
                <label class="absolute bottom-20 w-36">Flat box pouch, can stand upright without a back</label>
            </div>
            <img src="images/kemasan.png" class="object-contain object-center ml-12">
             <label class="absolute bottom-4 right-6">Weight +/- 14gr per-piece</label>
        </div>
       
        <div class="flex flex-row space-x-10 items-center justify-center text-white mt-8">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-left stroke-2 font-semibold" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
          </svg>
          <div class="relative h-16 w-16 bg-white rounded-xl flex relative shadow-[6px_2px_12px_rgba(0,0,0,0.25),inset_2px_4px_25px_rgba(0,0,0,0.25)] ">
            <img src="images/pic.png" class="object-contain object-center bottom-4 left-1 absolute ">
        </div>   
        <div class="relative h-16 w-16 bg-white rounded-xl flex relative shadow-[6px_2px_12px_rgba(0,0,0,0.25),inset_2px_4px_25px_rgba(0,0,0,0.25)] ">
            <img src="images/pic1.png" class="object-contain object-center bottom-4 left-1 absolute ">
        </div>  
        <div class="relative h-16 w-16 bg-white rounded-xl flex relative shadow-[6px_2px_12px_rgba(0,0,0,0.25),inset_2px_4px_25px_rgba(0,0,0,0.25)] ">
            <img src="images/pic2.png" class="object-contain object-center bottom-4 left-1 absolute ">
        </div>   
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-right stroke-1 text-gray-800" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
      </svg>
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

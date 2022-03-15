<template>
    <div class="container w-full h-full px-10 flex flex-row pt-24">
        <div class="flex flex-col space-y-8 z-10 relative w-10/12 ml-10 mt-2 px-2">          
            <div class="flex flex-row font-semibold space-x-2 bg-[url('/images/yellow-rec.png')] w-full h-max bg-contain px-4 py-4 bg-no-repeat items-start text-gray-700">                
                <label class="text-2xl">Rp.</label>
                <label class="text-5xl ">2.890</label>                
            </div>
           
            <div class="absolute bg-[url('/images/white-rec.png')] left-10 -top-[14em] h-[341px] w-[168px] -z-10 bg-contain bg-no-repeat"></div>

            <div class="absolute left-10 bottom-0">
               <div class="relative bg-[url('/images/white-rec.png')]  h-[241px] w-[168px] -z-10 bg-cover bg-no-repeat">
                 <span class="absolute top-0 left-0 w-0 h-0 border-t-[40px] border-yellow-400" style="border-right: 40px solid transparent;border-left: 0px solid transparent;"></span>
                 </div>
             </div>
         <div class="flex flex-col ml-10 pt-2 space-y-4 pr-10">
            <label class="text-2xl ">Ingredients</label>
            <div class="flex flex-col space-y-2 w-max">
                <div class="relative bg-white py-1 px-4 border-l-2 border-gray-600">
                    <span class="absolute inset-y-0 right-0 w-0 h-0 border-t-[14px] border-yellow-400" style="border-left: 14px solid transparent;border-right: 0px solid transparent;"></span>
                    <label>BOPP Plastic</label>
                </div>
                <div class="relative bg-white py-1 px-4 border-l-2 border-gray-600">
                    <span class="absolute inset-y-0 right-0 w-0 h-0 border-t-[14px] border-yellow-400" style="border-left: 14px solid transparent;border-right: 0px solid transparent;"></span>
                    <label>VMPET</label>
                </div>
                <div class="relative bg-white py-1 px-4 border-l-2 border-gray-600">
                    <span class="absolute inset-y-0 right-0 w-0 h-0 border-t-[14px] border-yellow-400" style="border-left: 14px solid transparent;border-right: 0px solid transparent;"></span>
                    <label>LDPE</label>
                </div>
            </div>
            <div class="flex flex-col text-right"> 
               <label class="text-2xl leading-none">Thickness</label>
               <label class="text-lg  leading-none">130 Micron</label>
           </div>
            <div class="flex flex-col text-right pt-4 space-y-2 right-0 items-end"> 
               <label class="text-2xl leading-none pr-4">Capacity</label>
               <span class="h-0.5 w-full bg-yellow-400 -mr-2"></span>
               <div class="flex flex-row items-end pr-4 space-x-2">
                   <img src="/images/noto_package.svg" class="h-7 w-7 object-center">
                    <label class="text-3xl font-semibold leading-none">250gr</label>
               </div>              
           </div>   
       </div>
       <div class="flex bg-[url('/images/yellow-rec.png')] w-full h-max bg-contain px-5 pt-3 pb-4 bg-no-repeat items-center  text-gray-700">                
            <label class="text-lg">Equipped with a Pocket Zipper</label>                       
        </div>
   </div>
   <div class="w-2/12 text-gray-800 z-10 relative flex flex-col items-center">
    <img src="images/line-rec.svg" class=" object-fill w-[168px] h-[341px] -mt-36 -ml-10 ">
    
    <div class="flex flex-row space-x-4 font-semibold rotate-90 mt-44 text-lg">
       <label>Amazon</label>
       <label>Shopee</label>
       <label>Facebook</label>
       <label>Website</label>
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

<template>
   <div>
        <h1 class="font-normal text-3xl text-gray-darkest leading-none mb-8">
            Full Logo
        </h1>

        <div class="mb-10">
            <picture style="height:382px" class="rounded-lg flex shadow items-center justify-center mb-6">
                <img src="/images/logo.svg" alt="logo"/>
            </picture>

            <div class="flex justify-between items-center">
                <p>Original Logo on <strong>white</strong> background</p>

                <a href="/images/logo.svg" class=" border border-gray-light px-8 rounded-full text-black font-bold text-xs">logo.svg</a>
            </div>
        </div>

         <div>
            <picture style="height:382px" class="rounded-lg flex shadow items-center justify-center mb-6 bg-blue-600 ">
                <img src="/images/negative-logo.svg" alt="logo"/>
            </picture>

            <div class="flex justify-between items-center">
                <p>Negative Logo on <strong>white</strong> background</p>

                <a href="/images/negative-logo.svg" class=" border border-gray-light px-8 rounded-full text-black font-bold text-xs">logo.svg</a>
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

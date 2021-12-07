<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Assets</title>
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body class="font-body ">
        <div id="app">

           <div class="container mx-auto ">

            <header class="py-6 mb-8">
                <h1>
                    <img src="/images/logo.svg" alt="Laracasts">
                </h1>
            </header>

            <main class="flex">
                <aside class="w-1/5">
                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-4">The Brand</h5>
                        <ul>
                            <li class=" text-sm leading-loose"> <router-link class=" text-black"  to="/">Logo</router-link></li>
                            <li class=" text-sm leading-loose"><router-link  class=" text-black" :to="{name:'about'}">Logo Symbol</router-link></li>
                            <li class=" text-sm leading-loose"><router-link  class=" text-black" :to="{name:'about'}">Colors</router-link></li>
                            <li class=" text-sm leading-loose"><router-link  class=" text-black" :to="{name:'about'}">Typography</router-link></li>
                        </ul>
                    </section>

                    <section>
                        <h5 class="uppercase font-bold mb-4">Doodles</h5>
                        <ul>
                            <li class=" text-sm leading-loose"> <router-link class=" text-black"  to="/">Mascot</router-link></li>
                            <li class=" text-sm leading-loose"> <router-link class=" text-black"  to="/">Illustration</router-link></li>
                            <li class=" text-sm leading-loose"> <router-link class=" text-black"  to="/">Loaders & Animations</router-link></li>
                            <li class=" text-sm leading-loose"> <router-link class=" text-black"  to="/">Wallpapers</router-link></li>
                        </ul>
                    </section>
                </aside>

                <div class="primary">
                    <router-view></router-view>
                </div>
            </main>
           </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>

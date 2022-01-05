<x-guest-layout>
    <nav class="bg-black/80 fixed w-full top-0 left-0 z-10">
        <ul class="flex justify-end py-2 px-10">
            <li class="inline-block text-white font-semibold hover:bg-blue-300 rounded hover:text-white hover:shadow-md hover:shadow-blue-700"><a class="px-5 py-2 inline-block" href="{{ route('home') }}">Home</a></li>
            <li class="inline-block text-white font-semibold hover:bg-blue-300 rounded hover:text-white hover:shadow-md hover:shadow-blue-700"><a class="px-5 py-2 inline-block" href="{{ route('contact-us') }}">Contact us</a></li>
        </ul>
    </nav>

    <main>

        <section class="py-12 text-white isolate relative overflow-hidden bg-gradient-to-bl to-blue-900 from-black">

            <div class="flex justify-between place-items-center max-w-screen-xl w-full mx-auto">
                <div>
                    <h1 class="text-6xl relative font-bold">Portfolio</h1>
                    <p class="relative w-96"><span class="text-2xl text-blue-200 font-bold block">Welcome to my portfolio</span> I'm a experienced full stack developer with many different projects under my belt.</p>
                </div>
                <img src="./images/profile.svg" alt="Profile image">
            </div>
            
        </section>

        <!-- <section class="bg-black">
            <h2 class="text-7xl py-44 text-white text-center">HISTORY</h2>
        </section>

        <section class="py-24 bg-gradient-to-tr to-cyan-800 from-black">

            <div class="flex justify-between place-items-center max-w-screen-xl w-full mx-auto">
                <div class="w-40 bg-white rounded p-2 shadow-lg">
                    <div class="w-full h-5 bg-cyan-800 rounded"></div>
                    <div class="flex gap-1 mt-1">
                        <div class="h-12 w-1/3 bg-gray-200"></div>
                        <div class="h-12 w-1/3 bg-gray-200"></div>
                        <div class="h-12 w-1/3 bg-gray-200"></div>
                    </div>
                    <div class="flex gap-1 mt-1">
                        <div class="h-12 w-1/3 bg-gray-200"></div>
                        <div class="h-12 w-1/3 bg-gray-200"></div>
                        <div class="h-12 w-1/3 bg-gray-200"></div>
                    </div>
                </div>

                <div>
                    <h2 class="text-white text-6xl relative font-bold">MondoBMS</h2>
                    <p class="relative w-96 text-white"><span class="text-2xl text-cyan-300 font-bold block">Business management system</span>A system desgined to make life easier for the end user.</p>
                </div>
            </div>
        </section>

        <section class="py-24 bg-gradient-to-br  to-pink-900 from-black">

            <div class="flex justify-between place-items-center max-w-screen-xl w-full mx-auto">
                <div>
                    <h2 class="text-white text-6xl relative font-bold">DistinctlyAwesome</h2>
                    <p class="relative w-96 text-white"><span class="text-2xl text-pink-300 font-bold block">Business management system</span>A system desgined to make life easier for the end user.</p>
                </div>

                <div class="w-40 bg-white rounded p-2 shadow-lg">
                    <div class="w-full h-5 bg-pink-800 rounded"></div>
                    <div class="flex gap-1 mt-1">
                        <div class="h-12 w-1/3 bg-gray-200"></div>
                        <div class="h-12 w-1/3 bg-gray-200"></div>
                        <div class="h-12 w-1/3 bg-gray-200"></div>
                    </div>
                    <div class="flex gap-1 mt-1">
                        <div class="h-12 w-1/3 bg-gray-200"></div>
                        <div class="h-12 w-1/3 bg-gray-200"></div>
                        <div class="h-12 w-1/3 bg-gray-200"></div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="py-24 bg-gradient-to-bl to-pink-500 from-yellow-500">

            <div class="mx-auto max-w-screen-lg">
                <h2 class="text-7xl text-center font-bold text-white font-serif">HISTORY</h2>
                <p class="text-center text-xl text-orange-100 font-bold"><i>Major projects</i></p>
                <p class="text-center text-white font-semibold">The highlights of my career</p>
            </div>


            <div class="flex justify-between place-items-center max-w-screen-xl w-full mx-auto my-32 hover:bg-white hover:shadow-2xl group p-4 rounded transition">
                <img src="./images/analytics.svg" alt="Mondo analytics" class="w-80">

                <div class="group-hover:hidden">
                    <h2 class="text-white text-6xl relative font-bold text-right">MondoBMS</h2>
                    <p class="relative w-96 text-white text-right"><span class="text-2xl text-black font-bold block text-right">Business management system</span>A system desgined to make life easier for the end user.</p>
                </div>

                <div class="group-hover:flex gap-2 hidden">

                    <div class="rounded bg-white shadow-md hover:shadow-lg w-40">
                        <div class="bg-slate-100 h-24"><img src="./images/saas.svg" alt="saas" class="mx-auto w-24"></div>
                        <div class="bg-white p-2">
                            <h3 class="font-bold">SaaS</h3>
                            <p class="text-sm text-gray-400 leading-1">Spearheaded planning and development of SaaS</p>
                        </div>
                    </div>

                    <div class="rounded bg-white shadow-md hover:shadow-lg w-40">
                        <div class="bg-slate-100 h-24"><img src="./images/layout.svg" alt="saas" class="mx-auto w-24"></div>
                        <div class="bg-white p-2">
                            <h3 class="font-bold">Builder</h3>
                            <p class="text-sm text-gray-400 leading-1">Implementation of website layout builder</p>
                        </div>
                    </div>

                    <div class="rounded bg-white shadow-md hover:shadow-lg w-40">
                        <div class="bg-slate-100 h-24"><img src="./images/manager.svg" alt="saas" class="mx-auto w-32"></div>
                        <div class="bg-white p-2">
                            <h3 class="font-bold">Managing</h3>
                            <p class="text-sm text-gray-400 leading-1">Managing the full stack</p>
                        </div>
                    </div>

                    <div class="rounded bg-white shadow-md hover:shadow-lg w-40">
                        <div class="bg-slate-100 h-24"><img src="./images/laravel-and-vue.svg" alt="saas" class="mx-auto w-32"></div>
                        <div class="bg-white p-2">
                            <h3 class="font-bold">Laravel / Vue</h3>
                            <p class="text-sm text-gray-400 leading-1">Working in Laravel / Vue for more then 4 years.</p>
                        </div>
                    </div>

                    <div class="rounded bg-white shadow-md hover:shadow-lg w-40">
                        <div class="bg-slate-100 h-24"><img src="./images/coding.svg" alt="saas" class="mx-auto w-24"></div>
                        <div class="bg-white p-2">
                            <h3 class="font-bold">Visual coding</h3>
                            <p class="text-sm text-gray-400 leading-1">Created a coding interface with flow charts</p>
                        </div>
                    </div>

                    <!-- <ul class="list-disc w-96 text-right">
                        <li>Spearheaded planning and development of SaaS</li>
                        <li>Implementation of website layout builder</li>
                        <li>Managing the full stack</li>
                        <li>Working in Laravel for more then 4 years.</li>
                        <li>Created a coding interface with flow charts</li>
                    </ul> -->
                </div>
            </div>

            <div class="flex justify-between place-items-center max-w-screen-xl w-full mx-auto my-32 hover:bg-white hover:shadow-2xl group p-4 rounded transition">
                <div>
                    <h2 class="text-white text-6xl relative font-bold">DistinctlyAwesome</h2>
                    <p class="relative w-96 text-white"><span class="text-2xl text-black font-bold block">Business management system</span>A system desgined to make life easier for the end user.</p>
                </div>

                <img src="./images/takeout.svg" alt="Distinctly Awesome" class="w-80">
            </div>

            <div class="flex justify-between place-items-center max-w-screen-xl w-full mx-auto my-32 hover:bg-white hover:shadow-2xl group p-4 rounded transition">
                <img src="./images/cart.svg" alt="SpectraTec cart" class="w-60">
                <div>
                    <h2 class="text-white text-6xl relative font-bold">SpectraTec</h2>
                    <p class="relative w-96 text-white"><span class="text-2xl text-black font-bold block">E-commerce</span>Electronic retailer with a vast amount of products.</p>
                </div>
            </div>
        </section>

        <section class="pb-44">
            <div class="bg-black">
                <h2 class="text-7xl py-44 text-white text-center">SKILLS</h2>
            </div>
            <div class="flex gap-2 justify-center mt-20 max-w-screen-2xl mx-auto">
                <div class="w-1/3 bg-white shadow-lg hover:shadow-2xl hover:z-10 rounded overflow-hidden">
                    <div class="bg-purple-500 py-3">
                        <h3 class="text-2xl font-bold flex justify-center place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-300 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                            </svg>
                            <span class="text-white">BACKEND</span>    
                        </h3>
                    </div>
                    
                    <ol class="p-4">
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">Laravel</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">PHP</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">MySQL</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">WebPack</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">Composer</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">Docker</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">MongoDB</span>
                        </li>
                    </ol>
                </div>
                <div class="w-1/3 bg-white shadow-lg hover:shadow-2xl hover:z-10 rounded overflow-hidden">
                    <div class="bg-green-500 py-3">
                        <h3 class="text-2xl font-bold flex justify-center place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-300 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white">FRONTEND</span>    
                        </h3>
                    </div>
                    
                    <ol class="p-4">
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">SASS</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">CSS</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">Bootstrap</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">VueJs</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">VueX</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">JointJs</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">JQuery</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">JQueryUI</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">ES6</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">JavaScript</span>
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                            <span class="font-semibold">HTML</span>
                        </li>
                    </ol>
                </div>
            </div>
        </section>

    </main>
</x-guest-layout>

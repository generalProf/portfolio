<x-guest-layout>
    
    <nav class="fixed top-0 left-0 w-full bg-black/60 px-20 z-10">
        <div class="flex justify-between max-w-screen-xl mx-auto">
            <img src="{{ asset('images/projects/adrianBlancoJewelry/white-logo.png') }}"
                 alt="Main logo"
                 class="w-16">
            <div>
                <a class="inline-block mx-3 py-4 text-white border-b-4 border-transparent hover:border-[#f8c194]" href="#">Home</a>
                <a class="inline-block mx-3 py-4 text-white border-b-4 border-transparent hover:border-[#f8c194]" href="#">Shop</a>
                <a class="inline-block mx-3 py-4 text-white border-b-4 border-transparent hover:border-[#f8c194]" href="#">Catalog</a>
                <a class="inline-block mx-3 py-4 text-white border-b-4 border-transparent hover:border-[#f8c194]" href="#">Services</a>
                <a class="inline-block mx-3 py-4 text-white border-b-4 border-transparent hover:border-[#f8c194]" href="#">Thin Red / Blue Line</a>
                <a class="inline-block mx-3 py-4 text-white border-b-4 border-transparent hover:border-[#f8c194]" href="#">About Us</a>
                <a class="inline-block mx-3 py-4 text-white border-b-4 border-transparent hover:border-[#f8c194]" href="#">Contact Us</a>
            </div>
        </div>
    </nav>

    <section class="relative overflow-hidden h-screen flex items-center">
        <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay loop muted>
            <source src="{{ asset('videos/projects/adrianBlancoJewelry/rolex.mp4') }}" type="video/mp4">
        </video>

        <div class="relative z-10 text-white px-20 w-full max-w-screen-xl mx-auto">
            <h1 class="text-5xl font-playfair font-bold">Adrian Blanco Jewelry</h1>
            <p class="font-allura text-2xl tracking-widest leading-loose">Craftsmanship in all things</p>
        </div>
    </section>

    <div class="max-w-screen-xl mx-auto px-20">

        <section>
            <div class="flex items-center my-40 gap-4">
                <div class="w-1/4 border-r p-4">
                    <h2 class="font-bold text-4xl">Watches</h2>
                    <p class="leading-relaxed text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque minus earum temporibus ipsum deleniti ex.</p>
                    <a href="#" class="hover:shadow bg-[#f8c194] text-white px-3 py-2 mt-3 inline-block rounded">View Collection</a>
                </div>

                <div class="w-1/4 flex flex-col rounded">
                    <div class="h-[200px] overflow-hidden flex justify-center p-5">
                        <img class="max-w-full h-full object-cover" src="{{ asset('images/projects/adrianBlancoJewelry/watch 1.png') }}" alt="">
                    </div>
                    <div class="p-3">
                        <h3 class="text-xl font-bold">Brycen</h3>
                        <p class="text-sm my-3 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque est quibusdam sed fugit quam aspernatur voluptates nulla.</p>
                        <div class="flex justify-between items-center">
                            <p class="font-bold">$ 400</p>
                            <a class="
                                bg-white hover:bg-[#f8c194]
                                border border-[#f8c194]
                                text-[#f8c194] hover:text-white
                                px-2 py-1 rounded" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="w-1/4 flex flex-col rounded">
                    <div class="h-[200px] overflow-hidden flex justify-center p-5">
                        <img class="max-w-full h-full object-cover" src="{{ asset('images/projects/adrianBlancoJewelry/watch 2.jpg') }}" alt="">
                    </div>
                    <div class="p-3">
                        <h3 class="text-xl font-bold">Quartz watch AN8054</h3>
                        <p class="text-sm my-3 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque est quibusdam sed fugit quam aspernatur voluptates nulla.</p>
                        <div class="flex justify-between items-center">
                            <p class="font-bold">$ 400</p>
                            <a class="
                                bg-white hover:bg-[#f8c194]
                                border border-[#f8c194]
                                text-[#f8c194] hover:text-white
                                px-2 py-1 rounded" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="w-1/4 flex flex-col rounded">
                    <div class="h-[200px] overflow-hidden flex justify-center p-5">
                        <img class="max-w-full h-full object-cover" src="{{ asset('images/projects/adrianBlancoJewelry/watch 3.jpg') }}" alt="">
                    </div>
                    <div class="p-3">
                        <h3 class="text-xl font-bold">Quartz watch BI5054</h3>
                        <p class="text-sm my-3 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque est quibusdam sed fugit quam aspernatur voluptates nulla.</p>
                        <div class="flex justify-between items-center">
                            <p class="font-bold">$ 400</p>
                            <a class="
                                bg-white hover:bg-[#f8c194]
                                border border-[#f8c194]
                                text-[#f8c194] hover:text-white
                                px-2 py-1 rounded" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center my-40 gap-4">
                <div class="w-1/4 flex flex-col rounded">
                    <div class="h-[200px] overflow-hidden flex justify-center p-5">
                        <img class="max-w-full h-full object-cover" src="{{ asset('images/projects/adrianBlancoJewelry/watch 1.png') }}" alt="">
                    </div>
                    <div class="p-3">
                        <h3 class="text-xl font-bold">Brycen</h3>
                        <p class="text-sm my-3 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque est quibusdam sed fugit quam aspernatur voluptates nulla.</p>
                        <div class="flex justify-between items-center">
                            <p class="font-bold">$ 400</p>
                            <a class="
                                bg-white hover:bg-[#f8c194]
                                border border-[#f8c194]
                                text-[#f8c194] hover:text-white
                                px-2 py-1 rounded" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="w-1/4 flex flex-col rounded">
                    <div class="h-[200px] overflow-hidden flex justify-center p-5">
                        <img class="max-w-full h-full object-cover" src="{{ asset('images/projects/adrianBlancoJewelry/watch 2.jpg') }}" alt="">
                    </div>
                    <div class="p-3">
                        <h3 class="text-xl font-bold">Quartz watch AN8054</h3>
                        <p class="text-sm my-3 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque est quibusdam sed fugit quam aspernatur voluptates nulla.</p>
                        <div class="flex justify-between items-center">
                            <p class="font-bold">$ 400</p>
                            <a class="
                                bg-white hover:bg-[#f8c194]
                                border border-[#f8c194]
                                text-[#f8c194] hover:text-white
                                px-2 py-1 rounded" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="w-1/4 flex flex-col rounded">
                    <div class="h-[200px] overflow-hidden flex justify-center p-5">
                        <img class="max-w-full h-full object-cover" src="{{ asset('images/projects/adrianBlancoJewelry/watch 3.jpg') }}" alt="">
                    </div>
                    <div class="p-3">
                        <h3 class="text-xl font-bold">Quartz watch BI5054</h3>
                        <p class="text-sm my-3 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque est quibusdam sed fugit quam aspernatur voluptates nulla.</p>
                        <div class="flex justify-between items-center">
                            <p class="font-bold">$ 400</p>
                            <a class="
                                bg-white hover:bg-[#f8c194]
                                border border-[#f8c194]
                                text-[#f8c194] hover:text-white
                                px-2 py-1 rounded" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>

                
                <div class="w-1/4 border-l p-4">
                    <h2 class="font-bold text-4xl">Necklaces</h2>
                    <p class="leading-relaxed text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque minus earum temporibus ipsum deleniti ex.</p>
                    <a href="#" class="hover:shadow bg-[#f8c194] text-white px-3 py-2 mt-3 inline-block rounded">View Collection</a>
                </div>
            </div>

            <div class="flex items-center my-40 gap-4">
                <div class="w-1/4 border-r p-4">
                    <h2 class="font-bold text-4xl">Rings</h2>
                    <p class="leading-relaxed text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque minus earum temporibus ipsum deleniti ex.</p>
                    <a href="#" class="hover:shadow bg-[#f8c194] text-white px-3 py-2 mt-3 inline-block rounded">View Collection</a>
                </div>

                <div class="w-1/4 flex flex-col rounded">
                    <div class="h-[200px] overflow-hidden flex justify-center p-5">
                        <img class="max-w-full h-full object-cover" src="{{ asset('images/projects/adrianBlancoJewelry/watch 1.png') }}" alt="">
                    </div>
                    <div class="p-3">
                        <h3 class="text-xl font-bold">Brycen</h3>
                        <p class="text-sm my-3 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque est quibusdam sed fugit quam aspernatur voluptates nulla.</p>
                        <div class="flex justify-between items-center">
                            <p class="font-bold">$ 400</p>
                            <a class="
                                bg-white hover:bg-[#f8c194]
                                border border-[#f8c194]
                                text-[#f8c194] hover:text-white
                                px-2 py-1 rounded" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="w-1/4 flex flex-col rounded">
                    <div class="h-[200px] overflow-hidden flex justify-center p-5">
                        <img class="max-w-full h-full object-cover" src="{{ asset('images/projects/adrianBlancoJewelry/watch 2.jpg') }}" alt="">
                    </div>
                    <div class="p-3">
                        <h3 class="text-xl font-bold">Quartz watch AN8054</h3>
                        <p class="text-sm my-3 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque est quibusdam sed fugit quam aspernatur voluptates nulla.</p>
                        <div class="flex justify-between items-center">
                            <p class="font-bold">$ 400</p>
                            <a class="
                                bg-white hover:bg-[#f8c194]
                                border border-[#f8c194]
                                text-[#f8c194] hover:text-white
                                px-2 py-1 rounded" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="w-1/4 flex flex-col rounded">
                    <div class="h-[200px] overflow-hidden flex justify-center p-5">
                        <img class="max-w-full h-full object-cover" src="{{ asset('images/projects/adrianBlancoJewelry/watch 3.jpg') }}" alt="">
                    </div>
                    <div class="p-3">
                        <h3 class="text-xl font-bold">Quartz watch BI5054</h3>
                        <p class="text-sm my-3 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque est quibusdam sed fugit quam aspernatur voluptates nulla.</p>
                        <div class="flex justify-between items-center">
                            <p class="font-bold">$ 400</p>
                            <a class="
                                bg-white hover:bg-[#f8c194]
                                border border-[#f8c194]
                                text-[#f8c194] hover:text-white
                                px-2 py-1 rounded" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="flex gap-5 items-center my-40">
            <div class="w-1/2">
                <h2 class="font-mont font-bold text-4xl">About Us</h2>
                <p class="font-droid leading-relaxed text-gray-500">What started out as an after school job has become a lifelong career and passion. I started my journey in the jewelry industry working at deLuna Jewelers in Davis, CA.</p>
                <a href="#" class="hover:shadow bg-[#f8c194] text-white px-3 py-2 mt-3 inline-block rounded">Read More</a>
            </div>
            <div class="w-1/2">
                <img class="w-full object-cover" src="{{ asset('images/projects/adrianBlancoJewelry/profile.jpg') }}" alt="About us profile image">
            </div>
        </section>

        <section class="my-40">
            <h2 class="font-mont font-semibold text-4xl text-center mb-16">Our Services</h2>
            <div class="flex gap-5">
                <div class="text-center">
                    <img class="inline-block w-[40px]" src="{{ asset('images/projects/adrianBlancoJewelry/services.svg') }}" alt="Designs services">
                    <h3 class="text-xl leading-loose font-semibold font-mont my-5">Designs</h3>
                    <p class="text-gray-500 font-droid leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt odio aperiam temporibus magni at. Veritatis!</p>
                </div>
                <div class="text-center">
                    <img class="inline-block w-[40px]" src="{{ asset('images/projects/adrianBlancoJewelry/services.svg') }}" alt="Designs services">
                    <h3 class="text-xl leading-loose font-semibold font-mont my-5">Repairs</h3>
                    <p class="text-gray-500 font-droid leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt odio aperiam temporibus magni at. Veritatis!</p>
                </div>
                <div class="text-center">
                    <img class="inline-block w-[40px]" src="{{ asset('images/projects/adrianBlancoJewelry/services.svg') }}" alt="Designs services">
                    <h3 class="text-xl leading-loose font-semibold font-mont my-5">Appraisals</h3>
                    <p class="text-gray-500 font-droid leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt odio aperiam temporibus magni at. Veritatis!</p>
                </div>
            </div>
        </section>

        <section class="my-40 flex items-center gap-5">
            <div class="w-1/2">
                <h2 class="font-semibold font-mont text-3xl text-[#f8c194]">Our Store</h2>
            
                <p class="font-bold font-droid leading-loose">Hours</p>
                <p class="font-droid text-gray-500 leading-loose">Sunday - Monday: <b>Closed</b></p>
                <p class="font-droid text-gray-500 leading-loose">Tuesday - Saturday: <b>10:00 am - 5:30 pm</b></p>
            
                <p class="font-bold font-droid leading-loose">Phone</p>
                <p class="font-droid text-gray-500 leading-loose">(916)-260-5136</p>

                
                <p class="font-bold font-droid leading-loose">Email</p>
                <p class="font-droid text-gray-500 leading-loose">Contactus@adrianblancojewelry.com</p>
            </div>
            <div class="w-1/2">
                <img src="{{ asset('images/projects/adrianBlancoJewelry/store-front.jpg') }}" alt="Store front">
            </div>
        </section>

        <section class="my-40 flex items-center gap-5">
            <div class="w-1/2">
                <img src="{{ asset('images/projects/adrianBlancoJewelry/new-location-map.png') }}" alt="Store location map">
            </div>
            <div class="w-1/2">
                <h2 class="font-semibold font-mont text-3xl text-[#f8c194]">Visit Us</h2>
                <p class="font-bold font-droid leading-loose">Address</p>
                <p class="font-droid text-gray-500 leading-loose">502 Natoma St, Folsom, CA 95630</p>
            </div>
        </section>
    </div>



</x-guest-layout>
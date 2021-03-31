@extends('layouts.app')



@section('content')
    <x-header></x-header>
    <div class="container mx-auto">
        <p class='text-lg text-center mx-auto font-bold'>Announcements</p>
    </div>

    <div class='container mx-auto'>
        <div class="flex flex-wrap w-full mx-auto text-center  -mb-4 md:mb-0 pt-6">
            <div class="w-full md:w-1/3  mx-auto px-4 mb-4 md:mb-0"> Announcement #1<p></p></div>
            <div class="w-full md:w-1/3  mx-auto  px-4 mb-4 md:mb-0">Announcement #1<p></p></div>
            <div class="w-full md:w-1/3  mx-auto px-4 mb-4 md:mb-0">Announcement #1<p></p></div>
        </div>
    </div>


    <div class="text-center">
        <button class="mx-auto inline-block py-2 px-4 text-xs text-white text-center font-semibold leading-none bg-red-600 hover:bg-red-700 rounded">See all announcements</button>
    </div>

    <section><div class="container px-4 mx-auto">
            <nav class="flex justify-between items-center py-6 hidden"><a class="text-3xl font-semibold leading-none hidden" href="#">undefined</a>
                <div class="lg:hidden">
                    <button class="navbar-burger flex items-center py-2 px-3 text-blue-600 hover:text-blue-700 rounded border border-blue-200 hover:border-blue-300">
                        <svg class="fill-current h-4 w-4" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Mobile menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></button>
                </div>
                <ul class="hidden lg:flex lg:items-center lg:w-auto lg:space-x-12"><li><a class="text-sm text-blueGray-400 hover:text-blueGray-500 hidden" href="#">Product</a></li>
                    <li><a class="text-sm text-blueGray-400 hover:text-blueGray-500" href="#">Company</a></li>
                    <li><a class="text-sm text-blueGray-400 hover:text-blueGray-500" href="#">About Us</a></li>
                    <li><a class="text-sm text-blueGray-400 hover:text-blueGray-500" href="#">Features</a></li>
                </ul><div class="hidden lg:block"><a class="mr-2 inline-block px-4 py-3 text-xs text-blue-600 hover:text-blue-700 font-semibold leading-none border border-blue-200 hover:border-blue-300 rounded" href="#">Log In</a><a class="inline-block px-4 py-3 text-xs font-semibold leading-none bg-blue-600 hover:bg-blue-700 text-white rounded" href="#">Sign Up</a></div>
            </nav><div class="flex flex-wrap items-center -mx-3">
                <div class="w-full lg:w-1/2 px-3">
                    <div class="py-12">
                        <div class="max-w-lg lg:max-w-md mx-auto lg:mx-0 mb-8 text-center lg:text-left">
                            <h2 class="text-3xl md:text-4xl mb-4 font-bold font-heading">
                                <span>Providing quality, convenient</span>
                                <span class="text-red-600">cost effective</span>
                                <span>healthcare.</span>
                            </h2>
                            <p class="text-blueGray-400 leading-relaxed">More than just a Doctor's Office, Satellite Med is a fully-licensed medical clinic. We provide non-urgent and semi-urgent care on a walk-in basis or by appointment. Whether via Urgent Care / Walk-In or established Family Practice, Satellite Med uses cutting-edge technology and evidence-based medicine to provide quality affordable healthcare. </p>
                        </div>
                        <div class="text-center lg:text-left"><a class="hidden" href="#">Check Now</a><a class="hidden" href="#">Documentation</a></div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-3 mb-12 lg:mb-0">
                    <div class="lg:h-128 flex items-center justify-center"><img class="lg:max-w-lg" src="metis-assets/illustrations/work-tv.png" alt=""></div>
                </div>
            </div>
        </div>
        <div class="hidden navbar-menu relative z-50">
            <div class="navbar-backdrop fixed inset-0 bg-blueGray-800 opacity-25"></div>
            <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto"><div class="flex items-center mb-8">
                    <a class="mr-auto text-3xl font-semibold leading-none" href="#">undefined</a>
                    <button class="navbar-close">
                        <svg class="h-6 w-6 text-blueGray-400 cursor-pointer hover:text-blueGray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button>
                </div>
                <div>
                    <ul><li class="mb-1"><a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-600" href="#">Product</a></li>
                        <li class="mb-1"><a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-600" href="#">Company</a></li>
                        <li class="mb-1"><a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-600" href="#">About Us</a></li>
                        <li class="mb-1"><a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-600" href="#">Features</a></li>
                    </ul><div class="mt-4 pt-6 border-t border-blueGray-100"><a class="block px-4 py-3 mb-3 text-xs text-center font-semibold leading-none bg-blue-600 hover:bg-blue-700 text-white rounded" href="#">Sign Up</a><a class="block px-4 py-3 mb-2 text-xs text-center text-blue-600 hover:text-blue-700 font-semibold leading-none border border-blue-200 hover:border-blue-300 rounded" href="#">Log In</a></div>
                </div>
                <div class="mt-auto">
                    <p class="my-4 text-xs text-blueGray-400">
                        <span>Get in Touch</span>
                        <a class="text-blue-600 hover:text-blue-600 underline" href="#">info@example.com</a>
                    </p>
                    <a class="inline-block px-1" href="#"><img src="metis-assets/icons/facebook-blue.svg" alt=""></a><a class="inline-block px-1" href="#"><img src="metis-assets/icons/twitter-blue.svg" alt=""></a><a class="inline-block px-1" href="#"><img src="metis-assets/icons/instagram-blue.svg" alt=""></a>
                </div>
            </nav></div>
    </section>
    </div>

    <div>
        <section class="py-20"><div class="container px-4 mx-auto">
                <h2 class="mb-12 lg:mb-20 text-3xl md:text-4xl font-bold font-heading">Patient Resources</h2>
                <div class="flex flex-wrap -mx-4 mb-20">
                    <div class="w-full lg:w-1/2 px-4 lg:pr-20 lg:pt-4 order-1 lg:order-0">
                        <span class="inline-block py-1 px-3 uppercase text-xs font-semibold bg-blue-50 rounded-full text-blue-600">Development</span>
                        <h3 class="my-4 text-xl md:text-2xl font-bold font-heading">Curabitur vestibulum odio maximus.</h3>
                        <p class="mb-4 text-sm md:text-base leading-loose">Aenean tempus orci eu est ultrices hendrerit. Fusce suscipit, leo a semper venenatis, felis urna pulvinar nibh, vitae porta erat risus sed mauris. Vestibulum vehicula leo eget libero eleifend, quis dictum eros bibendum. Maecenas convallis tempor varius.</p>
                        <a class="text-xs font-semibold text-blue-600" href="#">
                            <span>Read More</span>
                            <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                    </div>
                    <div class="w-full lg:w-1/2 px-4 mb-8 order-0 lg:order-1"><img class="w-full h-80 object-cover rounded" src="https://images.unsplash.com/photo-1603050927325-baf630505e27?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjExMDk0fQ&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80" alt=""></div>
                </div>
                <div class="flex flex-wrap -mx-4 mb-20">
                    <div class="w-full lg:w-1/2 px-4 lg:pl-20 lg:pt-4 order-1">
                        <span class="inline-block py-1 px-3 uppercase text-xs font-semibold bg-blue-50 rounded-full text-blue-600">Startup</span>
                        <h3 class="my-4 text-xl md:text-2xl font-bold font-heading">Curabitur vestibulum odio maximus.</h3>
                        <p class="mb-4 text-sm md:text-base leading-loose">Aenean tempus orci eu est ultrices hendrerit. Fusce suscipit, leo a semper venenatis, felis urna pulvinar nibh, vitae porta erat risus sed mauris. Vestibulum vehicula leo eget libero eleifend, quis dictum eros bibendum. Maecenas convallis tempor varius.</p>
                        <a class="text-xs font-semibold text-blue-600" href="#">
                            <span>Read More</span>
                            <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                    </div>
                    <div class="w-full lg:w-1/2 px-4 mb-8 order-0"><img class="w-full h-80 object-cover rounded" src="https://images.unsplash.com/photo-1603665270146-bbdf9858ea55?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt=""></div>
                </div>
                <div class="flex flex-wrap -mx-4 mb-20">
                    <div class="w-full lg:w-1/2 px-4 lg:pr-20 lg:pt-4 order-1 lg:order-0">
                        <span class="inline-block py-1 px-3 uppercase text-xs font-semibold bg-blue-50 rounded-full text-blue-600">Startup</span>
                        <h3 class="my-4 text-xl md:text-2xl font-bold font-heading">Curabitur vestibulum odio maximus.</h3>
                        <p class="mb-4 text-sm md:text-base leading-loose">Aenean tempus orci eu est ultrices hendrerit. Fusce suscipit, leo a semper venenatis, felis urna pulvinar nibh, vitae porta erat risus sed mauris. Vestibulum vehicula leo eget libero eleifend, quis dictum eros bibendum. Maecenas convallis tempor varius.</p>
                        <a class="text-xs font-semibold text-blue-600" href="#">
                            <span>Read More</span>
                            <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                    </div>
                    <div class="w-full lg:w-1/2 px-4 mb-8 order-0 lg:order-1"><img class="w-full h-80 object-cover rounded" src="https://images.unsplash.com/photo-1603665230556-b5bb38f82591?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt=""></div>
                </div>
                <div class="flex flex-wrap -mx-4 mb-20">
                    <div class="w-full lg:w-1/2 px-4 lg:pl-20 lg:pt-4 order-1">
                        <span class="inline-block py-1 px-3 uppercase text-xs font-semibold bg-blue-50 rounded-full text-blue-600">Startup</span>
                        <h3 class="my-4 text-xl md:text-2xl font-bold font-heading">Curabitur vestibulum odio maximus.</h3>
                        <p class="mb-4 text-sm md:text-base leading-loose">Aenean tempus orci eu est ultrices hendrerit. Fusce suscipit, leo a semper venenatis, felis urna pulvinar nibh, vitae porta erat risus sed mauris. Vestibulum vehicula leo eget libero eleifend, quis dictum eros bibendum. Maecenas convallis tempor varius.</p>
                        <a class="text-xs font-semibold text-blue-600" href="#">
                            <span>Read More</span>
                            <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                    </div>
                    <div class="w-full lg:w-1/2 px-4 mb-8 order-0"><img class="w-full h-80 object-cover rounded" src="https://images.unsplash.com/photo-1603665301175-57ba46f392bf?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80" alt=""></div>
                </div>
                <div class="text-center"><a class="inline-block py-4 px-8 text-xs text-white font-semibold leading-none rounded bg-red-600 hover:bg-red-700" href="#">Show all posts</a></div>
            </div>
        </section>

        <section class="py-20"><div class="container px-4 mx-auto">
                <div class="max-w-2xl lg:max-w-3xl mx-auto">
                    <div class="mb-12 text-center">
                        <h2 class="text-4xl font-bold font-heading">Get in touch!</h2>
                        <p class="text-blueGray-400">We will be glad to hear from you</p>
                    </div>
                    <div class="flex flex-wrap -mx-3 text-center">
                        <div class="w-1/2 lg:w-1/3 px-3 mb-12">
                            <svg class="mb-6 h-8 w-8 mx-auto text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg><div class="leading-relaxed">
                                <span class="text-sm text-blueGray-400">Call or Text</span>
                                <p>(931) 528-7312</p>
                                <p class="hidden">+ 1 6532-430-309</p>
                            </div>
                        </div>
                        <div class="w-1/2 lg:w-1/3 px-3 mb-12">
                            <svg class="mb-6 h-8 w-8 mx-auto text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg><div class="leading-relaxed">
                                <span class="text-sm text-blueGray-400">E-mail</span>
                                <p>info@satellitemed.com</p>
                                <p class="hidden">pat@example.com</p>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/3 px-3 mb-12">
                            <svg class="mb-6 h-8 w-8 mx-auto text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg><div class="leading-relaxed">
                                <span class="text-sm text-blueGray-400">Address</span>
                                <p>1120 Sams Street</p>
                                <p>Cookeville, TN 38506</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <form>
                            <div class="mb-4 text-sm">
                                <span class="mr-4 font-semibold hidden">Departament:</span>
                                <label class="mr-4">
                                    <input class="mr-1 hidden" type="radio" name="department" value="1" checked><span class="hidden">Support</span>
                                </label>
                                <label>
                                    <input class="mr-1 hidden" type="radio" name="department" value="2"><span class="hidden">Sales</span>
                                </label>
                            </div>
                            <div class="flex flex-wrap mb-4 -mx-3">
                                <div class="w-full lg:w-1/2 px-3 mb-4 lg:mb-0">
                                    <div class="mb-4">
                                        <input class="w-full p-4 text-xs font-semibold leading-none bg-blueGray-50 rounded outline-none" type="text" placeholder="Subject"></div>
                                    <div class="mb-4">
                                        <input class="w-full p-4 text-xs font-semibold leading-none bg-blueGray-50 rounded outline-none" type="text" placeholder="Name"></div>
                                    <div class="mb-4">
                                        <input class="w-full p-4 text-xs font-semibold leading-none bg-blueGray-50 rounded outline-none" type="email" placeholder="name@example.com"></div>
                                    <div>
                                        <label class="flex px-2 bg-blueGray-50 rounded">
                                            <input class="hidden" type="file" placeholder="Choose file.." name="Choose file"><div class="my-1 ml-auto px-4 py-3 text-xs text-white font-semibold leading-none bg-blueGray-500 hover:bg-blueGray-600 rounded cursor-pointer">Browse</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="w-full lg:w-1/2 px-3"><textarea class="w-full h-full p-4 text-xs font-semibold leading-none resize-none bg-blueGray-50 rounded outline-none" type="text" placeholder="Message..."></textarea></div>
                            </div>
                            <div class="flex justify-between items-center">
                                <label>
                                    <input class="mr-1" type="checkbox" name="terms" value="1"><span class="text-sm font-semibold">I agree to terms and conditions.</span>
                                </label>
                                <button class="py-4 px-8 text-sm text-white font-semibold leading-none bg-red-600 hover:bg-red-700 rounded" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div></div>

        <section class="pt-8 pb-2 bg-blueGray-50"><div class="container px-4 mx-auto">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                        <div class="p-8 bg-white text-center shadow rounded">
                            <svg class="w-12 h-12 mx-auto mb-2 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><p class="mb-2 text-xs md:text-base text-blueGray-400">Patients</p>
                            <span class="text-3xl lg:text-4xl font-bold font-heading">148,000</span>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                        <div class="p-8 bg-white text-center shadow rounded">
                            <svg class="w-12 h-12 mx-auto mb-2 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg><p class="mb-2 text-xs md:text-base text-blueGray-400">Positive Reviews</p>
                            <span class="text-3xl lg:text-4xl font-bold font-heading">6,510</span>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                        <div class="p-8 bg-white text-center shadow rounded">
                            <svg class="w-12 h-12 mx-auto mb-2 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path></svg><p class="mb-2 text-xs md:text-base text-blueGray-400">Unique Visits</p>
                            <span class="text-3xl lg:text-4xl font-bold font-heading">500,000</span>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                        <div class="p-8 bg-white text-center shadow rounded">
                            <svg class="w-12 h-12 mx-auto mb-2 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg><p class="mb-2 text-xs md:text-base text-blueGray-400">Value</p>
                            <span class="text-3xl lg:text-4xl font-bold font-heading">149 324</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <x-footer></x-footer>
@endsection

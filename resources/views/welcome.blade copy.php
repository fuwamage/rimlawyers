<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://fonts.cdnfonts.com/css/isidora" rel="stylesheet">
    <link href="/assets/fonts/skemaprotitle.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</head>

<body>
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center mx-auto p-4 justify-between sm:justify-start">
            <a href="https://rimlawyers.co.id" class="flex items-center mr-4">
                <img src="/assets/images/rim-logo-top.png" class="h-8 mr-3" alt="RIM Lawyers">
            </a>
            <div class="font-isidora flex md:order-2">
                {{-- Phone Button in navbar --}}
                <button type="button"
                    class="ml-8 mr-8 hidden sm:block  text-orange-rim bg-white border border-orange-rim focus:outline-none hover:bg-gray-100  font-medium rounded-full text-sm px-4 py-3 mb-1 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    <div class="flex items-center">
                        {{-- <img src="/assets/images/phone-light.png" class="max-h-full max-w-full mr-1" alt="RIM Lawyers"> --}}
                        <div
                            class="rounded-full h-6 w-6 outline outline-1 outline-offset-1 flex items-center justify-center bg-transparent mr-2">
                            <svg class="mt-1 ml-1" fill="currentColor" viewBox="0 0 32 32"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z">
                                </path>
                            </svg>
                        </div>
                        +62-21-58905002
                    </div>
                </button>
                {{-- Contact Us Button in navbar --}}
                <button type="button"
                    class="hidden sm:block  text-white bg-orange-rim border border-orange-rim focus:outline-none hover:bg-orange-rim-hover font-medium rounded-full text-sm px-4 pr-1 py-1 mr-1 mb-1 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    <div class="flex items-center">
                        Contact Us
                        <div class="ml-6 rounded-full h-8 w-8  flex items-center justify-center bg-orange-rim-hover">
                            <svg class="mt-1 ml-2" fill="currentColor" viewBox="0 0 32 32"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </button>

                {{-- Sticky Navbar for mobile --}}
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="font-isidora items-center justify-between hidden w-full md:flex md:w-auto md:order-1 "
                id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 mr-5 text-white bg-rim-active rounded md:bg-transparent md:text-rim-active md:p-0 md:dark:text-rim-active"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 mr-5 text-rim-normal rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-rim-active md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 mr-5 text-rim-normal rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-rim-active md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Why
                            Choose Us</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 mr-5 text-rim-normal rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-rim-active md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Our
                            Lawyers</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 mr-5 text-rim-normal rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-rim-active md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Partners</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="sm:flex-wrap md:flex-nowrap container flex  relative pt-32 bg-transparent ">
            <div class="container md:ml-40 md:mt-40 mx-auto bg-transparent justify-end items-end">
                <h2 class="text-4xl text-justify text-rim-title font-skemaprotitle  dark:text-white mb-6">Experienced in
                    law, <br>adept in all situations.</h2>
                <p class="max-w-xl text-justify text-rim-text dark:text-gray-400">We strive to be a reputable law firm
                    in the country. Our dedicated team of lawyers aims to carefully assess your concerns and diligently
                    explore the most suitable solutions. We are here to offer any legal assistance you may require.</p>
            </div>
            <div class="container mr-20 mt-12 mx-auto max-w-none bg-transparent flex-row justify-start items-start">
                <img class="resize-none h-auto max-w-[368px] max-h-[470px]" src="/assets/images/models-bg-first.png" alt="rim">
                <div class="container mx-auto max-w-[fit-content]">

                    {{-- Button Lawyers+ --}}
                    <button type="button"
                        class="max-w-[146px] max-h[56px] inline-flex text-white bg-orange-rim hover:bg-orange-rim-hover font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <div
                            class="text-white bg-orange-rim-hover font-medium rounded-lg text-sm p-0.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <img class="resize-none h-auto max-w-full" src="/assets/images/icon1.png" alt="rim">
                        </div>
                        <div class="block max-w-sm">
                            <p class="text-left">30+</p>
                            <p class="text-left font-isidora text-12px">Expert Lawyers</p>
                        </div>
                    </button>
                    {{-- Button Case Won+ --}}
                    <button type="button"
                        class="max-w-[146px] max-h[56px] inline-flex text-white bg-[#243C7B] hover:bg-[#6E81B4] font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <div
                            class="text-white bg-[#6E81B4] font-medium rounded-lg text-sm p-0.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <img class="resize-none h-auto max-w-full" src="/assets/images/icon2.png" alt="rim">
                        </div>
                        <div class="block max-w-sm">
                            <p class="text-left">100+</p>
                            <p class="text-left font-isidora text-12px">Total Case Won</p>
                        </div>
                    </button>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container  mx-auto px-4 py-8 pt-28">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <div class="container mx-auto px-4 py-8">
        <div class="relative flex flex-wrap justify-center min-h-screen w-full">
            <div class="sm:w-6/12 p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                role="alert">
                <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
            </div>
            <div class="sm:w-6/12 p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
            </div>
        </div>

        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
        </div>
        <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
            role="alert">
            <span class="font-medium">Warning alert!</span> Change a few things up and try submitting again.
        </div>
        <div class="p-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300" role="alert">
            <span class="font-medium">Dark alert!</span> Change a few things up and try submitting again.
        </div>
    </div> --}}







</body>

</html>

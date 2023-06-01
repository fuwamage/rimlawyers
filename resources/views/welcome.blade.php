<!doctype html>
<html class="max-w-full overflow-x-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Roboto+Slab:wght@600&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/isidora" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/aoboshi-one" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@700&family=Inter:wght@500&family=Roboto+Slab:wght@600&display=swap"
        rel="stylesheet">
    <link href="/assets/fonts/skemaprotitle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body class="max-w-full overflow-x-hidden">
    <nav
        class="bg-white dark:bg-gray-900 fixed w-screen z-50 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="w-screen flex flex-wrap items-center gap-4 mx-auto px-6 py-4 justify-between sm:justify-center">
            <a href="https://rimlawyers.co.id" class="flex items-center">
                <img src="/assets/images/rim-logo-top.png" class="h-full w-full mr-3" alt="RIM Lawyers">
            </a>
            <div class="font-isidora flex gap-4 md:order-2">
                {{-- Phone Button in navbar --}}
                <button type="button"
                    class="hidden sm:block text-orange-rim bg-white border border-orange-rim focus:outline-none hover:bg-gray-100  font-medium rounded-full text-sm px-4 py-3 mb-1 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
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
                    class="hidden sm:block text-white bg-orange-rim border border-orange-rim focus:outline-none hover:bg-orange-rim-hover font-medium rounded-full text-sm px-4 pr-1 py-1 mr-1 mb-1 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    <div class="flex items-center">
                        Contact Us
                        <div class="ml-6 rounded-full h-8 w-8 flex items-center justify-center bg-orange-rim-hover">
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
                            aria-current="page">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 mr-5 text-rim-normal rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-rim-active md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 mr-5 text-rim-normal rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-rim-active md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            Why Choose Us
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 mr-5 text-rim-normal rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-rim-active md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            Our Lawyers
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 mr-5 text-rim-normal rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-rim-active md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            Partners
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="md:pt-40 lg:pt-24 ">
        {{-- Experienced in law, adept in all situations. --}}
        <section class="pt-20 bg-white md:max-h-[529px] md:mb-20 min-h-[100vh] md:min-h-[90vh] relative z-20">

            <div class="container py-12">
                <div class="container relative ">
                    <img class="absolute right-[746px] h-auto top-[138px]" src="/assets/images/orna1.png"
                        alt="ornaments">
                    <img class="absolute right-[986px] h-auto top-[406px]" src="/assets/images/orna2.png"
                        alt="ornaments">
                    <img class="absolute right-[711px] h-auto top-[354px]" src="/assets/images/orna-wave.png"
                        alt="ornaments">
                    <img class="absolute right-[381px] h-auto top-[519px]" src="/assets/images/orna-wave.png"
                        alt="ornaments">
                    <img class="absolute right-[217px] h-auto top-[395px]" src="/assets/images/orna-wave.png"
                        alt="ornaments">
                </div>
                <div class="container flex flex-wrap sm:flex-nowrap gap-8">
                    <div class="container sm:mt-[-40px] px-8 ">
                        <div class="container relative w-fit md:right-[-153px] md:pt-[200px]">
                            <h2 class="text-2xl md:text-[30px] text-center md:text-left text-rim-title font-aoboshi-one  dark:text-white mb-6 capitalize"
                                data-aos="fade-left"data-aos-duration="200">
                                Experienced in law, <br>adept in all situations.
                            </h2>
                            <div class="container flex">

                                <div class="container ">
                                    <p class="text-rim-text font-inter max-w-[525px] mb-10 text-sm  w-auto text-justify"
                                        data-aos="fade-left"data-aos-duration="400">
                                        We strive to be a reputable
                                        law firm in the country. Our dedicated team of lawyers aims to carefully assess
                                        your concerns and diligently explore the most suitable solutions. We are here to
                                        offer any legal assistance you may require.</p>
                                    <p><button type="button"
                                            class="hidden sm:block text-white bg-orange-rim border border-orange-rim focus:outline-none hover:bg-orange-rim-hover font-medium rounded-full text-sm px-4 pr-1 py-1 mr-1 mb-1 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                            data-aos="fade-left"data-aos-duration="600">
                                            <div class="flex items-center">
                                                Find Out More
                                                <div
                                                    class="ml-6 rounded-full h-8 w-8 flex items-center justify-center bg-orange-rim-hover">
                                                    <svg class="mt-1 ml-2" fill="currentColor" viewBox="0 0 32 32"
                                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                                            d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container w-full h-fit md:pr-[6rem] flex justify-center md:mr-[-90px] ">
                        {{-- <img class="rounded w-[224px] h-[224px] float-right" src="/assets/images/managing-director.jpg"
                            alt="Extra large avatar"> --}}
                        {{-- <img class="w-full sm:h-[378px] sm:w-[368px] object-none float-right" src="/assets/images/models-choose-us.png" alt=""> --}}
                        {{-- <img class="rounded w-[71px] h-[71px] relative top-[200px]"
                            src="/assets/images/mini-handshake.png" alt="Extra large avatar"> --}}
                        <div class="container md:pt-[62px] md:ml-[102px] px-2.5">

                            <div class="rounded-full w-[368px] h-[370px] bg-orange-rim" data-aos="fade-right"
                                data-aos-duration="300">
                                <div
                                    class="container justify-center md:justify-start flex flex-col items-center relative top-[-24px]">
                                    <img class="relative max-w-[255px] right-[34px]"
                                        src="/assets/images/character.png" alt="..." data-aos="fade-up"
                                        data-aos-duration="500">
                                    <div class="rounded-lg w-[320px] h-[78px] bg-white border border-[#F1E6E6] flex px-1 py-2.5"
                                        data-aos="zoom-in-down" data-aos-duration="600">
                                        <div class="rounded-lg min-w-[146px] h-[56px] bg-orange-rim border border-[#F1E6E6] flex  mr-2"
                                            data-aos="zoom-in-down" data-aos-duration="700">
                                            <div class="container flex px-1">
                                                <div class="rounded-lg min-w-[36px] h-[37px] bg-[#FFAE48] flex  mr-2 justify-center self-center"
                                                    data-aos="zoom-in-down" data-aos-duration="700">
                                                    <img class="relative max-h-[33px] max-w-[31px] "
                                                        src="/assets/images/icon1.png" alt="..."
                                                        data-aos="fade-up" data-aos-duration="500">

                                                </div>
                                                <div class="container flex flex-col text-white mt-1">
                                                    <p class="text-left font-roboto-slab text-[18px] ">
                                                        <span id="numberExpertLawyers">0</span>+
                                                    </p>

                                                    <p class="text-left font-isidora text-sm w-max">Expert Lawyers</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="rounded-lg min-w-[146px] h-[56px] bg-[#243C7B] border border-[#F1E6E6] flex"
                                            data-aos="zoom-in-down" data-aos-duration="800">
                                            <div class="container flex px-1">
                                                <div class="rounded-lg min-w-[36px] h-[37px] bg-[#6E81B4] flex  mr-2 justify-center self-center"
                                                    data-aos="zoom-in-down" data-aos-duration="700">
                                                    <img class="relative max-h-[33px] max-w-[31px] "
                                                        src="/assets/images/icon2.png" alt="..."
                                                        data-aos="fade-up" data-aos-duration="500">

                                                </div>
                                                <div class="container flex flex-col text-white mt-1">
                                                    <p class="text-left font-roboto-slab text-[18px]"><span
                                                            id="numberCaseWon">0</span>+</p>
                                                    <p class="text-left font-isidora text-sm w-max">Total Case Won</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>

                </div>

            </div>

        </section>
        {{-- Committed To Helping Our Clients Succeed --}}
        <section class="pt-20 bg-[#FFF4E7] md:min-h-[530px] md:max-h-[530px] relative z-10">
            <div class="container py-12">
                <div class="container flex flex-wrap sm:flex-nowrap gap-8">
                    <div class="container w-full h-fit pr-[6rem] flex md:justify-end mr-[-90px]">
                        <img class="rounded-full w-[224px] h-[224px] float-right outline-dashed outline-[5px] outline-[#e9d9c7]"
                            src="/assets/images/managing-director.jpg" alt="Extra large avatar" data-aos="flip-right"
                            data-aos-duration="1000">
                        {{-- <img class="w-full sm:h-[378px] sm:w-[368px] object-none float-right" src="/assets/images/models-choose-us.png" alt=""> --}}
                        <img class="rounded-full w-[71px] h-[71px] relative md:top-[200px] top-[167px] outline outline-[5px] outline-[#e9d9c7]"
                            src="/assets/images/mini-handshake.png" alt="Extra large avatar" data-aos="flip-left"
                            data-aos-duration="1500">



                    </div>
                    <div class="container sm:mt-[-40px] px-8">
                        <div class="container ">
                            <h2 data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1000"
                                class="text-2xl md:text-[30px]  text-center md:text-left text-rim-title font-aoboshi-one  dark:text-white mb-6 capitalize">
                                Committed To Helping<br>Our Clients Succeed.
                            </h2>
                            <div class="container flex">
                                <div class="container w-fit px-5">
                                    <div class="w-10 h-10 rounded-full bg-[#F88634] shadow-sm" data-aos="fade-up"
                                        data-aos-anchor-placement="center-bottom" data-aos-duration="1500">
                                        <p
                                            class="text-center text-white text-[50px] font-inter block top-[-6px] relative">
                                            “</p>
                                    </div>
                                </div>
                                <div class="container flex-">
                                    <p class="text-rim-text font-inter max-w-[525px] mb-10" data-aos="fade-up"
                                        data-aos-anchor-placement="center-bottom" data-aos-duration="2000">“Our
                                        commitment to client
                                        is
                                        supported by excellent quality of performance standard and instruments. Our
                                        lawyer and
                                        supporting consultants are university graduates under the best advanced study
                                        program,
                                        both at home and abroad, possessing a variety of experiences that have been
                                        proven with
                                        high spirit and professional integrity.”</p>
                                    <p data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                                        data-aos-duration="2500"><span class="text-none">━━━━</span> <span
                                            class="text-black font-inter ">M.
                                            Rizal Situru,
                                            SH., MBL., Ph.D </span><span
                                            class="text-rim-text font-inter text-[10px]">(Managing
                                            Director)</span></p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="container flex justify-center mt-10">
                    {{-- Business Partners --}}
                    <div class="group min-w-[146px] max-h-[128px] px-3 py-4 bg-white border border-gray-200 shadow mr-6 ml-6 mt-10 mb-4 text-center"
                        data-aos="fade-up" data-aos-duration="500">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="41" height="38" class="fill-white mb-2  ml-[40px] mr-[40px]">
                            <path fill="url(#a)" d="M0 0h41v38H0z" />
                            <defs>
                                <pattern id="a" width="1" height="1"
                                    patternContentUnits="objectBoundingBox">
                                    <use xlink:href="#b" transform="matrix(.01754 0 0 .01893 0 -.002)" />
                                </pattern>
                                <image
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADkAAAA1CAYAAAD72kP+AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkE0ODg2ODkyMkNBNjExRUNBRTM2OTc0ODQzNjgyNzY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkE0ODg2ODkzMkNBNjExRUNBRTM2OTc0ODQzNjgyNzY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QTQ4ODY4OTAyQ0E2MTFFQ0FFMzY5NzQ4NDM2ODI3NjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QTQ4ODY4OTEyQ0E2MTFFQ0FFMzY5NzQ4NDM2ODI3NjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5QrshRAAAEaUlEQVR42uyaeYhNURzHzwymGQYjsu9ryR9IshtFdkb+YTBJtoyyFyWmlDUxWbKFrImQ/GEpSyZrZsgWxhKJhozdjGX4/tzvreO6971n3r3TGOdXn859591zz/nee85593zfiSlY3EEFFP3AVNANVA1x3luQBdaCY0E0pHwA1ywHNoFxoAhcBQ9Bgcu58aAp6A8Ggq1gIvhe2kUuo8ArYAy4G0GZVmAny+WD2X42KMbn7ipP5R54AtqxK0Ya0qVzQEPQkk/fl4j1+SkOZXdd/pcC7bG5nOWH+tkov0W2ZJpTzPJ2uRalWWQC08JilrfLVQxq4mkAmkV5vdpMZaAnFaN8c+06yVG25QF4ak88iUh3gGGq7MUhkCZPMpMCz4Ej4JvHD3tfsA7kMq8jGAkOg7MBNrQnSAF7wWXtiaeD4x4vEKJrCHVlyodU8Az0CTGWkijyADjDvLEUKQJXB/xEROQJsJ2fkynyYoi617DLpsbyrSM3ismitEYhdcXHqv8gjEgj0og0Io1II9KINCItG6SM6quurydrR7ju3KWtUuJL6AaVYyoGWYYjL1TdVW2nIlazLbwWzO3BTO2l9w2xbcNZoG5AAsXFW8Djz1rdRcybEsIqGQ/inGMy02OMLqStMYo3oi2pxzsr6bSARM4FVbisaqzV3QhMBzXAHI8Hk+E28Yi5u9vFtmgNPoE9LhfbpN3xIKIN080u323UeqHSuq+scU8DcTze6WPtOvgIRijLzZbF8U12jWrgq0cjPjNtyEW031GLqVv9Bdp8ks5eNoA3XLSMBhPEWRCP5wdX972VZdFPd+nnb5W7MSV5+SUwS3pNMD8cn9+DfWCJssxpcTF66m6dzJrrSRP2+yR2ybgwjbjMC/sdqzgWQ8UtTox5PP7q9dPgjEdEQlzt+hy/RY7zEpmKR3Q4AJHzKDJBGxp2VGL6kv5PVG882axkmuP8ODZCcfwGEdma2PKOhzOfxzfC9nVtTCZ7nCP23wVO14XagBeXuwK4ryx78k0AIuXn6RLTL9rTTOBNlh4kRvYLj/K/xmQkTzKX41TiDrhGHjBvfUAC7WGwUhtCdt23mLclhMCwY9JrFpuhfvddt5XAzGrXvVT97rueNqsQI9KINCKNSCPSiDQijUinyLJqScbYIj/Qx0ksYwIrU9cHeUHfzBdvWd0fVZZp5Yxk7aXcPm7LtJ8q3p6dSKMT0xTNJWistSvDpYwsAwdxebhK1pOyLlsBJkdgc/xLIevPDWCOvktS1Nd0OTmL+XJHXzu+Ey/olLLcvpQAGnpSWTsvu7qsG2UhLXuP7rE3OSPP7pX6elIyHrucLHdjkbK8HrEsXzFfjK5lPF7rUTbakL04maxH6n7O/Dpsj0ws68LVHcl+V7kRB8FgZfmZskFI/ovowu4t/4+kqT/tQT9C6tmvrJ1VYrucp7DOyvovRuxH2WxVFO3v5DdWkk7Loxfozi6aFqBACfm/ZTiYROtFtqD1ALeV9V/HyHACJX4KMACXUeyJxUwaBQAAAABJRU5ErkJggg=="
                                    id="b" width="57" height="53" />
                            </defs>
                        </svg>
                        <a>
                            <h5
                                class="mb-2 text-[24px] font-aoboshi-one tracking-tight text-black dark:text-white  min-h-[40px]">
                                <span id="numberBusinessPartners">0</span>+
                            </h5>
                        </a>
                        <p class="mt-[-5px] font-isidora text-[12px] text-[#7B7B7B] dark:text-gray-400  mb-4">
                            Business Partners
                        </p>
                    </div>
                    {{-- Happy Clients --}}
                    <div class="group min-w-[146px] max-h-[128px] px-3 py-4 bg-white border border-gray-200 shadow mr-6 ml-6 mt-10 mb-4 text-center"
                        data-aos="fade-up" data-aos-duration="1000">


                        <svg width="41" height="45" viewBox="0 0 41 45" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            class="fill-white mb-2  ml-[40px] mr-[40px]">
                            <rect width="41" height="45" fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_48_5464"
                                        transform="matrix(0.0192555 0 0 0.0175439 -0.000641849 0)" />
                                </pattern>
                                <image id="image0_48_5464" width="52" height="57"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA5CAYAAAB55gg1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkI3MUVEMTAwMkNBNjExRUNBQTU0RDRFNjNEQUFFNDY5IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkI3MUVEMTAxMkNBNjExRUNBQTU0RDRFNjNEQUFFNDY5Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QjcxRUQwRkUyQ0E2MTFFQ0FBNTRENEU2M0RBQUU0NjkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QjcxRUQwRkYyQ0E2MTFFQ0FBNTRENEU2M0RBQUU0NjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5X0cLyAAAH90lEQVR42sSae5BOZRzHz75ZlRW7lpYQa7Wltt3cxyWWMggbkzYqmop0W9UfaHIpha5DdipmuiAUFUNp1botlbKxKSzJIsmltYXZ2OzY7feb/Zx5H+/s5T1nz7v7m/nOOe+5POf5Pc/zu3x/zxtWNKuT5aH4BD0EgwRdBLGCRoIG3D8r+FuQK9ghWCf4TlDiVQfCPFJIFXlA8JygrXH9tOAkiqhcJWgmaGg885tgpuBDQWl1O1LHA2WaCJYL+jDSawVLBd8IjlTwTitBL8EIwUDBQsEofp+qzRlSZbYyK98Lxgr2OGwjQfCBoLNgr6C3IL86S8WtXCZYiTLLBMkulFHZLegp+ELQjtn21YZCj9CR7djPhSDfixGkC4YY1/TdVEEOS/fhmlaormAK52MdKGMxk2mCz5mVKK4XCZ7gfKpb+3arkLrlawTrBTtdLDFbBtNGPX7/wO+WggE1qdCdHBe5ePc/jrpUNws6CKYb95dxdKWQW7d9K8f1Lt6N5XiUJZYneEyQLTgvaGoszRpRqL6gDUHwM0EW0X4PnSwpxxvGC9oLUlhm9gwdw5bUIXwS8N5NgnBBcagVas6xlDSnh3HvIplBMaMdBeoazxQIFgjm8XsczqE1/TnBzCVgp7+HWqEmxlqfikKdiEc6c5Hkb2HYy37BQcFPgi1kEMUB6dGSgG/0RaHmoVZIOzyL80I6qlhseSvnOM4gJh0KhZfTZZOJQyjCBkIlPzK7GmQzsCXPFVI3GoerjRC8G0KF3uYbmifeIOgXCoUSOa7xkr9UIhdxFipJoVDIZ9hOTUmx4fo9VyiPY+caVCjJIIGeK7QWZ3AvWXbzECrSAodwDx7vq1AopLWAFwRXEEsOwTy9lusEhwUbjaz+TKiS01fhPj/jSoeHQKG7sBnN4u8XzKkJCt6VVF+pwM0eKqPZxT5yv44QvhqhD9uYpQS3aX4ltCSeoJ3jpoHqUPAZHN/wqHqk9vJyQNs1qtAKnIOm+dM8UOhFsgJ1BqtrQyGlDw8RaCdjzG5F+dAkq6wgObY6o+Kr5qgewBOpfCy420Ub90EfNJ0aSfZeawpZLI/RtKWsc67lr2VXJg1JQm0uNIrM2qpthVSWGtR6PDP3Ei7dF/C9JDiVPvO4kcl/5EVH6ljey0lo9xRQCK22oNR2yUrTqHyDAXsiXs2QBsSJnD8ruFbwNDnYWVIkxT8sq/H8nmy8401HPNpOGY/tHMCNB1tJrUtmEMvym1dbS64VGbduat3C+QWcg5OysP2Oxp638JI5FFS+dVogcaKQLk3dzxkm6C+4vpxnci3nZWGVHbybBGXoY9z7VfC1YBXUv6S6NpTAUtIC4iaWll1kVPnUKtuR28xMbXVIADvzThJtNKVNO3C34Zsb6cNc+uRIITXwoXxgFw1G8SGlC9GWf4uxL14shXikSmVTC+hPW+W1359nsnlnNW0ombuN587yreF8O4q+aJ+20MewqpyC7p69boyyruV3rLKiollL0OpnIyMHe55zZZjTjSWZR7BdYXCdVKpH9pLSd5cbSelkg1BGG9/UEvQInEd7o9w1gcG/RCHV9BXD9W6GnWZVMLN7SSRLMOxEg/frrN8heFJwezkFDq3mrMcJZBh2obThF4ijD+/XroLvJzNwvfj9Gq6/1F5ys1EmH8NPrkQZlWMcF0PJFxkOpoRS1wA8WKCM5p5ZDlMldBf8cqtsA8D8RnmSxWrSvp6i77Pt0exJENQb3fEoVYlNvjIgY90YcVOesvwl4hmWv4S8mHumzIMFK3HMNJZ7VbKKbxegQ08fhmah5YEgvVM2x27EDp3ZcSwDDZa6q/2mVVbOVbuaim2M5Jree59n9T8KWr/+i2e7Gaw42Ix/gh3g1YZOYHwNLX+RvCppQn6m1Zm2BNhMsuyjlKFU0sqZOb2WzvkR0iT1aP2IScfpT1Mr+O39elSGCnSGYhidcw7iRz6xoQ1udht2dxxl9vHcTMtfQrY4t+n1fpT5E3vIxiaa0LaT/yqcQ4cYX0DJ1YnYedckY80nsgSTWH4NsLNokMG16VCLVOLQzoAEd76L/hTbbruUnKm1i0x9Jx0bVoEzsd17F8P2KnLHD2J7u1DS6YaALv9W1aEPJYa3mg/XMaURsaUAr5jDebwRlG2Js90ubbre3aguH9pEfqV2uNIgbxYM1ke8uQjWcG1wABXXdyNpa1NtEzx1mRuII5nG6KcYNQcr4Ny+F0PWkEgbE7xirBEBeZNTY0xhZHsQaHuTDRQZgVJlHXFoAGmRPtuJd1NcOieLvkfYCikXaUyimGZdugXvxG0OJFjGkppEMOr/Gs8Vci0C5VrwzkCHYcNkvGn0XXXI9bFU0lnD6dTFJlr+PxUFKzryY8io7TxMg+UC0ivdbF5o+fdLj/HsGMv/d5lgJYo+Hgzoe1eTPsRDBVKJCRfgLEtgjecdfLA+2fYzgqsD7mkAnEMG4WR780p4lBY2hzA7pdCTaQTqcoskGo8eZeSijZLTFhTLIlYEs941ex5EddSu330Z5IyEE+OSUaQXmb3Nx94jXBwOtuoTTlozFMQEOILd5F67mfrDpD5O/zPamLwtllRKKXZHjuEB9b5VYENFAxpsGUttrQOj1R3P1LISr3eahLOQIGlT9ga0VZ/zSKviP1X8gRfcyqrICSbgBlv1KaHx7QEjeyO2F4fHaobNRHI/roL2zqDkPmzqOFl6HraQa7n8d/D/AgwAE9ECj7wKsGcAAAAASUVORK5CYII=" />
                            </defs>
                        </svg>

                        <a>
                            <h5
                                class="mb-2 text-[24px] font-aoboshi-one tracking-tight text-black dark:text-white  min-h-[40px]">
                                <span id="numberHappyClients">0</span>+
                            </h5>
                        </a>
                        <p class="mt-[-5px] font-isidora text-[12px] text-[#7B7B7B] dark:text-gray-400  mb-4">
                            Happy Clients
                        </p>
                    </div>
                    {{-- Cases Done --}}
                    <div class="group min-w-[146px] max-h-[128px] px-3 py-4 bg-white border border-gray-200 shadow mr-6 ml-6 mt-10 mb-4 text-center"
                        data-aos="fade-up" data-aos-duration="1500">
                        <img class="fill-white mb-2  ml-[40px] mr-[40px]" src="/assets/images/com-icon3.svg"
                            alt="..." />


                        <a>
                            <h5
                                class="mb-2 text-[24px] font-aoboshi-one tracking-tight text-black dark:text-white  min-h-[40px]">
                                <span id="numberCasesDone">0</span>+
                            </h5>
                        </a>
                        <p class="mt-[-5px] font-isidora text-[12px] text-[#7B7B7B] dark:text-gray-400  mb-4">
                            Cases Done
                        </p>
                    </div>
                    {{-- Awards --}}
                    <div class="group min-w-[146px] max-h-[128px] px-3 py-4 bg-white border border-gray-200 shadow mr-6 ml-6 mt-10 mb-4 text-center"
                        data-aos="fade-up" data-aos-duration="2000">
                        <img class="fill-white mb-2  ml-[40px] mr-[40px]" src="/assets/images/com-icon4.svg"
                            alt="..." />

                        <a>
                            <h5
                                class="mb-2 text-[24px] font-aoboshi-one tracking-tight text-black dark:text-white  min-h-[40px]">
                                <span id="numberAwards">0</span>+
                            </h5>
                        </a>
                        <p class="mt-[-5px] font-isidora text-[12px] text-[#7B7B7B] dark:text-gray-400  mb-4">
                            Awards
                        </p>
                    </div>
                </div>
            </div>

        </section>
        {{-- Our Legal Practice Areas --}}
        <section class="py-10 bg-[#F2F2F2] ">
            <div class="container py-12 mt-[100px]">
                <p class="text-sm text-center text-[#FFA028] font-aoboshi-one dark:text-gray-400 uppercase">
                    Services
                </p>
                <h2
                    class="text-2xl md:text-[30px]  text-center text-rim-title font-aoboshi-one  dark:text-white mb-6 capitalize">
                    Our Legal Practice Areas
                </h2>

                <div id="default-carousel" class="relative w-full h-[93rem] sm:h-[47rem] lg:h-[35rem] "
                    data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg h-[90rem] sm:h-[50rem] lg:h-[38rem]"
                        data-aos="zoom-in-up" data-aos-duration="500">
                        <!-- Carousel Section 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="container flex max-w-[900px] flex-wrap justify-center">
                                {{-- Corporate law and Corporate Restructuring --}}
                                <div
                                    class="group hover:bg-orange-rim max-w-[256px] max-h-[205px] px-3 py-4 bg-white border border-gray-200 shadow mr-4 ml-4 mt-4 mb-4">
                                    <svg width="56" height="46" fill="none"
                                        class="fill-orange-rim mb-2 group-hover:fill-rim-black">
                                        <g clip-path="url(#a)">
                                            <path
                                                d="M55.224 8.364H36.168V3.768C36.168 1.692 34.47 0 32.387 0h-8.779a3.78 3.78 0 0 0-3.776 3.768v4.59H.775A.774.774 0 0 0 0 9.132v16.56c0 .567.223 1.132.628 1.567l.087.096v17.868c0 .425.344.773.77.773H54.51c.43 0 .775-.348.775-.773V27.353l.082-.095c.405-.435.633-1 .633-1.566V9.136c0-.429-.35-.772-.776-.772ZM21.379 3.768a2.23 2.23 0 0 1 2.23-2.223h8.779c1.231 0 2.23.99 2.23 2.223v4.59H21.378v-4.59ZM53.74 44.449H2.26V28.03H14.37l.06.238a4.124 4.124 0 0 0 4.01 3.116c1.9 0 3.542-1.278 4.009-3.116l.055-.238h10.989l.055.238a4.124 4.124 0 0 0 4.01 3.116c1.9 0 3.542-1.278 4.008-3.116l.056-.238H53.74v16.42ZM15.85 27.268c0-.142.01-.283.035-.415.193-1.237 1.298-2.171 2.555-2.171 1.256 0 2.356.934 2.554 2.172a2.694 2.694 0 0 1 0 .818 2.614 2.614 0 0 1-2.554 2.171c-1.252 0-2.362-.934-2.555-2.171a2.135 2.135 0 0 1-.035-.404Zm19.122 0c0-.142.01-.283.03-.415a2.61 2.61 0 0 1 2.555-2.171c1.257 0 2.357.934 2.555 2.172a2.694 2.694 0 0 1 0 .818 2.61 2.61 0 0 1-2.555 2.171 2.606 2.606 0 0 1-2.554-2.171 2.657 2.657 0 0 1-.03-.404Zm19.473-1.571a.806.806 0 0 1-.8.798H41.62l-.056-.237a4.124 4.124 0 0 0-4.009-3.117 4.123 4.123 0 0 0-4.009 3.117l-.055.237H22.503l-.06-.237a4.113 4.113 0 0 0-4-3.117 4.119 4.119 0 0 0-4.008 3.117l-.061.237H2.357a.798.798 0 0 1-.806-.798V9.904h52.898v15.793h-.005Z" />
                                            <path
                                                d="M55.224 8.364H36.168V3.768C36.168 1.692 34.47 0 32.387 0h-8.779a3.78 3.78 0 0 0-3.776 3.768v4.59H.775A.774.774 0 0 0 0 9.132v16.56c0 .567.223 1.132.628 1.567l.087.096v17.868c0 .425.344.773.77.773H54.51c.43 0 .775-.348.775-.773V27.353l.082-.095c.405-.435.633-1 .633-1.566V9.136c0-.429-.35-.772-.776-.772ZM21.379 3.768a2.23 2.23 0 0 1 2.23-2.223h8.779c1.231 0 2.23.99 2.23 2.223v4.59H21.378v-4.59ZM53.74 44.449H2.26V28.03H14.37l.06.238a4.124 4.124 0 0 0 4.01 3.116c1.9 0 3.542-1.278 4.009-3.116l.055-.238h10.989l.055.238a4.124 4.124 0 0 0 4.01 3.116c1.9 0 3.542-1.278 4.008-3.116l.056-.238H53.74v16.42ZM15.85 27.268c0-.142.01-.283.035-.415.193-1.237 1.298-2.171 2.555-2.171 1.256 0 2.356.934 2.554 2.172a2.694 2.694 0 0 1 0 .818 2.614 2.614 0 0 1-2.554 2.171c-1.252 0-2.362-.934-2.555-2.171a2.135 2.135 0 0 1-.035-.404Zm19.122 0c0-.142.01-.283.03-.415a2.61 2.61 0 0 1 2.555-2.171c1.257 0 2.357.934 2.555 2.172a2.694 2.694 0 0 1 0 .818 2.61 2.61 0 0 1-2.555 2.171 2.606 2.606 0 0 1-2.554-2.171 2.657 2.657 0 0 1-.03-.404Zm19.473-1.571a.806.806 0 0 1-.8.798H41.62l-.056-.237a4.124 4.124 0 0 0-4.009-3.117 4.123 4.123 0 0 0-4.009 3.117l-.055.237H22.503l-.06-.237a4.113 4.113 0 0 0-4-3.117 4.119 4.119 0 0 0-4.008 3.117l-.061.237H2.357a.798.798 0 0 1-.806-.798V9.904h52.898v15.793h-.005Z" />
                                            <path
                                                d="M52.675 30.662a.773.773 0 0 1-.77.772h-8.642a.777.777 0 0 1-.775-.772c0-.425.35-.768.775-.768h8.642c.425 0 .77.343.77.768ZM13.426 30.662c0 .424-.35.772-.776.772H4.014a.77.77 0 1 1 0-1.54h8.636c.426 0 .776.343.776.768Z" />
                                        </g>
                                        <defs>
                                            <clipPath id="a">
                                                <path fill="#fff" d="M0 0h56v46H0z" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-[16px] font-roboto tracking-tight text-[#243C7B] dark:text-white group-hover:text-white min-h-[40px]">
                                            Corporate law and
                                            <br>
                                            Corporate Restructuring
                                        </h5>
                                    </a>
                                    <p
                                        class="mt-[-5px] font-inter text-[12px] text-[#243C7B] dark:text-gray-400 group-hover:text-white">
                                        This legal services will cover, rendering a legal opinion or legal advice on any
                                        legal matters that company is dealing with
                                    </p>
                                </div>
                                {{-- Capital Market --}}
                                <div
                                    class="group hover:bg-orange-rim max-w-[256px] max-h-[205px] px-3 py-4 bg-white border border-gray-200 shadow mr-4 ml-4 mt-4 mb-4">
                                    <svg width="37" height="49" fill="none"
                                        class="fill-orange-rim mb-2 group-hover:fill-rim-black">
                                        <g clip-path="url(#a)">
                                            <path
                                                d="M17.419 23.085h1.617v1.48c1.805.216 2.976 1.226 3.507 3.04l-2.225.909c-.433-1.245-1.108-1.864-2.015-1.864-.455 0-.822.137-1.099.416a1.38 1.38 0 0 0-.415 1.01c0 .393.134.712.397.925.269.217.836.482 1.712.801.96.345 1.71.677 2.256.983.545.31.983.735 1.309 1.28.326.544.487 1.182.487 1.908 0 1.116-.335 2.05-1.01 2.794-.67.748-1.644 1.186-2.908 1.315v1.917h-1.618v-1.904c-2.113-.217-3.422-1.435-3.927-3.653l2.498-.646c.232 1.394.996 2.09 2.3 2.09.608 0 1.06-.151 1.345-.448.286-.296.43-.66.43-1.084 0-.425-.144-.77-.43-.992-.286-.226-.924-.514-1.912-.86-.889-.305-1.586-.606-2.086-.907a3.44 3.44 0 0 1-1.22-1.253c-.313-.535-.469-1.164-.469-1.877 0-.939.277-1.78.835-2.528.559-.748 1.435-1.209 2.632-1.373v-1.479h.009Z" />
                                            <path
                                                d="M36.987 32.405c0-.137-.005-.248-.005-.323.134-12.26-10.709-17.529-13.43-18.658.032-.65.077-1.656.077-2.258l3.953-6.044a.845.845 0 0 0 .027-.88c-.094-.164-2.345-3.985-9.078-4.247h-.076C16.168.106 11.933.77 9.24 3.967a.85.85 0 0 0 .031 1.129c1.238 1.31 3.655 5.322 4.204 6.243v2.072C10.816 14.513-.116 19.773.018 32.073c0 .084 0 .195-.005.332-.044 1.926-.187 7.788 4.021 12.065 2.958 3.002 7.42 4.525 13.264 4.525.393 0 .791-.004 1.202-.022.411.014.809.022 1.202.022 5.839 0 10.302-1.523 13.26-4.525 4.212-4.277 4.07-10.139 4.025-12.065Zm-15.1-20.3c-.014.42-.036.859-.054 1.204-.706.142-1.98.341-3.49.341-1.112 0-2.166-.115-3.145-.323v-1.209a27.15 27.15 0 0 0 6.688-.009v-.004ZM18.503 1.709c4.513.186 6.608 2.125 7.318 2.98L22.12 10.35c-.662.098-1.3.164-1.908.204.12-.965.483-2.94 1.55-4.627a.844.844 0 0 0-.272-1.173.86.86 0 0 0-1.184.27c-1.35 2.13-1.73 4.578-1.832 5.588-.259 0-.51 0-.75-.014-.26-1.044-.8-3.094-1.238-4.02a.866.866 0 0 0-1.143-.412.851.851 0 0 0-.416 1.134c.3.629.701 2.068.992 3.179-.447-.044-.8-.098-1.041-.133-.612-1.027-2.489-4.122-3.829-5.8 2.368-2.316 5.929-2.754 7.457-2.834V1.71Zm13.229 41.575c-2.623 2.66-6.67 4.011-12.031 4.011-.384 0-.773-.009-1.17-.022h-.063c-.398.013-.791.022-1.17.022-5.362 0-9.41-1.35-12.032-4.011C1.564 39.52 1.69 34.198 1.733 32.45c0-.151.005-.28.005-.381-.13-11.893 10.82-16.493 12.639-17.18 1.228.306 2.56.466 3.967.466 2.023 0 3.645-.324 4.266-.465 1.8.673 12.777 5.273 12.648 17.188 0 .093 0 .221.004.371.04 1.75.17 7.071-3.534 10.835h.005Z" />
                                        </g>
                                        <defs>
                                            <clipPath id="a">
                                                <path fill="#fff" d="M0 0h37v49H0z" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-[16px] font-roboto tracking-tight text-[#243C7B] dark:text-white group-hover:text-white min-h-[40px]">
                                            Capital Market
                                        </h5>
                                    </a>
                                    <p
                                        class="mt-[-5px] font-inter text-[12px] text-[#243C7B] dark:text-gray-400 group-hover:text-white">
                                        There are many laws that concern managing a business because there are many
                                        aspects invloved in managing. Running a business
                                    </p>
                                </div>
                                {{-- Foreign and Domestic Investment --}}
                                <div
                                    class="group hover:bg-orange-rim max-w-[256px] max-h-[205px] px-3 py-4 bg-white border border-gray-200 shadow mr-4 ml-4 mt-4 mb-4">
                                    <svg width="42" height="49" fill="none"
                                        class="fill-orange-rim mb-2 group-hover:fill-rim-black">
                                        <g clip-path="url(#a)">
                                            <path
                                                d="M31.516 48.993c-3.486-.032-6.713-1.838-8.624-4.836l-.028-.035a10.755 10.755 0 0 1 0-11.455l.02-.032c1.933-3.037 5.19-4.85 8.722-4.85 3.532 0 6.603 1.718 8.552 4.592l.045.06a10.753 10.753 0 0 1 1.794 5.957c0 2.124-.615 4.173-1.776 5.926l-.01.017-.011.029c-1.946 2.878-5.118 4.606-8.5 4.634l-.09.007-.09-.007-.004-.007Zm-.145-6.518c-.74 0-1.492.05-2.228.138l-.225.028.031.23c.567 4.076 2.046 4.986 2.488 5.166l.086.028.073.036.069-.025c.46-.138 2-.91 2.595-5.139l.031-.222-.218-.032c-.895-.134-1.8-.2-2.688-.2h-.014v-.008Zm-3.559.353c-.58.116-1.154.257-1.7.423l-.245.074.107.236c.608 1.344 1.514 2.423 2.688 3.21l.64.43-.315-.712c-.414-.931-.719-2.102-.909-3.474l-.034-.237-.228.046-.004.004Zm7.315.285c-.19 1.33-.494 2.466-.898 3.38l-.315.712.64-.43a7.544 7.544 0 0 0 2.626-3.076l.11-.233-.242-.08a17.127 17.127 0 0 0-1.651-.46l-.232-.052-.034.24h-.004Zm-10.283.579c-.249.099-.47.19-.66.279l-.259.116.173.23a9.631 9.631 0 0 0 2.163 2.087l.29-.338a8.895 8.895 0 0 1-1.423-2.258l-.087-.194-.197.078Zm13.172.275a8.914 8.914 0 0 1-1.355 2.102l.29.339a9.696 9.696 0 0 0 2.043-1.926l.176-.222-.256-.124c-.172-.084-.38-.18-.615-.278l-.193-.081-.09.194v-.004Zm1.071-4.906c-.048 1.337-.249 2.568-.59 3.664l-.063.198.187.081c.307.13.6.268.87.406l.184.095.103-.18a9.721 9.721 0 0 0 1.3-4.236l.017-.243h-2l-.008.219v-.004Zm-16.952.025a9.653 9.653 0 0 0 1.196 4.06l.1.18.186-.09c.28-.13.591-.264.923-.394l.194-.078-.06-.2c-.314-1.055-.497-2.233-.545-3.507l-.007-.218h-2l.017.243-.004.004Zm13.244-.014c0 .973-.03 1.883-.1 2.701l-.017.198.19.042c.67.145 1.324.325 1.946.533l.214.07.065-.218c.301-.988.474-2.103.522-3.32l.01-.236h-2.83v.23Zm-10.366.007c.045 1.153.208 2.225.484 3.184l.062.22.215-.068a18.019 18.019 0 0 1 1.976-.494l.197-.038-.017-.205a32.3 32.3 0 0 1-.093-2.61v-.226h-2.83l.006.237Zm6.345 2.49c.963.003 1.89.07 2.795.204l.235.035.017-.24c.059-.775.09-1.615.087-2.496v-.226H28.72v.226c0 .86.024 1.682.083 2.437l.017.236.228-.028a19.254 19.254 0 0 1 2.333-.141h-.024v-.007Zm8.133-8.197c-.276.141-.563.275-.87.406l-.19.08.062.198c.345 1.097.546 2.328.594 3.665l.007.218h2l-.017-.243a9.722 9.722 0 0 0-1.299-4.236l-.103-.18-.184.096v-.004Zm-2.09.864a18.49 18.49 0 0 1-1.942.533l-.194.042.018.201c.069.815.1 1.725.1 2.698v.226h2.83l-.007-.236c-.048-1.214-.221-2.332-.522-3.32l-.065-.218-.215.07-.003.004Zm-8.597 1.034a33.679 33.679 0 0 0-.083 2.44v.226h5.77v-.226c0-.885-.027-1.728-.086-2.497l-.017-.24-.235.035a19.159 19.159 0 0 1-5.104.057l-.231-.028-.018.236.004-.004Zm-3.307-.755c-.276.956-.439 2.028-.484 3.185l-.01.236h2.83v-.226c0-.934.028-1.816.093-2.613l.018-.205-.197-.039a18.18 18.18 0 0 1-1.973-.493l-.215-.067-.062.218v.004Zm-2.166-.886a9.72 9.72 0 0 0-1.196 4.064l-.017.243h2l.007-.219c.045-1.273.232-2.454.546-3.51l.06-.2-.194-.074a15.623 15.623 0 0 1-.923-.395l-.187-.088-.1.18h.004Zm8.216-4.923c-.463.137-2.014.917-2.605 5.199l-.03.229.224.028c.746.092 1.5.141 2.242.141.888 0 1.794-.067 2.685-.2l.218-.033-.031-.225c-.557-3.908-1.918-4.867-2.474-5.1l-.09-.032-.073-.035-.069.024.003.004Zm-2.892 1.298c-1.171.786-2.076 1.866-2.684 3.206l-.108.236.246.074c.55.166 1.12.31 1.7.427l.228.046.034-.236c.19-1.372.498-2.54.91-3.471l.314-.713-.64.43Zm5.57.282c.405.913.709 2.05.899 3.375l.034.24.232-.053a17.736 17.736 0 0 0 1.652-.458l.241-.081-.11-.233c-.608-1.28-1.49-2.314-2.623-3.076l-.639-.43.314.712v.004Zm-7.96.077a9.678 9.678 0 0 0-2.17 2.092l-.173.23.259.116c.19.084.414.18.663.278l.197.078.087-.194a8.934 8.934 0 0 1 1.43-2.26l-.29-.34h-.004Zm10.386.34a8.766 8.766 0 0 1 1.361 2.108l.09.194.197-.08c.239-.103.443-.195.619-.28l.255-.123-.176-.222a9.756 9.756 0 0 0-2.049-1.933l-.29.339-.007-.004ZM.784 11.22h32.25c.431 0 .784-.36.784-.801a.792.792 0 0 0-.405-.702L17.305.106a.807.807 0 0 0-.795 0L.39 9.724a.809.809 0 0 0-.362.903.79.79 0 0 0 .756.592ZM16.91 1.025l15.425 9.199H1.49L16.91 1.026ZM28.818 18.517c-1.348 0-2.443 1.118-2.443 2.493v7.414c.318-.173.642-.332.974-.473v-6.94c0-.84.66-1.5 1.5-1.5s1.468.67 1.468 1.5v6.154c.322-.04.646-.06.975-.07V21.01a2.489 2.489 0 0 0-2.478-2.494h.004Z" />
                                            <path
                                                d="M22.857 18.517c-1.347 0-2.443 1.118-2.443 2.493v13.565c0 .493.145.956.387 1.343.142-.652.339-1.287.588-1.89V21.01c0-.84.66-1.499 1.5-1.499.839 0 1.468.67 1.468 1.5v8.838c.31-.276.636-.533.974-.773V21.01a2.489 2.489 0 0 0-2.477-2.494h.003ZM21.24 42.366H.974v-3.478h19.568c-.007-.166-.014-.331-.014-.497 0-.166.007-.332.014-.497H.784a.794.794 0 0 0-.784.8v3.866c0 .44.352.8.784.8h20.874a11.432 11.432 0 0 1-.421-.994h.003ZM2.526 21.01v13.565c0 1.375 1.095 2.493 2.443 2.493h.034c1.348 0 2.443-1.118 2.443-2.493V21.01a2.489 2.489 0 0 0-2.477-2.494c-1.365 0-2.443 1.119-2.443 2.494Zm3.942 0v13.565c0 .825-.656 1.499-1.5 1.499-.842 0-1.468-.674-1.468-1.5V21.01c0-.84.66-1.499 1.5-1.499s1.468.67 1.468 1.5ZM8.486 21.01v13.565c0 1.375 1.096 2.493 2.443 2.493h.035c1.348 0 2.443-1.118 2.443-2.493V21.01a2.489 2.489 0 0 0-2.478-2.494c-1.365 0-2.443 1.119-2.443 2.494Zm3.943 0v13.565c0 .825-.657 1.499-1.5 1.499s-1.468-.674-1.468-1.5V21.01c0-.84.66-1.499 1.5-1.499s1.468.67 1.468 1.5ZM14.45 21.01v13.565c0 1.375 1.096 2.493 2.443 2.493h.035c1.348 0 2.443-1.118 2.443-2.493V21.01a2.489 2.489 0 0 0-2.478-2.494c-1.365 0-2.443 1.119-2.443 2.494Zm3.943 0v13.565c0 .825-.657 1.499-1.5 1.499s-1.468-.674-1.468-1.5V21.01c0-.84.66-1.499 1.5-1.499s1.468.67 1.468 1.5ZM.784 17.607h32.25c.431 0 .784-.36.784-.801V12.94c0-.44-.353-.8-.785-.8H.784a.79.79 0 0 0-.784.8v3.866c0 .44.352.8.784.8Zm.19-4.473h31.87v3.478H.973v-3.478Z" />
                                        </g>
                                        <defs>
                                            <clipPath id="a">
                                                <path fill="#fff" d="M0 0h42v49H0z" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-[16px] font-roboto tracking-tight text-[#243C7B] dark:text-white group-hover:text-white min-h-[40px]">
                                            Foreign and Domestic Investment
                                        </h5>
                                    </a>
                                    <p
                                        class="mt-[-5px] font-inter text-[12px] text-[#243C7B] dark:text-gray-400 group-hover:text-white">
                                        There are many laws that concern managing a business because there are many
                                        aspects invloved in managing. Running a business
                                    </p>
                                </div>
                                {{-- Labor Law --}}
                                <div
                                    class="group hover:bg-orange-rim max-w-[256px] max-h-[205px] px-3 py-4 bg-white border border-gray-200 shadow mr-4 ml-4 mt-4 mb-4">
                                    <svg width="53" height="42" fill="none"
                                        class="fill-orange-rim mb-2 group-hover:fill-rim-black">
                                        <g clip-path="url(#a)">
                                            <path
                                                d="M2.133 42c-.899 0-1.225-.986-1.537-2.182l-.073-.279c-.404-1.502-.578-3.122-.51-4.82.051-1.215.216-2.434.496-3.616l.069-.297c.092-.415.188-.84.362-1.178.156-.32.51-.548.849-.762.087-.055.17-.11.252-.165l3.188-2.159c.349-.237.404-.347.372-.726l-.014-.169c-.096-1.556.05-3.108.436-4.615l.092-.365H2.789c-.775 0-1.124-.744-1.5-1.712a9.62 9.62 0 0 1-.628-3.173c-.037-1.164.1-2.37.417-3.593l.064-.26c.124-.507.266-1.082.55-1.438.276-.37.803-.676 1.271-.945.202-.114.395-.228.56-.338L16.133.845c.106-.069.211-.147.321-.224.431-.306.876-.626 1.335-.626h28.454c.725 0 1.05.598 1.05 1.15 0 .27-.091.503-.201.768-.055.128-.106.26-.152.402a9.09 9.09 0 0 0-.357 1.67 9.113 9.113 0 0 0 0 2.475c.004.04.009.091.018.155.05.502.124 1.255.67 1.255h4.569c.353 0 .646.11.853.32.215.224.33.557.316.945 0 .21-.082.397-.179.616-.05.114-.1.229-.142.352a9.437 9.437 0 0 0-.261.986c-.198.94-.29 1.876-.266 2.785.018.826.128 1.543.334 2.191.05.164.12.324.189.484.183.438.33.78.156 1.178-.134.301-.44.525-.767.762-.137.1-.28.201-.399.306l-4.591 3.917c-.276.233-.308.365-.326.676l-.01.137c-.091 1.219-.16 2.51.097 3.734.041.192.106.388.17.58.202.611.307 1.004-.05 1.378-.138.137-.303.26-.478.393a5.493 5.493 0 0 0-.362.283L32.578 41.425c-.422.36-.766.57-1.257.57H2.133V42Zm-.21-11.591c-.29.95-.501 2-.625 3.113-.188 1.68-.133 3.297.156 4.794.486 2.51.725 2.51.959 2.51H31.43l-.215-.424c-.537-1.05-.858-2.456-.932-4.058-.087-1.945.147-3.689.702-5.182l.147-.392H7.68a1.28 1.28 0 0 1-.34-.032c-.114-.032-.215-.114-.33-.215-.165-.146-.376-.324-.683-.324H1.982l-.065.205.005.005Zm30.7.36c-.283 0-.513.156-.93 2.192-.5 2.46-.317 4.907.5 6.747l.16.36 12.844-10.933c.152-.128.298-.255.459-.374.362-.274.23-.603.16-.776-.018-.05-.04-.1-.055-.16a7.774 7.774 0 0 1-.17-.863c-.086-.653-.119-1.374-.091-2.264l.018-.658-7.146 6.086c-.06.05-.12.105-.18.16-.15.137-.311.283-.463.36-.257.137-.614.155-.857.155-.156 0-.308-.004-.46-.013a6.725 6.725 0 0 0-.417-.014H32.62l.005-.004ZM8.029 19.778c-.56 0-.711.776-.817 1.346-.018.087-.032.165-.046.22-.715 2.789-.555 5.656.445 8.075l.074.183h29.422l-.18-.411c-.458-1.06-.729-2.191-.834-3.46-.188-2.329.055-4.187.734-5.524l.215-.425H8.028v-.005Zm-4.372 9.249h2.55l-.11-.375a16.47 16.47 0 0 1-.179-.68l-.1-.41-2.161 1.46v.005Zm35.422-9.364c-.784.567-1.349.977-1.583 2.173-.289 1.749-.56 4.333.4 6.634l.155.37.308-.26c.826-.704 1.642-1.42 2.463-2.142 1.629-1.429 3.308-2.903 5.037-4.24l5.238-4.438.088-.064c.22-.15.38-.27.43-.439l.033-.1-.041-.1c-.67-1.534-.817-3.438-.436-5.666l.119-.716-12.211 8.988Zm-36.541-8.19c-.06.165-.115.33-.165.493a11.31 11.31 0 0 0-.533 3.712c.023.881.17 1.721.432 2.502.018.055.036.118.055.191.128.452.32 1.133.89 1.133h2.55c.055 0 .106 0 .151.009.06.004.12.009.175.009.261 0 .45-.11.56-.329.17-.333.564-.58.935-.58h24.06l-.12-.378c-.623-2.014-.5-4.46.33-6.552l.161-.401H2.606l-.07.191Zm34.298 7.118c.349 0 .743.032 1.027.25l.175.138 13.49-9.934h-4.032c-.15 0-.201.068-.344.255a7.894 7.894 0 0 1-.408.516c-.133.105-.27.206-.408.31l-11.133 8.483h.867c.12 0 .247 0 .376-.01.128-.004.257-.008.385-.008h.005Zm8.45-16.682c-1.413 1.032-2.835 2.06-4.253 3.086L33.56 10.41c-.386.283-.409.506-.39.84 0 .064.004.141 0 .228 0 .169-.083.356-.17.552-.05.11-.1.224-.138.334a9.96 9.96 0 0 0-.45 2.017c-.146 1.201-.086 2.306.18 3.278.05.128.069.229.092.32.045.214.123.575.477.575.123 0 .243-.05.385-.155l12.257-9.336c.238-.169.202-.347.128-.516l-.036-.082a7.778 7.778 0 0 1-.537-2.228 10.81 10.81 0 0 1 .385-4.013l.239-.826-.698.507v.004Zm-40.968 8.2h27.348c.445 0 .785-.288 1.087-.544.083-.068.165-.137.248-.196l11.298-8.195H17.761L4.318 10.107Z" />
                                            <path
                                                d="M16.473 7.113c-.46 0-.867-.306-.991-.745-.133-.42.036-.885.413-1.14l3.788-2.53c.166-.11.367-.169.574-.169H33.56c.468 0 .876.31 1 .753a1.03 1.03 0 0 1-.455 1.15L30.07 6.949a1.01 1.01 0 0 1-.555.16H16.468l.005.005Zm.467-1.174h12.537l3.587-2.237h-12.77L16.94 5.94ZM16.041 27.656a1.032 1.032 0 0 1-1.032-1.032v-3.68h-.454a.587.587 0 0 1-.587-.584.59.59 0 0 1 .587-.584h11.243c.326 0 .587.265.587.584a.59.59 0 0 1-.587.585h-.45v3.68c0 .319-.146.616-.398.817a1.058 1.058 0 0 1-.922.173l-3.85-1.1-3.852 1.1a.877.877 0 0 1-.28.046l-.005-.005Zm4.133-2.342c.055 0 .11.01.16.023l3.836 1.096v-3.48l-.294-.013h-7.693v3.493l3.83-1.096a.648.648 0 0 1 .161-.023Z" />
                                        </g>
                                        <defs>
                                            <clipPath id="a">
                                                <path fill="#fff" d="M0 0h53v42H0z" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-[16px] font-roboto tracking-tight text-[#243C7B] dark:text-white group-hover:text-white min-h-[40px]">
                                            Labor Law
                                        </h5>
                                    </a>
                                    <p
                                        class="mt-[-5px] font-inter text-[12px] text-[#243C7B] dark:text-gray-400 group-hover:text-white">
                                        There are many laws that concern managing a business because there are many
                                        aspects invloved in managing. Running a business
                                    </p>
                                </div>
                                {{-- Project Financing (BOT, BOO, Joint Operation) --}}
                                <div
                                    class="group hover:bg-orange-rim max-w-[256px] max-h-[205px] px-3 py-4 bg-white border border-gray-200 shadow mr-4 ml-4 mt-4 mb-4">
                                    <svg width="43" height="42" fill="none"
                                        class="fill-orange-rim mb-2 group-hover:fill-rim-black">
                                        <g clip-path="url(#a)">
                                            <path
                                                d="M5.789 3.014H1.04c-.577 0-1.04.359-1.04.81v30.64c0 .413.45 1.13.706 1.75.774 1.471 1.833 3.47 1.966 3.723.124.29.413.832.743.832s.627-.543.751-.837a297.47 297.47 0 0 1 1.966-3.713c.252-.45.702-1.103.702-1.516V3.823c0-.45-.472-.809-1.04-.809h-.005ZM1.618 33.88V7.84H5.21v26.04H1.618Zm0-29.243h3.607v1.58H1.618v-1.58ZM3.41 37.864c-.312-.597-.765-1.401-1.357-2.545h2.718c-.605 1.14-1.045 1.953-1.356 2.545H3.41ZM42.647 10.656 32.28.257A.876.876 0 0 0 31.657 0H11.348a.88.88 0 0 0-.88.887v40.23c0 .492.394.883.88.883h31.643V11.483c.014-.036.014-.078.014-.12a.887.887 0 0 0-.353-.707h-.005Zm-2.672-.179h-7.439V3.019l7.44 7.458ZM12.228 40.231V1.769h18.544v9.595c0 .492.394.887.88.887h9.57v27.98H12.228Z" />
                                            <path
                                                d="M37.995 18.886H26.147a.885.885 0 0 1 0-1.77h11.848c.486.001.88.396.88.888a.878.878 0 0 1-.88.882ZM37.89 22.774H27.756a.886.886 0 0 1-.884-.887.88.88 0 0 1 .884-.882H37.89a.885.885 0 0 1 0 1.77ZM37.995 26.606h-4.088a.885.885 0 0 1 0-1.77h4.088c.486.001.88.396.88.888a.878.878 0 0 1-.88.882ZM37.995 32.993h-4.088a.885.885 0 0 1 0-1.77h4.088c.486.001.88.396.88.888a.878.878 0 0 1-.88.883ZM23.576 18.886H20.78A.882.882 0 0 1 19.9 18c0-.491.395-.882.88-.882h2.796a.885.885 0 0 1 0 1.77ZM18.246 18.886h-1.522a.882.882 0 0 1-.88-.887c0-.491.394-.882.88-.882h1.522a.885.885 0 0 1 0 1.77ZM25.098 22.774h-1.522a.882.882 0 0 1-.88-.887c0-.492.394-.882.88-.882h1.522a.885.885 0 0 1 0 1.769ZM37.963 29.754h-1.522a.882.882 0 0 1-.88-.887c0-.492.395-.882.88-.882h1.522a.885.885 0 0 1 0 1.77ZM33.783 29.754h-1.522a.882.882 0 0 1-.88-.887c0-.492.395-.882.88-.882h1.522a.885.885 0 0 1 0 1.77ZM29.337 29.754h-7.819a.882.882 0 0 1-.88-.887c0-.492.394-.882.88-.882h7.82a.885.885 0 0 1 0 1.77ZM31.148 26.606H19.754a.882.882 0 0 1-.88-.887c0-.491.394-.882.88-.882h11.394a.885.885 0 0 1 0 1.77Z" />
                                        </g>
                                        <defs>
                                            <clipPath id="a">
                                                <path fill="#fff" d="M0 0h43v42H0z" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-[16px] font-roboto tracking-tight text-[#243C7B] dark:text-white group-hover:text-white min-h-[40px]">
                                            Project Financing
                                            <br>
                                            (BOT, BOO, Joint Operation)
                                        </h5>
                                    </a>
                                    <p
                                        class="mt-[-5px] font-inter text-[12px] text-[#243C7B] dark:text-gray-400 group-hover:text-white">
                                        There are many laws that concern managing a business because there are many
                                        aspects invloved in managing. Running a business
                                    </p>
                                </div>
                                {{-- Company Secretarial --}}
                                <div
                                    class="group hover:bg-orange-rim max-w-[256px] max-h-[205px] px-3 py-4 bg-white border border-gray-200 shadow mr-4 ml-4 mt-4 mb-4">
                                    <svg width="35" height="45" fill="none"
                                        class="fill-orange-rim mb-2 group-hover:fill-rim-black">
                                        <g clip-path="url(#a)">
                                            <path
                                                d="M.812 18.272a.823.823 0 0 1-.812-.83V13.43c0-.458.365-.831.812-.831h33.373c.447 0 .811.373.811.83v4.012c0 .458-.364.831-.811.831H.812Zm.196-1.032h32.98v-3.609H1.008v3.61ZM.812 45A.823.823 0 0 1 0 44.17v-4.013c0-.457.365-.83.812-.83h33.373c.447 0 .811.373.811.83v4.012c0 .458-.364.831-.811.831H.812Zm.196-1.032h32.98v-3.61H1.008v3.61ZM.812 11.643a.815.815 0 0 1-.783-.614.84.84 0 0 1 .375-.938L17.089.11a.834.834 0 0 1 .822 0l16.67 9.97c.255.132.419.421.419.729 0 .458-.365.83-.812.83H.812v.005Zm.73-1.032h31.92L17.5 1.061 1.541 10.608v.003ZM5.142 38.47c-1.395 0-2.528-1.16-2.528-2.588V21.805c0-1.428 1.133-2.588 2.528-2.588s2.564 1.16 2.564 2.588v14.077c0 1.428-1.134 2.588-2.528 2.588h-.036Zm.036-18.217c-.873 0-1.552.68-1.552 1.555v14.078c0 .856.68 1.555 1.52 1.555s1.551-.699 1.551-1.555V21.808c0-.856-.679-1.555-1.52-1.555ZM11.31 38.47c-1.394 0-2.528-1.16-2.528-2.588V21.805c0-1.428 1.134-2.588 2.528-2.588 1.395 0 2.564 1.16 2.564 2.588v14.077c0 1.428-1.133 2.588-2.528 2.588h-.036Zm.036-18.217c-.873 0-1.552.68-1.552 1.555v14.078c0 .856.68 1.555 1.52 1.555s1.552-.699 1.552-1.555V21.808c0-.856-.68-1.555-1.52-1.555ZM17.482 38.47c-1.394 0-2.528-1.16-2.528-2.588V21.805c0-1.428 1.134-2.588 2.528-2.588 1.395 0 2.564 1.16 2.564 2.588v14.077c0 1.428-1.133 2.588-2.528 2.588h-.036Zm.036-18.217c-.873 0-1.552.68-1.552 1.555v14.078c0 .856.68 1.555 1.52 1.555s1.552-.699 1.552-1.555V21.808c0-.856-.68-1.555-1.52-1.555ZM23.654 38.47c-1.395 0-2.528-1.16-2.528-2.588V21.805c0-1.428 1.133-2.588 2.528-2.588s2.564 1.16 2.564 2.588v14.077c0 1.428-1.134 2.588-2.528 2.588h-.036Zm.036-18.217c-.873 0-1.552.68-1.552 1.555v14.078c0 .856.683 1.555 1.52 1.555.836 0 1.551-.699 1.551-1.555V21.808c0-.856-.679-1.555-1.52-1.555ZM29.822 38.47c-1.394 0-2.528-1.16-2.528-2.588V21.805c0-1.428 1.134-2.588 2.528-2.588 1.395 0 2.564 1.16 2.564 2.588v14.077c0 1.428-1.134 2.588-2.528 2.588h-.036Zm.036-18.217c-.873 0-1.552.68-1.552 1.555v14.078c0 .856.68 1.555 1.52 1.555s1.552-.699 1.552-1.555V21.808c0-.856-.68-1.555-1.52-1.555Z" />
                                        </g>
                                        <defs>
                                            <clipPath id="a">
                                                <path fill="#fff" d="M0 0h35v45H0z" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-[16px] font-roboto tracking-tight text-[#243C7B] dark:text-white group-hover:text-white min-h-[40px]">
                                            Company Secretarial
                                        </h5>
                                    </a>
                                    <p
                                        class="mt-[-5px] font-inter text-[12px] text-[#243C7B] dark:text-gray-400 group-hover:text-white">
                                        There are many laws that concern managing a business because there are many
                                        aspects invloved in managing. Running a business
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel Section 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="container flex max-w-[900px] flex-wrap">
                                {{-- Corporate law and Corporate Restructuring --}}
                                <div
                                    class="group hover:bg-orange-rim max-w-[256px] max-h-[205px] px-3 py-4 bg-white border border-gray-200 shadow mr-4 ml-4 mt-4 mb-4">
                                    <svg width="56" height="46" fill="none"
                                        class="fill-orange-rim mb-2 group-hover:fill-rim-black">
                                        <g clip-path="url(#a)">
                                            <path
                                                d="M55.224 8.364H36.168V3.768C36.168 1.692 34.47 0 32.387 0h-8.779a3.78 3.78 0 0 0-3.776 3.768v4.59H.775A.774.774 0 0 0 0 9.132v16.56c0 .567.223 1.132.628 1.567l.087.096v17.868c0 .425.344.773.77.773H54.51c.43 0 .775-.348.775-.773V27.353l.082-.095c.405-.435.633-1 .633-1.566V9.136c0-.429-.35-.772-.776-.772ZM21.379 3.768a2.23 2.23 0 0 1 2.23-2.223h8.779c1.231 0 2.23.99 2.23 2.223v4.59H21.378v-4.59ZM53.74 44.449H2.26V28.03H14.37l.06.238a4.124 4.124 0 0 0 4.01 3.116c1.9 0 3.542-1.278 4.009-3.116l.055-.238h10.989l.055.238a4.124 4.124 0 0 0 4.01 3.116c1.9 0 3.542-1.278 4.008-3.116l.056-.238H53.74v16.42ZM15.85 27.268c0-.142.01-.283.035-.415.193-1.237 1.298-2.171 2.555-2.171 1.256 0 2.356.934 2.554 2.172a2.694 2.694 0 0 1 0 .818 2.614 2.614 0 0 1-2.554 2.171c-1.252 0-2.362-.934-2.555-2.171a2.135 2.135 0 0 1-.035-.404Zm19.122 0c0-.142.01-.283.03-.415a2.61 2.61 0 0 1 2.555-2.171c1.257 0 2.357.934 2.555 2.172a2.694 2.694 0 0 1 0 .818 2.61 2.61 0 0 1-2.555 2.171 2.606 2.606 0 0 1-2.554-2.171 2.657 2.657 0 0 1-.03-.404Zm19.473-1.571a.806.806 0 0 1-.8.798H41.62l-.056-.237a4.124 4.124 0 0 0-4.009-3.117 4.123 4.123 0 0 0-4.009 3.117l-.055.237H22.503l-.06-.237a4.113 4.113 0 0 0-4-3.117 4.119 4.119 0 0 0-4.008 3.117l-.061.237H2.357a.798.798 0 0 1-.806-.798V9.904h52.898v15.793h-.005Z" />
                                            <path
                                                d="M55.224 8.364H36.168V3.768C36.168 1.692 34.47 0 32.387 0h-8.779a3.78 3.78 0 0 0-3.776 3.768v4.59H.775A.774.774 0 0 0 0 9.132v16.56c0 .567.223 1.132.628 1.567l.087.096v17.868c0 .425.344.773.77.773H54.51c.43 0 .775-.348.775-.773V27.353l.082-.095c.405-.435.633-1 .633-1.566V9.136c0-.429-.35-.772-.776-.772ZM21.379 3.768a2.23 2.23 0 0 1 2.23-2.223h8.779c1.231 0 2.23.99 2.23 2.223v4.59H21.378v-4.59ZM53.74 44.449H2.26V28.03H14.37l.06.238a4.124 4.124 0 0 0 4.01 3.116c1.9 0 3.542-1.278 4.009-3.116l.055-.238h10.989l.055.238a4.124 4.124 0 0 0 4.01 3.116c1.9 0 3.542-1.278 4.008-3.116l.056-.238H53.74v16.42ZM15.85 27.268c0-.142.01-.283.035-.415.193-1.237 1.298-2.171 2.555-2.171 1.256 0 2.356.934 2.554 2.172a2.694 2.694 0 0 1 0 .818 2.614 2.614 0 0 1-2.554 2.171c-1.252 0-2.362-.934-2.555-2.171a2.135 2.135 0 0 1-.035-.404Zm19.122 0c0-.142.01-.283.03-.415a2.61 2.61 0 0 1 2.555-2.171c1.257 0 2.357.934 2.555 2.172a2.694 2.694 0 0 1 0 .818 2.61 2.61 0 0 1-2.555 2.171 2.606 2.606 0 0 1-2.554-2.171 2.657 2.657 0 0 1-.03-.404Zm19.473-1.571a.806.806 0 0 1-.8.798H41.62l-.056-.237a4.124 4.124 0 0 0-4.009-3.117 4.123 4.123 0 0 0-4.009 3.117l-.055.237H22.503l-.06-.237a4.113 4.113 0 0 0-4-3.117 4.119 4.119 0 0 0-4.008 3.117l-.061.237H2.357a.798.798 0 0 1-.806-.798V9.904h52.898v15.793h-.005Z" />
                                            <path
                                                d="M52.675 30.662a.773.773 0 0 1-.77.772h-8.642a.777.777 0 0 1-.775-.772c0-.425.35-.768.775-.768h8.642c.425 0 .77.343.77.768ZM13.426 30.662c0 .424-.35.772-.776.772H4.014a.77.77 0 1 1 0-1.54h8.636c.426 0 .776.343.776.768Z" />
                                        </g>
                                        <defs>
                                            <clipPath id="a">
                                                <path fill="#fff" d="M0 0h56v46H0z" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-[16px] font-roboto tracking-tight text-[#243C7B] dark:text-white group-hover:text-white">
                                            Corporate law and
                                            <br>
                                            Corporate Restructuring
                                        </h5>
                                    </a>
                                    <p
                                        class="mt-[-5px] font-inter text-[12px] text-gray-500 dark:text-gray-400 group-hover:text-white">
                                        This legal services will cover, rendering a legal opinion or legal advice on any
                                        legal matters that company is dealing with
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0">
                        </button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 2" data-carousel-slide-to="1">
                        </button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span class="sr-only">
                                Previous
                            </span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="sr-only">
                                Next
                            </span>
                        </span>
                    </button>
                </div>
            </div>
        </section>
        {{-- Why Choose Us --}}
        <section class="py-10 relative">
            <div class="container py-12 mt-[100px]">
                <div class="container flex flex-wrap sm:flex-nowrap gap-8">
                    <div class="container w-full h-fit" data-aos="zoom-out" data-aos-duration="500">
                        <img class="w-full sm:h-[378px] sm:w-[368px] object-none float-right"
                            src="/assets/images/models-choose-us.png" alt="">
                    </div>
                    <div class="container sm:mt-[-40px] px-8">
                        <div class="container ">
                            <p class="text-sm text-left text-[#FFA028] font-aoboshi-one dark:text-gray-400 uppercase"
                                data-aos="fade-up" data-aos-duration="500">
                                Facts
                            </p>
                            <h2 class="text-2xl md:text-[30px]  text-left text-rim-title font-aoboshi-one  dark:text-white mb-6 capitalize"
                                data-aos="fade-up" data-aos-duration="800">
                                Why Choose Us?
                            </h2>
                        </div>
                        <div class="container flex">
                            <div class="container w-fit px-5">
                                <div class="w-10 h-10 rounded-full bg-white shadow-sm" data-aos="fade-up"
                                    data-aos-duration="1100">
                                    <img class="h-auto max-w-lg mx-auto pt-1" src="/assets/images/icon3.png"
                                        alt="...">
                                </div>
                            </div>
                            <div class="container">
                                <p class="font-roboto text-[#243C7B] text-[18px] mt-[6px]" data-aos="fade-up"
                                    data-aos-duration="1400">
                                    Maximum Practice Area
                                </p>
                                <p class="font-inter text-[#5A6FA5] max-w-[390px] text-[12px]" data-aos="fade-up"
                                    data-aos-duration="1700">
                                    As a leading law firm, we are giving solutions for business, family, finance, real
                                    estate, divorce etc.
                                </p>
                            </div>
                        </div>
                        <div class="container flex">
                            <div class="container w-fit px-5">
                                <div class="w-10 h-10 rounded-full bg-white shadow-sm" data-aos="fade-up"
                                    data-aos-duration="1300">
                                    <img class="h-auto max-w-lg mx-auto pt-1" src="/assets/images/icon3.png"
                                        alt="...">
                                </div>
                            </div>
                            <div class="container">
                                <p class="font-roboto text-[#243C7B] text-[18px] mt-[6px]" data-aos="fade-up"
                                    data-aos-duration="1600">
                                    Playing It Straight
                                </p>
                                <p class="font-inter text-[#5A6FA5] max-w-[390px] text-[12px]" data-aos="fade-up"
                                    data-aos-duration="1800">
                                    We earn trust and respect from others by living and working according to
                                    time-honored principles and ensuring honest and open communication and responsible
                                    action.
                                </p>
                            </div>
                        </div>
                        <div class="container flex">
                            <div class="container w-fit px-5">
                                <div class="w-10 h-10 rounded-full bg-white shadow-sm" data-aos="fade-up"
                                    data-aos-duration="1500">
                                    <img class="h-auto max-w-lg mx-auto pt-1" src="/assets/images/icon3.png"
                                        alt="...">
                                </div>
                            </div>
                            <div class="container">
                                <p class="font-roboto text-[#243C7B] text-[18px] mt-[6px]" data-aos="fade-up"
                                    data-aos-duration="1700">Preferred Fee Structure</p>
                                <p class="font-inter text-[#5A6FA5] max-w-[390px] text-[12px]" data-aos="fade-up"
                                    data-aos-duration="1900">
                                    Generally, unless the work undertaken is governed by a fixed tariff, we would
                                    normally charge a fee calculated on a time basis in accordance with an agreed hourly
                                    rate. We are prepared to charge a fixed fee for the preparation of standard
                                    contracts, registration of servitudes, leases etc.
                                </p>
                            </div>
                        </div>
                        <div class="container inline-flex flex-col items-center py-5 max-w-[545px]" data-aos="fade-up"
                            data-aos-duration="1500">
                            <p class="mb-5">
                                FREE CONSULTATION through whatsapp!
                            </p>
                            <a href="https://wa.link/3pbcwl" target="_BLANK"
                                class="uppercase text-white bg-[#243C7B] font-medium rounded-lg text-sm px-5 py-1 mr-2 mb-2 ">Chat</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Services --}}
        <section class="py-10 bg-[#F2F2F2]">
            <div class="container py-12  mt-[30px]">
                <p class="text-sm text-center text-[#FFA028] font-aoboshi-one dark:text-gray-400 uppercase"
                    data-aos="fade-up" data-aos-duration="500">
                    Services
                </p>
                <h2 class="text-2xl md:text-[30px]  text-center text-rim-title font-aoboshi-one  dark:text-white mb-6 capitalize"
                    data-aos="fade-up" data-aos-duration="800">
                    Selected Samples of Previous Works
                </h2>

                <div class="container w-full max-w-[768px] mt-10 mb-10">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 place-items-center gap-3">
                        <div class="grid gap-4">
                            <div class="relative" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                data-aos-duration="500">
                                <img class="h-auto max-w-full brightness-50" src="/assets/images/s1.png"
                                    alt="">
                                <div class="container absolute bottom-[5%] px-2">
                                    <p class="font-anek-bangla text-[14px] text-white mb-1">
                                        Litigation
                                    </p>
                                    <p class="font-inter text-[12px] text-rim-white">
                                        Our specialise in the handling of
                                    </p>
                                </div>
                            </div>
                            <div class="relative" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                data-aos-duration="1000">
                                <img class="h-auto max-w-full brightness-50" src="/assets/images/s2.png"
                                    alt="">
                                <div class="container absolute bottom-[5%] px-2">
                                    <p class="font-anek-bangla text-[14px] text-white mb-1">
                                        Franchising Arrangement
                                    </p>
                                    <p class="font-inter text-[12px] text-rim-white">
                                        Assisting client in drafting the Indonesian version of the franchising agreement
                                        and
                                        representing in some negotiation with prospective franchisees.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid gap-4">
                            <div class="relative" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                                data-aos-duration="1500">
                                <img class="h-auto max-w-full brightness-50" src="/assets/images/s3.png"
                                    alt="">
                                <div class="container absolute bottom-[5%] px-2">
                                    <p class="font-anek-bangla text-[14px] text-white mb-1">
                                        Initial Public Offering
                                    </p>
                                    <p class="font-inter text-[12px] text-rim-white">
                                        Performing due diligence and drafting
                                        legal opinion with respect to the issuance of new shares of the company.
                                    </p>
                                </div>
                            </div>
                            <div class="relative" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000">
                                <img class="h-auto max-w-full brightness-50" src="/assets/images/s4.png"
                                    alt="">
                                <div class="container absolute bottom-[5%] px-2">
                                    <p class="font-anek-bangla text-[14px] text-white mb-1">Internal
                                        Restructuring<br>Prior
                                        To Joint Venture
                                    </p>
                                    <p class="font-inter text-[12px] text-rim-white">
                                        Assisting client in negotiating and drafting the joint venture agreement and
                                        submission to obtain all applicable permits and licenses
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid gap-4">
                            <div class="relative" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2500">
                                <img class="h-auto max-w-full brightness-50" src="/assets/images/s5.png"
                                    alt="">
                                <div class="container absolute bottom-[5%] px-2">
                                    <p class="font-anek-bangla text-[14px] text-white mb-1">Credit Card Agreement</p>
                                    <p class="font-inter text-[12px] text-rim-white">
                                        Drafting a credit card agreement with
                                        respect to the co-operation between the bank and one of leading retail industry
                                        in
                                        Indonesia.
                                    </p>
                                </div>
                            </div>
                            <div class="relative" data-aos="flip-right" data-aos-easing="ease-out-cubic"
                                data-aos-duration="3000">
                                <img class="h-auto max-w-full brightness-50" src="/assets/images/s6.png"
                                    alt="">
                                <div class="container absolute bottom-[5%] px-2">
                                    <p class="font-anek-bangla text-[14px] text-white mb-1">Investment Model III A</p>
                                    <p class="font-inter text-[12px] text-rim-white">
                                        Assisting client in all procedures for approval in a Model III A investment.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        {{-- Lawyers --}}
        <section class="py-10 mb-20">
            <div class="container py-12 max-w-full">
                <p class="text-sm text-center text-[#FFA028] font-aoboshi-one dark:text-gray-400 uppercase"
                    data-aos="fade-up" data-aos-duration="500">
                    Lawyers
                </p>
                <h2 class="text-2xl md:text-[30px]  text-center text-rim-title font-aoboshi-one  dark:text-white mb-6 capitalize mb-10"
                    data-aos="fade-up" data-aos-duration="800">
                    Our Team Members
                </h2>
            </div>

            <div class="max-w-full">
                <div class="container flex w-fit mb-20" data-aos="fade-right" data-aos-duration="1200">
                    <div class="container px-8 mx-auto relative">
                        <img class="absolute rounded-full w-36 h-36 outline outline-2 outline-white outline-dashed ml-[18%]"
                            src="/assets/images/member1.png" alt="...">
                        <div class="min-w-[16rem] min-h-[12rem] bg-[#243C7B] rounded-lg shadow-lg mt-20 ">
                            <div class="container absolute bottom-[20%] px-2 text-center w-[16rem]">
                                <p class="font-anek-bangla text-[14px] text-white mb-1 ">M. Rizal Situru, SH., MBL.,
                                    Ph.D
                                </p>
                                <p class="font-inter text-[12px] text-rim-white">The Managing Director</p>
                            </div>
                            <div class="container absolute bottom-[-23px] px-2 text-center w-[16rem]">
                                <button type="button"
                                    class="text-white bg-[#415EA9] hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Curiculum Vitae
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container flex flex-wrap justify-center gap-20 md:gap-x-8 md:gap-y-20 w-full">
                    <div class="flex w-fit" data-aos="fade-right" data-aos-duration="1500">
                        <div class="container px-8 mx-auto relative">
                            <img class="absolute rounded-full w-36 h-36 outline outline-2 outline-white outline-dashed ml-[18%]"
                                src="/assets/images/member2.png" alt="...">
                            <div class="min-w-[16rem] min-h-[12rem] bg-[#243C7B] rounded-lg shadow-lg mt-20 ">
                                <div class="container absolute bottom-[20%] px-2 text-center w-[16rem]">
                                    <p class="font-anek-bangla text-[14px] text-white mb-1 ">Ibrahim M Ikhsan, SH. MH.
                                    </p>
                                    <p class="font-inter text-[12px] text-rim-white">Lawyer</p>
                                </div>
                                <div class="container absolute bottom-[-23px] px-2 text-center w-[16rem]">
                                    <button type="button"
                                        class="text-white bg-[#415EA9] hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        Curiculum Vitae
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-fit">
                        <div class="container px-8 mx-auto relative" data-aos="fade-right" data-aos-duration="1800">
                            <img class="absolute rounded-full w-36 h-36 outline outline-2 outline-white outline-dashed ml-[18%]"
                                src="/assets/images/member3.png" alt="...">
                            <div class="min-w-[16rem] min-h-[12rem] bg-[#243C7B] rounded-lg shadow-lg mt-20 ">
                                <div class="container absolute bottom-[20%] px-2 text-center w-[16rem]">
                                    <p class="font-anek-bangla text-[14px] text-white mb-1 ">
                                        Mansyur Naseh Husein, SE, SH, MH.
                                    </p>
                                    <p class="font-inter text-[12px] text-rim-white">
                                        Lawyer
                                    </p>
                                </div>
                                <div class="container absolute bottom-[-23px] px-2 text-center w-[16rem]">
                                    <button type="button"
                                        class="text-white bg-[#415EA9] hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        Curiculum Vitae
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-fit">
                        <div class="container px-8 mx-auto relative" data-aos="fade-right" data-aos-duration="2100">
                            <img class="absolute rounded-full w-36 h-36 outline outline-2 outline-[#ccdcefc7] outline-dashed ml-[18%]"
                                src="/assets/images/member4.png" alt="...">
                            <div class="min-w-[16rem] min-h-[12rem] bg-[#243C7B] rounded-lg shadow-lg mt-20 ">
                                <div class="container absolute bottom-[20%] px-2 text-center w-[16rem]">
                                    <p class="font-anek-bangla text-[14px] text-white mb-1 ">Siska Gustianah, SH.
                                    </p>
                                    <p class="font-inter text-[12px] text-rim-white">Lawyer</p>
                                </div>
                                <div class="container absolute bottom-[-23px] px-2 text-center w-[16rem]">
                                    <button type="button" data-modal-target="staticModal"
                                        data-modal-toggle="staticModal"
                                        class="text-white bg-[#415EA9] hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        Curiculum Vitae
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Clients --}}
        <section class="py-10 bg-[#F2F2F2]">
            <div class="container">
                <p class="text-sm text-center text-[#FFA028] font-aoboshi-one dark:text-gray-400 uppercase">
                    Partners
                </p>
                <h2
                    class="text-2xl md:text-[30px]  text-center text-rim-title font-aoboshi-one  dark:text-white mb-6 capitalize">
                    Our Retainer Clients
                </h2>
            </div>
            <div class="container flex flex-wrap justify-center items-center gap-8 w-full my-12 px-8">
                <div class="max-w-[150px] h-[131px] bg-white border rounded-lg py-4 px-6">
                    <img class="rounded-t-lg" src="/assets/images/mumtaz.png" alt="" />
                </div>
                <div class="max-w-[150px] h-[131px] bg-white border rounded-lg py-4 px-6">
                    <img class="rounded-t-lg" src="/assets/images/khalifa.png" alt="" />
                </div>
                <div class="max-w-[150px] h-[131px] bg-white border rounded-lg py-7 px-6">
                    <img class="rounded-t-lg" src="/assets/images/bifex.png" alt="" />
                </div>
                <div class="max-w-[150px] h-[131px] bg-white border rounded-lg py-4 px-6">
                    <img class="rounded-t-lg" src="/assets/images/wirakelana.png" alt="" />
                </div>
            </div>
        </section>
        {{-- Maps --}}
        <section>
            <div class="container  max-w-full">
                <div class="border">
                    <hr class="border-t-[6px] border-orange-rim" />
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.5801396786774!2d106.78148686960401!3d-6.221393816403764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1ccb384f011%3A0x177e810eec32a7f4!2sINFINITI%20OFFICE%20%7C%20Virtual%20Office%20Jakarta%20Selatan!5e0!3m2!1sen!2sid!4v1684841818112!5m2!1sen!2sid"
                        width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <hr class="border-t-[6px] border-[#FFF4E7]" />
                </div>
            </div>
        </section>
        <footer class="bg-white dark:bg-gray-900">
            <div class="mx-auto w-full p-4 py-6 lg:py-8">
                <div class="flex flex-wrap justify-between md:justify-evenly gap-8 w-full max-w-6xl px-8 mx-auto">
                    <div
                        class="flex flex-col justify-between lg:justify-center items-center gap-4 px-8 w-full md:w-fit">
                        <a href="/">
                            <img src="/assets/images/f-logo1.png" class="h-auto max-w-full" alt="..." />
                        </a>
                        <a href="/">
                            <img src="/assets/images/f-logo2.png" class="h-auto max-w-full" alt="..." />
                        </a>
                        <a href="/" class="-ml-4">
                            <img src="/assets/images/f-logo3.png" class="h-auto max-w-full" alt="..." />
                        </a>
                    </div>
                    <div class="grid grid-rows-3 md:grid-rows-1 grid-flow-col gap-8 md:text-left text-center">
                        <div class="w-full md:max-w-[300px] ">
                            <h2 class="mb-1 text-sm font-aoboshi-one text-rim-title Capital dark:text-white">
                                Practice Area
                            </h2>
                            <ul class="font-inter text-[#7B7B7B] dark:text-gray-400 font-medium text-sm">
                                <li>
                                    <a href="/" class="hover:underline">
                                        Corporate Law &
                                        <br>
                                        Corporate Restructuring
                                    </a>
                                </li>
                                <li>
                                    <a href="/" class="hover:underline">Capital Market</a>
                                </li>
                                <li>
                                    <a href="/" class="hover:underline">Foreign & Domestic Investment</a>
                                </li>
                                <li>
                                    <a href="/" class="hover:underline">Labor Law</a>
                                </li>
                                <li>
                                    <a href="/" class="hover:underline">Project Financing</a>
                                </li>
                                <li>
                                    <a href="/" class="hover:underline">Company Secretarial</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full md:max-w-[300px]">
                            <h2 class="mb-1 text-sm font-aoboshi-one text-rim-title Capital dark:text-white">
                                Company
                            </h2>
                            <ul class="font-inter text-[#7B7B7B] dark:text-gray-400 font-medium text-sm">
                                <li>
                                    <a href="/" class="hover:underline ">About Us</a>
                                </li>
                                <li>
                                    <a href="/" class="hover:underline">Contact Us</a>
                                </li>
                                <li>
                                    <a href="/" class="hover:underline">How to Hire Us</a>
                                </li>
                                <li>
                                    <a href="/" class="hover:underline">Law Certification</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full md:max-w-[300px]">
                            <h2 class="mb-1 text-sm font-aoboshi-one text-rim-title Capital dark:text-white">
                                Address
                            </h2>
                            <ul class="font-inter text-[#7B7B7B] dark:text-gray-400 font-medium text-sm">
                                <li class="mb-2">
                                    <a>Belleza BSA Tower, 1st Floor Unit 106, Jl.
                                        Letjen Soepeno no.34, Permata Hijau, Jakarta 12210.
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a>
                                        +62-21-58905002 ext. 101 /
                                        <br>
                                        08111781877
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="hover:underline">
                                        mail@rimlawyers.co.id
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-3" />
                <span
                    class="block text-sm text-gray-500 text-center dark:text-gray-400 lg:my-3 md:min-h-0 min-h-[35px]">
                    © 2023
                    <a href="https://rimlawyers.co.id" class="hover:underline">
                        RIM Law.
                    </a>
                    All Rights Reserved.
                </span>
            </div>
        </footer>









        <!-- Main modal -->
        <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Curiculum Vitae
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="staticModal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">

                        <ol class="relative border-l border-gray-200 dark:border-gray-700">
                            <li class="mb-10 ml-6">

                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                                    Personal Data<span
                                        class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ml-3">Latest</span>
                                </h3>

                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                <dl
                                    class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                                    <div class="flex flex-col pb-3">
                                        <dt class="mb-1 text-gray-500 md:text-base dark:text-gray-400">Name</dt>
                                        <dd class="text-base font-semibold">Siska Gustianah S.H.</dd>
                                    </div>
                                    <div class="flex flex-col pb-3">
                                        <dt class="mb-1 text-gray-500 md:text-base dark:text-gray-400">Email</dt>
                                        <dd class="text-base font-semibold">siska@rimlawyers.co.id</dd>
                                    </div>
                                    <div class="flex flex-col pb-3">
                                        <dt class="mb-1 text-gray-500 md:text-base dark:text-gray-400">Phone Number
                                        </dt>
                                        <dd class="text-base font-semibold">+62 812-8662-6430</dd>
                                    </div>
                                </dl>
                            </li>
                            <li class="mb-10 ml-6">
                                <span
                                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                    <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Junior Associate
                                </h3>
                                <time
                                    class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">November,
                                    2022 - December, 2022 (Ferry Ericson law firm, Jakarta)</time>
                                <div class="flex items-start space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Meeting with client,
                                        Making power of attorney, revocation power of attorney, somasi, answer to
                                        somasi, Lawsuit, Registering e‑court Lawsuit, Making
                                        Exception/Answers/Reconvencing
                                        Lawsuit,
                                        Replies, Duplications, Lists, Evidence and preparing Evidence
                                        conculutions</span>
                                </div>
                            </li>
                            <li class="mb-10 ml-6">
                                <span
                                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -left-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                    <svg aria-hidden="true" class="w-3 h-3 text-blue-800 dark:text-blue-300"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Lawyer
                                </h3>
                                <time
                                    class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">January,
                                    2022 - October, 2022 (POSBAKUMADIN, Tangerang civil court (POSBAKUM))</time>
                                <div class="flex items-start space-x-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Meeting with client, Making power of attorney, revocation power of attorney,
                                        somasi, answer to
                                        somasi, Lawsuit, Registering e‑court Lawsuit, Making
                                        Exception/Answers/Reconvencing
                                        Lawsuit,
                                        Replies, Duplications, Lists, Evidence and preparing Evidence conculutions,
                                        giving
                                        consultation for a
                                        Jan 2022 - Oct 2022
                                        Personal
                                        Resume objective
                                        Work experience
                                        client.
                                    </span>
                                </div>
                            </li>

                        </ol>
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>First star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Second star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Third star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fourth star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fifth star</title>
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>

                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May
                            25
                            and is meant to ensure a common set of data rights in the European Union. It requires
                            organizations to notify users as soon as possible of high-risk data breaches that could
                            personally affect them.
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="staticModal" type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                            accept</button>
                        <button data-modal-hide="staticModal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="/assets/js/number-rush.js"></script>
    <script src="/assets/js/script.js"></script>
</body>

</html>
{{-- Tutorial --}}
{{-- <section>
    <hr class="my-20 border-t-4" />
    <div class="container px-8 mx-auto">
        <div class="border rounded-lg shadow-lg p-10">
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio pariatur minus omnis modi
                ullam. Facere harum blanditiis assumenda, molestias autem consequatur. Accusantium natus commodi
                consequatur ipsa nulla, numquam eius qui.
            </p>
        </div>
    </div>
</section>     --}}

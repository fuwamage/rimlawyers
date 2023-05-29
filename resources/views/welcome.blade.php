<!doctype html>
<html>

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



</head>

<body>
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center mx-auto p-4 justify-between sm:justify-start">
            <a href="https://rimlawyers.co.id" class="flex items-center mr-7">
                <img src="/assets/images/rim-logo-top.png" class="h-full w-full mr-3" alt="RIM Lawyers">
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

    </section>
    {{-- Our Legal Practice Areas --}}
    <section class="py-10 bg-[#F2F2F2]">
        <div class="container py-12">
            <p class="text-sm text-center text-[#FFA028] font-aoboshi-one dark:text-gray-400 uppercase">Services</p>
            <h2 class="text-2xl text-center text-rim-title font-aoboshi-one  dark:text-white mb-6 capitalize">Our Legal Practice Areas</h2>

        </div>
    </section>
    {{-- Why Choose Us --}}
    <section class="py-10 ">
        <div class="container py-12">
            <div class="container flex ">
                <div class="container px-20">
                    <img class="h-[378px] w-[368px] object-none float-right" src="/assets/images/models-choose-us.png"
                        alt="">
                </div>
                <div class="container mt-[-40px]">
                    <div class="container ">
                        <p class="text-sm text-left text-[#FFA028] font-aoboshi-one dark:text-gray-400 uppercase">Facts
                        </p>
                        <h2 class="text-2xl text-left text-rim-title font-aoboshi-one  dark:text-white mb-6 capitalize">
                            Why Choose
                            Us?</h2>
                    </div>
                    <div class="container flex">
                        <div class="container w-[fit-content] px-5">
                            <div class="w-10 h-10 rounded-full bg-white shadow-sm">
                                <img class="h-auto max-w-lg mx-auto pt-1" src="/assets/images/icon3.png" alt="...">
                            </div>                            
                        </div>
                        <div class="container">
                            <p class="font-roboto text-[#243C7B] text-[18px] mt-[6px]">Maximum Practice Area</p>
                            <p class="font-inter text-[#5A6FA5] max-w-[390px] text-[12px]">As a leading law firm,we are giving solutions for business, family, finance, real estate,
                                divorce etc.</p>
                        </div>
                    </div>
                    <div class="container flex">
                        <div class="container w-[fit-content] px-5">
                            <div class="w-10 h-10 rounded-full bg-white shadow-sm">
                                <img class="h-auto max-w-lg mx-auto pt-1" src="/assets/images/icon3.png" alt="...">
                            </div>                            
                        </div>
                        <div class="container">
                            <p class="font-roboto text-[#243C7B] text-[18px] mt-[6px]">Playing It Straight</p>
                            <p class="font-inter text-[#5A6FA5] max-w-[390px] text-[12px]">We earn trust and respect from others by living and working according to time-honored
                                principles and ensuring honest and open communication and responsible action.</p>
                        </div>
                    </div>
                    <div class="container flex">
                        <div class="container w-[fit-content] px-5">
                            <div class="w-10 h-10 rounded-full bg-white shadow-sm">
                                <img class="h-auto max-w-lg mx-auto pt-1" src="/assets/images/icon3.png" alt="...">
                            </div>                            
                        </div>
                        <div class="container">
                            <p class="font-roboto text-[#243C7B] text-[18px] mt-[6px]">Preferred Fee Structure</p>
                            <p class="font-inter text-[#5A6FA5] max-w-[390px] text-[12px]">Generally, unless the work undertaken is governed by a fixed tariff, we would normally
                                charge a fee calculated on a time basis in accordance with an agreed hourly rate. We are
                                prepared to charge a fixed fee for the preparation of standard contracts, registration
                                of servitudes, leases etc.</p>
                        </div>                        
                    </div>
                    <div class="container inline-flex flex-col items-center py-5 max-w-[545px]">
                        <p class="mb-5">FREE CONSULTATION through whatsapp!</p>
                        <a href="https://wa.link/3pbcwl"  target="_BLANK" class="uppercase text-white bg-[#243C7B] font-medium rounded-lg text-sm px-5 py-1 mr-2 mb-2 ">Chat</a>
                    </div>                
                </div>
            </div>
        </div>
    </section>
    {{-- Services --}}
    <section class="py-10 bg-[#F2F2F2]">
        <div class="container py-12">
            <p class="text-sm text-center text-[#FFA028] font-aoboshi-one dark:text-gray-400 uppercase">Services</p>
            <h2 class="text-2xl text-center text-rim-title font-aoboshi-one  dark:text-white mb-6 capitalize">Selected
                Samples of Previous Works</h2>
        </div>
        <div class="container w-[fit-content] mb-10">
            <div class="grid grid-cols-3 md:grid-cols-3 gap-3">
                <div class="grid gap-4">
                    <div class="relative">
                        <img class="h-auto max-w-full brightness-50" src="/assets/images/s1.png" alt="">
                        <div class="container absolute bottom-[5%] px-2">
                            <p class="font-anek-bangla text-[14px] text-white mb-1">Litigation</p>
                            <p class="font-inter text-[12px] text-rim-white">Our specialise in the handling of

                            </p>
                        </div>
                    </div>
                    <div class="relative">
                        <img class="h-auto max-w-full brightness-50" src="/assets/images/s2.png" alt="">
                        <div class="container absolute bottom-[5%] px-2">
                            <p class="font-anek-bangla text-[14px] text-white mb-1">Franchising Arrangement</p>
                            <p class="font-inter text-[12px] text-rim-white">Assisting client in drafting the
                                Indonesian
                                version of the
                                franchising agreement and representing in some negotiation with prospective franchisees.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-4">
                    <div class="relative">
                        <img class="h-auto max-w-full brightness-50" src="/assets/images/s3.png" alt="">
                        <div class="container absolute bottom-[5%] px-2">
                            <p class="font-anek-bangla text-[14px] text-white mb-1">Initial Public Offering</p>
                            <p class="font-inter text-[12px] text-rim-white">Performing due diligence and drafting
                                legal opinion with respect to the issuance of new shares of the company.</p>
                        </div>
                    </div>
                    <div class="relative">
                        <img class="h-auto max-w-full brightness-50" src="/assets/images/s4.png" alt="">
                        <div class="container absolute bottom-[5%] px-2">
                            <p class="font-anek-bangla text-[14px] text-white mb-1">Internal Restructuring<br>Prior To
                                Joint Venture</p>
                            <p class="font-inter text-[12px] text-rim-white">Assisting client in negotiating and
                                drafting the joint venture agreement and submission to obtain all applicable permits and
                                licenses</p>
                        </div>
                    </div>
                </div>
                <div class="grid gap-4">
                    <div class="relative">
                        <img class="h-auto max-w-full brightness-50" src="/assets/images/s5.png" alt="">
                        <div class="container absolute bottom-[5%] px-2">
                            <p class="font-anek-bangla text-[14px] text-white mb-1">Credit Card Agreement</p>
                            <p class="font-inter text-[12px] text-rim-white">Drafting a credit card agreement with
                                respect to the co-operation between the bank and one of leading retail industry in
                                Indonesia.</p>
                        </div>
                    </div>
                    <div class="relative">
                        <img class="h-auto max-w-full brightness-50" src="/assets/images/s6.png" alt="">
                        <div class="container absolute bottom-[5%] px-2">
                            <p class="font-anek-bangla text-[14px] text-white mb-1">Investment Model III A</p>
                            <p class="font-inter text-[12px] text-rim-white">Assisting client in all procedures for
                                approval in a Model III A investment.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </section>
    {{-- Lawyers --}}
    <section class="py-10 mb-20">
        <div class="container max-w-full">
            <p class="text-sm text-center text-[#FFA028] font-aoboshi-one dark:text-gray-400 uppercase">Lawyers</p>
            <h2 class="text-2xl text-center text-rim-title font-aoboshi-one  dark:text-white mb-6 capitalize mb-10">Our
                Team
                Members</h2>
        </div>

        <div class="container flex w-[fit-content] mb-20">
            <div class="container px-8 mx-auto relative">
                <img class="absolute rounded-full w-36 h-36 outline outline-2 outline-white outline-dashed ml-[18%]"
                    src="/assets/images/member1.png" alt="...">
                <div class="min-w-[16rem] min-h-[12rem] bg-[#243C7B] rounded-lg shadow-lg mt-20 ">
                    <div class="container absolute bottom-[20%] px-2 text-center w-[16rem]">
                        <p class="font-anek-bangla text-[14px] text-white mb-1 ">M. Rizal Situru, SH., MBL., Ph.D
                        </p>
                        <p class="font-inter text-[12px] text-rim-white">The Managing Director</p>
                    </div>
                    <div class="container absolute bottom-[-23px] px-2 text-center w-[16rem]">
                        <button type="button"
                            class="text-white bg-[#415EA9] hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Curiculum
                            Vitae</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex w-[fit-content]">
            <div class="container flex w-[fit-content] ">
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
                                class="text-white bg-[#415EA9] hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Curiculum
                                Vitae</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container flex w-[fit-content] ">
                <div class="container px-8 mx-auto relative">
                    <img class="absolute rounded-full w-36 h-36 outline outline-2 outline-white outline-dashed ml-[18%]"
                        src="/assets/images/member3.png" alt="...">
                    <div class="min-w-[16rem] min-h-[12rem] bg-[#243C7B] rounded-lg shadow-lg mt-20 ">
                        <div class="container absolute bottom-[20%] px-2 text-center w-[16rem]">
                            <p class="font-anek-bangla text-[14px] text-white mb-1 ">Mansyur Naseh Husein, SE, SH, MH.
                            </p>
                            <p class="font-inter text-[12px] text-rim-white">Lawyer</p>
                        </div>
                        <div class="container absolute bottom-[-23px] px-2 text-center w-[16rem]">
                            <button type="button"
                                class="text-white bg-[#415EA9] hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Curiculum
                                Vitae</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container flex w-[fit-content] ">
                <div class="container px-8 mx-auto relative">
                    <img class="absolute rounded-full w-36 h-36 outline outline-2 outline-white outline-dashed ml-[18%]"
                        src="/assets/images/member4.png" alt="...">
                    <div class="min-w-[16rem] min-h-[12rem] bg-[#243C7B] rounded-lg shadow-lg mt-20 ">
                        <div class="container absolute bottom-[20%] px-2 text-center w-[16rem]">
                            <p class="font-anek-bangla text-[14px] text-white mb-1 ">Siska Gustianah, SH.
                            </p>
                            <p class="font-inter text-[12px] text-rim-white">Lawyer</p>
                        </div>
                        <div class="container absolute bottom-[-23px] px-2 text-center w-[16rem]">
                            <button type="button" data-modal-target="staticModal" data-modal-toggle="staticModal"
                                class="text-white bg-[#415EA9] hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Curiculum
                                Vitae</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Clients --}}
    <section class="py-10 mb-20 bg-[#F2F2F2] mt-[-204px]">
        <div class="container pt-[200px]">

            <p class="text-sm text-center text-[#FFA028] font-aoboshi-one dark:text-gray-400 uppercase">Partners</p>
            <h2 class="text-2xl text-center text-rim-title font-aoboshi-one  dark:text-white mb-6 capitalize">Our
                Retainer Clients</h2>
        </div>
        <div class="container flex w-[fit-content] ">
            <div class="container px-8 mx-auto">
                <div class="max-w-[150px] h-[131px] bg-white border rounded-lg py-4 px-6">
                    <img class="rounded-t-lg" src="/assets/images/mumtaz.png" alt="" />
                </div>
            </div>
            <div class="container px-8 mx-auto">
                <div class="max-w-[150px] h-[131px] bg-white border rounded-lg py-4 px-6">
                    <img class="rounded-t-lg" src="/assets/images/khalifa.png" alt="" />
                </div>
            </div>
            <div class="container px-8 mx-auto">
                <div class="max-w-[150px] h-[131px] bg-white border rounded-lg py-7 px-6">
                    <img class="rounded-t-lg" src="/assets/images/bifex.png" alt="" />
                </div>
            </div>
            <div class="container px-8 mx-auto">
                <div class="max-w-[150px] h-[131px] bg-white border rounded-lg py-4 px-6">
                    <img class="rounded-t-lg" src="/assets/images/wirakelana.png" alt="" />
                </div>
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
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <hr class="border-t-[6px] border-[#FFF4E7]" />
            </div>
        </div>

    </section>
    <footer class="bg-white dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0 w-[70%] flex flex-col justify-between items-center">
                    <a href="/" class="flex items-center">
                        <img src="/assets/images/f-logo1.png" class="h-auto max-w-full" alt="..." />

                    </a>
                    <a href="/" class="flex items-center">
                        <img src="/assets/images/f-logo2.png" class="h-auto max-w-full" alt="..." />

                    </a>
                    <a href="/" class="flex items-center">
                        <img src="/assets/images/f-logo3.png" class="h-auto max-w-full" alt="..." />

                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3 w-[fit-content] pr-[144px]">
                    <div>
                        <h2 class="mb-1 text-sm font-aoboshi-one text-rim-title Capital dark:text-white">Practice Area
                        </h2>
                        <ul class="font-inter text-[#7B7B7B] dark:text-gray-400 font-medium text-sm">
                            <li>
                                <a href="/" class="hover:underline">Corporate Law &<br>Corporate
                                    Restructuring</a>
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
                    <div>
                        <h2 class="mb-1 text-sm font-aoboshi-one text-rim-title Capital dark:text-white">Company</h2>
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
                    <div>
                        <h2 class="mb-1 text-sm font-aoboshi-one text-rim-title Capital dark:text-white">Address</h2>
                        <ul class="font-inter text-[#7B7B7B] dark:text-gray-400 font-medium text-sm">
                            <li class="mb-2">
                                <a>Belleza BSA Tower, 1st Floor Unit 106, Jl.
                                    Letjen Soepeno no.34, Permata Hijau, Jakarta 12210.</a>
                            </li>
                            <li class="mb-2">
                                <a>+62-21-58905002 ext. 101
                                    /<br>08111781877</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="hover:underline">mail@rimlawyers.co.id</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="">
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-3" />
            <span class="block text-sm text-gray-500 text-center dark:text-gray-400 lg:my-3">© 2023 <a
                    href="https://rimlawyers.co.id" class="hover:underline">RIM Law</a>. All Rights Reserved.
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
                                    <dt class="mb-1 text-gray-500 md:text-base dark:text-gray-400">Phone Number</dt>
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
                                    somasi, Lawsuit, Registering e‑court Lawsuit, Making Exception/Answers/Reconvencing
                                    Lawsuit,
                                    Replies, Duplications, Lists, Evidence and preparing Evidence conculutions</span>
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
                                    somasi, Lawsuit, Registering e‑court Lawsuit, Making Exception/Answers/Reconvencing
                                    Lawsuit,
                                    Replies, Duplications, Lists, Evidence and preparing Evidence conculutions, giving
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
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Fifth star</title>
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>

                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25
                        and is meant to ensure a common set of data rights in the European Union. It requires
                        organizations to notify users as soon as possible of high-risk data breaches that could
                        personally affect them.
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="staticModal" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                        accept</button>
                    <button data-modal-hide="staticModal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
            </div>
        </div>
    </div>
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

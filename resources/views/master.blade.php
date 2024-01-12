<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Core Of Accounting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Mannatthemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/template/dist/assets/images/favicon.ico" />
    <link rel="stylesheet" href="/template/dist/assets/libs/mobius1-selectr/selectr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flowbite@2.0.0/dist/flowbite.min.css">

    <!-- Css -->
    <!-- Main Css -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="/template/dist/assets/libs/prismjs/themes/prism-twilight.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="/template/dist/assets/libs/simple-datatables/style.css" />
    <link rel="stylesheet" href="/template/dist/assets/libs/icofont/icofont.min.css">
    <link href="/template/dist/assets/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="/template/dist/assets/css/tailwind.min.css">

</head>

<body class="bg-[#EEF0FC] dark:bg-gray-900">

    <!-- leftbar-tab-menu -->


    {{-- <div
        class="min-h-full z-[99]  fixed inset-y-0 print:hidden bg-gradient-to-t from-[#6f3dc3] from-10% via-[#603dc3] via-40% to-[#5c3dc3] to-100% dark:bg-[#603dc3] main-sidebar duration-300 group-data-[sidebar=dark]:bg-[#603dc3] group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#603dc3]">
        <div
            class=" text-center border-b bg-[#603dc3] border-r h-[64px] flex justify-center items-center brand-logo dark:bg-[#603dc3] dark:border-slate-700/40 group-data-[sidebar=dark]:bg-[#603dc3] group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#603dc3] group-data-[sidebar=brand]:border-slate-700/40">
            <a href="index.html" class="logo">
                <span>
                    <img src="/template/dist/assets/images/arneva.png" alt="logo-small"
                        class="logo-sm h-8 align-middle inline-block">
                </span>
            </a>
        </div>
        <div class="border-r pb-14 h-[100vh] dark:bg-[#603dc3] dark:border-slate-700/40 group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40"
            data-simplebar>
            <div class="p-4 block">
                <ul class="navbar-nav">
                    <li>
                        <div id="parent-accordion" data-fc-type="accordion">
                            <div
                                class="border-b border-dashed dark:border-slate-700/40 my-3 group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40">
                            </div>
                            <div
                                class="text-[9px] text-slate-600 dark:text-slate-500 group-data-[sidebar=dark]:text-slate-500 group-data-[sidebar=brand]:text-slate-400">
                                M<span>ASTER DATA</span>
                            </div>
                            <div data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <a href="#"
                                    class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200">
                                    <span data-lucide="box"
                                        class="w-5 h-5 text-center text-slate-800 me-2 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                    <span>Basic Master</span>
                                    <i
                                        class="icofont-thin-down fc-collapse-open:rotate-180 ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                                </a>
                            </div>
                            <div class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="/data-factory"
                                            class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            Data Factory
                                        </a>

                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="/data-user"
                                            class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Data User
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"
                                class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="file-plus"
                                    class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>System</span>
                                <i
                                    class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400  fc-collapse-open:rotate-180 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                            </a>


                            <div class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="/setting-user"
                                            class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            Setting Hak User
                                        </a>

                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="/master-setting"
                                            class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Master Setting
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"
                                class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="lock"
                                    class="w-5 h-5 text-center text-slate-800 me-2 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Human Resources</span>
                                <i
                                    class="icofont-thin-down  fc-collapse-open:rotate-180 ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                            </a>
                            <div class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="/employee"
                                            class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            Employee
                                        </a>

                                    </li>
                                </ul>
                            </div>
                            <a href="#"
                                class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200"
                                data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="lock"
                                    class="w-5 h-5 text-center text-slate-800 me-2 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>COA</span>
                                <i
                                    class="icofont-thin-down  fc-collapse-open:rotate-180 ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                            </a>
                            <div class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="/coa-group"
                                            class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            COA Group
                                        </a>

                                    </li>
                                </ul>
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="/coa-entry-list"
                                            class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            COA Entry List
                                        </a>

                                    </li>
                                </ul>
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="/list-credit-management"
                                            class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            Credit Term Management
                                        </a>

                                    </li>
                                </ul>
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="/list-customer-supplier-group"
                                            class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            Customer Supplier Group Management
                                        </a>

                                    </li>
                                </ul>
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="/list-supplier-type-management"
                                            class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            Supplier Type Management
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="/list-currency-management"
                                            class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            Currency Management
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="/list-group-modul"
                                            class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            Group Modul Management
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="/list-modul-management"
                                            class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            Modul Management
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="/list-document-format"
                                            class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i
                                                class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400 "></i>
                                            Document Numbering Format Management

                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div
                            class="border-b border-dashed dark:border-slate-700/40 my-3 group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}


    {{-- <nav id="topbar"
        class="topbar border-b  dark:border-slate-700/40  fixed inset-x-0  duration-300
             block print:hidden z-50">
        <div
            class="mx-0 flex max-w-full flex-wrap items-center lg:mx-auto relative top-[50%] start-[50%] transform -translate-x-1/2 -translate-y-1/2">
            <div class="ltr:mx-2  rtl:mx-2">
                <button id="toggle-menu-hide" class="button-menu-mobile flex rounded-full md:me-0 relative">
                    <!-- <i class="ti ti-chevrons-left text-3xl  top-icon"></i> -->
                    <i data-lucide="menu" class="top-icon w-5 h-5"></i>
                </button>
            </div>
            <div class="flex items-center md:w-[40%] lg:w-[30%] xl:w-[20%]">
                <div class="relative ltr:mx-2 rtl:mx-2 self-center">
                    <button
                        class="px-2 py-1 bg-primary-500/10 border border-transparent collapse:bg-green-100 text-primary text-sm rounded hover:bg-blue-600 hover:text-white"><i
                            class="ti ti-plus me-1"></i> New Task</button>
                </div>
            </div>

            <div class="order-1 ltr:ms-auto rtl:ms-0 rtl:me-auto flex items-center md:order-2">
                <div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown relative">
                    <button type="button" class="dropdown-toggle flex rounded-full md:me-0" aria-expanded="false"
                        data-fc-autoclose="both" data-fc-type="dropdown">
                        <span data-lucide="search" class="top-icon w-5 h-5"></span>
                    </button>

                    <div class="left-auto right-0 z-50 my-1 hidden min-w-[300px]
                    list-none divide-y  divide-gray-100 rounded-md border-slate-700
                    md:border-white text-base shadow dark:divide-gray-600 bg-white
                    dark:bg-slate-800"
                        onclick="event.stopPropagation()">
                        <div class="relative">
                            <div
                                class="pointer-events-none absolute inset-y-0 left-0 flex items-center
                        pl-3">
                                <i class="ti ti-search text-gray-400 z-10"></i>
                            </div>
                            <input type="text" id="email-adress-icon"
                                class="block w-full rounded-lg border border-slate-200 dark:border-slate-700/60 bg-slate-200/10 p-1.5
                        pl-10 text-slate-600 dark:text-slate-400 outline-none focus:border-slate-300
                        focus:ring-slate-300 dark:bg-slate-800/20 sm:text-sm"
                                placeholder="Search..." />
                        </div>
                    </div>
                </div>
                <div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4">

                    <button id="toggle-theme" class="flex rounded-full md:me-0 relative">
                        <span data-lucide="moon" class="top-icon w-5 h-5 light "></span>
                        <span data-lucide="sun" class="top-icon w-5 h-5 dark hidden"></span>
                    </button>
                </div>
                <div class="ltr:me-2 ltr:lg:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown relative">
                    <button type="button" class="dropdown-toggle flex rounded-full md:me-0" id="Notifications"
                        aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                        <span data-lucide="bell" class="top-icon w-5 h-5"></span>
                    </button>

                    <div class="left-auto right-0 z-50 my-1 hidden w-64
                    list-none divide-y h-52 divide-gray-100 rounded border border-slate-700/10
                   text-base shadow dark:divide-gray-600 bg-white
                    dark:bg-slate-800"
                        id="navNotifications" data-simplebar>
                        <ul class="py-1" aria-labelledby="navNotifications">
                            <li class="py-2 px-4">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="flex">
                                        <div class="h-8 w-8 rounded-full bg-primary-500/20 inline-flex me-3">
                                            <span data-lucide="shopping-cart"
                                                class="w-4 h-4 inline-block text-primary-500 dark:text-primary-400 self-center mx-auto"></span>
                                        </div>
                                        <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                            <p
                                                class="text-sm font-medium text-gray-900 truncate
                                dark:text-gray-300">
                                                Karen Robinson</p>
                                            <p
                                                class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                                                Hey ! i'm available here
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="py-2 px-4">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="flex">
                                        <img class="object-cover rounded-full h-8 w-8 shrink-0 me-3"
                                            src="/template/dist/assets/images/users/avatar-3.png" alt="logo" />
                                        <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                            <p
                                                class="text-sm font-medium text-gray-900 truncate
                                dark:text-gray-300">
                                                Your order is placed</p>
                                            <p
                                                class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                                                Dummy text of the printing and industry.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="py-2 px-4">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="flex">
                                        <div class="h-8 w-8 rounded-full bg-primary-500/20 inline-flex me-3">
                                            <span data-lucide="user"
                                                class="w-4 h-4 inline-block text-primary-500 dark:text-primary-400 self-center mx-auto"></span>
                                        </div>
                                        <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                            <p
                                                class="text-sm font-medium text-gray-900 truncate
                                dark:text-gray-300">
                                                Robert McCray</p>
                                            <p
                                                class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                                                Good Morning!
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="py-2 px-4">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="flex">
                                        <img class="object-cover rounded-full h-8 w-8 shrink-0 me-3"
                                            src="/template/dist/assets/images/users/avatar-9.png" alt="logo" />
                                        <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                            <p
                                                class="text-sm font-medium  text-gray-900 truncate
                                dark:text-gray-300">
                                                Meeting with designers</p>
                                            <p
                                                class="text-gray-500 mb-0 text-xs truncate
                                dark:text-gray-400">
                                                It is a long established fact that a reader.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="me-2  dropdown relative">
                    <button type="button"
                        class="dropdown-toggle flex items-center rounded-full text-sm
                    focus:bg-none focus:ring-0 dark:focus:ring-0 md:me-0"
                        id="user-profile" aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                        <img class="h-8 w-8 rounded-full" src="/template/dist/assets/images/users/avatar-1.png"
                            alt="user photo" />
                        <span class="ltr:ms-2 rtl:ms-0 rtl:me-2 hidden text-left xl:block">
                            <span class="block font-medium text-slate-600 dark:text-gray-300">Maria Gibson</span>
                            <span class="-mt-0.5 block text-xs text-slate-500 dark:text-gray-400">Admin</span>
                        </span>
                    </button>

                    <div class="left-auto right-0 z-50 my-1 hidden list-none
                    divide-y divide-gray-100 rounded border border-slate-700/10
                    text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800 w-40"
                        id="navUserdata">

                        <ul class="py-1" aria-labelledby="navUserdata">
                            <li>
                                <a href="#"
                                    class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">
                                    <span data-lucide="user"
                                        class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                    Profile</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">
                                    <span data-lucide="settings"
                                        class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                    Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                          dark:text-gray-200 dark:hover:bg-gray-900/20
                          dark:hover:text-white">
                                    <span data-lucide="dollar-sign"
                                        class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                    Earnings</a>
                            </li>
                            <li>
                                <a href="auth-lockscreen.html"
                                    class="flex items-center py-2 px-3 text-sm text-red-500 hover:bg-gray-50 hover:text-red-600
                          dark:text-red-500 dark:hover:bg-gray-900/20
                          dark:hover:text-red-500">
                                    <span data-lucide="power"
                                        class="w-4 h-4 inline-block text-red-500 dark:text-red-500 me-2"></span>
                                    Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav> --}}
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
                  Icon when menu is closed.

                  Menu open: "hidden", Menu closed: "block"
                -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
                  Icon when menu is open.

                  Menu open: "block", Menu closed: "hidden"
                -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-start sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-8 w-auto" src="template/dist/assets/images/arneva.png" alt="Your Company">
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="/dashboard" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                                aria-current="page">Dashboard</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <div class="ltr:me-2 ltr:lg:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4 dropdown relative">
                        <button type="button" class="dropdown-toggle flex rounded-full md:me-0" id="Notifications"
                            aria-expanded="false" data-fc-autoclose="both" data-fc-type="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#f2eded" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-bell">
                                <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                                <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                            </svg> </button>

                        <div class="left-auto right-0 z-50 my-1 hidden w-64
                        list-none divide-y h-52 divide-gray-100 rounded border border-slate-700/10
                       text-base shadow dark:divide-gray-600 bg-white
                        dark:bg-slate-800"
                            id="navNotifications" data-simplebar>
                            <ul class="py-1" aria-labelledby="navNotifications">
                                <li class="py-2 px-4">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="flex">
                                            <div class="h-8 w-8 rounded-full bg-primary-500/20 inline-flex me-3">
                                                <span data-lucide="shopping-cart"
                                                    class="w-4 h-4 inline-block text-primary-500 dark:text-primary-400 self-center mx-auto"></span>
                                            </div>
                                            <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                                <p
                                                    class="text-sm font-medium text-gray-900 truncate
                                    dark:text-gray-300">
                                                    Karen Robinson</p>
                                                <p
                                                    class="text-gray-500 mb-0 text-xs truncate
                                    dark:text-gray-400">
                                                    Hey ! i'm available here
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-2 px-4">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="flex">
                                            <img class="object-cover rounded-full h-8 w-8 shrink-0 me-3"
                                                src="/template/dist/assets/images/users/avatar-3.png"
                                                alt="logo" />
                                            <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                                <p
                                                    class="text-sm font-medium text-gray-900 truncate
                                    dark:text-gray-300">
                                                    Your order is placed</p>
                                                <p
                                                    class="text-gray-500 mb-0 text-xs truncate
                                    dark:text-gray-400">
                                                    Dummy text of the printing and industry.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-2 px-4">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="flex">
                                            <div class="h-8 w-8 rounded-full bg-primary-500/20 inline-flex me-3">
                                                <span data-lucide="user"
                                                    class="w-4 h-4 inline-block text-primary-500 dark:text-primary-400 self-center mx-auto"></span>
                                            </div>
                                            <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                                <p
                                                    class="text-sm font-medium text-gray-900 truncate
                                    dark:text-gray-300">
                                                    Robert McCray</p>
                                                <p
                                                    class="text-gray-500 mb-0 text-xs truncate
                                    dark:text-gray-400">
                                                    Good Morning!
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="py-2 px-4">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <div class="flex">
                                            <img class="object-cover rounded-full h-8 w-8 shrink-0 me-3"
                                                src="/template/dist/assets/images/users/avatar-9.png"
                                                alt="logo" />
                                            <div class="flex-grow flex-1 ms-0.5 overflow-hidden">
                                                <p
                                                    class="text-sm font-medium  text-gray-900 truncate
                                    dark:text-gray-300">
                                                    Meeting with designers</p>
                                                <p
                                                    class="text-gray-500 mb-0 text-xs truncate
                                    dark:text-gray-400">
                                                    It is a long established fact that a reader.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Profile dropdown -->
                    <div class="me-2  dropdown relative">
                        <button type="button"
                            class="dropdown-toggle flex items-center rounded-full text-sm
                        focus:bg-none focus:ring-0 dark:focus:ring-0 md:me-0"
                            id="user-profile" aria-expanded="false" data-fc-autoclose="both"
                            data-fc-type="dropdown">
                            <img class="h-8 w-8 rounded-full" src="/template/dist/assets/images/users/avatar-1.png"
                                alt="user photo" />
                            <span class="ltr:ms-2 rtl:ms-0 rtl:me-2 hidden text-left xl:block">
                                <span class="block font-medium text-slate-200 dark:text-gray-300">Maria Gibson</span>
                                <span class="-mt-0.5 block text-xs text-slate-400 dark:text-gray-400">Admin</span>
                            </span>
                        </button>

                        <div class="left-auto right-0 z-50 my-1 hidden list-none
                        divide-y divide-gray-100 rounded border border-slate-700/10
                        text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800 w-40"
                            id="navUserdata">

                            <ul class="py-1" aria-labelledby="navUserdata">
                                <li>
                                    <a href="#"
                                        class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                              dark:text-gray-200 dark:hover:bg-gray-900/20
                              dark:hover:text-white">
                                        <span data-lucide="user"
                                            class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                        Profile</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                              dark:text-gray-200 dark:hover:bg-gray-900/20
                              dark:hover:text-white">
                                        <span data-lucide="settings"
                                            class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                        Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center py-2 px-3 text-sm text-gray-700 hover:bg-gray-50
                              dark:text-gray-200 dark:hover:bg-gray-900/20
                              dark:hover:text-white">
                                        <span data-lucide="dollar-sign"
                                            class="w-4 h-4 inline-block text-slate-800 dark:text-slate-400 me-2"></span>
                                        Earnings</a>
                                </li>
                                <li>
                                    <a href="auth-lockscreen.html"
                                        class="flex items-center py-2 px-3 text-sm text-red-500 hover:bg-gray-50 hover:text-red-600
                              dark:text-red-500 dark:hover:bg-gray-900/20
                              dark:hover:text-red-500">
                                        <span data-lucide="power"
                                            class="w-4 h-4 inline-block text-red-500 dark:text-red-500 me-2"></span>
                                        Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                    aria-current="page">Dashboard</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
            </div>
        </div>
    </nav>




    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-center max-w-screen-xl mx-auto p-5">
            <div id="mega-menu-icons"
                class="flex flex-row items-center justify-center hidden w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse"
                    id="nav">
                    {{-- <li>
                        <button id="mega-menu-icons-dropdown-button" data-dropdown-toggle="mega-menu-icons-dropdown"
                            class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                            Company
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="mega-menu-icons-dropdown"
                            class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4" aria-labelledby="mega-menu-icons-dropdown-button">
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">About us</span>
                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                            </svg>
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Library</span>
                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z" />
                                                <path
                                                    d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z" />
                                                <path
                                                    d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z" />
                                            </svg>
                                            Library
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Resources</span>
                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 18 18">
                                                <path
                                                    d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z" />
                                                <path
                                                    d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                            </svg>
                                            Resources
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Pro Version</span>
                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z" />
                                            </svg>
                                            Pro Version
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Blog</span>
                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M19 4h-1a1 1 0 1 0 0 2v11a1 1 0 0 1-2 0V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1ZM3 4a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm9 13H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Z" />
                                                <path d="M6 5H5v1h1V5Z" />
                                            </svg>
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Newsletter</span>
                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                                            </svg>
                                            Newsletter
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Playground</span>
                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 18 18">
                                                <path
                                                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10ZM17 13h-2v-2a1 1 0 0 0-2 0v2h-2a1 1 0 0 0 0 2h2v2a1 1 0 0 0 2 0v-2h2a1 1 0 0 0 0-2Z" />
                                            </svg>
                                            Playground
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">License</span>
                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 14 20">
                                                <path
                                                    d="M13.383.076a1 1 0 0 0-1.09.217L11 1.586 9.707.293a1 1 0 0 0-1.414 0L7 1.586 5.707.293a1 1 0 0 0-1.414 0L3 1.586 1.707.293A1 1 0 0 0 0 1v18a1 1 0 0 0 1.707.707L3 18.414l1.293 1.293a1 1 0 0 0 1.414 0L7 18.414l1.293 1.293a1 1 0 0 0 1.414 0L11 18.414l1.293 1.293A1 1 0 0 0 14 19V1a1 1 0 0 0-.617-.924ZM10 15H4a1 1 0 1 1 0-2h6a1 1 0 0 1 0 2Zm0-4H4a1 1 0 1 1 0-2h6a1 1 0 1 1 0 2Zm0-4H4a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                            </svg>
                                            License
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 text-gray-900 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Contact Us</span>
                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 14 20">
                                                <path
                                                    d="M12 0H2a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM7.5 17.5h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2ZM12 13H2V4h10v9Z" />
                                            </svg>
                                            Contact Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support Center</span>
                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 21 21">
                                                <path
                                                    d="m5.4 2.736 3.429 3.429A5.046 5.046 0 0 1 10.134 6c.356.01.71.06 1.056.147l3.41-3.412c.136-.133.287-.248.45-.344A9.889 9.889 0 0 0 10.269 1c-1.87-.041-3.713.44-5.322 1.392a2.3 2.3 0 0 1 .454.344Zm11.45 1.54-.126-.127a.5.5 0 0 0-.706 0l-2.932 2.932c.029.023.049.054.078.077.236.194.454.41.65.645.034.038.078.067.11.107l2.927-2.927a.5.5 0 0 0 0-.707Zm-2.931 9.81c-.024.03-.057.052-.081.082a4.963 4.963 0 0 1-.633.639c-.041.036-.072.083-.115.117l2.927 2.927a.5.5 0 0 0 .707 0l.127-.127a.5.5 0 0 0 0-.707l-2.932-2.931Zm-1.442-4.763a3.036 3.036 0 0 0-1.383-1.1l-.012-.007a2.955 2.955 0 0 0-1-.213H10a2.964 2.964 0 0 0-2.122.893c-.285.29-.509.634-.657 1.013l-.01.016a2.96 2.96 0 0 0-.21 1 2.99 2.99 0 0 0 .489 1.716c.009.014.022.026.032.04a3.04 3.04 0 0 0 1.384 1.1l.012.007c.318.129.657.2 1 .213.392.015.784-.05 1.15-.192.012-.005.02-.013.033-.018a3.011 3.011 0 0 0 1.676-1.7v-.007a2.89 2.89 0 0 0 0-2.207 2.868 2.868 0 0 0-.27-.515c-.007-.012-.02-.025-.03-.039Zm6.137-3.373a2.53 2.53 0 0 1-.35.447L14.84 9.823c.112.428.166.869.16 1.311-.01.356-.06.709-.147 1.054l3.413 3.412c.132.134.249.283.347.444A9.88 9.88 0 0 0 20 11.269a9.912 9.912 0 0 0-1.386-5.319ZM14.6 19.264l-3.421-3.421c-.385.1-.781.152-1.18.157h-.134c-.356-.01-.71-.06-1.056-.147l-3.41 3.412a2.503 2.503 0 0 1-.443.347A9.884 9.884 0 0 0 9.732 21H10a9.9 9.9 0 0 0 5.044-1.388 2.519 2.519 0 0 1-.444-.348ZM1.735 15.6l3.426-3.426a4.608 4.608 0 0 1-.013-2.367L1.735 6.4a2.507 2.507 0 0 1-.35-.447 9.889 9.889 0 0 0 0 10.1c.1-.164.217-.316.35-.453Zm5.101-.758a4.957 4.957 0 0 1-.651-.645c-.033-.038-.077-.067-.11-.107L3.15 17.017a.5.5 0 0 0 0 .707l.127.127a.5.5 0 0 0 .706 0l2.932-2.933c-.03-.018-.05-.053-.078-.076ZM6.08 7.914c.03-.037.07-.063.1-.1.183-.22.384-.423.6-.609.047-.04.082-.092.129-.13L3.983 4.149a.5.5 0 0 0-.707 0l-.127.127a.5.5 0 0 0 0 .707L6.08 7.914Z" />
                                            </svg>
                                            Support Center
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500 group">
                                            <span class="sr-only">Terms</span>
                                            <svg class="w-3 h-3 me-2 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 18 20">
                                                <path
                                                    d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                                            </svg>
                                            Terms
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </li> --}}
                </ul>
            </div>
        </div>
    </nav>



    @yield('content')

    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="/template/dist/assets/js/pages/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="/template/dist/assets/libs/lucide/umd/lucide.min.js"></script>
    <script src="/template/dist/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/template/dist/assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="/template/dist/assets/libs/@frostui/tailwindcss/frostui.js"></script>
    <script src="/template/dist/assets/libs/prismjs/prism.js"></script>
    <script src="/template/dist/assets/libs/mobius1-selectr/selectr.min.js"></script>
    <script src="/template/dist/assets/js/pages/form-advanced.init.js"></script>
    <script src="/template/dist/assets/libs/simple-datatables/umd/simple-datatables.js"></script>
    <script src="/template/dist/assets/js/pages/datatable.init.js"></script>
    <script src="/template/dist/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="/template/dist/assets/js/pages/analytics-index.init.js"></script>
    <script src="/template/dist/assets/js/app.js"></script>
    <script src="/template/dist/assets/js/pages/coa.js"></script>

    <!-- JAVASCRIPTS -->
</body>

</html>

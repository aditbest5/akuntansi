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
    <link rel="stylesheet" href="assets/libs/mobius1-selectr/selectr.min.css">

    <!-- Css -->
    <!-- Main Css -->
    <link href="/template/dist/assets/libs/prismjs/themes/prism-twilight.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="/template/dist/assets/libs/simple-datatables/style.css" />
    <link rel="stylesheet" href="/template/dist/assets/libs/icofont/icofont.min.css">
    <link href="/template/dist/assets/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="/template/dist/assets/css/tailwind.min.css">

</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
    class="bg-[#EEF0FC] dark:bg-gray-900">

    <!-- leftbar-tab-menu -->


    <div
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
    </div>


    <nav id="topbar"
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
    </nav>


    @yield('content')

    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="/template/dist/assets/libs/lucide/umd/lucide.min.js"></script>
    <script src="/template/dist/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/template/dist/assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="/template/dist/assets/libs/@frostui/tailwindcss/frostui.js"></script>
    <script src="/template/dist/assets/libs/prismjs/prism.js"></script>
    <script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
    <script src="assets/js/pages/form-advanced.init.js"></script>
    <script src="/template/dist/assets/libs/simple-datatables/umd/simple-datatables.js"></script>
    <script src="/template/dist/assets/js/pages/datatable.init.js"></script>
    <script src="/template/dist/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="/template/dist/assets/js/pages/analytics-index.init.js"></script>
    <script src="/template/dist/assets/js/app.js"></script>
    <script src="/template/dist/assets/js/pages/coa.js"></script>

    <!-- JAVASCRIPTS -->
</body>

</html>

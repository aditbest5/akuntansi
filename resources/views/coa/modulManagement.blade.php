@extends('master')
@section('content')
    <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
        <div class="xl:w-full">
            <div class="flex flex-wrap">
                <div class="flex items-center py-4 w-full">
                    <div class="w-full">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-medium text-3xl block dark:text-slate-100">Modul Management</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="#" class="text-gray-500 dark:text-slate-400">Master Data</a>
                                    </li>
                                    <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                    <li class="text-gray-500 dark:text-slate-400">COA</li>
                                    <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                    <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Modul
                                        Management
                                    </li>
                                </ol>
                            </div><!--end /div-->
                            <div class="flex items-center">
                                <div
                                    class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                    <input type="text" class="dash_date border-0 focus:border-0 focus:outline-none"
                                        readonly required="">
                                </div>
                            </div><!--end /div-->
                        </div><!--end /div-->
                    </div><!--end /div-->
                </div><!--end /div-->
            </div><!--end /div-->
        </div><!--end container-->

        <div class="xl:w-full min-h-[calc(100vh-152px)] relative pb-14">
            <div class="flex flex-row justify-start mb-10"><a href="/modul-management"
                    class="bg-blue-500 text-white font-bold py-2 px-4 rounded">+</a></div>
            <div class="xl:w-full gap-4 mb-4">
                <div class="sm:col-span-12 md:col-span-12 lg:col-span-8 xl:col-span-6 xl:col-start-4">
                    <div
                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40 rounded-md w-full relative mb-4">
                        <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                            <div class="flex-none md:flex">
                                <h4 class="font-medium text-lg flex-1 self-center mb-2 md:mb-0">
                                    Group Modul Detail
                                </h4>
                            </div>
                        </div>
                        <!--end header-title-->
                        <div class="grid grid-cols-1 p-4">
                            <div class="sm:-mx-6 lg:-mx-8">
                                <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                    <table class="w-full border-collapse" id="datatable_1">
                                        <thead class="bg-slate-100 dark:bg-slate-700/20">
                                            <tr>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Modul Code
                                                </th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Group Modul Code
                                                </th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Group Modul Name
                                                </th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Modul Name
                                                </th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Modul Description
                                                </th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Modul Status
                                                </th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 1 -->
                                            @forelse ($list_modul as $key => $value)
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700">
                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                        <img src="/template/assets/images/users/avatar-1.png" alt=""
                                                            class="mr-2 h-8 rounded-full inline-block" />{{ $value->modul_code }}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{ $value->group_modul_code }}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{ $value->group_modul_name }}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{ $value->modul_name }}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{ $value->modul_description }}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{ $value->modul_status == 0 ? 'Tidak Aktif' : 'Aktif' }}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="/edit-modul-management/{{ $value->id }}"><i
                                                                class="icofont-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                        <button onclick="deleteModul({{ $value->id }})"><i
                                                                class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></button>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700">
                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    </td>
                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    </td>
                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    </td>
                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                        Data not found</td>
                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    </td>
                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    </td>
                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--end card-body-->

                        <div id="Datatable-1"
                            class="transition-all duration-500 overflow-hidden bg-slate-50 dark:bg-slate-900 hidden">
                            <div class="grid"></div>
                        </div>
                    </div>
                    <!--end card-->

                </div>
                <!--end col-->
            </div>
            <!--end inner-grid-->
            <!-- footer -->
            <div
                class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
                <div class="container">
                    <!-- Footer Start -->
                    <footer
                        class="footer bg-transparent text-center font-medium text-slate-600 dark:text-slate-400 md:text-left">
                        &copy;
                        <script>
                            var year = new Date();
                            document.write(year.getFullYear());
                        </script>
                        Robotech
                        <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block">Crafted with
                            <i class="ti ti-heart text-red-500"></i> by
                            Mannatthemes</span>
                    </footer>
                    <!-- end Footer -->
                </div>
            </div>
        </div>
        <!--end container-->
    </div>
@endsection

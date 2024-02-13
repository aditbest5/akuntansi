@extends('master')
@section('content')
    <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-50px)] px-4 pt-[64px] duration-300">
        <div class="xl:w-full">
            <div class="flex flex-wrap">
                <div class="flex items-center py-4 w-full">
                    <div class="w-full">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-medium text-3xl block dark:text-slate-100">Cash Bank Entry</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="#" class="text-gray-500 dark:text-slate-400">General Management</a>
                                    </li>
                                    <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                    <li class="text-gray-500 dark:text-slate-400">COA</li>
                                    <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                    <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Cash Bank
                                        Entry
                                    </li>
                                </ol>
                            </div><!--end /div-->
                            <div class="flex flex-row justify-between items-center">
                                <div class="mx-5">
                                    <form method="GET" class="flex flex-row items-center">
                                        <input type="text" id="search" name="search"
                                            class="block w-full px-4 py-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Search...">
                                        <button
                                            class="bg-blue-500 text-white font-bold flex items-center justify-center px-4 py-3 rounded-lg ml-2">
                                            <i class="icofont-search pr-2"></i>
                                        </button>
                                    </form>
                                </div>
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
            <div class="flex flex-row justify-start gap-5">
                <div class="flex flex-row justify-start mb-10"><a href="/cash-bank-header"
                        class="bg-blue-500 text-white font-bold py-2 px-4 rounded"><i class="icofont-ui-add"></i></a></div>
                <div class="flex flex-row justify-start mb-10"><button onclick="printPreview('Cash Bank Entry')"
                        class="bg-blue-500 text-white font-bold py-2 px-4 rounded"><i class="icofont-print"></i></button>
                </div>
                <div class="flex flex-row justify-start mb-10"><button onclick="exportExcel()"
                        class="bg-blue-500 text-white font-bold py-2 px-4 rounded"><i class="icofont-download"></i></button>
                </div>
            </div>
            <div class="xl:w-full gap-4 mb-4">
                <div class="sm:col-span-12 md:col-span-12 lg:col-span-8 xl:col-span-6 xl:col-start-4">
                    <div
                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40 rounded-md w-full relative mb-4">
                        <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                            <div class="flex-none md:flex">
                                <h4 class="font-medium text-lg flex-1 self-center mb-2 md:mb-0">
                                    Cash Bank Entry Details
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

                                                    Voucher Number</th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Document Type
                                                </th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Ref No

                                                </th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Total Payment
                                                </th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Net Total
                                                </th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Note
                                                </th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Date
                                                </th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Status
                                                </th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Modul Code
                                                </th>
                                                <th scope="col"
                                                    class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 1 -->
                                            @forelse ($list_bank_header as $key => $value)
                                                <tr
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700">

                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <img src="template/dist/assets/images/users/avatar-1.png"
                                                            alt="" class="mr-2 h-8 rounded-full inline-block" />
                                                        {{ $value->doc_no }}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{ $value->doc_reff_no }}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{ $value->doc_type }}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{ $value->doc_value1 }}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{ $value->doc_value2 }}
                                                    </td>
                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                        {{ $value->doc_note }}
                                                    </td>
                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                        {{ $value->doc_status == '0' ? 'Tidak Aktif' : 'Aktif' }}
                                                    </td>
                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                        {{ $value->modul_code }}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="/edit-cash-bank-header/{{ $value->id }}"><i
                                                                class="icofont-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                        <button onclick="deleteCashBank({{ $value->id }})"><i
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
                                                    </td>
                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                        Data not found</td>
                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    </td>
                                                    <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    </td>
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
            <table class="w-full border-collapse hidden" id="datatable_preview">
                <thead class="bg-slate-100 dark:bg-slate-700/20">
                    <tr>
                        <th scope="col"
                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">

                            COA Code
                        </th>
                        <th scope="col"
                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                            COA Name
                        </th>
                        <th scope="col"
                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                            COA Group Code
                        </th>
                        <th scope="col"
                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                            COA Group Name
                        </th>
                        <th scope="col"
                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                            COA Header Code
                        </th>
                        <th scope="col"
                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                            COA Header Name
                        </th>
                        <th scope="col"
                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                            COA Type
                        </th>
                        <th scope="col"
                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                            COA Special Account
                        </th>
                        <th scope="col"
                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                            COA Description
                        </th>
                        <th scope="col"
                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                            Opening Saldo
                        </th>
                        <th scope="col"
                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                            COA Status
                        </th>
                        <th scope="col"
                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                            Modul Code
                        </th>
                        <th scope="col"
                            class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 1 -->
                    @forelse ($list_bank_header as $key => $value)
                        <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700">

                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                <img src="template/dist/assets/images/users/avatar-1.png" alt=""
                                    class="mr-2 h-8 rounded-full inline-block" />
                                {{ $value->coa_code }}
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{ $value->coa_name }}
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{ $value->coa_group_code }}
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{ $value->coa_group_name }}
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{ $value->coa_header_code }}
                            </td>
                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $value->coa_header_name }}
                            </td>
                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $value->coa_type }}
                            </td>
                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $value->coa_sa }}
                            </td>
                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $value->coa_description }}
                            </td>
                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $value->opening_saldo }}
                            </td>
                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $value->coa_status == '0' ? 'Tidak Aktif' : 'Aktif' }}
                            </td>
                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                {{ $value->modul_code }}
                            </td>
                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                <a href="/edit-coa-entry-list/{{ $value->id }}"><i
                                        class="icofont-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                <button onclick="deleteCoa({{ $value->id }})"><i
                                        class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700">

                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                            </td>
                            <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                            </td>
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
                        Arneva
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

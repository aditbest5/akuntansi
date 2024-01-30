@extends('master')
@section('content')
    <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-50px)] px-4 pt-[64px] duration-300">
        <div class="xl:w-full">
            <div class="flex flex-wrap">
                <div class="flex items-center py-4 w-full">
                    <div class="w-full">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-medium text-3xl block dark:text-slate-100">Payment Method Management
                                </h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="#" class="text-gray-500 dark:text-slate-400">Master Data</a>
                                    </li>
                                    <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                    <li class="text-gray-500 dark:text-slate-400">COA</li>
                                    <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                    <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Payment Method
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

        <div class="xl:w-full  min-h-[calc(100vh-152px)] relative pb-14">
            <div class="w-full mb-4">

                <div class="sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-6 xl:col-start-4">
                    <div
                        class="bg-white dark:bg-gray-900 border border-slate-200 dark:border-slate-700/40  rounded-md w-full relative mb-4">
                        <div class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                            <div class="flex-none md:flex">
                                <h4 class="font-medium text-lg flex-1 self-center mb-2 md:mb-0">Payment Method Management
                                </h4>
                            </div>
                        </div><!--end header-title-->
                        <div class="flex-auto p-4 ">
                            <form onsubmit="return submitEditPayment(event, {{ $list_payment->id }})">
                                <div class="grid xl:grid-cols-2 xl:gap-6">
                                    <div class="relative z-0 mb-2 w-full group">
                                        <input type="text" name="payment_method_code" id="payment_method_code"
                                            value="{{ $list_payment->payment_method_code }}"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                            placeholder=" " required disabled />
                                        <label for="payment_method_code"
                                            class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Payment
                                            Method Code
                                        </label>
                                    </div>
                                    <div class="relative z-0 mb-2 w-full group">
                                        <input type="text" name="payment_method_name " id="payment_method_name"
                                            value="{{ $list_payment->payment_method_name }}"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                            placeholder=" " required />
                                        <label for="payment_method_name "
                                            class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Payment
                                            Method Name</label>
                                    </div>
                                </div>
                                <br>
                                <div class="grid xl:grid-cols-2 xl:gap-6">
                                    <div class="relative z-0 mb-2 w-full group">
                                        <input type="text" name="payment_method_desc" id="payment_method_desc"
                                            value="{{ $list_payment->payment_method_desc }}"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                            placeholder=" " required />
                                        <label for="payment_method_desc"
                                            class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Payment
                                            Method Description
                                        </label>
                                    </div>
                                    <div class="relative z-0 mb-2 w-full group">
                                        <select onchange="journalCode(this.value)" name="journal_type_code"
                                            id="journal_type_code"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                            required>
                                            <option value="{{ $list_payment->journal_type_code }}" hidden>
                                                {{ $list_payment->journal_type_name }}
                                            </option>

                                        </select>
                                        <label for="journal_type_code"
                                            class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Journal
                                            Type Code
                                        </label>
                                    </div>
                                </div>
                                <br>
                                <div class="grid xl:grid-cols-2 xl:gap-6">
                                    <div class="relative z-0 mb-2 w-full group">
                                        <input type="text" name="journal_type_name" id="journal_type_name"
                                            value="{{ $list_payment->journal_type_name }}"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                            placeholder=" " required />
                                        <label for="journal_type_name"
                                            class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Journal
                                            Type Name
                                        </label>
                                    </div>
                                    <div class="relative z-0 mb-2 w-full group">
                                        <input type="text" name="coa_code" id="coa_code"
                                            value="{{ $list_payment->coa_code }}"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                            placeholder=" " required />
                                        <label for="coa_code"
                                            class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">COA
                                            Code</label>
                                    </div>
                                </div>
                                <br>
                                <div class="grid xl:grid-cols-2 xl:gap-6">
                                    <div class="relative z-0 mb-2 w-full group">
                                        <input type="text" name="coa_name" id="coa_name"
                                            value="{{ $list_payment->coa_name }}"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                            placeholder=" " required />
                                        <label for="coa_name"
                                            class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                            Coa Name</label>
                                    </div>
                                    <div class="relative z-0 mb-2 w-full group">
                                        <label for="payment_method_status"
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400 top-3">Payment
                                            Method Status</label>
                                        <select id="payment_method_status" name="payment_method_status"
                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            <option value="{{ $list_payment->payment_method_status }}" selected hidden>
                                                @if ($list_payment->payment_method_status == 0)
                                                    Tidak
                                                @else
                                                    Aktif
                                                @endif
                                            </option>
                                            <option value="1">Aktif</option>
                                            <option value="0">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <button type="submit"
                                    class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded mb-1 lg:mb-0">Submit</button>
                                <a href="/list-payment-management"
                                    class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded mb-1 lg:mb-0">Cancel</a>
                            </form>
                        </div><!--end card-body-->
                    </div>
                </div>
            </div> <!--end card-->
        </div><!--end col-->
    </div><!--end inner-grid-->
    <!-- footer -->
    <div class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
        <div class="container">
            <!-- Footer Start -->
            <footer
                class="footer bg-transparent  text-center  font-medium text-slate-600 dark:text-slate-400 md:text-left ">
                &copy;
                <script>
                    var year = new Date();
                    document.write(year.getFullYear());
                </script>
                Arneva
                <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block">Crafted
                    with <i class="ti ti-heart text-red-500"></i> by
                    Mannatthemes</span>
            </footer>
            <!-- end Footer -->
        </div>
    </div>


    </div><!--end container--
@endsection

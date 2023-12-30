@extends('master')
@section('content')
    <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
        <div class="xl:w-full">
            <div class="flex flex-wrap">
                <div class="flex items-center py-4 w-full">
                    <div class="w-full">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-medium text-3xl block dark:text-slate-100">Penjualan</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="#" class="text-gray-500 dark:text-slate-400">Dashboard</a>
                                    </li>
                                    <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                    <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                    <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                    <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Penjualan
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
                                <h4 class="font-medium text-lg flex-1 self-center mb-2 md:mb-0">Floating labels</h4>
                            </div>
                        </div><!--end header-title-->
                        <div class="flex-auto p-4 ">
                            <form>
                                <div class="relative z-0 mb-2 w-full group">
                                    <input type="email" name="floating_email"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                        placeholder=" " required />
                                    <label for="floating_email"
                                        class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                                        address</label>
                                </div>
                                <div class="relative z-0 mb-2 w-full group">
                                    <input type="password" name="floating_password" id="floating_password"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                        placeholder=" " required />
                                    <label for="floating_password"
                                        class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                                </div>
                                <div class="relative z-0 mb-2 w-full group">
                                    <input type="password" name="repeat_password" id="floating_repeat_password"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                        placeholder=" " required />
                                    <label for="floating_repeat_password"
                                        class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm
                                        password</label>
                                </div>
                                <div class="grid xl:grid-cols-2 xl:gap-6">
                                    <div class="relative z-0 mb-2 w-full group">
                                        <input type="text" name="floating_first_name" id="floating_first_name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                            placeholder=" " required />
                                        <label for="floating_first_name"
                                            class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                                            name</label>
                                    </div>
                                    <div class="relative z-0 mb-2 w-full group">
                                        <input type="text" name="floating_last_name" id="floating_last_name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                            placeholder=" " required />
                                        <label for="floating_last_name"
                                            class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                                            name</label>
                                    </div>
                                </div>
                                <div class="grid xl:grid-cols-2 xl:gap-6">
                                    <div class="relative z-0 mb-2 w-full group">
                                        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone"
                                            id="floating_phone"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                            placeholder=" " required />
                                        <label for="floating_phone"
                                            class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                                            number (123-456-7890)</label>
                                    </div>
                                    <div class="relative z-0 mb-2 w-full group">
                                        <input type="text" name="floating_company" id="floating_company"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer"
                                            placeholder=" " required />
                                        <label for="floating_company"
                                            class="absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Company
                                            (Ex. Google)</label>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded mb-1 lg:mb-0">Submit</button>
                                <button type="text"
                                    class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded mb-1 lg:mb-0">Cancel</button>
                            </form>
                        </div><!--end card-body-->

                        <div id="Forms-2"
                            class="transition-all duration-500 overflow-hidden bg-slate-50 dark:bg-slate-900 hidden">
                            <div class="grid">
                                <pre class="max-h-96 overflow-auto rounded-lg">
<code class="language-html">
&lt;form&gt;
&lt;div class=&quot;relative z-0 mb-2 w-full group&quot;&gt;
&lt;input type=&quot;email&quot; name=&quot;floating_email&quot; class=&quot;block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer&quot; placeholder=&quot; &quot; required /&gt;
&lt;label for=&quot;floating_email&quot; class=&quot;absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6&quot;&gt;Email address&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;relative z-0 mb-2 w-full group&quot;&gt;
&lt;input type=&quot;password&quot; name=&quot;floating_password&quot; id=&quot;floating_password&quot; class=&quot;block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer&quot; placeholder=&quot; &quot; required /&gt;
&lt;label for=&quot;floating_password&quot; class=&quot;absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6&quot;&gt;Password&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;relative z-0 mb-2 w-full group&quot;&gt;
&lt;input type=&quot;password&quot; name=&quot;repeat_password&quot; id=&quot;floating_repeat_password&quot; class=&quot;block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer&quot; placeholder=&quot; &quot; required /&gt;
&lt;label for=&quot;floating_repeat_password&quot; class=&quot;absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6&quot;&gt;Confirm password&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;grid xl:grid-cols-2 xl:gap-6&quot;&gt;
&lt;div class=&quot;relative z-0 mb-2 w-full group&quot;&gt;
&lt;input type=&quot;text&quot; name=&quot;floating_first_name&quot; id=&quot;floating_first_name&quot; class=&quot;block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer&quot; placeholder=&quot; &quot; required /&gt;
&lt;label for=&quot;floating_first_name&quot; class=&quot;absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6&quot;&gt;First name&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;relative z-0 mb-2 w-full group&quot;&gt;
&lt;input type=&quot;text&quot; name=&quot;floating_last_name&quot; id=&quot;floating_last_name&quot; class=&quot;block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-slate-300/60 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer&quot; placeholder=&quot; &quot; required /&gt;
&lt;label for=&quot;floating_last_name&quot; class=&quot;absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6&quot;&gt;Last name&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;grid xl:grid-cols-2 xl:gap-6&quot;&gt;
&lt;div class=&quot;relative z-0 mb-2 w-full group&quot;&gt;
&lt;input type=&quot;tel&quot; pattern=&quot;[0-9]{3}-[0-9]{3}-[0-9]{4}&quot; name=&quot;floating_phone&quot; id=&quot;floating_phone&quot; class=&quot;block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer&quot; placeholder=&quot; &quot; required /&gt;
&lt;label for=&quot;floating_phone&quot; class=&quot;absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6&quot;&gt;Phone number (123-456-7890)&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;relative z-0 mb-2 w-full group&quot;&gt;
&lt;input type=&quot;text&quot; name=&quot;floating_company&quot; id=&quot;floating_company&quot; class=&quot;block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-slate-300 dark:border-slate-700 dark:focus:border-primary-500 focus:outline-none focus:ring-0 focus:border-primary-500 peer&quot; placeholder=&quot; &quot; required /&gt;
&lt;label for=&quot;floating_company&quot; class=&quot;absolute text-sm text-gray-400 dark:text-slate-400/70 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-500 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6&quot;&gt;Company (Ex. Google)&lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;button type=&quot;submit&quot; class=&quot;inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded mb-1 lg:mb-0&quot;&gt;Submit&lt;/button&gt;
&lt;button type=&quot;text&quot; class=&quot;inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded mb-1 lg:mb-0&quot;&gt;Cancel&lt;/button&gt;
&lt;/form&gt;
</code>
</pre>
                            </div>
                        </div>
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end inner-grid-->
            <!-- footer -->
            <div
                class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
                <div class="container">
                    <!-- Footer Start -->
                    <footer
                        class="footer bg-transparent  text-center  font-medium text-slate-600 dark:text-slate-400 md:text-left ">
                        &copy;
                        <script>
                            var year = new Date();
                            document.write(year.getFullYear());
                        </script>
                        Robotech
                        <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block">Crafted
                            with <i class="ti ti-heart text-red-500"></i> by
                            Mannatthemes</span>
                    </footer>
                    <!-- end Footer -->
                </div>
            </div>


        </div><!--end container--
@endsection

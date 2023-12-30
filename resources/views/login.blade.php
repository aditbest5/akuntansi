<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Log In | Core of Accounting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Mannatthemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="template/assets/images/favicon.ico" />

    <!-- Css -->
    <!-- Main Css -->
    <link rel="stylesheet" href="template/dist/assets/libs/icofont/icofont.min.css">
    <link href="template/dist/assets/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="template/dist/assets/css/tailwind.min.css">
    <script>
        function getDateClient() {
            var d = new Date();
            var dateClient = d.getFullYear() + "-" + (parseInt(d.getMonth()) + 1) + "-" + d.getDate() + " " + d.getHours() +
                ":" + d.getMinutes() + ":" + d.getSeconds() + "." + d.getMilliseconds();
            return dateClient;
        }

        function login() {
            var userId = document.getElementById("emailaddress").value;
            var userPwd = document.getElementById("password").value;

            // Definisikan data yang akan dikirim
            const requestData = {
                userId: userId,
                userPwd: userPwd,
                // dateClient: getDateClient(),
            };

            // Konfigurasi untuk fetch
            const requestOptions = {
                method: 'POST',
                body: JSON.stringify(requestData),
                headers: {
                    'Content-Type': 'application/json',
                    'Access-Control-Allow-Origin': '*', // Sesuaikan dengan domain yang diizinkan
                    // Tambahkan header lain yang diperlukan
                },
            };

            // Lakukan permintaan fetch
            fetch('api/general/login', requestOptions)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Proses respons JSON
                    if (data.length == 0) {
                        alert('Tidak Ada Data', 'warning', 'Warning');
                    } else {
                        alert(data.sts);
                        if (data.sts == 'N') {
                            alert('Error');
                        } else {
                            alert('OK');
                            document.location.href = '/dashboard';
                        }
                    }
                })
                .catch(error => {
                    // Tangani kesalahan
                    console.error('There was an error!', error);
                    alert('ERROR', 'error', 'Error \n' + error.message);
                });
        }
    </script>
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
    class="bg-authentication dark:bg-gray-900">

    <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
        <div
            class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
            <div class="text-center p-6 bg-slate-900 rounded-t">
                <a href="index.html"><img src="template/dist/assets/images/arneva.png" alt=""
                        class="w-18 h-14 mx-auto mb-2"></a>
                <h3 class="font-semibold text-white text-xl mb-1">Let's Get Started </h3>
                <p class="text-xs text-slate-400">Sign in to continue to Core of Accounting.</p>
            </div>

            <form action="#" class="p-6">
                @csrf
                <div>
                    <label for="emailaddress"
                        class="font-medium text-sm text-slate-600 dark:text-slate-400">Email</label>
                    <input type="email" id="emailaddress"
                        class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                        placeholder="Your Email" required="">
                </div>
                <div class="mt-4">
                    <label for="password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Your
                        password</label>
                    <input type="password" id="password"
                        class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                        placeholder="Password" required>
                </div>
                <a href="#" class="text-xs font-medium text-brand-500 underline ">Forget Password?</a>
                <div class="block mt-3">
                    <label class="custom-label block dark:text-slate-300">
                        <div
                            class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                            <input type="checkbox" class="hidden">
                            <i class="fas fa-check hidden text-xs text-slate-700 dark:text-slate-200"></i>
                        </div>
                        Remember me
                    </label>
                </div>
                <div class="mt-4">
                    <button type="button" onclick="login()"
                        class="w-full px-2 py-2 tracking-wide text-white transition-colors duration-200 transform bg-brand-500 rounded hover:bg-brand-600 focus:outline-none focus:bg-brand-600">
                        Login
                    </button>
                </div>
            </form>
            <p class="mb-5 text-sm font-medium text-center text-slate-500"> Don't have an account? <a
                    href="auth-register.html" class="font-medium text-brand-500 hover:underline">Sign up</a>
            </p>
        </div>
    </div>


    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="template/dist/assets/libs/lucide/umd/lucide.min.js"></script>
    <script src="template/dist/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="template/dist/assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="template/dist/assets/libs/@frostui/tailwindcss/frostui.js"></script>

    <script src="assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
</body>

</html>

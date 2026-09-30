<!DOCTYPE html>
<html lang="er" dir="ltr" id="html-root">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="doc-title">Log in</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        [dir="rtl"] .form-floating>label {
            right: 0;
            left: auto;
            transform-origin: top right;
        }

        /* في الوضع الداكن: تحويل الظل إلى توهج أبيض/رمادي فاتح */
        [data-bs-theme="dark"] .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(255, 255, 255, 0.15) !important;
        }

        .btn {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body class="overflow-hidden">

    <header class="d-flex justify-content-between p-3">
        <div>
            <h2 id="header-title">Log in</h2>
        </div>
        <div class="d-flex mx-4 gap-3">
            <select class="form-select w-auto" id="lang-select" aria-label="Language select">
                <option value="en" selected>English</option>
                <option value="ar">العربية</option>
            </select>
            <!-- زر تبديل الوضع الليلي -->
            <button class="btn btn-outline-secondary" id="theme-toggle" type="button" aria-label="Toggle theme">
                🌙
            </button>
        </div>
    </header>

    <div class="d-flex flex-column min-vh-100 bg-body">
        <div class="container col-10 col-md-8 col-xl-6 col-xxl-5 m-auto">
            <div class="bg-body-tertiary p-5 rounded-3 shadow-lg">

                <form action="Log_in_post.php" method="post">

                    <div class="container text-center mb-3">
                        <div class="row g-2">
                            <div class="col">
                                <a class="btn btn-primary h-100 w-100 p-3" id="tab-login">Log in</a>
                            </div>
                            <div class="col">
                                <a href="register.html" class="btn btn-outline-secondary h-100 w-100 p-3" id="tab-register">Register</a>
                            </div>
                        </div>
                    </div>

                    

                    <div class="form-floating mt-4 mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                        <label for="floatingInput" id="label-email" >Email address</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" name="Password" placeholder="Password" required>
                        <label for="floatingPassword" id="label-password">Password</label>
                    </div>

                    <button class="btn btn-primary w-100 p-3 mb-3" type="submit" id="btn-submit" name="submit">
                        Sign in
                    </button>

                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const translations = {
            en: {
                dir: "ltr",
                docTitle: "Log in",
                headerTitle: "Log in",
                tabLogin: "Log in",
                tabRegister: "Register",
                formTitle: "Log in",
                email: "Email address",
                password: "Password",
                submit: "Sign in"
            },
            ar: {
                dir: "rtl",
                docTitle: "تسجيل الدخول",
                headerTitle: "تسجيل الدخول",
                tabLogin: "تسجيل الدخول",
                tabRegister: "إنشاء حساب",
                formTitle: "تسجيل الدخول",
                email: "البريد الإلكتروني",
                password: "كلمة المرور",
                submit: "دخول"
            }
        };

        const langSelect = document.getElementById('lang-select');
        const htmlRoot = document.getElementById('html-root');
        const headerTitle = document.getElementById('header-title');
        const formTitle = document.getElementById('form-title');
        const labelEmail = document.getElementById('label-email');
        const labelPassword = document.getElementById('label-password');
        const btnSubmit = document.getElementById('btn-submit');
        const docTitle = document.getElementById('doc-title');
        const tabLogin = document.getElementById('tab-login');
        const tabRegister = document.getElementById('tab-register');

        // تبديل اللغة
        langSelect.addEventListener('change', function () {
            const lang = this.value;
            const data = translations[lang];

            // 1. اتجاه ولغة المستند
            htmlRoot.setAttribute('dir', data.dir);
            htmlRoot.setAttribute('lang', lang);

            // 2. تحديث النصوص
            docTitle.textContent = data.docTitle;
            headerTitle.textContent = data.headerTitle;
            formTitle.textContent = data.formTitle;
            tabLogin.textContent = data.tabLogin;
            tabRegister.textContent = data.tabRegister;
            labelEmail.textContent = data.email;
            labelPassword.textContent = data.password;
            btnSubmit.textContent = data.submit;
        });

        // تبديل الوضع الليلي (Dark Mode)
        const themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', () => {
            const isDark = htmlRoot.getAttribute('data-bs-theme') === 'dark';

            if (isDark) {
                htmlRoot.removeAttribute('data-bs-theme');
                themeToggleBtn.textContent = '🌙';
            } else {
                htmlRoot.setAttribute('data-bs-theme', 'dark');
                themeToggleBtn.textContent = '☀️';
            }
        });
    </script>

</body>

</html>

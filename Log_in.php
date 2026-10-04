<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="doc-title">تسجيل الدخول</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>

        .btn {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* ضبط اتجاه النص وموقع العنوان عند الاعتماد على Bootstrap LTR */
.form-floating > label {
    right: 0 !important;
    left: auto !important;
    text-align: right !important;
    transform-origin: 100% 0 !important;
}

.form-floating > .form-control {
    text-align: right !important;
}
    </style>
</head>

<body class="overflow-hidden">

    <header class="d-flex justify-content-between p-3">
        <div>
            <h2 id="header-title">تسجيل الدخول</h2>
        </div>
        
    </header>

    <div class="d-flex flex-column min-vh-100 bg-body">
        <div class="container col-10 col-md-8 col-xl-6 col-xxl-5 m-auto">
            <div class="bg-body-tertiary p-5 rounded-3 shadow-lg">

                <form action="Log_in_post.php" method="post">

                    <div class="container text-center mb-3">
                        <div class="row g-2">
                            <div class="col">
                                <a class="btn btn-primary h-100 w-100 p-3" id="tab-login">تسجيل الدخول</a>
                            </div>
                            <div class="col">
                                <a href="register.html" class="btn btn-outline-secondary h-100 w-100 p-3" id="tab-register">إنشاء حساب</a>
                            </div>
                        </div>
                    </div>

                    

                    <div class="form-floating mt-4 mb-3 ">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                        <label for="floatingInput" id="label-email" >عنوان البريد الإلكتروني</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" name="Password" placeholder="Password" required>
                        <label for="floatingPassword" id="label-password">كلمة المرور</label>
                    </div>

                    <button class="btn btn-primary w-100 p-3 mb-3" type="submit" id="btn-submit" name="submit">
                        تسجيل الدخول
                    </button>

                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>

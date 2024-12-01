<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')-群鴻記帳士事務所</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @yield('custom-css')
    <style>
        /* 修改選取文字的背景顏色 */
        .container {
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        .navbar {
            width: 100%;
            height: 110px;
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, 0.3) !important;
            /* Green background with 30% opacity */
            /* 透明背景，0.5 代表50%的透明度 */
            z-index: 10;
            /* 確保 navbar 在 swiper 之上 */
        }

        .navbar-brand {
            margin-left: auto;
            margin-right: auto;
            display: block;
        }


        .swiper-container {
            width: 100%;
            height: 80vh;
            position: relative;
            z-index: 1;
            /* 背景圖片在 navbar 下方 */
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
            height: 500px;
        }

        .main-container {
            width: 60%;
            margin-left: auto;
            margin-right: auto;
        }

        .footer {
            background-color: #005050;
            color: white;
        }

        .footer-container {
            width: 60%;
            margin-left: auto;
            margin-right: auto;
        }

        .contact-list {
            list-style: none;
            /* 移除點點 */
            padding: 0;
            /* 去除內部間距 */
            margin: 0;
            /* 去除外部間距 */
        }

        #fans-follow i,
        #post-share i {
            color: rgba(255, 255, 255, 1);
            /* 按鈕顏色 */
            transition: color 0.3s ease;
        }

        #fans-follow i:hover,
        #post-share i:hover {
            color: #007bff;
            /* 滑鼠懸停時的顏色 */
        }

        ul {
            list-style-type: none;
            /* 去除項目點 */
            padding-left: 0;
            /* 去除內邊距 */
        }

        ul li {
            margin-bottom: 10px;
            /* 如果需要項目之間的間距，可以加這一行 */
        }

        ::selection {
            background-color: #007b9d;
            /* 背景顏色 */
            color: white;
            /* 文字顏色 */
        }

        /* 針對 Webkit 瀏覽器（例如 Chrome, Safari） */
        ::-webkit-selection {
            background-color: #007b9d;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        @include('layouts.navbar')

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    @yield('custom-js')
</body>

</html>
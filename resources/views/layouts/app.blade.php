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
            height: 85vh;
            position: relative;
            z-index: 1;
            /* 背景圖片在 navbar 下方 */
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
            height: 100%;
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

        .hrset {
            opacity: 0.5; /* 取消透明效果 */
            height: 5px;
            /* 控制線條厚度 */
            background-color: #005050;
            /* 設置背景顏色 */
            border: none;
            /* 移除邊框 */
            margin-top: 0;
            /* 移除上下的預設間距 */
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        @include('layouts.navbar')

        <!-- Main Content -->
        <main>
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"
                        style="background-image: url('https://static.iyp.tw/40416/system/page-banner-19c33.jpg');">
                    </div>
                    <div class="swiper-slide"
                        style="background-image: url('https://static.iyp.tw/40416/system/page-banner-8e47c.jpg');">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <hr class="hrset">

            </div>

            <section class="my-5 main-container">
                @yield('content-title')
                <hr class="mb-5">
                <div class="row">
                    <div class="col-md-3">
                        <ul>
                            <li>群鴻的服務</li>
                            <li><a class="nav-link" href="{{ route('tax')}}">稅務記帳服務</a></li>
                            <li><a class="nav-link" href="{{ route('commercial')}}">工商登記服務</a></li>
                            <li><a class="nav-link" href="{{ route('tax')}}">營利事業例行性稅務事項</a></li>
                            <li><a class="nav-link" href="{{ route('tax')}}">營利事業所得稅申報方式</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        @yield('content')
                    </div>
            
                </div>
            </section>
            
        </main>

        <!-- Footer -->
        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    @yield('custom-js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical', // 垂直滑動
        effect: 'fade', // 淡入淡出效果
        loop: true, // 循環播放
        autoplay: {
            delay: 3000, // 每 3 秒切換
            disableOnInteraction: false // 滑動後不停止自動播放
        },
        pagination: {
            el: '.swiper-pagination', // 分頁導航
            clickable: true, // 點擊可以切換
        },
        preventClicks: true, // 禁止點擊
        preventClicksPropagation: true, // 禁止點擊傳播
        hashNavigation: false, // 禁用 hash 導航，避免頁面跳轉
    });
});

    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡易網頁模板</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        /* 讓內容左右延伸 */
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
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container d-flex justify-content-center">
                <a class="navbar-brand mx-auto" href="#">
                    <img src="https://resource.iyp.tw/resize/1000x70/static.iyp.tw/40416/system/logo_ztyre.png" alt="群鴻記帳士事務所">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">稅務記帳服務</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">工商登記服務</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">營利事業例行性稅務事項</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">營利事業所得稅申報方式</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="swiper-container" style="transition-duration: 0ms;">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide" style="background-image: url('https://static.iyp.tw/40416/system/page-banner-19c33.jpg'); height: 549px;"></div> <!-- Slide 2 -->
                <div class="swiper-slide" style="background-image: url('https://static.iyp.tw/40416/system/page-banner-8e47c.jpg'); height: 549px;"></div>
            </div>
            <!-- Add Pagination if needed -->
            <div class="swiper-pagination"></div>
        </div>

        <section class="my-5 main-container">
            <h2>群鴻的服務</h2>
            <hr class="mb-5">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link" href="#">稅務記帳服務</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">工商登記服務</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">營利事業例行性稅務事項</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">營利事業所得稅申報方式</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img style="margin-right: auto; margin-left: auto; display: block;" alt="稅務記帳服務.jpg" src="https://static.iyp.tw/40416/files/1f3874a8-6bf5-44e0-882a-c51e1f3cca53.jpg">
                </div>
                <div class="col-md-4">
                    <img style="margin-right: auto; margin-left: auto; display: block;" alt="工商登記.jpg" src="https://static.iyp.tw/40416/files/2a6081a5-5f98-4474-a945-da1332750afb.jpg">
                </div>
            </div>
        </section>



        <footer class="footer py-4">
            <div class="footer-container row">
                <div class="col-md-6">
                    <h6>聯絡資訊</h6>
                    <ul class="contact-list">
                        <li class="nav-item">
                            <span>電話 : </span>05-6327388
                        </li>
                        <li class="nav-item">
                            <span>傳真 : </span>05-6326734
                        </li>
                        <li class="nav-item">
                            <span>住址 : </span>雲林縣虎尾鎮博愛路112-1號
                        </li>
                        <li class="nav-item">
                            <span>信箱 : </span>cyun.hong@msa.hinet.net
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6>追蹤分享</h6>
                    <div id="fans-follow">
                        <a href="https://www.facebook.com/cyunhong" title="前往FB粉絲專頁" target="_blank" rel="noopener" style="margin-right: 15px;">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="https://line.me/ti/p/D-2B_Sdtxw" title="加入LINE好友" target="_blank" rel="noopener" style="margin-right: 15px;">
                            <i class="fab fa-line fa-2x"></i>
                        </a>

                    </div>

                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add swiper.js script -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.swiper-container', {
                direction: 'vertical', // 設定為垂直方向
                effect: 'fade', // 使用淡入淡出效果
                loop: true,
                autoplay: {
                    delay: 3000, // 每隔 3 秒切換一次
                    disableOnInteraction: false, // 允許使用者操作後仍然自動切換
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });
    </script>

</body>

</html>
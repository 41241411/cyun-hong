<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container d-flex">
        <a class="navbar-brand" href="{{ route('home')}}">
            <img src="https://resource.iyp.tw/resize/1000x70/static.iyp.tw/40416/system/logo_ztyre.png" alt="群鴻記帳士事務所">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tax')}}">稅務記帳服務</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('commercial')}}">工商登記服務</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('commercial')}}">營利事業例行性稅務事項</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('commercial')}}">營利事業所得稅申報方式</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

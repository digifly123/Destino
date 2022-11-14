<nav class="navbar navbar-expand-lg position-relative">
    <div class="container-fluid p-0 flex-nowrap">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="" class="align-baseline" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <img class="navbar-toggler-icon rounded-circle" src="images/girl.png" />
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 nav-lab">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">foriegn tourism</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">domestic tourism</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hajj and umrah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">coming to egypt </a>
                </li>

                <li class="nav-item hidden">
                    <a class="nav-link Login" href="{{ route('client.login') }}">log in</a>
                </li>
                <li class="nav-item hidden">
                    <a href="{{ route('client.register') }}"><button
                            class="btn me-2 text-capitalize text-light pt-2 pb-2 ps-4 pe-4 register">
                            sign up
                        </button></a>

                </li>
            </ul>

        </div>
        <div class="left-nav d-flex justify-content-end align-items-center  ms-4 me-4">
            <li class="nav-item">
                <a class="nav-link Login me-3" href="{{ route('client.login') }}">log in</a>
            </li>

            <button class="btn me-2 text-capitalize pt-2 pb-2 ps-4 text-light pe-4 fs-8 register">
                <a href=" {{ route('client.register') }}" class="">sign up</a>

            </button>
            <li class="nav-item dropdown me-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    EN
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Ar</a></li>
                    <li><a class="dropdown-item" href="#">En</a></li>
                </ul>
            </li>
            <li class="burger-menu">
                <img src="images/girl.png" class="ms-2 rounded-circle w-100 h-100" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            </li>
            <li class="nav-menu">
                <div class="menu-list">
                    <ul>
                        <li><a>Home</a></li>
                        <li><a>About</a></li>
                        <li><a>Contact</a></li>
                        <li><a>Contact</a></li>
                        <li><a>Contact</a></li>
                    </ul>
                </div>
                <div id="burger-wrap">
                    <a class="burger"><span></span></a>
                </div>
            </li>
        </div>
    </div>
</nav>
<!-- offcanvas side menue -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <!-- <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">foriegn tourism</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">domestic tourism</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hajj and umrah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">coming to egypt </a>
            </li>

            <li class="nav-item hidden">
                <a class="nav-link Login" href="{{ route('client.login') }}">log in</a>
            </li>
            <li class="nav-item hidden">
                <a href="{{ route('client.register') }}"><button
                        class="btn me-2 text-capitalize pt-2 pb-2 ps-4 pe-4 register">
                        sign up
                    </button></a>

            </li>
        </ul>
    </div>
</div>

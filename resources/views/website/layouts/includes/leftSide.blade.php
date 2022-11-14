<div class="col-12 col-xxl-2 col-md-12">


    <div class="off d-flex d-xl-none align-items-center justify-content-between flex-wrap mt-4">
        <a class="pt-2 text-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
            aria-controls="offcanvasScrolling">
            <i class="fa-solid fa-bars fs-2"></i>
        </a>
        <div class="col-10 col-lg-6">
            <div class="d-flex w-100 justify-content-between">

                <div class="search-form shadow position-relative radius-15 w-80 ">
                    <input type="text" placeholder="search your location"
                        class="border-0 pe-3 pt-4 pb-4 w-100 radius-15 ">
                    <i class="fa-solid fa-magnifying-glass position-absolute fs-8 text-xs secandry-light"
                        style="left: 15px; bottom:27px "></i>
                    <button class="btn position-absolute Explore-btn p-3 fs-8 "> <a href="#" class="text-light ">
                            <i class="fa-solid fa-magnifying-glass"></i></a></button>
                </div>
                <button type="button" class="btn-ball radius-10 shadow position-relative">
                    <i class="fa-regular fa-bell yellow fs-3"></i>
                    <span
                        class="position-absolute top-100 start-100 translate-middle badge rounded-pill text-light yellow">
                        9
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="offcanvas offcanvas-start p-4" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <img src="images/Logo.png" alt="" />
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body overflow-hidden">
                <ul class="p-0 dashboard-menu">
                    <li class="active-page mt-0" onclick="dodajAktywne(this)">
                        <a href=""class="gray"><img class="me-2" src="images/Icon-material-dashboard.svg"
                                alt="" />
                            Dashboard</a>
                    </li>
                    <li onclick="dodajAktywne(this)">
                        <a href="#"class="gray"><img class="me-2" src="images/Group-39852.svg"
                                alt="" />
                            my account</a>
                    </li>
                    <li onclick="dodajAktywne(this)">
                        <a href="#"class="gray"><img class="me-2" src="images/Group-39851.svg"
                                alt="" />
                            My trips</a>
                    </li>
                    <li onclick="dodajAktywne(this)">
                        <a href="#"class="gray"><img class="me-2" src="images/Icon-ionic-ios-heart-empty.svg"
                                alt="" />
                            Favourites</a>
                    </li>
                    <li onclick="dodajAktywne(this)">
                        <a href="#" class="gray"><img class="me-2" src="images/Icon-material-group.svg"
                                alt="" />
                            invite friends
                            <strong class="pink fs-8">Pink</strong></a>
                    </li>
                    <li onclick="dodajAktywne(this)">
                        <a href="visa service1.html" class="gray"><img class="me-2" src="images/Group-39901.svg"
                                alt="" />
                            visa servises</a>
                    </li>
                    <li onclick="dodajAktywne(this)">
                        <a class="d-flex gray" href="#"><img class="me-2"
                                src="images/Icon feather-message-circle.svg" alt="" />Messages
                            <span class="yellow-btn text-light fs-8 ms-5 p-1 radius-20">3</span></a>
                    </li>
                    <li onclick="dodajAktywne(this)">
                        <a href="#" class="gray"><img class="me-2" src="images/Group-39853.svg"
                                alt="" />
                            Transactions</a>
                    </li>
                    <li onclick="dodajAktywne(this)">
                        <a href="#"class="gray"><img class="me-2" src="images/Icon-feather-settings.svg"
                                alt="" />Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="dashboard-menu d-none d-xl-block">
        <a href=""><img src="images/Logo.png" alt="" /></a>
        <ul class="p-0 w-80">
            <li class="active-page" onclick="dodajAktywne(this)">
                <a href="" class="gray"><img class="me-2" src="images/Icon-material-dashboard.svg"
                        alt="" />Dashboard</a>
            </li>
            <li onclick="dodajAktywne(this)">
                <a href="#"class="gray"><img class="me-2" src="images/Group-39852.svg" alt="" />
                    my
                    account</a>
            </li>
            <li onclick="dodajAktywne(this)">
                <a href="#"class="gray"><img class="me-2" src="images/Group-39851.svg" alt="" />
                    My
                    trips</a>
            </li>
            <li onclick="dodajAktywne(this)">
                <a href="#" class="gray"><img class="me-2" src="images/Icon-ionic-ios-heart-empty.svg"
                        alt="" />
                    Favourites</a>
            </li>
            <li onclick="dodajAktywne(this)">
                <a href="#"class="gray"><img class="me-2" src="images/Icon-material-group.svg"
                        alt="" />
                    invite friends <strong class="pink fs-8">Pink</strong></a>
            </li>
            <li onclick="dodajAktywne(this)">
                <a href="visa service1.html"class="gray"><img class="me-2" src="images/Group-39901.svg"
                        alt="" />
                    visa servises</a>
            </li>
            <li onclick="dodajAktywne(this)">
                <a class="d-flex gray" href="#"><img class="me-2"
                        src="images/Icon feather-message-circle.svg" alt="" />Messages
                    <span class="yellow-btn text-light fs-8 ms-5 p-1 radius-20">3</span></a>
            </li>
            <li onclick="dodajAktywne(this)">
                <a href="#"class="gray"><img class="me-2" src="images/Group-39853.svg" alt="" />
                    Transactions</a>
            </li>
            <li onclick="dodajAktywne(this)">
                <a href="#"class="gray"><img class="me-2" src="images/Icon-feather-settings.svg"
                        alt="" />Settings</a>
            </li>
        </ul>
    </div>
</div>

@extends('website.client.client_dashboard')
@section('css')
@endsection
@section('content')
    <div class="row p-3 pt-0">

        <div class="banner-2 radius-20">
            <div class="w-50 float-end pt-3">
                <h2 class="fw-bold ">you need visa to order from destino</h2>
                <p class=" fs-8">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.
                    Lorem Ipsum has been the industry's standard dummy text </p>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center p-3 mt-4 flex-wrap">
            <div>
                <h2 class="text-capitalize fw-bold">order information</h2>

                <p class="fs-7 gray">welcome back and discover the world</p>
            </div>
            <div class="d-flex step flex-wrap">
                <div class="d-flex me-5" id="step-1">
                    <i class="fa-solid fa-info text-light radius-10"></i>
                    <div class="ms-2">
                        <span class="fs-7 fw-bold">1.</span>
                        <p class="fs-7 fw-bold">collect info</p>
                    </div>
                </div>
                <div class="d-flex active-step" id="step-2">
                    <i class="fa-regular fa-file-lines  radius-10"></i>
                    <div class="ms-2">
                        <span class="fs-7 fw-bold">2.</span>
                        <p class="fs-7 fw-bold">upload docx</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <form method="post" class="col-12 radius-20 p-2 align-items-center">
                <div class="mb-3 row">
                    <div class="col-12 col-md-6">
                        <input type="text" placeholder="Lgal name" class="form-control mb-3  p-4 border-0" required=""
                            id="f-name" />
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="text" placeholder="Birth date" class="form-control mb-3  p-4 border-0"
                            required="" id="f-name" />
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="email" placeholder="Email" class="form-control mb-3 p-4 border-0" required=""
                            id="f-name" />
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="phone" placeholder="phone" class="form-control mb-3 p-4 border-0" required=""
                            id="phone" />
                    </div>
                    <div class="col-12 col-md-6">
                        <select class="form-select form-select-lg form-control fs-7 gray  p-4 border-0 mb-3"
                            aria-label=".form-select-lg example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <select class="form-select form-select-lg form-control fs-7 gray p-4 border-0 mb-3"
                            aria-label=".form-select-lg example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="form-floating gray">
                            <textarea class="form-control gray  border-0 mb-3" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                            <label for="floatingTextarea2 fs-8">about you</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between ">
                        <a href=""><button class="btn see-all" onclick="Myfunction2()">Previous</button></a>
                        <a href=""> <button class="btn-next text-light border-0 radius-10"
                                onclick="Myfunction()">Next</button></a>

                    </div>
                </div>

            </form>
        </div>

    </div>
@endsection
@section('js')
@endsection

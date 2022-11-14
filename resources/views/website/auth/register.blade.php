@extends('website.layouts.master')
@section('css')
@endsection
@section('content')
    <div class="container-fluid signup">
        <div class="containery h-100">
            <img src=" {{ asset('images/Mask Group 5.png') }}" alt="" class="position-absolute animate1"
                style="top: 0" />
            <img src=" {{ asset('images/Mask Group 5.png') }}" alt="" class="position-absolute animate2"
                style="top: 10%" />
            <img src=" {{ asset('images/Mask Group 5.png') }}" alt="" class="position-absolute animate3"
                style="top: 0" />

            <section class="row p-3 h-100 align-items-center">
                <form method="post" class="col-12 col-md-8 col-xl-6 radius-20 bg-blur p-5 align-items-center"
                    style="z-index: 5">
                    <h3 class="fw-bold mb-3 text-capitalize">sign up and enjoy</h3>
                    <p class="text-secondary">
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry
                    </p>
                    <div class="mb-3 row">
                        <div class="col-12 col-md-6">
                            <input type="text" placeholder="First name" class="form-control mb-3 m-2 p-3 border-0"
                                required="" id="f-name" />
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" placeholder="Last name" class="form-control mb-3 m-2 p-3 border-0"
                                required="" id="l-name" />
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="email" placeholder="Email" class="form-control mb-3 m-2 p-3 border-0"
                                required="" id="e-mail" />
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="phone" placeholder="phone" class="form-control mb-3 m-2 p-3 border-0"
                                required="" id="phone" />
                        </div>
                        <div class="col-12 col-md-6 position-relative">
                            <input type="password" placeholder="password" class="form-control mb-3 m-2 p-3 border-0"
                                required="" id="password" />
                            <i class="far fa-eye-slash position-absolute" id="togglePassword"
                                style="top: 1.7rem; right: 1rem; cursor: pointer"></i>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="password" placeholder="repeat password" class="form-control mb-3 m-2 p-3 border-0"
                                required="" />
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn yellow-btn p-3 w-100">
                                Sign up
                            </button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection
@section('js')
    <script>
        let eye = document.getElementById("togglePassword");
        let password = document.getElementById("password");
        console.log(eye, password);
        eye.addEventListener("click", function(e) {
            if (password.type === "password") {
                password.type = "text";
                eye.classList.replace("fa-eye-slash", "fa-eye");
            } else {
                password.type = "password";
                eye.classList.replace("fa-eye", "fa-eye-slash");
            }
        });
    </script>
@endsection

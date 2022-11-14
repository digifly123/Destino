@extends('website.layouts.master')
@section('css')
@endsection
@section('content')
    <div class="container-fluid signin">
        <div class="containery h-100">
            <!-- navbar  -->
            <img src=" {{ asset('images/Mask Group 5.png') }}" alt="" class="position-absolute animate1"
                style="top: 0 ;" />
            <img src=" {{ asset('images/Mask Group 5.png') }}" alt="" class="position-absolute animate2"
                style="top: 10% ;" />
            <img src=" {{ asset('images/Mask Group 5.png') }}" alt="" class="position-absolute animate3"
                style="top: 0 ;" />
            <section class="row p-3 h-100 align-items-center">
                <form class="col-12 col-md-8 col-xl-4 radius-20 bg-blur p-5 align-items-center">
                    <h3 class="fw-bold mb-3 text-capitalize">sign in and enjoy</h3>
                    <p class="text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry</p>
                    <div class="mb-3  row">
                        <input type="email" placeholder=" phone or email " class="form-control mb-3 p-3 border-0"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        <input type="password" placeholder=" password " class="form-control mb-3 p-3 border-0"
                            id="exampleInputPassword1">
                        <button type="submit" class="btn yellow-btn p-3">Sign in</button>
                    </div>

                </form>
            </section>
        </div>
    </div>
@endsection
@section('js')
@endsection

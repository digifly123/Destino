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
            <div class="d-flex step">
                <div class="d-flex  me-5" id="step-1">
                    <i class="fa-solid fa-info text-light radius-10"></i>
                    <div class="ms-2">
                        <span class="fs-7 fw-bold">1.</span>
                        <p class="fs-7 fw-bold">collect info</p>
                    </div>
                </div>
                <div class="d-flex" id="step-2">
                    <i class="fa-regular fa-file-lines text-light radius-10"></i>
                    <div class="ms-2">
                        <span class="fs-7 fw-bold">2.</span>
                        <p class="fs-7 fw-bold">upload docx</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="d-flex choose-photo p-2 radius-20 w-100 ms-0">
                <i class="fa-regular fa-file-lines file radius-20"></i>
                <i class="fa-regular fa-file-lines file radius-20"></i>
                <form class="file-uploader ms-2">
                    <label for="file-input"><i class="fa-solid fa-plus"></i></label>
                    <input id="file-input" type="file" />
                </form>
            </div>
            <div class="d-flex justify-content-between p-2 mt-3">
                <a href=""><button class="btn see-all">Previous</button></a>
                <a href=""><button class="btn-next text-light border-0 radius-10">Order</button></a>
            </div>
        </div>


    </div>
@endsection
@section('js')
@endsection

@extends('website.client.client_dashboard')
@section('css')
@endsection
@section('content')
    <div class="row p-3 pt-0 ">
        <form class="file-uploader mt-6 mb-4  flex-column ">
            <label class="-label" for="file"> </label>
            <div class="radius-20" style="height: 150px; width: 150px; background-color: #fff;">
                <img src="https://datacenterresources.com/wp-content/uploads/2017/06/missing-profile-photo.png" id="output"
                    class="radius-20 w-100 h-100  p-2 " />

            </div>
            <div class="d-flex justify-content-between mt-2">
                <input class="d-none" id="file" type="file" onchange="loadFile(event)" />
                <label for="file" class="text-secondary fs-8 text-capitalize"> <i class="fa-solid fa-pen-to-square"></i>
                    edit</label>
                <label id="delete" class="fs-8 ms-4 text-danger text-capitalize"> <i class="fa-solid fa-trash"></i>
                    remove</label>
            </div>
        </form>
        <div>
            <form method="post" class="col-12 radius-20 p-2 align-items-center">
                <div class="mb-3 row">
                    <div class="col-12 col-md-6">
                        <input type="text" placeholder="First name" class="form-control mb-3  p-4 border-0"
                            required="" id="f-name" />
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="text" placeholder="last name" class="form-control mb-3  p-4 border-0" required=""
                            id="l-name" />
                    </div>

                    <div class="col-12 col-md-6">
                        <input type="email" placeholder="Email" class="form-control mb-3 p-4 border-0" required=""
                            id="email" />
                    </div>
                    <div class="col-12 col-md-6">

                        <input class="form-control mb-3 p-4 border-0" type="text" id="phone"
                            placeholder="e.g. +20 1157593629" name="phone" value="+20 " style="direction:ltr ;">
                    </div>

                    <div class="col-12 col-md-6 position-relative">
                        <input type="password" placeholder="password" class="form-control mb-3  p-4 border-0" required=""
                            id="password" />
                        <i class="far fa-eye-slash position-absolute" id="togglePassword"
                            style="top: 1.7rem; right: 1rem; cursor: pointer"></i>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="password" placeholder="confirm password" class="form-control mb-3  p-4 border-0"
                            required="" />
                    </div>

                    <div class="col-12 position-relative">
                        <select class="form-select mb-3  p-4 border-0" id="multiple2-select-custom-field"
                            data-placeholder="favourit places" multiple>
                            <option>london</option>
                            <option>turkey</option>
                            <option>monday</option>
                            <option>Kenya</option>
                            <option>French Guiana</option>
                            <option>Mayotta</option>
                            <option>Russia</option>
                        </select>
                        <i class="fa-solid fa-magnifying-glass text-secondary position-absolute"
                            style="top: 28px; right: 25px; z-index: 1;"></i>
                    </div>
                    <div class="col-12 ">
                        <select class="form-select mb-3  p-4 border-0" id="multiple-select-custom-field"
                            data-placeholder="holidays" multiple>
                            <option>saturday</option>
                            <option>sunday</option>
                            <option>monday</option>
                            <option>Kenya</option>
                            <option>French Guiana</option>
                            <option>Mayotta</option>
                            <option>Russia</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between ">
                        <a href=""><button class="btn see-all" onclick="Myfunction2()">Previous</button></a>
                        <a href=""> <button class="btn-next text-light border-0 radius-10"
                                onclick="Myfunction()">create and share</button></a>

                    </div>
                </div>

            </form>
        </div>

    </div>
@endsection
@section('js')
    <script>
        // select2 script
        $('#multiple-select-custom-field').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
            tags: true
        });
        $('#multiple2-select-custom-field').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            closeOnSelect: false,
            tags: true
        });
        // change the image of user
        let loadFile = function(event) {
            let image = document.getElementById("output");
            image.src = URL.createObjectURL(event.target.files[0]);
        };
        // delete the image of user
        let dele = document.getElementById('delete');
        dele.addEventListener('click', () => {
            console.log('heeeee');
            let image = document.getElementById("output");
            image.src = "https://datacenterresources.com/wp-content/uploads/2017/06/missing-profile-photo.png"
        })
        // toggle the eye to show password

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

        var countryData = window.intlTelInputGlobals.getCountryData(),
            input = document.querySelector("#phone"),
            addressDropdown = document.querySelector("#address-country");

        var iti = window.intlTelInput(input, {
            hiddenInput: "full_phone",
            utilsScript: "https://intl-tel-input.com/node_modules/intl-tel-input/build/js/utils.js?1549804213570" // just for formatting/placeholders etc
        });

        // populate the country dropdown
        for (var i = 0; i < countryData.length; i++) {
            var country = countryData[i];
            var optionNode = document.createElement("option");
            optionNode.value = country.iso2;
            var textNode = document.createTextNode(country.name);
            optionNode.appendChild(textNode);
            addressDropdown.appendChild(optionNode);
        }
        // set it's initial value
        addressDropdown.value = iti.getSelectedCountryData().iso2;

        // listen to the telephone input for changes
        input.addEventListener('countrychange', function(e) {
            addressDropdown.value = iti.getSelectedCountryData().iso2;
        });

        // listen to the address dropdown for changes
        addressDropdown.addEventListener('change', function() {
            iti.setCountry(this.value);
        });
    </script>
@endsection

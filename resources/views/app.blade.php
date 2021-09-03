<!doctype html>
<html lang="en">
@include('partials.head')
<body>
<div class="container py-4">
    <header class="pb-3 mb-5 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
            <span class="fs-1 h1">Geometry calculator</span>
        </a>
    </header>

    {{--    <h1 class="display-6 fw-bold">Geometry calculator</h1>--}}
    <div class="my-5 bg-light rounded-3 shadow-lg w-75 d-flex m-auto">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

    {{--    <div class="row align-items-md-stretch">--}}
    {{--        <div class="col-md-6">--}}
    {{--            <div class="h-100 p-5 text-white bg-dark rounded-3">--}}
    {{--                <h2>Change the background</h2>--}}
    {{--                <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>--}}
    {{--                <button class="btn btn-outline-light" type="button">Example button</button>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="col-md-6">--}}
    {{--            <div class="h-100 p-5 bg-light border rounded-3">--}}
    {{--                <h2>Add borders</h2>--}}
    {{--                <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>--}}
    {{--                <button class="btn btn-outline-secondary" type="button">Example button</button>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <footer class="pt-3 mt-4 text-muted border-top">
        © 2021
    </footer>
</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    let OPTION_TRIANGLE = $("#option-triangle");
    let OPTION_CIRCLE = $("#option-circle");
    let OPTION_COMBINE = $("#option-combine");
    let OPTIONS = $(".option");

    // Hover effects
    OPTIONS.on("click", function(){
        // this.querySelector("svg").style.width = 200;
        location.href = $(this).data("src");
    });

    $("#calculate").on("click", function(){
        // Get collection of inputs
        let vals = document.getElementsByTagName("input");
        // Convert HTMLcollection to array
        vals = [].slice.call(vals);

        // Replace array of elements with their values
        vals.forEach((e, i) => {
            vals[i] = e.value;
        });

        // Join inputs into a URL string
        let url = vals.join("/");
        console.log(window.location.pathname + "/" + url)
        let dt;
        $.ajax({
            // Extend the existing path with parameters
            url: window.location.pathname + "/" + url,
            // Gets JSON from server as result
            success: function(data){
                dt = data;
            },
            error: function(data) {
                console.log(data);
            },
            // Encodes JSON into URI
            complete: function(){
                $.ajax({
                    url: "/result/" + encodeURI(dt),
                    success: function(data){
                        $(".content").html(data);
                    },
                });
            }
        });

    });
</script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
-->
</body>
</html>

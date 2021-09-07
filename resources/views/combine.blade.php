@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-12 border-top py-3">
            <svg width="64px" height="100%" viewBox="0 0 96 57" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                <g transform="matrix(1,0,0,1,-912.033,-783.312)">
                    <g transform="matrix(0.22784,0,0,0.22784,702.476,699.134)">
                        <circle cx="1225.18" cy="485.095" r="115.633" style="fill:rgb(255,210,98);"/>
                    </g>
                    <g transform="matrix(0.257308,0,0,0.257308,748.003,663.348)">
                        <path d="M796.58,466.23L869.137,684.253L637.486,627.401L796.58,466.23Z" style="fill:rgb(98,142,255);"/>
                    </g>
                </g>
            </svg>
            <h4 class="h4 d-inline-block mx-2">Combine</h4>
        </div>
    </div>
    <div class="row text-center py-2">
        <h4 class="h4 offset-md-3 col-md-6 d-inline-block">Select <u>two</u> objects to combine</h4>
        <div class="col-auto">
            <button class="btn btn-success" disabled id="btn-combine">Combine</button>
        </div>
    </div>

{{--    Vue component--}}
    <div id="app">
        <combine-geometry></combine-geometry>
    </div>

{{--    <div class="row">--}}
{{--        <h4 >Triangles</h4>--}}
{{--        <table class="table table-hover table-striped">--}}
{{--            <thead>--}}
{{--                <th>Type</th>--}}
{{--                <th>a</th>--}}
{{--                <th>b</th>--}}
{{--                <th>c</th>--}}
{{--                <th>surface</th>--}}
{{--                <th>circumference</th>--}}
{{--                <th></th>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--                @foreach($triangles as $triangle)--}}
{{--                    <tr>--}}
{{--                        <td><img width="24px" src="{{ asset('img/svg/Triangle-Aquablue.svg') }}" alt="Triangle"></td>--}}
{{--                        <td>{{ $triangle["a"] }}</td>--}}
{{--                        <td>{{ $triangle["b"] }}</td>--}}
{{--                        <td>{{ $triangle["c"] }}</td>--}}
{{--                        <td>{{ $triangle["surface"] }}</td>--}}
{{--                        <td>{{ $triangle["circumference"] }}</td>--}}
{{--                        <td data-val="{{ $triangle }}"><input type="checkbox" class=""></td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}

{{--        <h4 class="h4 mt-2">Circles</h4>--}}
{{--        <table class="table table-hover table-striped">--}}
{{--            <thead>--}}
{{--                <th>Type</th>--}}
{{--                <th>radius</th>--}}
{{--                <th>surface</th>--}}
{{--                <th>circumference</th>--}}
{{--                <th></th>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($circles as $circle)--}}
{{--                <tr>--}}
{{--                    <td><img width="24px" src="{{ asset('img/svg/Circle-Orangered.svg') }}" alt="Circle"></td>--}}
{{--                    <td>{{ $circle["radius"] }}</td>--}}
{{--                    <td>{{ $circle["surface"] }}</td>--}}
{{--                    <td>{{ $circle["circumference"] }}</td>--}}
{{--                    <td data-val="{{ $circle }}"><input type="checkbox" class=""></td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
@endsection

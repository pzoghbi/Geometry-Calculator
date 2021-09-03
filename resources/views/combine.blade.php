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
    <div class="row">
        <table class="table table-hover table-striped">
            <thead>
                <th>Type</th>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>surface</th>
                <th>circumference</th>
            </thead>
            <tbody>
                @foreach($triangles as $triangle)
                    <tr>
                        <td>{{ $triangle["type"] }}</td>
                        <td>{{ $triangle["a"] }}</td>
                        <td>{{ $triangle["b"] }}</td>
                        <td>{{ $triangle["c"] }}</td>
                        <td>{{ $triangle["surface"] }}</td>
                        <td>{{ $triangle["circumference"] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <table class="table table-hover table-striped">
            <thead>
            <th>Type</th>
            <th>radius</th>
            <th>surface</th>
            <th>circumference</th>
            </thead>
            <tbody>
            @foreach($circles as $circle)
                <tr>
                    <td>{{ $triangle["type"] }}</td>
                    <td>{{ $triangle["radius"] }}</td>
                    <td>{{ $triangle["surface"] }}</td>
                    <td>{{ $triangle["circumference"] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row text-center py-2">
        <h4 class="h4">Select an object to combine</h4>
    </div>
@endsection

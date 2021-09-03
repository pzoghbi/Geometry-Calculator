@extends('app')
@section('content')
    <div class="row text-center">
        <div class="col-md-6 border-end py-5 option" id="option-triangle" data-src="/triangle">
            <svg width="128px" height="100%" viewBox="0 0 240 186" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                <g transform="matrix(1,0,0,1,-596.563,-398.199)">
                    <g transform="matrix(0.803282,0,0,0.803282,138.29,34.3216)">
                        <path d="M735.664,452.988L869.137,684.253L570.5,596.959L735.664,452.988Z" style="fill:rgb(98,229,255);"/>
                    </g>
                </g>
            </svg>
            <h3 class="h3 opacity-0">Triangle</h3>
        </div>
        <div class="col-md-6 py-5 option" id="option-circle" data-src="/circle">
            <svg width="128px" height="100%" viewBox="0 0 186 186" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                <g transform="matrix(1,0,0,1,-1132.3,-398.199)">
                    <g transform="matrix(0.803282,0,0,0.803282,241.015,101.416)">
                        <circle cx="1225.18" cy="485.095" r="115.633" style="fill:rgb(255,123,98);"/>
                    </g>
                </g>
            </svg>
            <h3 class="h3 opacity-0">Circle</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center border-top py-3 option" id="option-combine" data-src="/combine">
            <div>
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
                <span class="h4 d-inline-block mx-2 opacity-0">Combine</span>
            </div>
        </div>
    </div>
@endsection

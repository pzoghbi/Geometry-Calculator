@extends('app')
@section('content')
    <div class="row text-center">
        <div class="col-md-6 border-end py-5">
            <svg width="128px" height="100%" viewBox="0 0 187 186" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                <g transform="matrix(1,0,0,1,-1120.65,-3009.9)">
                    <g transform="matrix(1,0,0,1,0,2562.79)">
                        <g transform="matrix(0.803282,0,0,0.803282,229.37,150.331)">
                            <circle cx="1225.18" cy="485.095" r="115.633" style="fill:rgb(255,123,98);"/>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,0,2562.79)">
                        <g transform="matrix(0.670569,0,0,0.670569,817.814,24.3756)">
                            <text x="603.393px" y="755.795px" style="font-family:'SFProDisplay-Regular', 'SF Pro Display';font-size:43.495px;">r<tspan x="616.37px " y="755.795px ">a</tspan>dius</text>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,0,2562.79)">
                        <g transform="matrix(1,0,0,1,0,-2562.79)">
                            <path d="M1213.54,3102.79L1306.42,3102.79" style="fill:none;stroke:black;stroke-width:1.3px;"/>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="col-md-6 py-5 content">
            <div class="row p-2">
                <label for="radius" class="col-form-label offset-md-3 col-md-1 me-3">radius</label>
                <div class="col-auto">
                    <input type="number" step="0.01" class="form-control" name="radius" id="radius" required>
                </div>
            </div>
            <div class="row mt-4">
                <h5 class="h5 d-inline-block col-auto offset-md-3 align-middle">Fill circle data</h5>
                <button class="btn btn-outline-primary d-inline-block col-auto ms-2" id="calculate" data-src="/triangle">Calculate</button>
            </div>
        </div>
    </div>
@endsection


@extends('app')
@section('content')
    <div class="row text-center">
        <div class="col-md-6 border-end py-5">
            <svg width="128px" height="100%" viewBox="0 0 240 186" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                <g transform="matrix(1,0,0,1,-584.918,-3009.9)">
                    <g transform="matrix(1,0,0,1,0,2562.79)">
                        <g transform="matrix(0.670569,0,0,0.670569,208.125,-8.90013)">
                            <text x="603.393px" y="755.795px" style="font-family:'SFProDisplay-Regular', 'SF Pro Display';font-size:43.495px;">a</text>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,0,2562.79)">
                        <g transform="matrix(0.670569,0,0,0.670569,376.089,24.3756)">
                            <text x="603.393px" y="755.795px" style="font-family:'SFProDisplay-Regular', 'SF Pro Display';font-size:43.495px;">b</text>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,0,2562.79)">
                        <g transform="matrix(0.670569,0,0,0.670569,271.508,125.788)">
                            <text x="603.393px" y="755.795px" style="font-family:'SFProDisplay-Regular', 'SF Pro Display';font-size:43.495px;">c</text>
                        </g>
                    </g>
                    <g transform="matrix(1,0,0,1,0,2562.79)">
                        <g transform="matrix(0.803282,0,0,0.803282,126.646,83.2373)">
                            <path d="M735.664,452.988L869.137,684.253L570.5,596.959L735.664,452.988Z" style="fill:rgb(98,229,255);"/>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="col-md-6 py-5 content">
            <div class="row p-2">
                <label for="triangleA" class="col-form-label offset-md-3 col-md-1">a</label>
                <div class="col-md-6">
                    <input type="number" step="0.01" class="form-control" name="triangleA" id="triangleA" required>
                </div>
            </div>
            <div class="row p-2">
                <label for="triangleB" class="col-form-label offset-md-3 col-md-1">b</label>
                <div class="col-md-6">
                    <input type="number" step="0.01" class="form-control" name="triangleB" id="triangleB" required>
                </div>
            </div>
            <div class="row p-2">
                <label for="triangleC" class="col-form-label offset-md-3 col-md-1">c</label>
                <div class="col-md-6">
                    <input type="number" step="0.01" class="form-control" name="triangleC" id="triangleC" required>
                </div>
            </div>
            <div class="row mt-4">
                <h5 class="h5 d-inline-block col-auto offset-md-3 align-middle">Fill triangle data</h5>
                <button class="btn btn-outline-primary d-inline-block col-auto ms-2" id="calculate" data-src="/triangle">Calculate</button>
            </div>
        </div>
    </div>
@endsection


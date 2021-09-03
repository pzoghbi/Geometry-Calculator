<dl class="row">
@foreach($object as $key => $value)
    <dt class="col-md-3 offset-md-3 text-end">{{ $key }}</dt>
    <dd class="col-md-6 text-start">{{ $value }}</dd>
@endforeach
</dl>
<a href="/" class="btn btn-success rounded-pill fw-bold">Main Screen</a>

@if (session()->has('message') || $errors->any())
<div id="alert-message">
    <div class="alert alert-dismissible {!! session()->has('message') ? 'alert-success' : 'alert-danger' !!}" id="alert-message">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        @if (session()->has('message'))
            <p>{!! session('message') !!}</p>
        @endif
        @if (count($errors->any()))
            @foreach (array_keys($errors->getMessages()) as $key)
                <p>{{ $errors->first($key) }}</p>
            @endforeach
        @endif
    </div>
</div>
@endif

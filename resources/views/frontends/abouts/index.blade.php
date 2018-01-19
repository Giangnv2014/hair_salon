@extends('layouts.app')

@section('content')
<main class="main-content">
    <div class="page">
        <div class="container">
            <p>{{ $destiny->content }}</p>

            <div class="row">
                <div class="col-md-4">
                    <h3 class="section-title">{{ trans('global.labels.about') }}</h3>
                    @foreach ($abouts as $about)
                        <figure><img src="{{ $about->image }}" alt=""></figure>
                        <h4>{{ $about->title }}</h4>
                        <p>{{ $about->content }}</p>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <h3 class="section-title">{{ trans('global.labels.passion') }}</h3>
                    @foreach ($passions as $passion)
                        @if (isset($passion->image) && !empty(trim($passion->image)))
                            <figure><img src="{{ $passion->image }}" alt=""></figure>
                        @endif
                        <h4>{{ $passion->title }}</h4>
                        <p>{{ $passion->content }}</p>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <h3 class="section-title">{{ trans('global.labels.stylist') }}</h3>
                    <div class="row">
                        <div class="col-md-6">
                            @foreach ($stylists as $key => $stylist)
                                @if ($key > 0 && $key % 2 == 0)
                                    </div>
                                    <div class="col-md-6">
                                @endif
                                <div class="team small">
                                    <figure class="team-image"><img src="{{ $stylist->image }}"></figure>
                                    <h3 class="team-name">{{ $stylist->title }}</h3>
                                    <p>{{ $stylist->content }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

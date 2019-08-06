@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <h1 id="main_title">{{ $lang[0]->main_title }}</h1>
            <p id="main_desc">{{ $lang[0]->main_desc }}</p>
        </div>
    </div>
</div>
@endsection
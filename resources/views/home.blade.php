@extends('layouts.app')

@push('bottom')
    <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:block;">
        @csrf
        <input class="button" type="button" value="logout" />
    </form> -->
@endpush

@section('content')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:block;float:right;margin:15px">
        @csrf
        <button class="button" type="submit" form="logout-form">logout</button>
    </form>
    @component('components.full-page-section')
        @component('components.card')
            @slot('title')
                {{ config('app.name') }}
            @endslot

            <div class="content">
                <p>
                    Welcome to <b>{{ config('app.name') }}</b>
                </p>
                <p>
                    You are logged in
                </p>
            </div>
        @endcomponent
    @endcomponent
@endsection
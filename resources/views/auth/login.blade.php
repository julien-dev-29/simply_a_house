@extends('base')

@section('title', 'Se Connecter')

@section('content')

    <div class="mt-4 container">
        <h1 class="mb-3">@yield('title')</h1>
        <form action="{{ route('login') }}" method="POST" class="vstack gap-3">
            @csrf
            @include('shared.input', [
                'type' => 'phone',
                'class' => 'col',
                'name' => 'email',
                'label' => 'Email',
            ])
            @include('shared.input', [
                'type' => 'password',
                'class' => 'col',
                'name' => 'password',
                'label' => 'Password',
            ])
            <div class="">
                <button class="btn btn-primary">Se Connecter</button>
            </div>
        </form>
    </div>

@endsection

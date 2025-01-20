@extends('admin.admin')

@section('title', $option->exists ? 'Editer Une Option' : 'Créer Une Option')

@section('content')


    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}"
        method="POST">

        @csrf
        @method($option->exists ? 'PUT' : 'POST')

        @include('shared.input', [
            'name' => 'name',
            'label' => 'Nom',
            'value' => $option->name,
        ])

        <button class="btn btn-primary mt-3">
            @if ($option->exists)
                Modifier
            @else
                Créer
            @endif
        </button>
    </form>

@endsection

@extends('base')

@section('title', 'Nos Maisons')

@section('content')

    <main class="p-3">
        <h1 class="mb-5">Nos Maisons</h1>
        <form action="" class="container d-flex gap-2">
            <input type="number" name="surface" class="form-control" placeholder="Surface Min"
                value="{{ $input['surface'] ?? '' }}">
            <input type="number" name="rooms" class="form-control" placeholder="Nombre de pièces min"
                value="{{ $input['rooms'] ?? '' }}">
            <input type="number" name="price" i class="form-control" placeholder="Budget Max"
                value="{{ $input['price'] ?? '' }}">
            <input type="text" name="title" class="form-control" placeholder="Mot clef"
                value="{{ $input['title'] ?? '' }}">
            <button class="btn btn-primary">Rechercher</button>
        </form>

        <div class="card-group row mt-5">
            @forelse ($properties as $k => $property)
                <div class="col-xl-4 col-md-6 px-3 pb-5">
                    @include('elements.card', [
                        'property' => $property,
                    ])
                </div>
            @empty
                <div class="col alert alert-info">
                    Aucun résultats
                </div>
            @endforelse
        </div>
    </main>

    <div class="container">{{ $properties->links() }}</div>

@endsection

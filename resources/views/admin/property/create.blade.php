@extends('admin.admin')

@section('title', $property->exists() ? 'Editer Un Bien' : 'Créer Un Bien')

@section('content')


    <h1>@yield('title')</h1>

    <form class="vstack gap-2"
        action="{{ route($property->exists() ? 'admin.property.update' : 'admin.property.store', $property) }}"
        method="POST">

        @csrf
        @method($property->exists() ? 'PUT' : 'POST')

        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Titre',
                'name' => 'title',
                'value' => $property->title,
            ])


            <div class="col row">
                @include('shared.input', [
                    'class' => 'col',
                    'name' => 'surface',
                    'value' => $property->surface,
                    'type' => 'number',
                ])
                @include('shared.input', [
                    'class' => 'col',
                    'name' => 'price',
                    'value' => $property->price,
                    'type' => 'number',
                ])
            </div>
        </div>

        <div class="row">
            @include('shared.input', [
                'type' => 'textarea',
                'name' => 'description',
                'value' => $property->description,
            ])
        </div>

        <div class="row">
            @include('shared.input', [
                'type' => 'number',
                'label' => 'Chambres',
                'class' => 'col',
                'name' => 'rooms',
                'value' => $property->address,
            ])
            @include('shared.input', [
                'type' => 'number',
                'label' => 'Salle De Bains',
                'class' => 'col',
                'name' => 'bedrooms',
                'value' => $property->city,
            ])
            @include('shared.input', [
                'type' => 'number',
                'label' => 'Etage',
                'class' => 'col',
                'name' => 'floor',
                'value' => $property->floor,
            ])
        </div>

        <div class="row">
            @include('shared.input', [
                'label' => 'Adresse',
                'class' => 'col',
                'name' => 'address',
                'value' => $property->address,
            ])
            @include('shared.input', [
                'label' => 'Ville',
                'class' => 'col',
                'name' => 'city',
                'value' => $property->city,
            ])
            @include('shared.input', [
                'label' => 'Code Postal',
                'type' => 'number',
                'class' => 'col',
                'name' => 'postal_code',
                'value' => $property->postal_code,
            ])
        </div>

        @include('shared.checkbox', [
            'label' => 'Vendu',
            'name' => 'sold',
            'value' => $property->sold,
        ])


        <button class="btn btn-primary mt-3">
            @if ($property->exists())
                Modifier
            @endif
            Créer
        </button>
    </form>

@endsection

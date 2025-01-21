@extends('admin.admin')

@section('title', $property->exists ? 'Editer Un Bien' : 'Créer Un Bien')

@section('content')


    <h1>@yield('title')</h1>

    <form class="vstack gap-2"
        action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        @method($property->exists ? 'PUT' : 'POST')

        <div class="row">
            <div class="col" style="flex: 100">
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
                        'label' => 'Pièces',
                        'class' => 'col',
                        'name' => 'rooms',
                        'value' => $property->rooms,
                    ])
                    @include('shared.input', [
                        'type' => 'number',
                        'label' => 'Chambres',
                        'class' => 'col',
                        'name' => 'bedrooms',
                        'value' => $property->bedrooms,
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

                @include('shared.select', [
                    'label' => 'Options',
                    'name' => 'options',
                    'value' => $property->options()->pluck('id'),
                    'options' => $options,
                    'multiple' => true,
                ])

                @include('shared.checkbox', [
                    'label' => 'Vendu',
                    'name' => 'sold',
                    'value' => $property->sold,
                ])
            </div>
            <div class="col" style="flex: 25">
                @include('shared.upload', [
                    'label' => 'Images',
                    'name' => 'pictures',
                    'multiple' => true,
                ])
                @foreach ($property->pictures as $picture)
                    <img src="{{ $picture->getImageUrl() }}" alt="" class="w-100 d-block">
                @endforeach
            </div>
        </div>


        <button class="btn btn-primary mt-3">
            @if ($property->exists)
                Modifier
            @else
                Créer
            @endif
        </button>
    </form>

@endsection

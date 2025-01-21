@extends('base')

@section('title', $property->title)

@section('content')

    <h1>{{ $property->title }}</h1>
    <h2>{{ $property->rooms }} pièces - {{ $property->surface }}m²</h2>

    <div class="text-primary fw-bold" style="font-size: 40px">
        {{ number_format($property->price, thousands_separator: ' ') }}&euro;
    </div>

    <hr>

    <div class="mt-4">
        <h4>Intéressé par ce bien❤️</h4>

        <form action="" class="vstack gap-3">
            @csrf
            <div class="row">
                @include('shared.input', ['class' => 'col', 'name' => 'firstname', 'label' => 'Prénom'])
                @include('shared.input', ['class' => 'col', 'name' => 'lastname', 'label' => 'Nom'])
            </div>
            <div class="row">
                @include('shared.input', [
                    'type' => 'phone',
                    'class' => 'col',
                    'name' => 'phone',
                    'label' => 'Téléphone',
                ])
                @include('shared.input', [
                    'type' => 'email',
                    'class' => 'col',
                    'name' => 'email',
                    'label' => 'Email',
                ])
            </div>
            @include('shared.input', [
                'type' => 'textarea',
                'class' => 'col',
                'label' => 'Votre message',
                'name' => 'message',
            ])
            <div class="mb-2">
                <button class="btn btn-primary">Nous contacter</button>
            </div>
        </form>
    </div>

    <div class="mt-4">
        <p>{{ nl2br($property->description) }}</p>
        <div class="row">
            <div class="col-8">
                <h2>Caractéristiques</h2>
                <table class="table table-striped">
                    <tr>
                        <td>Surface habitable</td>
                        <td>{{ $property->surface }}m²</td>
                    </tr>
                    <tr>
                        <td>Pièces</td>
                        <td>{{ $property->rooms }}</td>
                    </tr>
                    <tr>
                        <td>Chambres</td>
                        <td>{{ $property->bedrooms }}</td>
                    </tr>
                    <tr>
                        <td>Etage</td>
                        <td>{{ $property->floor ?: 'Rez-de-chaussé' }}</td>
                    </tr>
                    <tr>
                        <td>Localisation</td>
                        <td>{{ $property->city }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <h2>Spécificités</h2>
                <ul class="list-group">
                    @foreach ($property->options as $option)
                        <li class="list-group-item">{{ $option->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

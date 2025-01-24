@extends('base')

@section('title', 'Accueil')

@section('content')
    <main>
        <section class="pt-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="pb-3">Bienvenue Chez Simply A House👋</h2>
                        <p class="fs-6">La société <strong>Simply A House</strong>, groupement d’agences
                            qui vendent des maisons individuelles ou mitoyennes en <strong>France</strong>, est née de
                            l’ambition, accompagner ses clients dans la réussite d’un des projets les plus importants
                            dans
                            leur vie : l’achat <strong>d’une maison🏠</strong>.</p>
                        <p class="fs-6"><strong>Simply A House</strong> vous accompagne tout au long
                            de votre projet d’acquisition de maison, de la recherche de la réservation jusqu’à la remise
                            des
                            clés🗝️.</p>
                    </div>
                    <div class="d-none d-md-block col mx-5"><img src="{{ asset('storage/assets/images/terrasse.png') }}"
                            width="250px" style="float: right;" alt="photo de bienvenue">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <h3 class="px-3 pb-3
                 fw-bold">Les Dernières Annonces</h3>
                <div class="card-group row">
                    @foreach ($properties as $k => $property)
                        <div class="col-xl-4 col-md-6 px-3 pb-5">
                            @include('elements.card', [
                                'property' => $property,
                            ])
                        </div>
                    @endforeach
                </div>
                <div class="row text-center pt3">
                    <div class="col"><a href="{{ route('properties.index') }}" class="btn btn-primary">En voir
                            +</a></div>
                </div>
            </div>
        </section>
    </main>
@endsection

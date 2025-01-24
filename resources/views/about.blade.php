@extends('base')

@section('title', 'A propos')

@section('content')

    <main>
        <section class="mt-5">
            <div class="container-sm">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="fs-2 fw-bold text-center">Simply A House : Une équipe d'experts👨‍💻</h2>
                        <p class="pt-5">
                            Forts d'une longue expérience dans le domaine de la vente de maisons, nous nous engageons à
                            déterminer avec vous ce qui vous conviendra le mieux, en étudiant rigoureusement les moins
                            détails de la conception de votre nouveau lieu de vie.
                        </p>
                        <p class="py-5">
                            Que votre chois se porte sur une maison traditionnelle ou sur une maison contemporaine, notre
                            équipe expérimentée, d'un responsable technique, d'un responsable qualité et de
                            technico-commerciaux, est là pour vous conseiller et vous accompagner durant l'intégralité de
                            votre projet. Notez que nous disposons d'un bureau d'étude de dessin si vous souhaitez mettre
                            votre nouvelle maison à votre goût.
                        </p>
                    </div>
                </div>
            </div>

        </section>
        <section id="accordeon" class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button rounded-0 fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Nos engagements et garanties
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Simply A House est le site d'annonces immobilières leader pour l'achat de résidences
                                secondaires en Europe. Avec plus de 288&nbsp;000 annonces, dans 56 pays, nous sommes la
                                plateforme de référence pour les acheteurs souhaitant investir dans l'immobilier à
                                l'étranger. Que vous cherchiez une villa en Algarve, une longère dans le sud-ouest de la
                                France, une maison à Florence, un appartement à Malaga, un bien à Athènes ou même Tel-Aviv,
                                vous êtes au bon endroit !</p>

                            <p class="py-3">Plus de 9000 annonceurs, agents immobiliers, et particuliers proposent leurs
                                propriétés à vendre dans toute l'Europe sur Simply A House.</p>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <p>Nous vous invitons à découvrir l'ensemble de nos garanties&nbsp;:</p>
                                    <p class="fw-normal fst-italic ps-3 py-3">Garantie de remboursement d'acompte</p>
                                    <p class="fw-normal fst-italic ps-3">Garantie de livraison à prix et délai convenu</p>
                                </div>
                                <div class="col-md-6 d-none d-md-flex justify-content-center">
                                    <img src="{{ asset('storage/assets/images/label.jpg') }}" alt="photo du label">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button rounded-0 fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                            Un rapport qualité/prix inégalé
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam nihil dolorem assumenda, ut
                                quasi sit cum illo. Explicabo dolore praesentium ut necessitatibus minus beatae tempore
                                sunt, qui repudiandae quod, eos quas tempora rem! Ut atque perferendis eum molestias eius
                                omnis excepturi quod tenetur, aspernatur deleniti obcaecati ipsa illo maiores temporibus!
                                Perferendis laudantium quo distinctio consectetur minus explicabo maxime natus molestiae?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button rounded-0 fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                            Une équipe investie et disponible
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut sint voluptatem iure atque rem
                                quasi quo, porro a illum officia blanditiis, dolorem sunt totam beatae consequatur ipsa
                                aliquam! Cum, illum porro non rerum atque nulla omnis at maxime ea, recusandae nihil
                                suscipit corrupti vero architecto blanditiis error impedit illo consequuntur ducimus cumque,
                                sapiente eveniet sit magnam! Saepe possimus fuga earum!</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>

@endsection

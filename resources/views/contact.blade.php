@extends('base')

@section('title', 'Contact')

@php
    date_default_timezone_set(timezoneId: 'Europe/Paris');
    $heure = date('h');
    /**
     * Summary
     */
    define(constant_name: 'JOURS', value: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche']);
    /**
     * Summary
     */
    define(
        constant_name: 'CRENEAUX',
        value: [[[8, 12], [14, 19]], [[8, 12], [14, 19]], [[8, 12]], [[8, 12], [14, 19]], [[8, 12], [14, 19]], [], []],
    );
    /**
     * Summary of in_creneaux
     * @param int $heure
     * @param mixed $creneaux
     * @return bool
     */
    function in_creneaux(int $heure, $creneaux): bool
    {
        foreach ($creneaux as $creneau) {
            if ($heure >= $creneau[0] && $heure < $creneau[1]) {
                return true;
            }
        }
        return false;
    }
    /**
     * Summary of creneaux_html
     * @param array $creneaux
     * @return string
     */
    function creneaux_html(array $creneaux): string
    {
        $phases = [];
        //
        if (empty($creneaux)) {
            return 'Fermé';
        }
        //
        foreach ($creneaux as $creneau) {
            $phases[] = "de <strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
        }
        return 'Ouvert : ' . implode(separator: ' et ', array: $phases);
    }
    $creneaux = CRENEAUX[date(format: 'N') - 1];
    $ouvert = in_creneaux(heure: $heure, creneaux: $creneaux);
    $color = $ouvert ? 'green' : 'red';
@endphp

@section('content')
    <main>
        <div class="row">
            <div class="col-md-6">
                <section>
                    <div class="text-center pt-5">
                        <h1>Contacter Simply A House📧</h1>
                        <div class="row pt-5">
                            <div class="col">
                                <p class="fs-6">Pour toute demande d'information ou de prise de rendez-vous, vous pouvez
                                    nous
                                    adresser votre demande en remplissant le formulaire de contact ci-dessous.

                                    Le conseiller de votre secteur géographique, interlocuteur unique, vous proposera un
                                    accompagnement unique et personnalisé tout au long de votre projet.</p>
                            </div>
                            <div class="d-none d-md-inline-block offset-3 col-2">
                                <img src="/assets/images-simply/visuel-contact.jpg" alt="photo house">
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="col-md-8">
                        <form class="mb-5">
                            <div class="col-12">
                                <div class="mb-5">
                                    <input type="text" class="form-control" id="nom" placeholder="Nom">
                                </div>
                                <div class="mb-5">
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="mb-5">
                                    <input type="tel" class="form-control" id="telephone" placeholder="Téléphone">
                                </div>

                            </div>
                            <h5 class="mt-3 fw-bold">Région</h5>
                            <div class="col-12 d-flex justify-content-between">

                                <div class="mt-3 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check1">
                                    <label class="form-check-label" for="check1">
                                        Nord
                                    </label>
                                </div>
                                <div class="mt-3 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check2">
                                    <label class="form-check-label" for="check2">
                                        Sud
                                    </label>
                                </div>
                                <div class="mt-3 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check3">
                                    <label class="form-check-label" for="check3">
                                        Est
                                    </label>
                                </div>
                                <div class="mt-3 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check4">
                                    <label class="form-check-label" for="check4">
                                        Ouest
                                    </label>
                                </div>
                            </div>
                            <h5 class="mt-4 fw-bold">Votre projet</h5>
                            <div class="col-12 d-flex justify-content-between">

                                <div class="mt-3 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check5">
                                    <label class="form-check-label" for="check5">
                                        Maison
                                    </label>
                                </div>
                                <div class="mt-3 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check6">
                                    <label class="form-check-label" for="check6">
                                        Villa
                                    </label>
                                </div>
                                <div class="mt-3 form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check7">
                                    <label class="form-check-label" for="check7">
                                        Domaine
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <div class="mb-4">
                                    <h5 class="fw-bold">Votre Message</h5>
                                    <textarea class="form-control" id="form-textarea" rows="4"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary align-self-center px-5 custom-btn-form"
                                type="submit">Envoyer</button>
                        </form>
                    </div>
                </section>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4 pt-5">
                <div class="col-md-10">
                    <h2>Horaires d'ouverture</h2>
                    <?php if ($ouvert): ?>
                    <div class="alert alert-success">L'agence est ouverte</div>
                    <?php else: ?>
                    <div class="alert alert-danger">L'agence est fermée</div>
                    <?php endif ?>
                    <ul>
                        <?php foreach (JOURS as $k => $jour): ?>
                        <li <?php if ($k + 1 === (int) date(format: 'N')): ?>style="color: <?= $color ?>" <?php endif ?>>
                            <strong><?= $jour ?></strong> :
                            <?= creneaux_html(creneaux: CRENEAUX[$k]) ?>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    @endsection

<i id="phoneButton" class="bi bi-telephone-fill position-fixed end-0 p-2 mb-5 bg-success text-white top-50 z-3 shadow"
    data-bs-toggle="tooltip" data-bs-placement="left" title="02.98.86.32.26"></i>


<i id="emailButton" class="bi bi-envelope position-fixed end-0 p-2 mt-5 bg-success text-white top-50 z-3 shadow"
    data-bs-toggle="modal" data-bs-target="#emailModal"></i>

<div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="emailModalLabel">Nous conctater</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Email Formumaire -->
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="name" placeholder="Entrez votre nom">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control" placeholder="Entrez votre email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Entrez votre message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer message</button>
                </form>
            </div>
        </div>
    </div>
</div>

<header class="container-fluid">
    <div class="row d-none d-md-flex bg-tertiary justify-content-end">

        <div class="col-2 d-flex justify-content-around align-items-center">
            <a class="d-flex justify-content-center py-1" href="https://facebook.com">
                <i class="bi bi-facebook text-primary"></i>
            </a>
            <a class="d-flex justify-content-center py-1" href="https://twitter.com">
                <i class="bi bi-twitter text-primary"></i>
            </a>
            <a class="d-flex justify-content-center py-1" href="https://linkedin.com">
                <i class="bi bi-linkedin text-primary"></i>
            </a>
            <a class="d-flex justify-content-center py-1" href="https://instagram.com">
                <i class="bi bi-instagram text-primary"></i>
            </a>
        </div>
        <div class="col-2 d-flex justify-content-center">
            <a class="d-flex justify-content-center text-decoration-none text-black align-items-center py-1"
                href="tel:+33257877185">
                <i class="bi bi-telephone-fill  text-black"></i>
                <div class=" text-black">&nbsp;02&nbsp;57&nbsp;87&nbsp;71&nbsp;85</div>
            </a>
        </div>
        <div class="col-2 d-flex justify-content-center py-1">
            <!-- Button trigger modal -->
            @if (Auth::check())
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-info text-white"><i class="bi bi-house-door-fill"></i> Se
                        déconnecter</button>
                </form>
            @else
                <form action="{{ route('login') }}" method="GET">
                    @csrf
                    <button class="btn btn-info text-white"><i class="bi bi-house-door-fill"></i> Se connecter</button>
                </form>
            @endif

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Se Connecter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Login Form -->
                            <form>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Entrez votre email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Entrez votre password">
                                </div>
                                <button type="submit" class="btn btn-primary">Se connecter</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="#">Mot de passe oublié</a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="button" class="btn btn-primary">Créer un compte</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

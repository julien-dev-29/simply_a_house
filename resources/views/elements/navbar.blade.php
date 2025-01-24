<div class="row">
    <div class="col px-0">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark shadow">
            <a href="" class="navbar-brand px-3">Agence
            </a>
            <button class="navbar-toggler text-black-50 px-4" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            @php
                $route = request()->route()->getName();
            @endphp

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ route('home.index') }}" @class(['nav-link', 'active' => str_contains($route, 'home.')])>Accueil</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('about') }}" @class(['nav-link', 'active' => str_contains($route, 'about')])>A&nbsp;Propos</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('properties.index') }}"
                            @class(['nav-link', 'active' => str_contains($route, 'properties.')])>Nos&nbsp;Maisons</a>
                    </li>
                    <li class="nav-item"><a href="{{ route(name: 'contact') }}" @class(['nav-link', 'active' => str_contains($route, 'contact')])>Contact</a>
                    </li>
                    @auth
                        <li class="nav-item dropdown">
                            <a @class([
                                'nav-link dropdown-toggle',
                                'active' =>
                                    str_contains($route, 'property.') || str_contains($route, 'option.'),
                            ]) href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Admin
                            </a>
                            <ul class="dropdown-menu">
                                <li><a @class([
                                    'dropdown-item',
                                    'active' => str_contains($route, 'property.'),
                                ]) href="{{ route('admin.property.index') }}">Gérer les
                                        biens</a></li>
                                <li><a @class(['dropdown-item', 'active' => str_contains($route, 'option.')]) href="{{ route('admin.option.index') }}">Gérer les
                                        options</a></li>
                            </ul>
                        </li>
                    </ul>
                @endauth
            </div>
    </div>
    </nav>
</div>
</div>
</header>

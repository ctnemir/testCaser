<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    </head>
    <body class="bg-light">
        <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom sticky-top">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="/">
                    <x-jet-application-mark width="15" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-jet-nav-link>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    @auth
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                            <x-jet-dropdown id="navbarDropdown">
                                <x-slot name="trigger">
                                    <h2 class="h4 font-weight-bold d-inline-block" dusk="projectName">
                                        @yield('project')
                                    </h2>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <h6 class="dropdown-header small text-muted">
                                        {{ __('Select A Project') }}
                                    </h6>
                                    @foreach($projects as $project)
                                        <x-jet-dropdown-link href="{{ route('tecCard.show', $project->id) }}">
                                            {{ $project->projectName }}
                                        </x-jet-dropdown-link>
                                    @endforeach
                                </x-slot>
                            </x-jet-dropdown>

                    </ul>
                    @endauth
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @auth
                            <x-jet-dropdown id="navbarDropdown">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <img class="rounded-circle" width="32" height="32" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    @else
                                        <span dusk="userName">{{ Auth::user()->name }}</span>
                                    @endif
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <h6 class="dropdown-header small text-muted">
                                        {{ __('Manage Account') }}
                                    </h6>

                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-jet-dropdown-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-jet-dropdown-link>
                                    @endif

                                <!-- Team Management -->
                                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())

                                        <hr class="dropdown-divider">

                                        <h6 class="dropdown-header">
                                            {{ __('Manage Team') }}
                                        </h6>

                                        <!-- Team Settings -->
                                        <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                            {{ __('Team Settings') }}
                                        </x-jet-dropdown-link>

                                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                            <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                                {{ __('Create New Team') }}
                                            </x-jet-dropdown-link>
                                        @endcan

                                        <hr class="dropdown-divider">

                                        <!-- Team Switcher -->
                                        <h6 class="dropdown-header">
                                            {{ __('Switch Teams') }}
                                        </h6>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-jet-switchable-team :team="$team" />
                                        @endforeach
                                    @endif

                                    <hr class="dropdown-divider">

                                    <!-- Authentication -->
                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                                         onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </x-jet-dropdown-link>
                                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main class="container-fluid  my-5">
            {{ $slot }}
        </main>

        @stack('modals')

        <script src="{{ asset('js/app.js') }}"></script>
        @livewireScripts
        @stack('scripts')
        <script>
            // function allowDrop(ev) {
            //     ev.preventDefault();
            // }
            //
            // function drag(ev) {
            //     ev.dataTransfer.setData("text", ev.target.id);
            // }
            //
            // function drop(ev) {
            //     ev.preventDefault();
            //     var data = ev.dataTransfer.getData("text");
            //     ev.target.appendChild(document.getElementById(data));
            // }
            @yield('js');
        </script>

    </body>
</html>
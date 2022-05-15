<div class="sidebar" data-color="azure" data-background-color="white"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="https://creative-tim.com/" class="simple-text logo-normal">
            {{ __('Movie Industry') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">movie</i>
                    <p>{{ __('Movies') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'actors' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('actors.index') }}">
                    <i class="material-icons">people</i>
                    <p>{{ __('Actors') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'genre' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('genre.index') }}">
                    <i class="material-icons">category</i>
                    <p>{{ __('Genres') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'directors' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('directors.index') }}">
                    <i class="material-icons">attributions</i>
                    <p>{{ __('Directors') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'oscars' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('oscars.index') }}">
                    <i class="material-icons">grade</i>
                    <p>{{ __('Oscars') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'ratings' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('ratings.index') }}">
                    <i class="material-icons">trending_up</i>
                    <p>{{ __('Ratings') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'grades' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('grades.index') }}">
                    <i class="material-icons">reviews</i>
                    <p>{{ __('Grades') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'critics' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('critics.index') }}">
                    <i class="material-icons">rate_review</i>
                    <p>{{ __('Critics') }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>

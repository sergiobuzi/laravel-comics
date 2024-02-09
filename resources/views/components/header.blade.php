<header>
    <nav>
        <a href="#" class="logo">
            <img src="{{ Vite::asset('public/img/dc-logo.png') }}" alt="navbar-logo">
        </a>
        
        <ul id="nav-items">
            @foreach ($links as $link)
                <li >
                    <a href="#">{{$link ["text"]}}</a>
                </li>
            @endforeach   
        </ul>
    </nav>
</header>

<nav class="navbar navbar-expand-lg shadow navbar-light bg-white py-3 bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('logo-feb.png') }}" class="img-fluid me-3" width="50px">
            <img src="{{ asset('logo-spmifeb.png') }}" class="img-fluid me-3" width="50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-5 text-uppercase">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('welcome') ? 'active' : '' }}" aria-current="page" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dokumen
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($penjaminanMutu as $value)
                        <li><a class="dropdown-item text-capitalize" href="{{ route('welcome.dokumen-mutu', $value->id) }}">{{ $value->nama }}</a></li>
                        @endforeach
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('welcome') ? 'active' : '' }}" aria-current="page" href="{{ route('welcome.pengabdian') }}">Pengabdian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('welcome') ? 'active' : '' }}" aria-current="page" href="{{ route('welcome.penelitian') }}">Penelitian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white" aria-current="page" href="{{ route('auth.login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

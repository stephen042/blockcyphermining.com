<nav class="navbar navbar-expand-md navbar-dark text-light bg-primary fixed-top shadow-sm" style="transition: 0.5s all;">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logo.png') }}" title="BlockCypherMinings" style="height: 55px" />
        </a>
        <button class="navbar-toggler" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
        </script>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="blockchain" class="nav-link">Blockchain</a></li>
                <li class="nav-item"><a href="hpc" class="nav-link">HPC</a></li>
                <li class="nav-item"><a href="cryptoinfrastructure" class="nav-link">Crypto-Infrastructure</a>
                </li>
                <li class="nav-item"><a href="ai" class="nav-link">AI</a></li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item"><a href="about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                <li class="nav-item px-3 pr-md-0 py-1 text-light">
                    <select class="selectpicker" data-style="no-select text-light" data-width="80px" id="language"
                        onchange="changeLanguageByButtonClick()">
                        <option value="en" selected
                            data-content="<div class='iti-flag gb d-inline-block mr-2'></div>EN">English</option>
                        <option value="af" data-content="<div class='iti-flag af d-inline-block mr-2'></div>AF">
                            Afrikanns</option>
                        <option value="sq" data-content="<div class='iti-flag al d-inline-block mr-2'></div>SQ">
                            Albanian</option>
                        <option value="ar" data-content="<div class='iti-flag ar d-inline-block mr-2'></div>AR">
                            Arabic</option>
                        <option value="hy" data-content="<div class='iti-flag am d-inline-block mr-2'></div>HY">
                            Armenian</option>
                        <option value="eu" data-content="<div class='iti-flag eu d-inline-block mr-2'></div>EU">
                            Basque</option>
                        <option value="zh-CN" data-content="<div class='iti-flag cn d-inline-block mr-2'></div>zh-CN">
                            Chinese
                            (Mandarin)</option>
                        <option value="da" data-content="<div class='iti-flag de d-inline-block mr-2'></div>DA">
                            Danish</option>
                        <option value="et" data-content="<div class='iti-flag et d-inline-block mr-2'></div>ET">
                            Estonian</option>
                        <option value="fi" data-content="<div class='iti-flag fi d-inline-block mr-2'></div>FI">
                            Finnish</option>
                        <option value="fr" data-content="<div class='iti-flag fr d-inline-block mr-2'></div>FR">
                            French</option>
                        <option value="de" data-content="<div class='iti-flag de d-inline-block mr-2'></div>DE">
                            German</option>
                        <option value="el" data-content="<div class='iti-flag gr d-inline-block mr-2'></div>EL">
                            Greek</option>
                        <option value="he" data-content="<div class='iti-flag il d-inline-block mr-2'></div>HE">
                            Hebrew</option>
                        <option value="hi" data-content="<div class='iti-flag in d-inline-block mr-2'></div>HI">
                            Hindi</option>
                        <option value="id" data-content="<div class='iti-flag id d-inline-block mr-2'></div>ID">
                            Indonesian</option>
                        <option value="ga" data-content="<div class='iti-flag ga d-inline-block mr-2'></div>GA">
                            Irish</option>
                        <option value="it" data-content="<div class='iti-flag it d-inline-block mr-2'></div>IT">
                            Italian</option>
                        <option value="ja" data-content="<div class='iti-flag jp d-inline-block mr-2'></div>JA">
                            Japanese</option>
                        <option value="ko" data-content="<div class='iti-flag kr d-inline-block mr-2'></div>KO">
                            Korean</option>
                        <option value="la" data-content="<div class='iti-flag la d-inline-block mr-2'></div>LA">
                            Latin</option>
                        <option value="pt" data-content="<div class='iti-flag pt d-inline-block mr-2'></div>PT">
                            Portuguese</option>
                        <option value="pa" data-content="<div class='iti-flag pa d-inline-block mr-2'></div>PA">
                            Punjabi</option>
                        <option value="ro" data-content="<div class='iti-flag ro d-inline-block mr-2'></div>RO">
                            Romanian</option>
                        <option value="ru" data-content="<div class='iti-flag ru d-inline-block mr-2'></div>RU">
                            Russian</option>
                        <option value="es" data-content="<div class='iti-flag es d-inline-block mr-2'></div>ES">
                            Spanish</option>
                        <option value="sv" data-content="<div class='iti-flag sv d-inline-block mr-2'></div>SV">
                            Swedish </option>
                        <option value="th" data-content="<div class='iti-flag th d-inline-block mr-2'></div>th">Thai
                        </option>
                        <option value="to" data-content="<div class='iti-flag to d-inline-block mr-2'></div>TO">
                            Tonga</option>
                        <option value="tr" data-content="<div class='iti-flag tr d-inline-block mr-2'></div>tr">
                            Turkish</option>
                    </select>
                </li>
                @if (Auth::check())
                    <li class="nav-item"><a href="{{ route('user.dashboard.view') }}" class="nav-link">Account</a></li>
                    <li class="nav-item"><a href="{{ route('user.logout.view') }}" class="nav-link">Sign out</a></li>
                @elseif (Auth::guest())
                    <li class="nav-item"><a href="register" class="nav-link">Register</a></li>
                    <li class="nav-item"><a href="login" class="nav-link">Log in</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>


<div class="overlay" id="closeMenu"></div>
<div class="account-sidebar udex-collapse shadow-lg" id="mySidebar">

<nav class="navbar bg-white text-dark p-0">
<ul class="nav divider py-3">
    <li class="nav-item"><a href="blockchain" class="nav-link">Blockchain</a></li>
    <li class="nav-item"><a href="hpc" class="nav-link">HPC</a></li>
    <li class="nav-item"><a href="cryptoinfrastructure" class="nav-link">Crypto-Infrastructure</a></li>
    <li class="nav-item"><a href="ai" class="nav-link">AI</a></li>
  </ul>
<ul class="nav divider py-3">
  <li class="nav-item"><a href="register" class="nav-link"><i class="fas fa-user-plus"></i> Create account</a></li>
    <li class="nav-item"><a href="login" class="nav-link"><i class="fas fa-lock"></i> Log in</a></li>	</ul>
<ul class="nav divider py-3">
    <li class="nav-item"><a href="about" class="nav-link">About</a></li>
    <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
  </ul>
</nav>
</div>
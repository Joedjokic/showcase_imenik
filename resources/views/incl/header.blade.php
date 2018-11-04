<header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Imenik</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link {{ Request::is('/')? 'active' : '' }}" href="/">Pocetna</a>
            <a class="nav-link {{ Request::is('grafik')? 'active' : '' }}" href="/grafik">Grafik</a>
            <a class="nav-link {{ Request::is('list')? 'active' : '' }}" href="/list">Lista</a>
            <a class="nav-link {{ Request::is('pretraga')? 'active' : '' }}" href="/pretraga">Pretraga</a>
            <a class="nav-link {{ Request::is('unos')? 'active' : '' }}" href="/unos">Unos</a>
            <a class="nav-link {{ Request::is('mapa')? 'active' : '' }}" href="/mapa">Mapa</a>
          </nav>
        </div>
      </header>
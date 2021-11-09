  <!-- Header -->
  <header id="main_header">
    <nav id="nav" class="flex">
      <ul class="flex column color-theme-3">
        <li><a href="/">Accueil</a></li>
        <li><a href="creations">Mes créations</a></li>
        <li><a href="about">à propos</a></li>
      </ul>
      <div class="round-style"></div>
    </nav>

    <div class="round-style round-style-hamburger"></div>

    <button id="hamburger" type="button">
      <span></span>
    </button>

    <div class=buttons-container>
      <div class="round-style"></div>
      <button id="change-color-theme-button" type="button">
        <img src="<?= $icons["theme"] ?>" title="Changer les couleurs" alt="Changer les couleurs" />
      </button>
    </div>

    <div id="scrollbar-container"></div>
  </header>
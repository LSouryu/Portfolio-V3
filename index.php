<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="asset/CSS/Style-General.css" />
    <link rel="stylesheet" href="asset/CSS/Style-tablettes.css" />
    <link rel="stylesheet" href="asset/CSS/Style-ORDI.css" />
    <script src="asset/JS/Index.js"></script>
    <title>Protfolio-Accueil</title>
  </head>

  <body>

    <!-- ? NAV -->

    <div class="Barre-menu col-12 col-s-12 col-abs">
      <div id="logo" class="col-2 col-s-2">
        <a id="LINK-logo" href="/">
          <img id="IMG-logo" src="asset/IMG/Group 1-logo.png"/>
        </a>
      </div>
      <nav>
        <button class="menu col-2 col-s-2" onclick="AffProj()">
          Project
        </button>
        <button class="menu col-2 col-s-2" onclick="Affcom()">
          Compétence
        </button>
        <button class="menu col-2 col-s-2" onclick="AffProp()">
          A propos
        </button>
        <button class="menu col-2 col-s-2" onclick="AffAcc()">
          Accueil
        </button>
      </nav>
      <div id="logo-2" onclick="Menu()">
        <img id="IMG-Menu" src="asset/IMG/icon _menu icon_.png" />
      </div>
      <div id="Depliant" class="">
          <div class="menu-2 col-2 col-s-2 col-abs" onclick="AffAcc()"> Accueil </div>
          <div class="menu-2 col-2 col-s-2 col-abs" onclick="AffProp()"> A propos </div>
          <div class="menu-2 col-2 col-s-2 col-abs" onclick="Affcom()"> Compétence </div>
          <div class="menu-2 col-2 col-s-2 col-abs" onclick="AffProj()"> Project </div>
      </div>
    </div>

    <!-- ? ACCUEIL -->

    <section id="Section-Accueil-1" class="col-4 col-s-10 col-abs">
      <div class="Div-texte-accueil-1">
        <p class="Texte-accueil-1">ALLARY NATHAN</p>
      </div>
    </section>
    <section id="Section-Accueil-2" class="col-10 col-s-10 col-abs">
      <div class="Div-texte-accueil-2">
        <p class="Texte-accueil-2">Developpeur Web Full Stack</p>
      </div>
    </section>

    <!-- ? A PROPOS -->

    <section id="Section-A-Propos" class="col-6 col-s-10 col-abs">
      <div class="Div-A-Propos">
        <p class="Texte-A-Propos">D'apres Nathan Allary,</p>
        <p class="Texte-A-Propos">
          il est écrit que seul link peut vaincre ganon !
        </p>
        <p class="Texte-A-Propos">
          et que tout korok doit bruler sur un buché !
        </p>
      </div>
    </section>

    <!-- ? Compétence -->

    <section id="Section-Compétence-Ensemble" class="col-12 col-s-12 col-abs">
      <div class="Div-Comp-Ens">
        <p class="Texte-Comp-Ens">Langage Utilisé :</p>
      </div>
    </section>
    <div class="Div-Comp-1 col-6 col-s-12 col-abs">
      <img id="Icon-html" src="asset/IMG/icon _html 5_.png"/>
      <p class="Texte-Comp">50%</p>
    </div>
    <div class="Div-Comp-2 col-6 col-s-12 col-abs">
      <img id="Icon-css" src="asset/IMG/icon _css 3_.png"/>
      <p class="Texte-Comp">50%</p>
    </div>
    <div class="Div-Comp-3 col-6 col-s-12 col-abs">
      <img id="Icon-JS" src="asset/IMG/icon _Javascript (JS)_.png"/>
      <p class="Texte-Comp">2%</p>
    </div>
    <div class="Div-Comp-4 col-6 col-s-12 col-abs">
      <img id="Icon-php" src="asset/IMG/icon _file type php_.png"/>
      <p class="Texte-Comp">2%</p>
    </div>
    <div class="vide col-6 col-s-12 col-abs"></div>

    <!-- ? PROJECT -->

    <section id="Section-Project" class="col-12 col-s-12 col-abs">
      <div class="Div-Project">
        <p class="Texte-Project">Project :</p>
      </div>
    </section>
    <div id="Div-Project-Gen-1" class="col-12 col-s-12 col-abs">
      <div class="Div-Project-1 col-5 col-s-12 col-abs">
        <p class="Texte-Project-1">Project 1 : Portfolio</p>
        <p class="Texte-Project-1">*Indice : tu est deja dedans</p>
      </div>
      <div class="Div-Project-2 col-5 col-s-12 col-abs">
        <p class="Texte-Project-2">Project 2 : Test</p>
        <p class="Texte-Project-2">*Indice : C'est un test</p>
      </div>
      <div class="scroller col-5 col-s-12 col-abs">
        <div id="Div-Project-Reflect-1" class="col-11 col-s-12 col-abs" onclick="P1()">
          <p>project 1</p>
        </div>
        <div id="Div-Project-Reflect-2" class="col-11 col-s-12 col-abs" onclick="P2()">
          <p>project 2</p>
        </div>
      </div>
    </div>

    <!-- ? FOOTER -->

    <footer class="col-12 col-s-12 col-abs">
      <div id="Email">
        <img id="IMG-Email" src="asset/IMG/VectorEmail.png"/>
        <p id="txt-Email">n.allary@hotmail.com</p>
      </div>
      <div id="Linkedin">
        <a id="LINK-linkedin" href="https://www.linkedin.com/in/nathan-allary-66a12a284/" target="_blanc">
          <img id="IMG-linkedin" src="asset/IMG/LinkedIn-linkedin.png"/>
        </a>
      </div>
      <div id="Github">
        <a id="LINK-Github" href="https://github.com/LSouryu" target="_blank">
          <img id="IMG-Github" src="asset/IMG/icon _mark github_-Github.png"/>
        </a>
      </div>
    </footer>
  </body>
</html>

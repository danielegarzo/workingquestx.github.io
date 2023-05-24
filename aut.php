<!DOCTYPE html>
<html>
<head>
  <title>Accesso al sito</title>
  <script>
    // Funzione per controllare lo stato di accesso
    function checkLoginStatus() {
      // Effettua qui una chiamata o verifica per verificare lo stato di accesso
      var isLoggedIn = /* Aggiungi qui la logica per verificare lo stato di accesso */;

      if (isLoggedIn) {
        // L'utente ha effettuato l'accesso, abilita la funzionalità desiderata
        enableFeature();
      } else {
        // L'utente non ha effettuato l'accesso, disabilita la funzionalità
        disableFeature();
      }
    }

    // Funzione per abilitare la funzionalità
    function enableFeature() {
      // Abilita qui la funzionalità desiderata, ad esempio mostrando un elemento
      document.getElementById("feature").style.display = "block";
    }

    // Funzione per disabilitare la funzionalità
    function disableFeature() {
      // Disabilita qui la funzionalità desiderata, ad esempio nascondendo un elemento
      document.getElementById("feature").style.display = "none";
    }
  </script>
</head>
<body onload="checkLoginStatus()">
  <h1>Il mio sito web</h1>

  <div id="feature">
    <!-- Contenuto della funzionalità che sarà abilitata solo se l'utente ha effettuato l'accesso -->
    <p>Benvenuto! Questa è la funzionalità abilitata dopo l'accesso.</p>
  </div>
</body>
</html>
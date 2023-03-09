<?php

  // Siistitään polku urlin alusta ja mahdolliset parametrit urlin lopusta.
  // Siistimisen jälkeen osoite /~koodaaja/lanify/tapahtuma?id=1 on 
  // lyhentynyt muotoon /tapahtuma.
  $request = str_replace('/~knykanen/sijoituskone','',$_SERVER['REQUEST_URI']);
  $request = strtok($request, '?');

  // Selvitetään mitä sivua on kutsuttu ja suoritetaan sivua vastaava 
  // käsittelijä.
  if ($request === '/' || $request === '/tuloslaskelma') {
    echo '<h1>Yrityksen tuloslaskelmatiedot</h1>';
  } else if ($request === '/sijoitukset') {
    echo '<h1>Yrityksen tuottojen sijoitus</h1>';
  } else {
    echo '<h1>Pyydettyä sivua ei löytynyt :(</h1>';
  }

?> 

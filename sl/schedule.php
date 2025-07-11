<?php

return [
  'email' => 
  [
    'provider_subject' => 'Nova lekcija načrtovana',
    'provider_body' => 'Uporabnik :first_name je načrtoval lekcijo. Poskrbite, da se boste vnaprej obrnili na uporabnika, da boste delili lokacijo lekcije.',
    'customer_subject' => 'Nova lekcija načrtovana',
    'customer_body' => 'Načrtovali ste novo lekcijo. Učitelj vas bo kontaktiral glede lokacije lekcije.',
  ],
  'chat' => 
  [
    'message' => 'Novo srečanje je rezervirano za predmet :post_title na datum :date_time',
  ],
  'confirmation_message' => 'Potrdite datum in čas lekcije. Učitelj vam bo poslal sporočilo o lokaciji ali povezavi do vaše načrtovane lekcije.',
  'no_availabilities' => 'Za izbrani datum ni na voljo razpoložljivih ur. Izberite drug datum.',
];

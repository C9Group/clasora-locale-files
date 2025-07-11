<?php

return [
  'email' => 
  [
    'provider_subject' => 'Zakazan novi čas',
    'provider_body' => 'Korisnik :first_name je zakazao vaš čas. Molimo vas da unapred kontaktirate korisnika i podelilite lokaciju časa.',
    'customer_subject' => 'Zakazan novi čas',
    'customer_body' => 'Zakazali ste novi čas. Predavač će vas kontaktirati u vezi sa lokacijom časa.',
  ],
  'chat' => 
  [
    'message' => 'Novi termin zakazan za predmet :post_title na datum :date_time',
  ],
  'confirmation_message' => 'Molimo potvrdite datum i vreme časa. Predavač će vam poslati poruku o lokaciji ili linku za zakazani čas.',
  'no_availabilities' => 'Nema dostupnih termina za izabrani datum. Molimo izaberite drugi datum.',
];

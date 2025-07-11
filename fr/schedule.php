<?php

return [
  'email' => 
  [
    'provider_subject' => 'Nouveau cours programmé',
    'provider_body' => 'L\'utilisateur :first_name a programmé un cours. Veillez à contacter l\'utilisateur à l\'avance pour lui communiquer le lieu du cours.',
    'customer_subject' => 'Nouveau cours programmé',
    'customer_body' => 'Vous avez programmé un nouveau cours. Le tuteur vous contactera pour vous indiquer le lieu du cours.',
  ],
  'chat' => 
  [
    'message' => 'Nouveau rendez-vous pris pour :post_title le :date_time',
  ],
  'confirmation_message' => 'Veuillez confirmer la date et l\'heure du cours. Le professeur vous enverra un message pour vous indiquer le lieu ou le lien vers votre cours programmé.',
  'no_availabilities' => 'Il n\'y a pas de disponibilité pour la date choisie. Veuillez choisir une autre date.',
];

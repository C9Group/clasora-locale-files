<?php

return [
  'email' => 
  [
    'provider_subject' => 'Nueva lección programada',
    'provider_body' => 'Usuario: first_name programó una lección. Asegúrese de comunicarse con el usuario con anticipación para compartir la ubicación de la lección.',
    'customer_subject' => 'Nueva lección programada',
    'customer_body' => 'Has programado una nueva lección. El tutor se pondrá en contacto contigo para informarte sobre la ubicación de la lección.',
  ],
  'chat' => 
  [
    'message' => 'Nueva cita reservada para :post_title el :date_time',
  ],
  'confirmation_message' => 'Por favor confirme la fecha y hora de la lección. El maestro le enviará un mensaje sobre la ubicación o el enlace a su lección programada.',
  'no_availabilities' => 'No hay horas de cita disponibles para la fecha seleccionada. Por favor elija otra fecha.',
];

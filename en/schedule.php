<?php

return [
  'email' => 
  [
    'provider_subject' => 'New lesson scheduled',
    'provider_body' => 'User :first_name scheduled a lesson. Please make sure to contact the user in advance to share location of the lesson.',
    'customer_subject' => 'New lesson scheduled',
    'customer_body' => 'You scheduled a new lesson. Tutor will contact you regarding location of the lesson.',
  ],
  'chat' => 
  [
    'message' => 'New appointment booked for :post_title on :date_time',
  ],
  'confirmation_message' => 'Please confirm the date and time of the lesson. Teacher will message you about location or link to your scheduled lesson.',
  'no_availabilities' => 'There are no available appointment hours for the selected date. Please choose another date.',
];

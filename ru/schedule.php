<?php

return [
  'email' => 
  [
    'provider_subject' => 'Запланирован новый урок',
    'provider_body' => 'Пользователь :first_name запланировал урок. Пожалуйста, свяжитесь с пользователем заранее, чтобы сообщить место проведения урока.',
    'customer_subject' => 'Запланирован новый урок',
    'customer_body' => 'Вы запланировали новый урок. Преподаватель свяжется с вами относительно места проведения урока.',
  ],
  'chat' => 
  [
    'message' => 'Новая запись для :post_title, забронирована на :date_time',
  ],
  'confirmation_message' => 'Пожалуйста, подтвердите дату и время урока. Преподаватель свяжется с вами по поводу места проведения или ссылки на ваш запланированный урок.',
  'no_availabilities' => 'Нет доступных часов для выбранной даты. Пожалуйста, выберите другую дату.',
];

<?php

return [
  'validation' => 
  [
    'subject_id' => 'Już wysłałeś post dla tego przedmiotu.',
    'description' => 
    [
      'required' => 'Pole opisu jest wymagane dla każdego języka.',
      'string' => 'Opis musi być ciągiem znaków dla każdego języka.',
      'min' => 'Opis musi mieć co najmniej :chars znaków.',
    ],
    'city' => 
    [
      'required_if' => 'Pole miasto jest wymagane, gdy wybrane jest spotkanie osobiste.',
    ],
    'country' => 
    [
      'required_if' => 'Pole kraj jest wymagane, gdy wybrane jest spotkanie osobiste.',
    ],
    'video' => 
    [
      'file' => 'Wideo musi być plikiem.',
      'mimes' => 'Wideo musi być plikiem typu: mp4, avi, mov, wmv.',
      'max' => 'Wideo nie może być większe niż :size MB.',
    ],
  ],
  'final' => 
  [
    'title' => 
    [
      'welcome' => 'Prawie gotowe!',
      'question' => 'Co dalej?',
    ],
    'description' => 
    [
      'welcome' => 'Dziękujemy za przesłanie! Obecnie sprawdzamy twój post, aby upewnić się, że wszystko spełnia nasze wytyczne.',
      'approve' => 'Nasz zespół wkrótce zatwierdzi twój post.',
      'notification' => 'Otrzymasz powiadomienie, gdy zostanie opublikowany!',
      'questions' => 'Jeśli masz jakieś pytania lub potrzebujesz pomocy, śmiało się odezwij.',
      'thank_you_note' => 'Dziękujemy za cierpliwość!',
    ],
    'go' => 
    [
      'to' => 
      [
        'dashboard' => 'Przejdź do panelu',
      ],
    ],
  ],
  'header' => 
  [
    'step1' => 
    [
      'heading' => 'Wprowadź informacje o poście',
      'description' => 'Szczegóły dotyczące przedmiotu i języków',
    ],
    'step2' => 
    [
      'heading' => 'Napisz opis',
      'desctiption' => 'Przetłumacz opis postu',
    ],
    'step3' => 
    [
      'heading' => 'Lokalizacja i cena',
      'desctiption' => 'Określ lokalizację lekcji i cennik',
    ],
    'step4' => 
    [
      'heading' => 'Prezentacja wideo',
      'desctiption' => 'Prezentacja wideo twojej klasy',
    ],
  ],
  'step' => 
  [
    'title' => 'Utwórz nowy post',
    'description' => 'Zanim zaczniesz uczyć na naszej platformie, musisz powiedzieć nam, jaki jest przedmiot twojej klasy, jakie języki mówisz i kilka innych informacji. Proszę wypełnij poniższe informacje.',
    'pause_button' => 'Wstrzymaj post',
    'resume_button' => 'Wznów post',
  ],
  'step1' => 
  [
    'title' => 'Informacje o poście',
    'subject' => 
    [
        'title' => 'Wybierz przedmiot, który nauczasz',
        'description' => 'Jeśli przedmiot, który nauczasz, nie jest wymieniony, skontaktuj się z nami przez',
        'select' => 'Wybierz przedmiot',
    ],
    'choose' => 'Wybierz',
    'choosen' => 'Wybrany',
    'remove' => 'Usuń',
    'tags' => 
    [
      'select' => 'Wybierz tagi',
      'description' => 'Proszę wybrać odpowiednie tagi, które Twoim zdaniem najlepiej pasują do twojej klasy',
      'suggest' => 
      [
        'description' => 'Jeśli masz na myśli inne tagi, które nie są wymienione, możesz je zasugerować jako wartości oddzielone przecinkami. Twój wkład jest zawsze doceniany!',
        'title' => 'Zasugeruj nowe tagi',
      ],
      'suggestions' => 'Sugerowany Tag1, Sugerowany Tag2',
    ],
    'languages' => 
    [
      'title' => 'Wybierz języki, w których nauczasz przedmiotu',
      'description' => 'Proszę wybrać wszystkie języki, w których czujesz się komfortowo nauczając przedmiotu. Możesz wybrać więcej niż jeden język',
      'select' => 'Wybierz języki',
    ],
    'save' => 
    [
      'continue' => 'Zapisz i Kontynuuj',
    ],
  ],
  'step2' => 
  [
    'title' => 'Napisz opis',
    'info' => 'Proszę nie podawać numeru telefonu ani linków do stron internetowych',
    'description' => 'Przedstaw się krótko, wspominając o swoich kwalifikacjach i doświadczeniu w nauczaniu. Opisz, jak zorganizowane są twoje lekcje i jaki jest twój styl nauczania. Wyjaśnij, co uczniowie osiągną lub nauczą się z twoich zajęć.',
    'message' => 
    [
      'warning' => 'Proszę wprowadzić co najmniej :chars znaków',
    ],
    'write' => 
    [
      'description' => 'Napisz opis w',
      'placeholder' => 'Wprowadź opis',
    ],
    'post' => 
    [
      'information' => 'Informacje o poście',
    ],
    'save' => 
    [
      'continue' => 'Zapisz i Kontynuuj',
    ],
  ],
  'step3' => 
  [
    'title' => 'Lokalizacja i cena',
    'subtitle' => 'Lokalizacja',
    'online' => 'Czy zajęcia są online:',
    'yes' => 'Tak',
    'no' => 'Nie',
    'in_person' => 'Czy zajęcia są osobiste:',
    'duration' => 
    [
      'description' => 'Ustaw czas trwania swojej klasy (minuty)',
      'title' => 'Czas trwania',
      'placeholder' => 'Wprowadź czas trwania',
    ],
    'price' => 
    [
      'description' => 'Ustaw cenę za swoją klasę',
      'title' => 'Cena',
      'placeholder' => 'Wprowadź cenę',
    ],
    'currency' => 
    [
      'description' => 'Wybierz walutę dla swojej klasy',
      'title' => 'Waluta',
      'select' => 'Wybierz walutę',
    ],
    'choose' => 'Wybierz',
    'submit' => 
    [
      'post' => 'Wyślij post',
    ],
    'description' => 'Opis',
    'country' => 
    [
      'title' => 'Kraj',
      'placeholder' => 'Wprowadź kraj',
    ],
    'city' => 
    [
      'title' => 'Miasto',
      'placeholder' => 'Wprowadź miasto',
    ],
    'continue' => 'Zapisz i Kontynuuj',
  ],
  'step4' => 
  [
    'video' => 
    [
      'description' => 'Zaprezentuj swoją klasę w angażującym filmie',
      'title' => 'Prezentacja wideo klasy',
      'choose' => 'Wybierz Wideo',
      'change' => 'Zmień Wideo',
      'selected' => 'Wybrane Wideo',
      'size' => 'Rozmiar wideo nie powinien przekraczać :size MB',
    ],
    'title' => 'Prezentacja wideo',
    'submit' => 
    [
      'post' => 'Wyślij Post',
    ],
  ],
  'edit_step' => 
  [
    'title' => 'Edytuj post',
    'subject'=> [
      'no_selected' => 'Nie wybrano przedmiotu',
    ],
    'request' => 'Poproś o zmiany',
  ],
];

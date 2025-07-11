<?php

return [
  'step2' => 
  [
    'write' => 
    [
      'placeholder' => 'Unesite opis',
      'description' => 'Napišite opis na jeziku:',
    ],
    'title' => 'Napišite opis',
    'info' => 'Molimo da ne uključujete svoj broj telefona ili linkove ka veb sajtovima',
    'description' => 'Ukratko se predstavite, navedite svoje kvalifikacije i iskustvo u nastavi. Opišite kako su organizovani vaši časovi i kakav je vaš stil predavanja. Objasnite šta će studenti postići ili naučiti tokom vaših časova.',
    'message' => 
    [
      'warning' => 'Unesete najmanje :chars karaktera',
    ],
    'post' => 
    [
      'information' => 'Informacije o oglasu',
    ],
    'save' => 
    [
      'continue' => 'Sačuvaj i nastavi',
    ],
  ],
  'step3' => 
  [
    'duration' => 
    [
      'placeholder' => 'Unesite trajanje',
      'description' => 'Postavite trajanje časa (minuta)',
      'title' => 'Trajanje',
    ],
    'price' => 
    [
      'placeholder' => 'Unesite cenu',
      'description' => 'Postavite cenu časa',
      'title' => 'Cena',
    ],
    'city' => 
    [
      'title' => 'Grad',
      'placeholder' => 'Unesite grad',
    ],
    'title' => 'Lokacija i cena',
    'subtitle' => 'Lokacija',
    'online' => 'Da li je čas online:',
    'yes' => 'Da',
    'no' => 'Ne',
    'in_person' => 'Da li je čas uživo:',
    'currency' => 
    [
      'description' => 'Odaberite valutu plaćanja',
      'title' => 'Valuta',
      'select' => 'Odaberite valutu',
    ],
    'choose' => 'Odaberite',
    'submit' => 
    [
      'post' => 'Pošaljite oglas',
    ],
    'description' => 'Opis',
    'country' => 
    [
      'title' => 'Država',
      'placeholder' => 'Unesite državu',
    ],
  ],
  'validation' => 
  [
    'subject_id' => 'Već ste poslali oglas za ovaj predmet.',
    'description' => 
    [
      'required' => 'Opis je obavezan za svaki jezik.',
      'string' => 'Opis mora biti string za svaki jezik.',
      'min' => 'Opis mora imati najmanje :chars karaktera.',
    ],
    'city' => 
    [
      'required_if' => 'Grad je obavezno polje kada se čas održava uživo.',
    ],
    'country' => 
    [
      'required_if' => 'Država je obavezno polje kada se čas održava uživo.',
    ],
  ],
  'final' => 
  [
    'title' => 
    [
      'welcome' => 'Još samo malo!',
      'question' => 'Koji su sledeći koraci?',
    ],
    'description' => 
    [
      'welcome' => 'Zahvaljujemo Vam se na podnošenju zahteva za kreiranje oglasa! U toku je pregledanje oglasa i provera ispunjenosti naših uslova koji se odnose na neophodne podatke.',
      'approve' => 'Naš tim će uskoro pregledati oglas.',
      'notification' => 'Dobićete obaveštenje na email kada oglas bude dostupan na platformi!',
      'questions' => 'Ukoliko imate dodatnih pitanja ili Vam zatreba pomoć, slobodno nas kontaktirajte.',
      'thank_you_note' => 'Hvala na razumevanju i strpljenju!',
    ],
    'go' => 
    [
      'to' => 
      [
        'dashboard' => 'Idi na Dashboard',
      ],
    ],
  ],
  'header' => 
  [
    'step1' => 
    [
      'heading' => 'Unesite informacije o oglasu',
      'description' => 'Detalji o predmetu i jezicima',
    ],
    'step2' => 
    [
      'heading' => 'Napišite opis',
      'desctiption' => 'Prevedite opis oglasa',
    ],
    'step3' => 
    [
      'heading' => 'Lokacija i Cena',
      'desctiption' => 'Navedite lokaciju i cenu časa',
    ],
  ],
  'step' => 
  [
    'title' => 'Kreiraj novi oglas',
    'description' => 'Pre nego što počnete da predajete na našoj platformi, potrebno je da nam kažete koji predmet predajete, jezike koje govorite i neke druge informacije. Molimo vas da popunite informacije u nastavku.',
  ],
  'step1' => 
  [
    'title' => 'Informacije o oglasu',
    'subject' => 
    [
      'title' => 'Odaberite predmet koji predajete',
      'description' => 'Ako predmet koji predajete nije na listi, molimo da nas kontaktirate putem e-maila',
      'select' => 'Odaberite predmet',
    ],
    'choose' => 'Odaberite',
    'choosen' => 'Odabrano',
    'remove' => 'Obrišite',
    'tags' => 
    [
      'select' => 'Odaberite tagove',
      'description' => 'Odaberete relevantne tagove koje smatrate da najbolje odgovaraju vašem času',
      'suggest' => 
      [
        'description' => 'Ukoliko želite da predložite nove tagove, slobodno ih unesite kao vrednosti odvojene zarezom. Vaši predlozi su uvek dobrodošli!',
        'title' => 'Predložite nove tagove',
      ],
      'suggestions' => 'Preporučen tag1, Preporučen tag2',
    ],
    'languages' => 
    [
      'title' => 'Odaberite jezike na kojima želite da predajete',
      'description' => 'Možete izabrati više od jednog jezika',
      'select' => 'Odaberite jezike',
    ],
    'save' => 
    [
      'continue' => 'Sačuvaj i nastavi',
    ],
  ],
];

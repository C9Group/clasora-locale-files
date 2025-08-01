<?php

return [
  'validation' => 
  [
    'subject_id' => 'Za ta predmet ste že oddali objavo.',
    'description' => 
    [
      'required' => 'Polje opisa je obvezno za vsak jezik.',
      'string' => 'Opis mora biti niz za vsak jezik.',
      'min' => 'Opis mora biti dolg najmanj :chars znakov.',
    ],
    'city' => 
    [
      'required_if' => 'Polje mesta je obvezno, ko je izbrano osebno.',
    ],
    'country' => 
    [
      'required_if' => 'Polje države je obvezno, ko je izbrano osebno.',
    ],
    'video' => 
    [
      'file' => 'Video mora biti datoteka.',
      'mimes' => 'Video mora biti datoteka tipa: mp4, avi, mov, wmv.',
      'max' => 'Video ne sme biti večji od :size MB.',
    ],
  ],
  'final' => 
  [
    'title' => 
    [
      'welcome' => 'Skoraj smo tam!',
      'question' => 'Kaj sledi?',
    ],
    'description' => 
    [
      'welcome' => 'Hvala za vašo prijavo! Trenutno pregledujemo vašo objavo, da zagotovimo, da vse izpolnjuje naše smernice.',
      'approve' => 'Naša ekipa bo kmalu odobrila vašo objavo.',
      'notification' => 'Prejeli boste obvestilo, ko bo objavljena!',
      'questions' => 'Če imate kakšna vprašanja ali potrebujete pomoč, se obrnite na nas.',
      'thank_you_note' => 'Hvala za potrpežljivost!',
    ],
    'go' => 
    [
      'to' => 
      [
        'dashboard' => 'Pojdi na nadzorno ploščo',
      ],
    ],
  ],
  'header' => 
  [
    'step1' => 
    [
      'heading' => 'Vnesite informacije objave',
      'description' => 'Podrobnosti o predmetu in jezikih',
    ],
    'step2' => 
    [
      'heading' => 'Napišite opis',
      'desctiption' => 'Prevedite opis objave',
    ],
    'step3' => 
    [
      'heading' => 'Lokacija in cena',
      'desctiption' => 'Določite lokacijo učne ure in cene',
    ],
    'step4' => 
    [
      'heading' => 'Video predstavitev',
      'desctiption' => 'Video predstavitev vašega razreda',
    ],
  ],
  'step' => 
  [
    'title' => 'Ustvari novo objavo',
    'description' => 'Preden začnete poučevati na naši platformi, nam morate povedati, kakšen je predmet vašega razreda, katere jezike govorite in nekaj drugih informacij. Prosimo, izpolnite spodnje informacije.',
    'pause_button' => 'Začasno ustavi objavo',
    'resume_button' => 'Nadaljuj objavo',
  ],
  'step1' => 
  [
    'title' => 'Informacije objave',
    'subject' => 
    [
      'title' => 'Izberite predmet, ki ga poučujete',
      'description' => 'Če predmet, ki ga poučujete, ni naveden, nas prosim kontaktirajte preko',
      'select' => 'Izberite predmet',
    ],
    'choose' => 'Izberi',
    'choosen' => 'Izbrano',
    'remove' => 'Odstrani',
    'tags' => 
    [
      'select' => 'Izberite oznake',
      'description' => 'Prosimo, izberite ustrezne oznake, za katere mislite, da se najbolje ujemajo z vašim razredom',
      'suggest' => 
      [
        'description' => 'Če imate v mislih druge oznake, ki niso navedene, jih prosim predlagajte kot vrednosti, ločene z vejicami. Vaš prispevek je vedno cenjen!',
        'title' => 'Predlagajte nove oznake',
      ],
      'suggestions' => 'Predlagana oznaka1, Predlagana oznaka2',
    ],
    'languages' => 
    [
      'title' => 'Izberite jezike, v katerih poučujete predmet',
      'description' => 'Prosimo, izberite vse jezike, v katerih se počutite udobno pri poučevanju predmeta. Lahko izberete več kot en jezik',
      'select' => 'Izberite jezike',
    ],
    'save' => 
    [
      'continue' => 'Shrani in nadaljuj',
    ],
  ],
  'step2' => 
  [
    'title' => 'Napišite opis',
    'info' => 'Prosimo, ne vključujte svoje telefonske številke ali povezav do spletnih strani',
    'description' => 'Kratko se predstavite, omenite svoje kvalifikacije in izkušnje s poučevanjem. Opišite, kako so organizirane vaše učne ure in vaš slog poučevanja. Razložite, kaj bodo študenti dosegli ali se naučili v vaših razredih.',
    'message' => 
    [
      'warning' => 'Prosimo, vnesite najmanj :chars znakov',
    ],
    'write' => 
    [
      'description' => 'Napišite opis v',
      'placeholder' => 'Vnesite opis',
    ],
    'post' => 
    [
      'information' => 'Informacije objave',
    ],
    'save' => 
    [
      'continue' => 'Shrani in nadaljuj',
    ],
  ],
  'step3' => 
  [
    'title' => 'Lokacija in cena',
    'subtitle' => 'Lokacija',
    'online' => 'Je razred spletni:',
    'yes' => 'Da',
    'no' => 'Ne',
    'in_person' => 'Je razred osebno:',
    'duration' => 
    [
      'description' => 'Nastavite trajanje vašega razreda (minute)',
      'title' => 'Trajanje',
      'placeholder' => 'Vnesite trajanje',
    ],
    'price' => 
    [
      'description' => 'Nastavite ceno za vaš razred',
      'title' => 'Cena',
      'placeholder' => 'Vnesite ceno',
    ],
    'currency' => 
    [
      'description' => 'Izberite valuto za vaš razred',
      'title' => 'Valuta',
      'select' => 'Izberite valuto',
    ],
    'choose' => 'Izberi',
    'submit' => 
    [
      'post' => 'Oddaj objavo',
    ],
    'description' => 'Opis',
    'country' => 
    [
      'title' => 'Država',
      'placeholder' => 'Vnesite državo',
    ],
    'city' => 
    [
      'title' => 'Mesto',
      'placeholder' => 'Vnesite mesto',
    ],
    'continue' => 'Shrani in nadaljuj',
  ],
  'step4' => 
  [
    'video' => 
    [
      'description' => 'Predstavite svoj razred v privlačnem videoposnetku',
      'title' => 'Video predstavitev razreda',
      'choose' => 'Izberite video',
      'change' => 'Spremeni video',
      'selected' => 'Izbrani video',
      'size' => 'Velikost videa ne sme presegati :size MB',
    ],
    'title' => 'Video predstavitev',
    'submit' => 
    [
      'post' => 'Oddaj objavo',
    ],
  ],
  'edit_step' => 
  [
    'title' => 'Uredi objavo',
    'subject'=> [
      'no_selected' => 'Noben predmet ni izbran',
    ],
    'request' => 'Zahtevaj spremembe',
  ],
];

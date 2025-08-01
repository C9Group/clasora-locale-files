<?php

return [
  'validation' => 
  [
    'subject_id' => 'Sie haben bereits einen Beitrag für dieses Fach eingereicht.',
    'description' => 
    [
      'required' => 'Das Beschreibungsfeld ist für jede Sprache erforderlich.',
      'string' => 'Die Beschreibung muss für jede Sprache ein String sein.',
      'min' => 'Die Beschreibung muss mindestens :chars Zeichen lang sein.',
    ],
    'city' => 
    [
      'required_if' => 'Das Stadtfeld ist erforderlich, wenn Präsenzunterricht ausgewählt ist.',
    ],
    'country' => 
    [
      'required_if' => 'Das Länderfeld ist erforderlich, wenn Präsenzunterricht ausgewählt ist.',
    ],
    'video' => 
    [
      'file' => 'Das Video muss eine Datei sein.',
      'mimes' => 'Das Video muss eine Datei vom Typ: mp4, avi, mov, wmv sein.',
      'max' => 'Das Video darf nicht größer als :size MB sein.',
    ],
  ],
  'final' => 
  [
    'title' => 
    [
      'welcome' => 'Fast geschafft!',
      'question' => 'Was kommt als Nächstes?',
    ],
    'description' => 
    [
      'welcome' => 'Vielen Dank für Ihre Einreichung! Wir überprüfen gerade Ihren Beitrag, um sicherzustellen, dass alles unseren Richtlinien entspricht.',
      'approve' => 'Unser Team wird Ihren Beitrag in Kürze genehmigen.',
      'notification' => 'Sie erhalten eine Benachrichtigung, sobald er online ist!',
      'questions' => 'Wenn Sie Fragen haben oder Hilfe benötigen, zögern Sie nicht, uns zu kontaktieren.',
      'thank_you_note' => 'Vielen Dank für Ihre Geduld!',
    ],
    'go' => 
    [
      'to' => 
      [
        'dashboard' => 'Zum Dashboard',
      ],
    ],
  ],
  'header' => 
  [
    'step1' => 
    [
      'heading' => 'Beitragsinformationen eingeben',
      'description' => 'Details über das Fach und die Sprachen',
    ],
    'step2' => 
    [
      'heading' => 'Beschreibung schreiben',
      'desctiption' => 'Beitragsbeschreibung übersetzen',
    ],
    'step3' => 
    [
      'heading' => 'Ort und Preis',
      'desctiption' => 'Unterrichtsort und Preisgestaltung angeben',
    ],
    'step4' => 
    [
      'heading' => 'Video-Präsentation',
      'desctiption' => 'Video-Präsentation Ihres Kurses',
    ],
  ],
  'step' => 
  [
    'title' => 'Neuen Beitrag erstellen',
    'description' => 'Bevor Sie auf unserer Plattform unterrichten können, müssen Sie uns mitteilen, was das Thema Ihres Kurses ist, welche Sprachen Sie sprechen und einige andere Informationen. Bitte füllen Sie die folgenden Informationen aus.',
    'pause_button' => 'Beitrag pausieren',
    'resume_button' => 'Beitrag fortsetzen',
  ],
  'step1' => 
  [
    'title' => 'Beitragsinformationen',
    'subject' => 
    [
      'title' => 'Wählen Sie das Fach aus, das Sie unterrichten',
      'description' => 'Wenn das Fach, das Sie unterrichten, nicht aufgeführt ist, kontaktieren Sie uns bitte über',
      'select' => 'Fach auswählen',
    ],
    'choose' => 'Auswählen',
    'choosen' => 'Ausgewählt',
    'remove' => 'Entfernen',
    'tags' => 
    [
      'select' => 'Tags auswählen',
      'description' => 'Bitte wählen Sie relevante Tags aus, die Ihrer Meinung nach am besten zu Ihrem Kurs passen',
      'suggest' => 
      [
        'description' => 'Wenn Sie andere Tags im Kopf haben, die nicht aufgeführt sind, können Sie diese gerne als kommagetrennte Werte vorschlagen. Ihre Eingabe wird immer geschätzt!',
        'title' => 'Neue Tags vorschlagen',
      ],
      'suggestions' => 'Vorgeschlagener Tag1, Vorgeschlagener Tag2',
    ],
    'languages' => 
    [
      'title' => 'Wählen Sie die Sprachen aus, in denen Sie das Fach unterrichten',
      'description' => 'Bitte wählen Sie alle Sprachen aus, in denen Sie sich beim Unterrichten des Fachs wohl fühlen. Sie können mehr als eine Sprache auswählen',
      'select' => 'Sprachen auswählen',
    ],
    'save' => 
    [
      'continue' => 'Speichern & Fortfahren',
    ],
  ],
  'step2' => 
  [
    'title' => 'Beschreibung schreiben',
    'info' => 'Bitte geben Sie keine Telefonnummer oder Website-Links an',
    'description' => 'Stellen Sie sich kurz vor und erwähnen Sie Ihre Qualifikationen und Unterrichtserfahrung. Beschreiben Sie, wie Ihre Stunden organisiert sind und Ihren Unterrichtsstil. Erklären Sie, was die Schüler in Ihren Kursen erreichen oder lernen werden.',
    'message' => 
    [
      'warning' => 'Bitte geben Sie mindestens :chars Zeichen ein',
    ],
    'write' => 
    [
      'description' => 'Beschreibung schreiben in',
      'placeholder' => 'Beschreibung eingeben',
    ],
    'post' => 
    [
      'information' => 'Beitragsinformationen',
    ],
    'save' => 
    [
      'continue' => 'Speichern & Fortfahren',
    ],
  ],
  'step3' => 
  [
    'title' => 'Ort und Preis',
    'subtitle' => 'Ort',
    'online' => 'Ist der Kurs online:',
    'yes' => 'Ja',
    'no' => 'Nein',
    'in_person' => 'Ist der Kurs in Person:',
    'duration' => 
    [
      'description' => 'Legen Sie die Dauer Ihres Kurses fest (Minuten)',
      'title' => 'Dauer',
      'placeholder' => 'Dauer eingeben',
    ],
    'price' => 
    [
      'description' => 'Legen Sie den Preis für Ihren Kurs fest',
      'title' => 'Preis',
      'placeholder' => 'Preis eingeben',
    ],
    'currency' => 
    [
      'description' => 'Wählen Sie die Währung für Ihren Kurs',
      'title' => 'Währung',
      'select' => 'Währung auswählen',
    ],
    'choose' => 'Auswählen',
    'submit' => 
    [
      'post' => 'Beitrag einreichen',
    ],
    'description' => 'Beschreibung',
    'country' => 
    [
      'title' => 'Land',
      'placeholder' => 'Land eingeben',
    ],
    'city' => 
    [
      'title' => 'Stadt',
      'placeholder' => 'Stadt eingeben',
    ],
    'continue' => 'Speichern & Fortfahren',
  ],
  'step4' => 
  [
    'video' => 
    [
      'description' => 'Präsentieren Sie Ihren Kurs in einem ansprechenden Video',
      'title' => 'Kurs-Video-Präsentation',
      'choose' => 'Video auswählen',
      'change' => 'Video ändern',
      'selected' => 'Ausgewähltes Video',
      'size' => 'Video-Größe sollte :size MB nicht überschreiten',
    ],
    'title' => 'Video-Präsentation',
    'submit' => 
    [
      'post' => 'Beitrag einreichen',
    ],
  ],
  'edit_step' => 
  [
    'title' => 'Beitrag bearbeiten',
    'subject'=> [
      'no_selected' => 'Kein Fach ausgewählt',
    ],
    'request' => 'Änderungen anfordern',
  ],
];

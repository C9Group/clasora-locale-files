<?php

return [
  'validation' => 
  [
    'subject_id' => 'Vous avez déjà soumis une publication pour cette matière.',
    'description' => 
    [
      'required' => 'Le champ de description est obligatoire pour chaque langue.',
      'string' => 'La description doit être une chaîne de caractères pour chaque langue.',
      'min' => 'La description doit comporter au moins :chars caractères.',
    ],
    'city' => 
    [
      'required_if' => 'Le champ « ville » est obligatoire lorsque l\'option « en personne » est sélectionnée.',
    ],
    'country' => 
    [
      'required_if' => 'Le champ « pays » est obligatoire lorsque l\'option « en personne » est sélectionnée.',
    ],
  ],
  'final' => 
  [
    'title' => 
    [
      'welcome' => 'On y est presque !',
      'question' => 'Quelle est la prochaine étape ?',
    ],
    'description' => 
    [
      'welcome' => 'Nous vous remercions pour votre demande ! Nous sommes en train d\'examiner votre publication pour nous assurer que tout est conforme à nos lignes directrices.',
      'approve' => 'Notre équipe approuvera votre publication dans les plus brefs délais.',
      'notification' => 'Vous recevrez une notification dès qu\'elle sera en ligne !',
      'questions' => 'Si vous avez des questions ou si vous avez besoin d\'aide, n\'hésitez pas à nous contacter.',
      'thank_you_note' => 'Merci de votre patience !',
    ],
    'go' => 
    [
      'to' => 
      [
        'dashboard' => 'Aller au tableau de bord',
      ],
    ],
  ],
  'header' => 
  [
    'step1' => 
    [
      'heading' => 'Saisir les informations relatives au poste',
      'description' => 'Détails sur la matière et les langues',
    ],
    'step2' => 
    [
      'heading' => 'Écrire la description',
      'desctiption' => 'Traduire la description de la publication',
    ],
    'step3' => 
    [
      'heading' => 'Lieu et prix',
      'desctiption' => 'Précisez le lieu du cours et la tarification',
    ],
  ],
  'step' => 
  [
    'title' => 'Créer une nouvelle publication',
    'description' => 'Avant de commencer à enseigner sur notre plateforme, vous devez nous indiquer la matière de votre cours, les langues que vous parlez et d\'autres informations. Veuillez remplir les informations ci-dessous.',
  ],
  'step1' => 
  [
    'title' => 'Informations sur la publication',
    'subject' => 
    [
      'title' => 'Sélectionner la matière que vous enseignez',
      'description' => 'Si la matière que vous enseignez ne figure pas dans la liste, veuillez nous contacter via',
      'select' => 'Sélectionner la matière',
    ],
    'choose' => 'Choisir',
    'choosen' => 'Choisi',
    'remove' => 'Retirer',
    'tags' => 
    [
      'select' => 'Sélectionner les tags',
      'description' => 'Veuillez sélectionner les tags qui vous semblent les mieux adaptés à votre cours.',
      'suggest' => 
      [
        'description' => 'Si vous avez d\'autres tags en tête qui ne sont pas mentionnés, n\'hésitez pas à les proposer sous forme de valeurs séparées par des virgules. Nous apprécions toujours votre contribution !',
        'title' => 'Suggérer de nouveaux tags',
      ],
      'suggestions' => 'Tag suggéré1, Tag suggéré2',
    ],
    'languages' => 
    [
      'title' => 'Sélectionnez les langues dans lesquelles vous enseignez la matière',
      'description' => 'Veuillez sélectionner toutes les langues dans lesquelles vous vous sentez à l\'aise pour enseigner la matière. Vous pouvez sélectionner plusieurs langues',
      'select' => 'Sélectionner les langues',
    ],
    'save' => 
    [
      'continue' => 'Enregistrer et continuer',
    ],
  ],
  'step2' => 
  [
    'title' => 'Écrire la description',
    'info' => 'Veuillez ne pas inclure votre numéro de téléphone ou des liens vers des sites web.',
    'description' => 'Présentez-vous brièvement en mentionnant vos qualifications, votre expérience en enseignement, ainsi que l\'organisation de vos leçons et votre style pédagogique. Expliquez ce que vos étudiants réaliseront ou apprendront grâce à vos cours.',
    'message' => 
    [
      'warning' => 'Veuillez entrer au moins :chars caractères',
    ],
    'write' => 
    [
      'description' => 'Saisir la description dans',
      'placeholder' => 'Saisir la description',
    ],
    'post' => 
    [
      'information' => 'Informations sur la publication',
    ],
    'save' => 
    [
      'continue' => 'Enregistrer et continuer',
    ],
  ],
  'step3' => 
  [
    'title' => 'Lieu et prix',
    'subtitle' => 'Lieu',
    'online' => 'Le cours se déroule en ligne :',
    'yes' => 'Oui',
    'no' => 'Non',
    'in_person' => 'Le cours se déroule en personne :',
    'duration' => 
    [
      'description' => 'Définissez la durée de votre cours (minutes)',
      'title' => 'Durée',
      'placeholder' => 'Saisir la durée',
    ],
    'price' => 
    [
      'description' => 'Définissez le prix de votre cours',
      'title' => 'Prix',
      'placeholder' => 'Saisir le prix',
    ],
    'currency' => 
    [
      'description' => 'Sélectionner la devise pour votre cours',
      'title' => 'Devise',
      'select' => 'Sélectionner la devise',
    ],
    'choose' => 'Choisir',
    'submit' => 
    [
      'post' => 'Soumettre la publication',
    ],
    'description' => 'Description',
    'country' => 
    [
      'title' => 'Pays',
      'placeholder' => 'Saisir le pays',
    ],
    'city' => 
    [
      'title' => 'Ville',
      'placeholder' => 'Saisir la ville',
    ],
  ],
  'edit_step' => 
  [
    'title' => 'Modifier la publication',
    'subject'=> [
      'no_selected' => 'Aucun sujet sélectionné',
    ],
    'request' => 'Demander des modifications',
  ],
];

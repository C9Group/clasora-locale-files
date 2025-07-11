<?php

return [
  'step2' => 
  [
    'write' => 
    [
      'placeholder' => 'Enter description',
      'description' => 'Write description in',
    ],
    'title' => 'Write Description',
    'info' => 'Please don\'t include your phone number or website links',
    'description' => 'Introduce yourself briefly, mentioning your qualifications and teaching experience. Describe how your lessons are organized and your teaching style. Explain what students will achieve or learn from your classes.',
    'message' => 
    [
      'warning' => 'Please enter at least :chars characters',
    ],
    'post' => 
    [
      'information' => 'Post Information',
    ],
    'save' => 
    [
      'continue' => 'Save & Continue',
    ],
  ],
  'step3' => 
  [
    'duration' => 
    [
      'placeholder' => 'Enter duration',
      'description' => 'Set the duration of your class (minutes)',
      'title' => 'Duration',
    ],
    'price' => 
    [
      'placeholder' => 'Enter price',
      'description' => 'Set the price for your class',
      'title' => 'Price',
    ],
    'city' => 
    [
      'title' => 'City',
      'placeholder' => 'Enter city',
    ],
    'title' => 'Location and Price',
    'subtitle' => 'Location',
    'online' => 'Is class online:',
    'yes' => 'Yes',
    'no' => 'No',
    'in_person' => 'Is class in person:',
    'currency' => 
    [
      'description' => 'Select the currency for your class',
      'title' => 'Currency',
      'select' => 'Select currency',
    ],
    'choose' => 'Choose',
    'submit' => 
    [
      'post' => 'Submit Post',
    ],
    'description' => 'Description',
    'country' => 
    [
      'title' => 'Country',
      'placeholder' => 'Enter country',
    ],
  ],
  'validation' => 
  [
    'subject_id' => 'You have already submitted a post for this subject.',
    'description' => 
    [
      'required' => 'The description field is required for each language.',
      'string' => 'The description must be a string for each language.',
      'min' => 'The description must be at least :chars characters long.',
    ],
    'city' => 
    [
      'required_if' => 'The city field is required when in-person is selected.',
    ],
    'country' => 
    [
      'required_if' => 'The country field is required when in-person is selected.',
    ],
  ],
  'final' => 
  [
    'title' => 
    [
      'welcome' => 'Almost There!',
      'question' => 'What\'s Next?',
    ],
    'description' => 
    [
      'welcome' => 'Thank you for your submission! We are currently reviewing your post to ensure everything meets our guidelines.',
      'approve' => 'Our team will approve your post shortly.',
      'notification' => 'You wll receive a notification once it is live!',
      'questions' => 'If you have any questions or need assistance, feel free to reach out.',
      'thank_you_note' => 'Thank you for your patience!',
    ],
    'go' => 
    [
      'to' => 
      [
        'dashboard' => 'Go to Dashboard',
      ],
    ],
  ],
  'header' => 
  [
    'step1' => 
    [
      'heading' => 'Enter the post information',
      'description' => 'Details about the subject and the languages',
    ],
    'step2' => 
    [
      'heading' => 'Write Description',
      'desctiption' => 'Translate the post description',
    ],
    'step3' => 
    [
      'heading' => 'Location and Price',
      'desctiption' => 'Specify the lesson location and pricing',
    ],
  ],
  'step' => 
  [
    'title' => 'Create New Post',
    'description' => 'Before starting to teach on our platform, you need to tell us what is the subject of your class, languages you speak and some other information. Please fill in the information below.',
    'pause_button' => 'Pause post',
    'resume_button' => 'Resume post',
  ],
  'step1' => 
  [
    'title' => 'Post Information',
    'subject' => 
    [
      'title' => 'Select the subject you teach',
      'description' => 'If the subject you teach is not listed, please contact us via',
      'select' => 'Select Subject',
    ],
    'choose' => 'Choose',
    'choosen' => 'Choosen',
    'remove' => 'Remove',
    'tags' => 
    [
      'select' => 'Select tags',
      'description' => 'Please select relevant tags that you think are best aligned with your class',
      'suggest' => 
      [
        'description' => 'If you have other tags in mind that aren\'t listed, feel free to suggest them as comma-separated values. Your input is always appreciated!',
        'title' => 'Suggest new tags',
      ],
      'suggestions' => 'Suggested Tag1, Suggested Tag2',
    ],
    'languages' => 
    [
      'title' => 'Select languages you teach the subject in',
      'description' => 'Please select all the languages you are comfortable teaching the subject in. You can select more than one language',
      'select' => 'Select Languages',
    ],
    'save' => 
    [
      'continue' => 'Save & Continue',
    ],
  ],
];

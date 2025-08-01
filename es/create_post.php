<?php

return [
  'validation' => 
  [
    'subject_id' => 'Ya has enviado una publicación para esta materia.',
    'description' => 
    [
      'required' => 'El campo de descripción es requerido para cada idioma.',
      'string' => 'La descripción debe ser una cadena de texto para cada idioma.',
      'min' => 'La descripción debe tener al menos :chars caracteres.',
    ],
    'city' => 
    [
      'required_if' => 'El campo ciudad es requerido cuando se selecciona en persona.',
    ],
    'country' => 
    [
      'required_if' => 'El campo país es requerido cuando se selecciona en persona.',
    ],
    'video' => 
    [
      'file' => 'El video debe ser un archivo.',
      'mimes' => 'El video debe ser un archivo de tipo: mp4, avi, mov, wmv.',
      'max' => 'El video no puede ser mayor a :size MB.',
    ],
  ],
  'final' => 
  [
    'title' => 
    [
      'welcome' => '¡Ya casi está!',
      'question' => '¿Qué sigue?',
    ],
    'description' => 
    [
      'welcome' => '¡Gracias por tu envío! Actualmente estamos revisando tu publicación para asegurar que todo cumple con nuestras pautas.',
      'approve' => 'Nuestro equipo aprobará tu publicación en breve.',
      'notification' => '¡Recibirás una notificación una vez que esté en línea!',
      'questions' => 'Si tienes alguna pregunta o necesitas ayuda, no dudes en contactarnos.',
      'thank_you_note' => '¡Gracias por tu paciencia!',
    ],
    'go' => 
    [
      'to' => 
      [
        'dashboard' => 'Ir al Panel',
      ],
    ],
  ],
  'header' => 
  [
    'step1' => 
    [
      'heading' => 'Ingresa la información de la publicación',
      'description' => 'Detalles sobre la materia y los idiomas',
    ],
    'step2' => 
    [
      'heading' => 'Escribir Descripción',
      'desctiption' => 'Traducir la descripción de la publicación',
    ],
    'step3' => 
    [
      'heading' => 'Ubicación y Precio',
      'desctiption' => 'Especifica la ubicación de la lección y el precio',
    ],
    'step4' => 
    [
      'heading' => 'Presentación en video',
      'desctiption' => 'Presentación en video de tu clase',
    ],
  ],
  'step' => 
  [
    'title' => 'Crear Nueva Publicación',
    'description' => 'Antes de comenzar a enseñar en nuestra plataforma, necesitas decirnos cuál es la materia de tu clase, los idiomas que hablas y otra información. Por favor completa la información a continuación.',
    'pause_button' => 'Pausar publicación',
    'resume_button' => 'Reanudar publicación',
  ],
  'step1' => 
  [
    'title' => 'Información de la Publicación',
    'subject' => 
    [
      'title' => 'Selecciona la materia que enseñas',
      'description' => 'Si la materia que enseñas no está listada, por favor contáctanos vía',
      'select' => 'Seleccionar Materia',
    ],
    'choose' => 'Elegir',
    'choosen' => 'Elegido',
    'remove' => 'Eliminar',
    'tags' => 
    [
      'select' => 'Seleccionar etiquetas',
      'description' => 'Por favor selecciona etiquetas relevantes que creas que están mejor alineadas con tu clase',
      'suggest' => 
      [
        'description' => 'Si tienes otras etiquetas en mente que no están listadas, siéntete libre de sugerirlas como valores separados por comas. ¡Tu aporte siempre es apreciado!',
        'title' => 'Sugerir nuevas etiquetas',
      ],
      'suggestions' => 'Etiqueta Sugerida1, Etiqueta Sugerida2',
    ],
    'languages' => 
    [
      'title' => 'Selecciona los idiomas en los que enseñas la materia',
      'description' => 'Por favor selecciona todos los idiomas en los que te sientes cómodo enseñando la materia. Puedes seleccionar más de un idioma',
      'select' => 'Seleccionar Idiomas',
    ],
    'save' => 
    [
      'continue' => 'Guardar y Continuar',
    ],
  ],
  'step2' => 
  [
    'title' => 'Escribir Descripción',
    'info' => 'Por favor no incluyas tu número de teléfono o enlaces de sitios web',
    'description' => 'Preséntate brevemente, mencionando tus calificaciones y experiencia docente. Describe cómo están organizadas tus lecciones y tu estilo de enseñanza. Explica qué lograrán o aprenderán los estudiantes de tus clases.',
    'message' => 
    [
      'warning' => 'Por favor ingresa al menos :chars caracteres',
    ],
    'write' => 
    [
      'description' => 'Escribir descripción en',
      'placeholder' => 'Ingresar descripción',
    ],
    'post' => 
    [
      'information' => 'Información de la Publicación',
    ],
    'save' => 
    [
      'continue' => 'Guardar y Continuar',
    ],
  ],
  'step3' => 
  [
    'title' => 'Ubicación y Precio',
    'subtitle' => 'Ubicación',
    'online' => '¿La clase es en línea:',
    'yes' => 'Sí',
    'no' => 'No',
    'in_person' => '¿La clase es en persona:',
    'duration' => 
    [
      'description' => 'Establece la duración de tu clase (minutos)',
      'title' => 'Duración',
      'placeholder' => 'Ingresar duración',
    ],
    'price' => 
    [
      'description' => 'Establece el precio de tu clase',
      'title' => 'Precio',
      'placeholder' => 'Ingresar precio',
    ],
    'currency' => 
    [
      'description' => 'Selecciona la moneda para tu clase',
      'title' => 'Moneda',
      'select' => 'Seleccionar moneda',
    ],
    'choose' => 'Elegir',
    'submit' => 
    [
      'post' => 'Enviar Publicación',
    ],
    'description' => 'Descripción',
    'country' => 
    [
      'title' => 'País',
      'placeholder' => 'Ingresar país',
    ],
    'city' => 
    [
      'title' => 'Ciudad',
      'placeholder' => 'Ingresar ciudad',
    ],
    'continue' => 'Guardar y Continuar',
  ],
  'step4' => 
  [
    'video' => 
    [
      'description' => 'Presenta tu clase en un video atractivo',
      'title' => 'Presentación en video de la clase',
      'choose' => 'Elegir Video',
      'change' => 'Cambiar Video',
      'selected' => 'Video Seleccionado',
      'size' => 'El tamaño del video no debe exceder :size MB',
    ],
    'title' => 'Presentación en video',
    'submit' => 
    [
      'post' => 'Enviar Publicación',
    ],
  ],
  'edit_step' => 
  [
    'title' => 'Editar Publicación',
    'subject'=> [
      'no_selected' => 'No hay materia seleccionada',
    ],
    'request' => 'Solicitar Cambios',
  ],
];

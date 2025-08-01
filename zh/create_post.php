<?php

return [
  'step2' => 
  [
    'write' => 
    [
      'placeholder' => '输入描述',
      'description' => '在此写入描述',
    ],
    'title' => '写入描述',
    'info' => '隐私安全提示，请勿包含电话或网址链接',
    'description' => '简要介绍下自己，涉及你的资格和教学经验。描述你的课程是如何组织的以及你的教学风格。概括下学生将从你的课堂上获得了什么或学到了什么。',
    'message' => 
    [
      'warning' => '请输入至少:chars个字符',
    ],
    'post' => 
    [
      'information' => '发布信息',
    ],
    'save' => 
    [
      'continue' => '保存并继续',
    ],
  ],
  'step3' => 
  [
    'duration' => 
    [
      'placeholder' => '输入持续时间',
      'description' => '设置课程时长（分钟）',
      'title' => '时长',
    ],
    'price' => 
    [
      'placeholder' => '输入价格',
      'description' => '为你的课程定价',
      'title' => '价格',
    ],
    'city' => 
    [
      'title' => '城市',
      'placeholder' => '输入城市名称',
    ],
    'title' => '位置与价格',
    'subtitle' => '位置',
    'online' => '是否在线课程：',
    'yes' => '是',
    'no' => '否',
    'in_person' => '是否单独授课：',
    'currency' => 
    [
      'description' => '选择课程货币',
      'title' => '货币',
      'select' => '选择货币',
    ],
    'choose' => '选择',
    'submit' => 
    [
      'post' => '提交信息',
    ],
    'description' => '描述',
    'country' => 
    [
      'title' => '国家',
      'placeholder' => '输入国家名称',
    ],
    'continue' => '保存并继续',
  ],
  'step4' => 
  [
    'video' => 
    [
      'description' => '通过引人入胜的视频展示你的课程',
      'title' => '课程视频展示',
      'choose' => '选择视频',
      'change' => '更换视频',
      'selected' => '已选视频',
      'size' => '视频大小不应超过 :size MB',
    ],
    'title' => '视频展示',
    'submit' => 
    [
      'post' => '提交信息',
    ],
  ],
  'validation' => 
  [
    'subject_id' => '您已经提交了此栏目的信息。',
    'description' => 
    [
      'required' => '每种语言都需要描述字段。',
      'string' => '每种语言的描述都必须是字符串。',
      'min' => '描述必须至少为 :chars 个字符长。',
    ],
    'city' => 
    [
      'required_if' => '选择"单独授课"时，城市名称是必填项。',
    ],
    'country' => 
    [
      'required_if' => '选择"单独授课"时，国家名称是必填项。',
    ],
    'video' => 
    [
      'file' => '视频必须是文件。',
      'mimes' => '视频必须是以下类型的文件：mp4、avi、mov、wmv。',
      'max' => '视频不能大于 :size MB。',
    ],
  ],
  'final' => 
  [
    'title' => 
    [
      'welcome' => '即将完成！',
      'question' => '接下来是什么？',
    ],
    'description' => 
    [
      'welcome' => '感谢您的提交！我们目前正在审查您提交的信息，以确保您提交的所有内容都符合我们的规章制度。',
      'approve' => '我们的团队很快审核您的申请。',
      'notification' => '课程上线时，您将收到通知！',
      'questions' => '如果您有任何问题或需要帮助，请随时联系我们。',
      'thank_you_note' => '感谢您的耐心等待！',
    ],
    'go' => 
    [
      'to' => 
      [
        'dashboard' => '转到仪表板页面',
      ],
    ],
  ],
  'header' => 
  [
    'step1' => 
    [
      'heading' => '输入提交信息',
      'description' => '关于主题和语言的详细信息',
    ],
    'step2' => 
    [
      'heading' => '输入描述',
      'desctiption' => '翻译信息描述',
    ],
    'step3' => 
    [
      'heading' => '位置与价格',
      'desctiption' => '设置课程地点和价格',
    ],
    'step4' => 
    [
      'heading' => '视频展示',
      'desctiption' => '您的课程视频展示',
    ],
  ],
  'step' => 
  [
    'title' => '创建新帖子',
    'description' => '在我们的平台上教学之前，您需要告诉我们您的课程主题和您所说的语言以及其他相关信息，请填写以下信息。',
    'pause_button' => '暂时保存',
    'resume_button' => '恢复帖子',
  ],
  'step1' => 
  [
    'title' => '发布信息',
    'subject' => 
    [
      'title' => '选择您教的课程',
      'description' => '如果您教授的课程未列出，请通过以下方式联系我们',
      'select' => '选择课程',
    ],
    'choose' => '选择',
    'choosen' => '已选择',
    'remove' => '删除',
    'tags' => 
    [
      'select' => '选择标签',
      'description' => '请选择您认为与您的课程最匹配的相关标签',
      'suggest' => 
      [
        'description' => '如果已列出的标签没有可选项，请选择其他并填写您的所需要的标签建议，我们忠心感谢您的意见！',
        'title' => '建议新标签',
      ],
      'suggestions' => '建议标签1，建议标签2',
    ],
    'languages' => 
    [
      'title' => '选择您教授该课程的语言',
      'description' => '请选择您适合教授该课程的所有语言。您可以选择多种语言',
      'select' => '选择语言',
    ],
    'save' => 
    [
      'continue' => '保存并继续',
    ],
  ],
  'edit_step' => 
  [
    'title' => '编辑帖子',
    'subject'=> [
      'no_selected' => '未选择主题',
    ],
    'request' => '请求更改',
  ],
];

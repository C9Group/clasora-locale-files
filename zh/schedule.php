<?php

return [
  'email' => 
  [
    'provider_subject' => '新课程已安排',
    'provider_body' => '用户:first_name安排了一节课。请务必提前联系用户以分享课程的位置。',
    'customer_subject' => '新课程已安排',
    'customer_body' => '您已安排了一节新课。导师会就课程地点与您联系。',
  ],
  'chat' => 
  [
    'message' => '新的预约预订时间:post_title日期:date_time',
  ],
  'confirmation_message' => '请确认上课的日期和时间。老师会给您发信息，告诉您课程的位置或链接。',
  'no_availabilities' => '所选日期没有可用的预约时间，请选择其他日期。',
];

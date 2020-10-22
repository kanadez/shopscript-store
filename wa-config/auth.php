<?php
return array (
  'ftf.metateg.pro' => 
  array (
    'auth' => true,
    'app' => 'shop',
    'rememberme' => true,
    'params' => 
    array (
      'service_agreement' => 'notice',
      'service_agreement_text' => 'Нажимая на кнопку подтверждения, я принимаю условия <a href="---ВСТАВЬТЕ СЮДА ССЫЛКУ НА ДОКУМЕНТ!---" target="_blank">политики обработки персональных данных</a>',
      'button_caption' => 'Регистрация',
    ),
    'fields' => 
    array (
      'email' => 
      array (
        'caption' => 'Email',
        'placeholder' => '',
        'required' => true,
      ),
      'password' => 
      array (
        'caption' => 'Пароль',
        'placeholder' => '',
        'required' => true,
      ),
    ),
  ),
);

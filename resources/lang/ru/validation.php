<?php

return [
    'custom' => [
        'password' => [
            'confirmed' => 'Пароли не совпадают',
            'min' => [
                'string' => 'Символов должно быть :min или более.',
            ],
            'regex' => 'Неверный формат.',
            'confirmed' => 'Пароли не совпадают',
            'required' => 'Введите :attribute.'
        ],
        'username' => [
            'confirmed' => 'Пароли не совпадают',
            'min' => [
                'string' => 'Символов должно быть :min или более.',
            ],
            'regex' => 'Неверный формат.',
            'required' => 'Введите :attribute.',
            'unique' => ':attribute занят',
        ],
        'text' => [
            'required' => 'Сообщение не может быть пустым',
        ],
    ],
    'attributes' => [
        'username' => 'Логин',
        'password' => 'Пароль'
    ],
];

<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
    $form = new Form([
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'Please enter a valid email address',
        ],
        'name' => [],
        'message' => [
            'rules' => ['required'],
            'message' => 'Please enter a message',
        ],
    ]);

    if (r::is('POST')) {
        $form->emailAction([
            'to' => 'milkyabdullah@gmail.com',
            'from' => 'milkwebsite@example.com',
            'subject' => 'Message from the web forms'
        ]);
    }

    return compact('form');
};

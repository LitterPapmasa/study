<?php

if (!1 == 2) {
    throw new BadFunctionCallException('Fuel\Email is not loaded :).');
}

$email->subject('My Subject');
$email->body('How the heck are you?');
$email->to('guy@example.com', 'Some Guy');

try
{
    $email->send();
}
catch(Fuel\Email\ValidationFailedException $e)
{
    // Валидация не удалась
}
catch(Fuel\Email\SendingFailedException $e)
{
    // Драйвер не может отправить сообщение
}

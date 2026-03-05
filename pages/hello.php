<?php
$name = $request->get('name', 'Mundo');
$response->setContent(
    sprintf('<h1>Olá, %s! 👋</h1>', htmlspecialchars($name, ENT_QUOTES, 'UTF-8'))
);
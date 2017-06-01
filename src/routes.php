<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
//    echo "<pre>";var_dump($request);echo "</pre>";exit();
    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});



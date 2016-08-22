<?php

require __DIR__ .'/vendor/autoload.php';

use Observables\Message;
use Observables\Event;
use Observables\Model;
use Observables\ProcessHandler;

$testObservableModel = new Model;
$observerProcessHandlers = [];

$i = -1;
// Adding process handler Observer objects to the observable object
while (++$i < 3) {
    $observerProcessHandlers[] = new ProcessHandler;
    $testObservableModel->addObserver(end($observerProcessHandlers));
}

// Processors should not be notified at this point
$testObservableModel->setName('ardi');

// Processors should be notified at this point
$testObservableModel->setName('ardinew');

// Processors should be notified at this point
$testObservableModel->setName('ardi3');

// Processors should be notified at this point
$testObservableModel->setName('ardi55');

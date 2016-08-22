<?php

namespace Observables;

use Observables\Contracts\ObserverInterface;
use Observables\Contracts\EventInterface;
use Observables\Contracts\MessageInterface;

class ProcessHandler implements ObserverInterface {

    public function handleEvent(EventInterface $event)
    {
        $this->handleProcess($event->getName(), $event->getMessage());
    }

    protected function handleProcess($eventName, MessageInterface $message)
    {
        print sprintf('Handling the new event %s with message content %s',
            $eventName,
            $message->getContent()
        ) . PHP_EOL;
    }
}

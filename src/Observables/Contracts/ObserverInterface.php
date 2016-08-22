<?php
namespace Observables\Contracts;

interface ObserverInterface {
    public function handleEvent(EventInterface $event);
}

<?php

namespace Observables;

use Observables\Contracts\ObservableInterface;
use Observables\Contracts\ObserverInterface;
use Observables\Contracts\EventInterface;

class Observable implements ObservableInterface {

    protected $observers = [];

    public function addObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer)
    {
        if (sizeof($this->observers) > 0) {
            foreach ($this->observers as &$currentObserver) {
                if ($observer === $currentObserver) {
                    unset($currentObserver);
                }
            }
        }
    }

    public function emit(EventInterface $event)
    {
        foreach ($this->observers as $observer) {
            $observer->handleEvent($event);
        }
    }
}

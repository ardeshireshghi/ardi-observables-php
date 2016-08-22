<?php

namespace Observables\Contracts;

interface ObservableInterface {
    public function addObserver(ObserverInterface $observer);
    public function removeObserver(ObserverInterface $observer);
    public function emit(EventInterface $event);
}

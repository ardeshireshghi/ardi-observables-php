<?php
namespace Observables\Contracts;

interface EventInterface {
    public function setName($name);
    public function setMessage(MessageInterface $message);
    public function getName();
    public function getMessage();
}

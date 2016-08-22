<?php

namespace Observables;
use Observables\Contracts\MessageInterface;
use Observables\Contracts\EventInterface;

class Event implements EventInterface {
    protected $name;
    protected $message;

    public function __construct($name, MessageInterface $message)
    {
        $this->setName($name);
        $this->setMessage($message);
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setMessage(MessageInterface $message)
    {
        $this->message = $message;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getMessage()
    {
        return $this->message;
    }
}

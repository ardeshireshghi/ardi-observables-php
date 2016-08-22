<?php

namespace Observables;

use Observables\Contracts\MessageInterface;

class Message implements MessageInterface {
    protected $type;
    protected $content;

    public function __construct($content, $type = 'default')
    {
        $this->setType($type);
        $this->setContent($content);
    }

    public function setType($type)
    {
        $this->type = $type;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getContent()
    {
        return $this->content;
    }

    public function __toString()
    {
        return "Message {$this->type} with {$this->content} content";
    }
}

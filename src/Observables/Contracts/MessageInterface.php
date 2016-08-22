<?php

namespace Observables\Contracts;

interface MessageInterface {
    public function setType($type);
    public function setContent($content);
    public function getType();
    public function getContent();
}

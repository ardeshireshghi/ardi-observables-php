<?php

namespace Observables;

class Model extends Observable {

    protected $name;
    protected $telephone;
    protected $createdAt;
    protected $updatedAt;

    public function setName($name)
    {
        if ($this->name !== $name) {
            $this->emit(
                new Event('model.name.changed', new Message($name))
            );
        }

        $this->name = $name;
    }
}

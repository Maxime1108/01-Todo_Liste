<?php

namespace Model\Entity;

class Todo extends BaseEntity
{

    private string $tache;

    public function getTache(): string{
        return $this->;
    }

    public function setTache(string $tache): static{
        $this->tache = $tache;
        return $this;
    }
}
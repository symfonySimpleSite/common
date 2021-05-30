<?php

namespace SymfonySimpleSite\Common\Traits;

trait StatusTrait
{
    /**
     * @ORM\Column(type="smallint")
     */
    private int $status;

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }
}
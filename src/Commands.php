<?php

class Commands implements CommandInterface
{
    private $shortopt;
    private $longopt = array();

    public function setShort(string $short)
    {
        $this->shortopt = $short;
    }

    public function setLong(array $long)
    {
        $this->longopt = $long;
    }

    public function getShort() : string
    {
        return $this->shortopt;
    }

    public function getLong(): array
    {
        return $this->longopt;
    }
}
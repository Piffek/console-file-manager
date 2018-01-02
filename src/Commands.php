<?php

class Commands implements CommandInterface
{
    private $shortopt;

    private $longopt = [];

    public function setShort(string $short)
    {
        $this->shortopt = $short;
    }

    public function setLong(array $long)
    {
        $this->longopt = $long;
    }

    public function getShort(): string
    {
        return $this->shortopt;
    }

    public function getLong(): array
    {
        return $this->longopt;
    }

    public function set()
    {
        return getopt($this->shortopt, $this->longopt);
    }
}
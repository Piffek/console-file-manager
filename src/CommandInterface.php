<?php

interface CommandInterface
{
    public function setShort(string $short);

    public function setLong(array $long);

    public function getShort(): string;

    public function getLong(): array;
}
<?php

require_once __DIR__.'/src/Autoload.php';

$commands = new Commands();
$commands->setShort('r::w::');
$commands->setLong(array('dir::','file::', 'text::'));
$options = $commands->set();

$file = new File();
$file->setDirectory($options['dir']);
$file->setName($options['file']);


if(isset($options['text'])){
    $file->setText($options['text']);
}

if(isset($options['w'])){
    $file->write();
}elseif(isset($options['r'])){
    echo $file->read();
}
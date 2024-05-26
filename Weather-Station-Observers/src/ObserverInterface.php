<?php

namespace App;

interface ObserverInterface
{
    public function update(SubjectInterface $subject) : void;
    public function getId() : int;

}

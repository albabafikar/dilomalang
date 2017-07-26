<?php

namespace AppBundle\Contracts;

interface UserInterface {

public function findByUsername($username);

}
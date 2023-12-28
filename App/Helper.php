<?php

namespace App;

class Helper {
    public function __construct(
        public string $name,
    )
    {}

    public function getName() {
        return $this->name;
    }
}
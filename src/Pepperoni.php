<?php
namespace pizza;
namespace lib;

class Pepperoni extends Pizza {
    public function __construct() {
        parent::__construct('Пепперони', 'томатный соус', ['сыр', 'колбаса']);
    }
}
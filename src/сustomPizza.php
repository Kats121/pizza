<?php
namespace Lib;
class сustomPizza extends pizzaStore {
    protected function createPizza(string $type) {
        switch (strtolower($type)) {
            case 'margarita':
                return new MargaritaPizza();
            case 'pepperoni':
                return new PepperoniPizza();
        }
    }
}
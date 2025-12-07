<?php
namespace Lib;
class CustomPizza extends PizzaStore {
    protected function createPizza(string $type) {
        switch (strtolower($type)) {
            case 'margarita':
                return new MargaritaPizza();
            case 'pepperoni':
                return new PepperoniPizza();
        }
    }
}
<?php
namespace PizzaLib;
class PizzaStore
{
    public function orderPizza($type)
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->cut();
        return $pizza;
    }
    protected function createPizza($type)
    {
        switch (strtolower($type)) {
            case 'margarita':
                return new Pizza('Маргарита', 'томатный соус', ['сыр']);
            case 'pepperoni':
                return new Pizza('Пепперони', 'томатный соус', ['сыр', 'колбаса']);
        }
    }
}

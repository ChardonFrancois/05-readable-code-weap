<?php

function order_pizza($pizzatype, $forWho) {

$typeOfPizza = $pizzatype;

echo 'Creating new order... <br>';

$toPrint = 'A ' . $pizzatype;


$priceOfPizza = calc_cost($typeOfPizza);

    $address = 'unknown';

    if($forWho == 'koen')
    {
        $address = 'a peniche in Liège';
    } elseif ($forWho == 'nico')
    {
        $address = 'somewhere in Belgium';
    } elseif ($forWho == 'students') {
        $address = 'BeCode office';
    }

        $toPrint .=   ' pizza should be sent to ' . $forWho . ". <br>The address: {$address}.";

    echo $toPrint; echo '<br>';
    echo'The bill is $'.$priceOfPizza.'.<br>';
    echo "Order finished.<br><br>";

}

function calc_cost($typeOfPizza)
{
    $cost = 'unknown';

    if ($typeOfPizza == 'marguerita') {
        $cost = 5;
    }
    else
        {
        if ($typeOfPizza == 'golden')
        {
            $cost = 100;
        }

            if ($typeOfPizza == 'calzone')
            {
                $cost = 10;
            }

        if ($typeOfPizza == 'hawai') {
            throw new Exception('Computer says no');
        }
    }

    return $cost;
}

            function all_order_pizza()
            {
            order_pizza('calzone', 'nico');
            order_pizza('marguerita', 'nick');

            order_pizza('golden', 'students');
            }
all_order_pizza();


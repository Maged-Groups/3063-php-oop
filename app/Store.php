<?php
namespace App;

class Store
{

    // My  Class Properties
    private static $stores = 0;
    private static $stock = 0;
    private static $total_sales = 0;
    private static $total_refund = 0;
    private static $sold_items = 0;
    private static $return_items = 0;

    // Object Properties
    private $branch_name;
    private $branch_stock = 0;
    private $branch_total_sales = 0;
    private $branch_total_refund = 0;
    private $branch_sold_items = 0;
    private $branch_return_items = 0;
    private $branch_price = 10;


    // Constructor 


    function __construct($name, $initial_stock)
    {
        $erros = [];

        if (!Str::validateLength($name, max: 20)) {
            $erros[] = 'Invalid Store Name';
        }

        if (!Num::isNumber($initial_stock)) {
            $erros[] = 'Invalid Stock';
        }

        if (!Num::inRange($initial_stock, min: 100, max: 10000)) {
            $erros[] = 'Stock should be between 100 and 10000';
        }

        if (count($erros) > 0) {
            echo '<ul>';
            foreach ($erros as $error) {
                echo '<li>' . $error . '</li>';
            }
            echo '</ul>';
            echo '<hr>';
            return;
        }

        // Class level
        self::$stores++;
        self::$stock += $initial_stock;

        // Object Level
        $this->branch_name = $name;
        $this->branch_stock = $initial_stock;

        echo '<h2>Store: ' . $this->branch_name . ' added successfully.</h2>';
        echo '<h4>You have: ' . self::$stores . ' Store(s)</h4>';
        echo '<hr>';

    }

    function add_invoice($items)
    {
        // Class level properties
        self::$stock -= $items;
        self::$total_sales += $items * self::$stock;
        self::$sold_items += $items;

        // Object Level properties

        // decrease the stock
        $this->branch_stock -= $items;

        // increase total_sales
        $this->branch_total_sales += $items * $this->branch_price;

        // increase sold_items
        $this->branch_sold_items += $items;
    }

    function refund($items)
    {
        // Class level
        self::$stock += $items;
        self::$total_refund += $items * self::$stock;
        self::$return_items += $items;

        // Object Level
        // increase the stock
        $this->branch_stock += $items;

        // decrease total_sales
        $this->branch_total_refund += $items * $this->branch_price;

        // decrease sold_items
        $this->branch_return_items += $items;
    }

    function report()
    {
        echo '<h2>Store: ' . $this->branch_name . '</h2>';
        echo '<h4>Total Sales: ' . $this->branch_total_sales . '</h4>';
        echo '<h4>Items Sold: ' . $this->branch_sold_items . '</h4>';
        echo '<h4>Total Refund: ' . $this->branch_total_refund . '</h4>';
        echo '<h4>Items Refunded: ' . $this->branch_return_items . '</h4>';
        echo '<h4>Net Sales: ' . $this->branch_total_sales - $this->branch_total_refund . '</h4>';
        echo '<small>Stock: ' . $this->branch_stock . '</small>';
        echo '<hr>';
    }

    static function general_report()
    {
        // Report for all stores
        echo '<h2>Number of Store: ' . self::$stores . '</h2>';
        echo '<h2>Total Stock Items: ' . self::$stock . '</h2>';
        echo '<h2>Total Sales: ' . self::$total_sales . '</h2>';
        echo '<h2>Total Refund: ' . self::$total_refund . '</h2>';
        echo '<h2>All Sold Items: ' . self::$sold_items . '</h2>';
        echo '<h2>All refunded Items: ' . self::$return_items . '</h2>';
        echo '<hr>';
    }


}
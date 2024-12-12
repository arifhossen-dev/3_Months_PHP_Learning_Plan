<?php 

trait Tax{
    protected function calculateTax($price, $percentage){
        return ($price * $percentage) / 100;
    }
}

trait Discount{
    protected function calculateDiscount($price, $percentage){
        return ($price * $percentage) / 100;
    }
}

class Product
{
    use Tax, Discount;
    public function info($name, $price, $taxPercentage, $discountPercentage){
        $taxAmount = $this->calculateTax($price, $taxPercentage);
        $discountAmount = $this->calculateDiscount($price, $discountPercentage);
        $totalPrice =  $taxAmount + ($price - $discountAmount);
        return "Product name: {$name} and price {$totalPrice}.";
    }
}

$product = new Product();
echo $product->info('TV', 20000, 5, 2);
echo $product->info('Laptop', 200000, 5, 2);
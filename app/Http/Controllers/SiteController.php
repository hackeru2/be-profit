<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SiteController extends Controller
{
    /**
     * @return mixed
     */
    public function netSales(): mixed
    {
        return Order::whereFinancialStatus('partially_paid')
            ->orWhere('financial_status','paid')->sum('total_price');
    }

    public function productionCosts(): mixed
    {
        return Order::whereFulfillmentStatus('fulfilled')
            ->where(function($query){
                $query->whereFinancialStatus('partially_paid')
                ->orWhere('financial_status','paid');
            })->sum('total_production_cost');
    }

   public function grossProfit(): mixed
   {
        return $this->netSales() - $this->productionCosts();
   }
   function grossMargin(): STRING
   {
        $netSales = $this->netSales();
        $grossProfit = $this->grossProfit();
       return number_format( $grossProfit / $netSales * 100  , 2) . '%';

   }

}

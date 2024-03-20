<?php

namespace App\Console\Commands;

use App\Food;
use App\Stock;
use Carbon\Carbon;
use Illuminate\Console\Command;

class StockManagement extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stock:management';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the stock if there is any for tomorrow';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $foods=Food::all();
        foreach($foods as $food){
            $yesterday_stock=Stock::where('food_id',$food->id)->where('remaining_quantity','>',0)->whereDate('from_date',Carbon::yesterday())->first();
            if($yesterday_stock){
                $today_stock=Stock::where('food_id',$food->id)->whereDate('from_date',Carbon::today())->first();
                if($today_stock)
                {
                    $today_stock->remaining_quantity=$today_stock->remaining_quantity+$yesterday_stock->remaining_quantity;
                    $today_stock->total_quantity=$today_stock->total_quantity+$yesterday_stock->remaining_quantity;
                    $today_stock->save();
                }else{
                    Stock::create([
                        'food_id'=>$food->id,
                        'total_quantity'=>$yesterday_stock->remaining_quantity,
                        'remaining_quantity'=>$yesterday_stock->remaining_quantity,
                        'from_date'=>Carbon::today(),
                        'to_date'=>Carbon::today(),

                         ]);
                }
            }
        }
    }
}

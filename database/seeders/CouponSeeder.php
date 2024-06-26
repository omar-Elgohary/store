<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    public function run ()
    {
        DB::table( 'coupons' )->insert( [ 
            [ 
                'name'        => 'QWERT',
                'type'        => 'ratio',
                'discount'    => 10,
                'start_date'  => \Carbon\Carbon::now(),
                'expire_date' => \Carbon\Carbon::now()->addDays( 5 ),
                'minimum'     => 0,
                'maximum'     => 5,
                'status'      => 'available',
            ],
            [ 
                'name'        => 'JAKA',
                'type'        => 'number',
                'discount'    => 20,
                'start_date'  => \Carbon\Carbon::now(),
                'expire_date' => \Carbon\Carbon::now()->addDays( 10 ),
                'minimum'     => 0,
                'maximum'     => 10,
                'status'      => 'available',
            ],
            [ 
                'name'        => 'UsageEnd',
                'type'        => 'ratio',
                'discount'    => 10,
                'start_date'  => \Carbon\Carbon::now(),
                'expire_date' => \Carbon\Carbon::now()->addDays( 7 ),
                'minimum'     => 0,
                'maximum'     => 15,
                'status'      => 'available',
            ],
            [ 
                'name'        => 'Expire',
                'type'        => 'number',
                'discount'    => 10,
                'start_date'  => \Carbon\Carbon::now()->subDays( 20 ),
                'expire_date' => \Carbon\Carbon::now()->subDay(),
                'minimum'     => 0,
                'maximum'     => 20,
                'status'      => 'expire',
            ]
        ] );
    }
}

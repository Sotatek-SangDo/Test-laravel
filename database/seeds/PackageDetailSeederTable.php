<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PackageDetailSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('package_detail')->truncate();
        $data = [];
        $pid = '01-001-0000';
        for($i = 1; $i <= 100; $i++) {
            $data[] = [
                'name' => "Detail {$i}",
                'package_id' => ++$pid,
                'price' => 1000 + $i,
                'qty' => $i + 2,
                'weight' => 10 + $i,
                'date_created' => Carbon::now(),
                'date_updated' => Carbon::now()
            ];
        }

        DB::table('package_detail')->insert($data);
    }
}

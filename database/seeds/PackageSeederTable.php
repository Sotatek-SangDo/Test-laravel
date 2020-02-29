<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PackageSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('package')->truncate();
        $data = [];
        $pid = '01-001-0000';
        for($i = 1; $i <= 100; $i++) {
            $data[] = [
                'name' => "Package {$i}",
                'package_id' => ++$pid,
                'TrackingNumber' => $i,
                'date_received' => Carbon::now(),
                'date_created' => Carbon::now(),
                'date_updated' => Carbon::now()
            ];
        }

        DB::table('package')->insert($data);
    }
}

<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportUserData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
//        $this->exportExcel();
    }

    public function handle()
    {
        $this->exportExcel();
    }

    private function exportExcel()
    {
        return Excel::store(new UsersExport, 'user/users.csv');
    }

}

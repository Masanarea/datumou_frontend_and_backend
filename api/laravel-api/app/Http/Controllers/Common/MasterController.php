<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Core\MyController;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Master;
class MasterController extends MyController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function prefectures()
    {
        // $this->testTest(); // MY_Controller テスト用
        \Util::testTest2();
        $prefectures = Master::all();
        return $prefectures;
    }
}

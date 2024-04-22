<?php
namespace App\Controllers;

class MyWeb extends BaseController {
    public function my_web(): string {
        return view('my_web');
    }
}
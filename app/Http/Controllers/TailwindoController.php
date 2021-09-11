<?php

namespace App\Http\Controllers;

use Awssat\Tailwindo\Converter;
use Illuminate\Http\Request;

class TailwindoController extends Controller
{
    public function index(Request $request)
    {
        $data = $this->validate( $request,[
            'code' => 'required|string'
        ]);
        $converter =new Converter();
        $converter->setFramework('bootstrap');
        $output = $converter->setContent($data['code'])->convert()->get(false);

        return response()->json([
            'message' => 'Convert Done',
            'code' => $output
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Config;

class MainController extends Controller
{
    public function index(Request $request)
    {


        $config_list =  DB::select(' 
        select * from whatsapp_config wc');
        $login = DB::table('whatsapp_login_info')
            ->select('status')
            ->orderBy('id', 'desc')
            ->first();
        $qr_code = DB::table('whatsapp_login_info')
            ->select('qr_code')
            ->orderBy('id', 'desc')
            ->first();
        return view('main', compact('config_list', 'login', 'qr_code'));
    }

    public function history(Request $request)
    {


        $history_list =  DB::select(' 
        select * FROM whatsapp_history wh');

        $login = DB::table('whatsapp_login_info')
            ->select('status')
            ->orderBy('id', 'desc')
            ->first();
        $qr_code = DB::table('whatsapp_login_info')
            ->select('qr_code')
            ->orderBy('id', 'desc')
            ->first();
        return view('history', compact('history_list', 'login', 'qr_code'));
    }
    public function login_history(Request $request)
    {


        $login_list =  DB::select("
        select * FROM whatsapp_login_info wli 
        where phone_number != 'undefined'");

        $login = DB::table('whatsapp_login_info')
            ->select('status')
            ->orderBy('id', 'desc')
            ->first();
        $qr_code = DB::table('whatsapp_login_info')
            ->select('qr_code')
            ->orderBy('id', 'desc')
            ->first();
        return view('login_history', compact('login_list', 'login', 'qr_code'));
    }
    public function edit_config(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data =  DB::select('
            select * from whatsapp_config wc 
             where config_id = ' . $query . '');
            echo json_encode(['result' => $data]);
        } else {
            return "not existing";
        }
    }
}

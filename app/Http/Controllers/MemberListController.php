<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// use App\Models\Mail;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailTemplate;
use Illuminate\Support\Facades\DB;

class MemberListController extends Controller
{
    // 乗船名簿登録画面の表示
    public function create()
    {
        return view('list_input');
    }

    // 乗船名簿登録画面（確認画面へ進む）ボタンの処理
    public function add(Request $request)
    {
        $param = $request->all();
        return redirect()->route('memberList.confirm')->with( ['param' => $param] );
    }

    // 乗船名簿確認画面表示
    public function confirm()
    {
        return view('list_confirm');
    }

    // 乗船名簿確認画面のボタン処理
    public function confirm_submit(Request $request)
    {
        $datas = $request->all();

        // 押すボタンのチェック
        switch ($request->input('action')) {
            case '内容を修正する':
                
                return redirect()->route('memberList.create')->with( ['param' => $datas] );
                break;

            case 'この内容で送信する':

                $data = [];
                foreach ($datas['data']['name'] as $i => $name) {
                    $data['yoyaku_no'] = "YM_0001";
                    $data['name'] = $name;
                    $data['address'] = $datas['data']['address'][$i];
                    $data['age'] = $datas['data']['age'][$i];
                    $data['gender'] = $datas['data']['gender'][$i];
                    $data['contact_address'] = $datas['data']['contact'][$i];
                    DB::table('members')->insert($data);
                }

                $param = [];
                $param['from'] = "mayoohlaing@cab-station.com";
                $param['toemail'] = "mayoohlaing@cab-station.com";
                $param['title'] = "「屋形船」乗船名簿";
                $param['content'] = $datas;

                // メール送信
                Mail::send(new MailTemplate($param));
                return redirect('memberListFinish');
                break;
        }
    }

    // 乗船名簿の登録とメール送信完了画面表示
    public function finish()
    {
        Session::flash('flash_message', 'メール送信しました。');
        return view('list_thanks');
    }
}

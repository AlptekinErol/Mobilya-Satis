<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\users;
use App\Models\urunler;
use App\Models\sepetim;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function createUser()
    {
        return view('musteriKayit');
    }



    public function saveUser(Request $request)
    {

        $user = new users;

        $user->kadi = $request->kadi;
        $user->sifre = $request->sifre;
        $user->eposta = $request->eposta;
        $user->Save();
    }
    public function musteriGiris()
    {
        return view('giris');
    }


    public function login(Request $request)
    {
        $user = DB::table('users')->where('kadi', $request->kullanici)->first();
        $urunlers = DB::table('urunlers')->get();



        if ($user != null) {

            if ($request->kullanici == $user->kadi && $request->msifre == $user->sifre) {
                return view('product', array('users' => $user, 'urunlers' => $urunlers));
            } else {

                echo ("Hatalı giriş yaptınız");
            }
        } else {
            echo ("kullanıcı adı şifre eksik !");
        }
    }

    public function adminlogin(Request $request)
    {
        $admin = DB::table('admins')->where('adminAd', $request->akullanici)->first();
        $urunlers = DB::table('urunlers')->get();


        if ($admin != null) {

            if ($request->akullanici == $admin->adminAd && $request->asifre == $admin->Adminsifre) {
                return view('adminpanel', array('admins' => $admin, 'urunlers' => $urunlers));
            } else {

                echo ("Hatalı Admin id ve şifre");
            }
        } else {
            echo ("Böyle bir admin yok !");
        }
    }



    public function anasayfa()
    {
        return view('anasayfa');
    }

    public function yenile()
    {
        dd("yenile");
    }

    public function home()
    {

        return view('home');
    }

    public function product(Request $request)
    {
        $urunlers = DB::table('urunlers')->get();
        $user = DB::table('users')->where('kadi', $request->kullanici)->first();

        return view('home', array('urunlers' => $urunlers, 'users' => $user));
    }

    public function adminGiris()
    {
        return view('adminGiris');
    }

    public function urun()
    {
        $urun = DB::table('urunlers')->get();

        return view('urun', array('urunlers' => $urun));
    }

    public function adminpanel()
    {
        $urun = DB::table('urunlers')->get();

        return view('adminpanel', array('urunlers' => $urun));
    }

    public function cart($id)
    {

        $urunlers = DB::select('select * from urunlers where urunId = ?', [$id]);

        return view('/cart', compact('urunlers', 'user'));
    }
    public function checkout()
    {
        return view('checkout');
    }

    public function urundegis()
    {
        $urun = DB::table('urunlers')->get();
        return view('urundegis', array('urunlers' => $urun));
    }
    public function musteri($id)
    {
        $users = DB::select('select * from users where musteriId = ?', [$id]);
        return view('musteri', ['users' => $users]);
    }

    public function uedit_function($id)
    {
        $users = DB::select('select * from users where musteriId = ?', [$id]);
        return view('musteri', ['users' => $users]);
    }
    public function uupdate_function(request $request, $id)
    {
        $kadi = $request->input('username');
        $sifre = $request->input('sifre');
        $eposta = $request->input('eposta');


        DB::update(
            'update users set kadi = ?, sifre = ? , eposta = ? where musteriId = ?',
            [$kadi, $sifre, $eposta,  $id]
        );

        return redirect('/product')->with('success', 'data updated');
    }

    public function sepetEkle()
    {
    }
}

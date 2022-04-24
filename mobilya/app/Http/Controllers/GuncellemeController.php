<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\urunler;
use App\Models\admin;
use App\Models\users;
use Illuminate\Support\Facades\DB;

class GuncellemeController extends Controller
{
    //ürün ekleme
    public function urunEkle()
    {

        $urunlers = DB::table('urunlers')->get();
        return view('urunEkle', array('urunlers' => $urunlers));
    }


    public function urunSave(Request $request)
    {

        $foto = 'assets/images/';

        $resimadi = $request->resim->getClientOriginalName();
        $request->resim->move(public_path('assets/images'), $resimadi);

        $uruns = new urunler();

        $uruns->urunadi = $request->urunadi;
        $uruns->fiyat = $request->fiyat;
        $uruns->ayrinti = $request->ayrinti;
        $uruns->foto = $foto . $resimadi;
        $uruns->Save();
    }

    //ürün Silme
    public function urunSilSayfa()
    {
        $urunlers = DB::table('urunlers')->get();
        return view('urunSil', array('urunlers' => $urunlers));
    }

    public function urunSil($id)
    {
        DB::delete('delete from urunlers where urunId=?', [$id]);
        return redirect('urunSil');
    }

    //ürün güncelleme
    public function urunGuncelle()
    {
        $urunlers = DB::table('urunlers')->get();
        return view('urunGuncelle', array('urunlers' => $urunlers));
    }

    public function edit_function($id)
    {
        $urunler = DB::select('select * from urunlers where urunId = ?', [$id]);
        return view('edit', ['urunlers' => $urunler]);
    }
    public function update_function(request $request, $id)
    {
        $urunadi = $request->input('urunadi');
        $fiyat = $request->input('fiyat');
        $ayrinti = $request->input('ayrinti');
        $foto = $request->input('foto');

        DB::update(
            'update urunlers set urunadi = ?, fiyat = ? , ayrinti = ?, foto = ? where urunId = ?',
            [$urunadi, $fiyat, $ayrinti, $foto, $id]
        );

        return redirect('urunGuncelle')->with('success', 'data updated');
    }

    //admin işlemleri

    public function adminekle()
    {
        $admins = DB::table('admins')->get();
        return view('adminekle', array('admins' => $admins));
    }

    public function saveAdmin(Request $request)
    {

        $adm = new admin();


        $adm->adminAd = $request->a_adi;
        $adm->Adminsifre = $request->a_sifre;
        $adm->Save();

        return redirect('adminekle');
    }

    public function adminSilSayfa()
    {

        $admins = DB::table('admins')->get();
        return view('adminSil', array('admins' => $admins));
    }

    public function adminSil($id)
    {
        DB::delete('delete from admins where adminid=?', [$id]);
        return redirect('adminSil');
    }



    public function adminGuncelle()
    {
        $admins = DB::table('admins')->get();
        return view('adminGuncelle', array('admins' => $admins));
    }

    public function aedit_function($id)
    {
        $admins = DB::select('select * from admins where adminid = ?', [$id]);

        return view('aedit', ['admins' => $admins]);
    }
    public function aupdate_function(request $request, $id)
    {
        $adminAd = $request->input('adminAd');
        $Adminsifre = $request->input('Adminsifre');


        DB::update(
            'update admins set adminAd = ?, Adminsifre = ? where adminid = ?',
            [$adminAd, $Adminsifre, $id]
        );

        return redirect('adminGuncelle')->with('success', 'data updated');
    }

    // user adminpanel işlemleri
    public function userEkle()
    {

        $users = DB::table('users')->get();
        return view('userEkle', array('users' => $users));
    }


    public function userSave(Request $request)
    {


        $users = new users();

        $users->kadi = $request->kadi;
        $users->sifre = $request->sifre;
        $users->eposta = $request->eposta;

        $users->Save();

        return redirect('userEkle');
    }

    public function userSilSayfa()
    {

        $users = DB::table('users')->get();
        return view('userSil', array('users' => $users));
    }

    public function userSil($id)
    {
        DB::delete('delete from users where musteriId=?', [$id]);
        return redirect('userSil');
    }

    public function useredit_function($id)
    {
        $users = DB::select('select * from users where musteriId = ?', [$id]);

        return view('useredit', ['users' => $users]);
    }
    public function userupdate_function(request $request, $id)
    {
        $kadi = $request->input('kadi');
        $sifre = $request->input('sifre');
        $eposta = $request->input('eposta');


        DB::update(
            'update users set kadi = ?, sifre = ? , eposta=? where musteriId = ?',
            [$kadi, $sifre, $eposta, $id]
        );

        return redirect('userGuncelle')->with('success', 'data updated');
    }

    public function userGuncelle()
    {
        $users = DB::table('users')->get();
        return view('userGuncelle', array('users' => $users));
    }

    public function musteriSil($id)
    {
        DB::delete('delete from users where musteriId=?', [$id]);
        return redirect('product');
    }

    public function ayrintilar()
    {
        return view('ayrintilar');
    }

    // sepet görüntüleme

    public function sepet()
    {
        $sepetims = DB::table('sepetims')->get();
        return view('sepet', array('sepetims' => $sepetims));
    }
}

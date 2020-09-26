<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RSSController extends Controller
{
    public function index(){
        $feed = DB::table('news')->paginate(10);
        return view('index',['feed' => $feed]);
    }

    public function addBerita(){
        $cnn_nasional = simplexml_load_file ("https://www.cnnindonesia.com/nasional/rss");
        $mainrequest = $cnn_nasional->channel;

        foreach ($cnn_nasional->channel->item as $request) {
            DB::table('news')->insert([
                'title' => $request->title,
                'date' => $request->pubDate,
                'link' => $request->link,
                'category' => $mainrequest->title,
                'description' => $request->description
            ]);
        }

        return redirect('/');
    }

    public function hapusBerita($id){
        DB::table('news')->where('id',$id)->delete();
        return redirect('/');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$feed = DB::table('news')
		->where('description','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('index',['feed' => $feed]);
 
	}
}
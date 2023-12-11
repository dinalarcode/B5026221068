<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UnknownController extends Controller
{
	public function index()
	{
        $chat = DB::table('chat')->get();
        $emojiMappings = [
            ':))' => 'assets/img/1.png',
            ':3' => 'assets/img/2.png',
            ':P' => 'assets/img/3.png',
            ':C' => 'assets/img/4.png',
            ';)' => 'assets/img/5.png',];
		return view('indexunknown',['chat' => $chat, 'emojiMappings' => $emojiMappings]);
	}

    public function replace()
    {
        $chat = DB::table('chat')->get();
        $emojiMappings = [
            ':))' => 'assets/img/1.png',
            ':3' => 'assets/img/2.png',
            ':P' => 'assets/img/3.png',
            ':C' => 'assets/img/4.png',
            ';)' => 'assets/img/5.png',
        ];

        foreach ($chat as $message) {
            $words = explode(" ", $message->pesan);
            foreach ($words as &$word) {
                if (array_key_exists($word, $emojiMappings)) {
                    $word = $emojiMappings[$word];
                }
            }
    $message->pesan = implode(" ", $words);
    DB::table('chat')->where('id', $message->id)->update(['pesan' => $message->pesan]);
        }
    }
}



<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    //
    public function index()
    {

        $content = [
            'title' => 'Scheduling Laravel',
            'body' => 'Pesan Ini Dikirim Dari Task Scheduling Laravel'

        ];
        Mail::to('habsyi.ikhlashulariq@gmail.com')->send(new SendMail($content));

        return "Berhasil Kirim Email";
    }
}

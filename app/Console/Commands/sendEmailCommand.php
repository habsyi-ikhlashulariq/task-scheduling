<?php

namespace App\Console\Commands;

use App\Mail\SendMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class sendEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $content = [
            'title' => 'Scheduling Laravel',
            'body' => 'Pesan Ini Dikirim Dari Task Scheduling Laravel'

        ];
        Mail::to('habsyi.ikhlashulariq@gmail.com')->send(new SendMail($content));
    }
}

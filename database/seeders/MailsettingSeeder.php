<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mailsetting;

class MailsettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mailsetting::create([
            'mail_transport'            =>'smtp',
            'mail_host'                 =>'smtp.gmail.com',
            'mail_port'                 =>'587',
            'mail_username'             =>'alejandro.pytest11@gmail.com',
            'mail_password'             =>'lrkiuaoxaivaqoen',
            'mail_encryption'           =>'tls',
            'mail_from'                 => 'alejandroguzman2322@gmail.com',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bucket;

class MailsettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bucket::create([
            'DO_SPACES_KEY'=>'DO00HLRA7KBFWX7XT4CE',
'DO_SPACES_SECRET'=>'SHDdKmnVJp2/9sustpHq7dU3MMbo5aggmp7YBlxrm/o',
'DO_SPACES_ENDPOINT'=>'https://sfo3.digitaloceanspaces.com',
'DO_SPACES_REGION'=>'SFO3',
'DO_SPACES_BUCKET'=>'recursos2023',
'DO_SPACES_URL'=>'https://recursos2023.sfo3.digitaloceanspaces.com'
        ]);
    }
}

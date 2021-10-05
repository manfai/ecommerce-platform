<?php

use Illuminate\Database\Seeder;
use App\Models\Adoption;
use App\Models\AdoptionUpload;

class AdoptionUploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Adoption::all()->each(function (Adoption $adoption) {
            AdoptionUpload::factory()->count(random_int(1, 3))->create(['adoption_id' => $adoption->id]);
        });
    }
}

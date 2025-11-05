<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Application;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $applications = [
            ['id' => 1, 'offer_id' => 3, 'candidate_id' => 1, 'application_date' => '2024-11-15', 'status' => 'Enviada'],
            ['id' => 2, 'offer_id' => 1, 'candidate_id' => 2, 'application_date' => '2024-12-01', 'status' => 'En revisión'],
            ['id' => 3, 'offer_id' => 5, 'candidate_id' => 3, 'application_date' => '2025-01-10', 'status' => 'Seleccionado'],
            ['id' => 4, 'offer_id' => 7, 'candidate_id' => 4, 'application_date' => '2025-02-05', 'status' => 'Rechazado'],
            ['id' => 5, 'offer_id' => 2, 'candidate_id' => 5, 'application_date' => '2025-03-12', 'status' => 'Enviada'],
            ['id' => 6, 'offer_id' => 9, 'candidate_id' => 6, 'application_date' => '2025-04-01', 'status' => 'En revisión'],
            ['id' => 7, 'offer_id' => 4, 'candidate_id' => 7, 'application_date' => '2025-04-20', 'status' => 'Seleccionado'],
            ['id' => 8, 'offer_id' => 6, 'candidate_id' => 8, 'application_date' => '2025-05-10', 'status' => 'Rechazado'],
            ['id' => 9, 'offer_id' => 10, 'candidate_id' => 9, 'application_date' => '2025-05-25', 'status' => 'Enviada'],
            ['id' => 10, 'offer_id' => 8, 'candidate_id' => 10, 'application_date' => '2025-06-15', 'status' => 'En revisión'],
            ['id' => 11, 'offer_id' => 12, 'candidate_id' => 11, 'application_date' => '2025-06-30', 'status' => 'Seleccionado'],
            ['id' => 12, 'offer_id' => 11, 'candidate_id' => 12, 'application_date' => '2025-07-05', 'status' => 'Rechazado'],
            ['id' => 13, 'offer_id' => 14, 'candidate_id' => 13, 'application_date' => '2025-07-20', 'status' => 'Enviada'],
            ['id' => 14, 'offer_id' => 13, 'candidate_id' => 14, 'application_date' => '2025-08-01', 'status' => 'En revisión'],
            ['id' => 15, 'offer_id' => 15, 'candidate_id' => 15, 'application_date' => '2025-08-15', 'status' => 'Seleccionado'],
            ['id' => 16, 'offer_id' => 18, 'candidate_id' => 16, 'application_date' => '2025-09-01', 'status' => 'Rechazado'],
            ['id' => 17, 'offer_id' => 16, 'candidate_id' => 17, 'application_date' => '2025-09-18', 'status' => 'Enviada'],
            ['id' => 18, 'offer_id' => 20, 'candidate_id' => 18, 'application_date' => '2025-10-01', 'status' => 'En revisión'],
            ['id' => 19, 'offer_id' => 17, 'candidate_id' => 19, 'application_date' => '2025-10-10', 'status' => 'Seleccionado'],
            ['id' => 20, 'offer_id' => 19, 'candidate_id' => 20, 'application_date' => '2025-10-18', 'status' => 'Rechazado'],
            ['id' => 21, 'offer_id' => 22, 'candidate_id' => 3, 'application_date' => '2025-05-05', 'status' => 'Enviada'],
            ['id' => 22, 'offer_id' => 21, 'candidate_id' => 6, 'application_date' => '2025-05-20', 'status' => 'En revisión'],
            ['id' => 23, 'offer_id' => 25, 'candidate_id' => 8, 'application_date' => '2025-06-05', 'status' => 'Seleccionado'],
            ['id' => 24, 'offer_id' => 23, 'candidate_id' => 10, 'application_date' => '2025-06-20', 'status' => 'Rechazado'],
            ['id' => 25, 'offer_id' => 24, 'candidate_id' => 5, 'application_date' => '2025-07-10', 'status' => 'Enviada'],
            ['id' => 26, 'offer_id' => 27, 'candidate_id' => 9, 'application_date' => '2025-07-25', 'status' => 'En revisión'],
            ['id' => 27, 'offer_id' => 28, 'candidate_id' => 2, 'application_date' => '2025-08-10', 'status' => 'Seleccionado'],
            ['id' => 28, 'offer_id' => 26, 'candidate_id' => 7, 'application_date' => '2025-08-25', 'status' => 'Rechazado'],
            ['id' => 29, 'offer_id' => 29, 'candidate_id' => 4, 'application_date' => '2025-09-10', 'status' => 'Enviada'],
            ['id' => 30, 'offer_id' => 30, 'candidate_id' => 1, 'application_date' => '2025-09-25', 'status' => 'En revisión'],

        ];

        foreach ($applications as $a){
            Application::create($a);
        }
    }
}

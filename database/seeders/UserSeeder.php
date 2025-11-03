<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Usuarios existentes
        $users = [
            ['name'=>'Juan Pérez', 'email'=>'juan.perez@example.com', 'role_id'=>1],
            ['name'=>'TechCorp S.A.', 'email'=>'contact@techcorp.com', 'role_id'=>2],
            ['name'=>'María Gómez', 'email'=>'maria.gomez@example.com', 'role_id'=>1],
            ['name'=>'Innova Solutions', 'email'=>'info@innovasolutions.com', 'role_id'=>2],
            ['name'=>'Carlos Ramírez', 'email'=>'carlos.ramirez@example.com', 'role_id'=>1],
            ['name'=>'Green Energy Ltd.', 'email'=>'support@greenenergy.com', 'role_id'=>2],
            ['name'=>'Laura Torres', 'email'=>'laura.torres@example.com', 'role_id'=>1],
            ['name'=>'MarketingPlus', 'email'=>'hello@marketingplus.com', 'role_id'=>2],
            ['name'=>'Andrés Castillo', 'email'=>'andres.castillo@example.com', 'role_id'=>1],
            ['name'=>'FinTech Group', 'email'=>'contact@fintechgroup.com', 'role_id'=>2],
            ['name'=>'Sofía Rojas', 'email'=>'sofia.rojas@example.com', 'role_id'=>1],
            ['name'=>'HealthCare Co.', 'email'=>'info@healthcare.com', 'role_id'=>2],
            ['name'=>'Miguel Ángel', 'email'=>'miguel.angel@example.com', 'role_id'=>1],
            ['name'=>'EduSmart Ltd.', 'email'=>'support@edusmart.com', 'role_id'=>2],
            ['name'=>'Valentina Morales', 'email'=>'valentina.morales@example.com', 'role_id'=>1],
            ['name'=>'AutoMotive Inc.', 'email'=>'contact@automotive.com', 'role_id'=>2],
            ['name'=>'Daniel Herrera', 'email'=>'daniel.herrera@example.com', 'role_id'=>1],
            ['name'=>'Foodies Co.', 'email'=>'info@foodies.com', 'role_id'=>2],
            ['name'=>'Camila Sánchez', 'email'=>'camila.sanchez@example.com', 'role_id'=>1],
            ['name'=>'TravelExperts', 'email'=>'hello@travelexperts.com', 'role_id'=>2],
            ['name'=>'Javier Martínez', 'email'=>'javier.martinez@example.com', 'role_id'=>1],
            ['name'=>'BuildIt Ltd.', 'email'=>'support@buildit.com', 'role_id'=>2],
            ['name'=>'Isabela Castillo', 'email'=>'isabela.castillo@example.com', 'role_id'=>1],
            ['name'=>'DesignWorks', 'email'=>'contact@designworks.com', 'role_id'=>2],
            ['name'=>'Sebastián López', 'email'=>'sebastian.lopez@example.com', 'role_id'=>1],
            ['name'=>'LogiTech Solutions', 'email'=>'info@logitech.com', 'role_id'=>2],
            ['name'=>'Natalia Ríos', 'email'=>'natalia.rios@example.com', 'role_id'=>1],
            ['name'=>'SmartHome Inc.', 'email'=>'hello@smarthome.com', 'role_id'=>2],
            ['name'=>'Andrés Torres', 'email'=>'andres.torres@example.com', 'role_id'=>1],
            ['name'=>'AgroTech Co.', 'email'=>'support@agrotech.com', 'role_id'=>2],
            ['name'=>'Camilo Fernández', 'email'=>'camilo.fernandez@example.com', 'role_id'=>1],
            ['name'=>'FinConsult Ltd.', 'email'=>'contact@finconsult.com', 'role_id'=>2],
            ['name'=>'Daniela Ramírez', 'email'=>'daniela.ramirez@example.com', 'role_id'=>1],
            ['name'=>'MediaHouse', 'email'=>'info@mediahouse.com', 'role_id'=>2],
            ['name'=>'Ricardo Morales', 'email'=>'ricardo.morales@example.com', 'role_id'=>1],
            ['name'=>'TechSolutions', 'email'=>'hello@techsolutions.com', 'role_id'=>2],
            ['name'=>'Laura González', 'email'=>'laura.gonzalez@example.com', 'role_id'=>1],
            ['name'=>'GreenFoods Ltd.', 'email'=>'support@greenfoods.com', 'role_id'=>2],
            ['name'=>'Felipe Sánchez', 'email'=>'felipe.sanchez@example.com', 'role_id'=>1],
            ['name'=>'TravelCo', 'email'=>'contact@travelco.com', 'role_id'=>2],
            ['name'=>'Alejandro Moreno', 'email'=>'alejandro.moreno@example.com', 'role_id'=>1],
            ['name'=>'NextGen Tech', 'email'=>'info@nextgentech.com', 'role_id'=>2],
            ['name'=>'Lucía Fernández', 'email'=>'lucia.fernandez@example.com', 'role_id'=>1],
            ['name'=>'EcoBuild Ltd.', 'email'=>'contact@ecobuild.com', 'role_id'=>2],
            ['name'=>'Diego Torres', 'email'=>'diego.torres@example.com', 'role_id'=>1],
            ['name'=>'FinTech Solutions', 'email'=>'support@fintechsolutions.com', 'role_id'=>2],
            ['name'=>'Mariana López', 'email'=>'mariana.lopez@example.com', 'role_id'=>1],
            ['name'=>'GreenTech Co.', 'email'=>'hello@greentech.com', 'role_id'=>2],
            ['name'=>'Santiago Gómez', 'email'=>'santiago.gomez@example.com', 'role_id'=>1],
            ['name'=>'HealthPlus Ltd.', 'email'=>'info@healthplus.com', 'role_id'=>2],
            ['name'=>'Camila Rodríguez', 'email'=>'camila.rodriguez@example.com', 'role_id'=>1],
            ['name'=>'AutoWorld Inc.', 'email'=>'contact@autoworld.com', 'role_id'=>2],
            ['name'=>'Jorge Herrera', 'email'=>'jorge.herrera@example.com', 'role_id'=>1],
            ['name'=>'MediaWorks', 'email'=>'support@mediaworks.com', 'role_id'=>2],
            ['name'=>'Daniela Castro', 'email'=>'daniela.castro@example.com', 'role_id'=>1],
            ['name'=>'Innovatech Ltd.', 'email'=>'hello@innovatech.com', 'role_id'=>2],
            ['name'=>'Felipe Moreno', 'email'=>'felipe.moreno@example.com', 'role_id'=>1],
            ['name'=>'TravelWorld Co.', 'email'=>'contact@travelworld.com', 'role_id'=>2],
            ['name'=>'Valeria Ramírez', 'email'=>'valeria.ramirez@example.com', 'role_id'=>1],
            ['name'=>'TechMasters', 'email'=>'info@techmasters.com', 'role_id'=>2],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'role_id' => $user['role_id'],
                'password' => Hash::make('password123'),
            ]);
        }
    }
}

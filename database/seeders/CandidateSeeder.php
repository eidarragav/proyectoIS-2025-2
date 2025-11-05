<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Candidate;

class CandidateSeeder extends Seeder
{
    public function run(): void
    {

        $candidates = [
            ['user_id' => 1, 'name'=>'Juan Pérez', 'document'=>'1023456789', 'birthdate'=>'1990-05-12', 'phone'=>'3001234567', 'deparment'=>'Antioquia', 'city'=>'Medellín', 'job_title'=>'Desarrollador Web', 'description'=>'Programador con experiencia en Laravel y PHP.', 'can_travel'=>'yes'],
            ['user_id' => 3, 'name'=>'María Gómez', 'document'=>'1034567890', 'birthdate'=>'1992-08-20', 'phone'=>'3109876543', 'deparment'=>'Cundinamarca', 'city'=>'Bogotá', 'job_title'=>'Diseñadora Gráfica', 'description'=>'Creativa y con experiencia en branding y diseño digital.', 'can_travel'=>'no'],
            ['user_id' => 5, 'name'=>'Carlos Ramírez', 'document'=>'1045678901', 'birthdate'=>'1988-11-02', 'phone'=>'3123456789', 'deparment'=>'Valle del Cauca', 'city'=>'Cali', 'job_title'=>'Ingeniero de Sistemas', 'description'=>'Especialista en redes y seguridad informática.', 'can_travel'=>'yes'],
            ['user_id' => 7, 'name'=>'Laura Torres', 'document'=>'1056789012', 'birthdate'=>'1995-03-15', 'phone'=>'3156789012', 'deparment'=>'Atlántico', 'city'=>'Barranquilla', 'job_title'=>'Marketing Digital', 'description'=>'Experiencia en campañas publicitarias y social media.', 'can_travel'=>'no'],
            ['user_id' => 9, 'name'=>'Andrés Castillo', 'document'=>'1067890123', 'birthdate'=>'1991-07-28', 'phone'=>'3201234567', 'deparment'=>'Santander', 'city'=>'Bucaramanga', 'job_title'=>'Analista de Datos', 'description'=>'Manejo de SQL, Excel y herramientas de análisis de datos.', 'can_travel'=>'yes'],
            ['user_id' => 11, 'name'=>'Sofía Rojas', 'document'=>'1078901234', 'birthdate'=>'1993-01-05', 'phone'=>'3212345678', 'deparment'=>'Bolívar', 'city'=>'Cartagena', 'job_title'=>'Community Manager', 'description'=>'Experta en gestión de redes sociales y engagement.', 'can_travel'=>'no'],
            ['user_id' => 13, 'name'=>'Miguel Ángel', 'document'=>'1089012345', 'birthdate'=>'1987-12-12', 'phone'=>'3223456789', 'deparment'=>'Caldas', 'city'=>'Manizales', 'job_title'=>'Desarrollador Frontend', 'description'=>'Experiencia en HTML, CSS, JavaScript y Vue.js.', 'can_travel'=>'yes'],
            ['user_id' => 15, 'name'=>'Valentina Morales', 'document'=>'1090123456', 'birthdate'=>'1994-09-18', 'phone'=>'3234567890', 'deparment'=>'Cauca', 'city'=>'Popayán', 'job_title'=>'UX/UI Designer', 'description'=>'Diseñadora enfocada en experiencias de usuario intuitivas.', 'can_travel'=>'no'],
            ['user_id' => 17, 'name'=>'Daniel Herrera', 'document'=>'1101234567', 'birthdate'=>'1990-04-22', 'phone'=>'3245678901', 'deparment'=>'Nariño', 'city'=>'Pasto', 'job_title'=>'Ingeniero de Software', 'description'=>'Especializado en desarrollo backend con Laravel y Node.js.', 'can_travel'=>'yes'],
            ['user_id' => 19, 'name'=>'Camila Sánchez', 'document'=>'1112345678', 'birthdate'=>'1996-06-30', 'phone'=>'3256789012', 'deparment'=>'Boyacá', 'city'=>'Tunja', 'job_title'=>'Data Scientist', 'description'=>'Experiencia en Python, R y análisis de grandes volúmenes de datos.', 'can_travel'=>'no'],
            ['user_id' => 21, 'name'=>'Alejandro Moreno', 'document'=>'1223456789', 'birthdate'=>'1990-02-14', 'phone'=>'3367890123', 'deparment'=>'Cundinamarca', 'city'=>'Bogotá', 'job_title'=>'Desarrollador Backend', 'description'=>'Experiencia en Node.js, Laravel y APIs REST.', 'can_travel'=>'yes'],
            ['user_id' => 23, 'name'=>'Lucía Fernández', 'document'=>'1234567890', 'birthdate'=>'1993-07-20', 'phone'=>'3378901234', 'deparment'=>'Antioquia', 'city'=>'Medellín', 'job_title'=>'Diseñadora UX', 'description'=>'Experiencia en diseño centrado en el usuario y prototipos.', 'can_travel'=>'no'],
            ['user_id' => 25, 'name'=>'Diego Torres', 'document'=>'1245678901', 'birthdate'=>'1991-05-30', 'phone'=>'3389012345', 'deparment'=>'Valle del Cauca', 'city'=>'Cali', 'job_title'=>'Analista de Datos', 'description'=>'Especialista en análisis de datos y visualización con Power BI.', 'can_travel'=>'yes'],
            ['user_id' => 27, 'name'=>'Mariana López', 'document'=>'1256789012', 'birthdate'=>'1994-11-12', 'phone'=>'3390123456', 'deparment'=>'Cundinamarca', 'city'=>'Bogotá', 'job_title'=>'Ingeniera de Sistemas', 'description'=>'Experta en desarrollo de aplicaciones web.', 'can_travel'=>'yes'],
            ['user_id' => 29, 'name'=>'Santiago Gómez', 'document'=>'1267890123', 'birthdate'=>'1992-03-08', 'phone'=>'3401234567', 'deparment'=>'Santander', 'city'=>'Bucaramanga', 'job_title'=>'Ingeniero QA', 'description'=>'Pruebas de software y aseguramiento de calidad.', 'can_travel'=>'no'],
            ['user_id' => 31, 'name'=>'Camila Rodríguez', 'document'=>'1278901234', 'birthdate'=>'1995-09-18', 'phone'=>'3412345678', 'deparment'=>'Atlántico', 'city'=>'Barranquilla', 'job_title'=>'Community Manager', 'description'=>'Gestión de redes sociales y contenido digital.', 'can_travel'=>'yes'],
            ['user_id' => 33, 'name'=>'Jorge Herrera', 'document'=>'1289012345', 'birthdate'=>'1989-12-22', 'phone'=>'3423456789', 'deparment'=>'Caldas', 'city'=>'Manizales', 'job_title'=>'Desarrollador Frontend', 'description'=>'Experiencia en React y Vue.', 'can_travel'=>'yes'],
            ['user_id' => 35, 'name'=>'Daniela Castro', 'document'=>'1290123456', 'birthdate'=>'1993-06-15', 'phone'=>'3434567890', 'deparment'=>'Cauca', 'city'=>'Popayán', 'job_title'=>'Diseñadora Gráfica', 'description'=>'Diseño de identidad corporativa y marketing digital.', 'can_travel'=>'no'],
            ['user_id' => 37, 'name'=>'Felipe Moreno', 'document'=>'1301234567', 'birthdate'=>'1990-10-10', 'phone'=>'3445678901', 'deparment'=>'Boyacá', 'city'=>'Tunja', 'job_title'=>'Analista Financiero', 'description'=>'Evaluación de inversiones y análisis de datos financieros.', 'can_travel'=>'yes'],
            ['user_id' => 39, 'name'=>'Valeria Ramírez', 'document'=>'1312345678', 'birthdate'=>'1992-01-20', 'phone'=>'3456789012', 'deparment'=>'Tolima', 'city'=>'Ibagué', 'job_title'=>'Project Manager', 'description'=>'Gestión de proyectos y coordinación de equipos.', 'can_travel'=>'no'],
        ];

        foreach ($candidates as $c) {
            Candidate::create($c);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Offer;

class OfferSeeder extends Seeder
{
    public function run(): void
    {
        $companies = Company::all()->keyBy('user_id');

        // Lista de ofertas con user_id aleatorios (puede repetirse)
        $offers = [
            ['user_id'=>18, 'title'=>'Chef Ejecutivo', 'description'=>'Desarrollo de menú gourmet y supervisión de cocina.', 'salary'=>'$3500', 'work_modality'=>'Presencial', 'type_contract'=>'Contrato'],
            ['user_id'=>4,  'title'=>'Consultor Digital', 'description'=>'Asesoría en transformación digital.', 'salary'=>'$3500', 'work_modality'=>'Presencial', 'type_contract'=>'Término Indefinido'],
            ['user_id'=>10, 'title'=>'Analista Financiero Junior', 'description'=>'Apoyo en análisis de datos financieros.', 'salary'=>'$3000', 'work_modality'=>'Remoto', 'type_contract'=>'Contrato'],
            ['user_id'=>2,  'title'=>'Desarrollador Backend', 'description'=>'Desarrollo de APIs y microservicios.', 'salary'=>'$4000', 'work_modality'=>'Remoto', 'type_contract'=>'Contrato'],
            ['user_id'=>12, 'title'=>'Enfermero Coordinador', 'description'=>'Gestión de turnos y atención al paciente.', 'salary'=>'$3200', 'work_modality'=>'Presencial', 'type_contract'=>'Término Indefinido'],
            ['user_id'=>8,  'title'=>'Especialista Marketing', 'description'=>'Campañas digitales y SEO.', 'salary'=>'$3000', 'work_modality'=>'Remoto', 'type_contract'=>'Contrato'],
            ['user_id'=>20, 'title'=>'Agente de Viajes', 'description'=>'Planificación de tours y paquetes turísticos.', 'salary'=>'$2800', 'work_modality'=>'Híbrido', 'type_contract'=>'Contrato'],
            ['user_id'=>16, 'title'=>'Ingeniero Mecánico', 'description'=>'Mantenimiento y fabricación de vehículos.', 'salary'=>'$4000', 'work_modality'=>'Presencial', 'type_contract'=>'Término Indefinido'],
            ['user_id'=>14, 'title'=>'Tutor Online', 'description'=>'Clases y acompañamiento educativo.', 'salary'=>'$2500', 'work_modality'=>'Remoto', 'type_contract'=>'Contrato'],
            ['user_id'=>6,  'title'=>'Ingeniero Energías Renovables', 'description'=>'Implementación de soluciones sostenibles.', 'salary'=>'$4500', 'work_modality'=>'Híbrido', 'type_contract'=>'Contrato'],
            ['user_id'=>32, 'title'=>'Asesor Financiero', 'description'=>'Análisis y consultoría de inversiones.', 'salary'=>'$3500', 'work_modality'=>'Presencial', 'type_contract'=>'Contrato'],
            ['user_id'=>48, 'title'=>'Consultor Financiero', 'description'=>'Asesoría en planificación financiera.', 'salary'=>'$4000', 'work_modality'=>'Presencial', 'type_contract'=>'Término Indefinido'],
            ['user_id'=>26, 'title'=>'Especialista Logístico', 'description'=>'Optimización de procesos y transporte.', 'salary'=>'$3800', 'work_modality'=>'Remoto', 'type_contract'=>'Contrato'],
            ['user_id'=>2,  'title'=>'Desarrollador Frontend', 'description'=>'Creación de interfaces y experiencia de usuario.', 'salary'=>'$3700', 'work_modality'=>'Remoto', 'type_contract'=>'Contrato'],
            ['user_id'=>36, 'title'=>'Desarrollador Fullstack', 'description'=>'Desarrollo de aplicaciones web y móviles.', 'salary'=>'$4200', 'work_modality'=>'Remoto', 'type_contract'=>'Contrato'],
            ['user_id'=>30, 'title'=>'Agrónomo', 'description'=>'Gestión de cultivos y procesos agrícolas.', 'salary'=>'$3200', 'work_modality'=>'Presencial', 'type_contract'=>'Término Indefinido'],
            ['user_id'=>22, 'title'=>'Arquitecto Civil', 'description'=>'Diseño y supervisión de proyectos de construcción.', 'salary'=>'$4500', 'work_modality'=>'Presencial', 'type_contract'=>'Término Indefinido'],
            ['user_id'=>50, 'title'=>'Médico General', 'description'=>'Atención integral y supervisión de pacientes.', 'salary'=>'$4200', 'work_modality'=>'Presencial', 'type_contract'=>'Contrato'],
            ['user_id'=>42, 'title'=>'Ingeniero de Software', 'description'=>'Desarrollo de soluciones tecnológicas avanzadas.', 'salary'=>'$4500', 'work_modality'=>'Remoto', 'type_contract'=>'Contrato'],
            ['user_id'=>6,  'title'=>'Ingeniero de Energía Solar', 'description'=>'Proyectos de energía solar residencial.', 'salary'=>'$4000', 'work_modality'=>'Híbrido', 'type_contract'=>'Contrato'],
            ['user_id'=>8,  'title'=>'Community Manager', 'description'=>'Gestión de redes sociales y marketing digital.', 'salary'=>'$2800', 'work_modality'=>'Remoto', 'type_contract'=>'Contrato'],
            ['user_id'=>12, 'title'=>'Enfermero de Sala', 'description'=>'Atención directa a pacientes hospitalizados.', 'salary'=>'$3000', 'work_modality'=>'Presencial', 'type_contract'=>'Contrato'],
            ['user_id'=>16, 'title'=>'Técnico Mecánico', 'description'=>'Mantenimiento de vehículos y maquinaria.', 'salary'=>'$3500', 'work_modality'=>'Presencial', 'type_contract'=>'Término Indefinido'],
            ['user_id'=>32, 'title'=>'Analista Financiero Senior', 'description'=>'Supervisión y análisis financiero de empresas.', 'salary'=>'$4500', 'work_modality'=>'Presencial', 'type_contract'=>'Término Indefinido'],
            ['user_id'=>20, 'title'=>'Agente de Viajes Junior', 'description'=>'Soporte en tours y reservas.', 'salary'=>'$2500', 'work_modality'=>'Híbrido', 'type_contract'=>'Contrato'],
            ['user_id'=>14, 'title'=>'Profesor Online', 'description'=>'Clases y acompañamiento educativo.', 'salary'=>'$2700', 'work_modality'=>'Remoto', 'type_contract'=>'Contrato'],
            ['user_id'=>26, 'title'=>'Especialista en Logística Senior', 'description'=>'Optimización avanzada de procesos.', 'salary'=>'$4000', 'work_modality'=>'Remoto', 'type_contract'=>'Término Indefinido'],
            ['user_id'=>4,  'title'=>'Consultor Junior', 'description'=>'Soporte en proyectos de consultoría.', 'salary'=>'$3200', 'work_modality'=>'Presencial', 'type_contract'=>'Contrato'],
            ['user_id'=>36, 'title'=>'Desarrollador Mobile', 'description'=>'Aplicaciones móviles y mantenimiento.', 'salary'=>'$4100', 'work_modality'=>'Remoto', 'type_contract'=>'Contrato'],
            ['user_id'=>48, 'title'=>'Analista Financiero', 'description'=>'Estudios financieros y reportes.', 'salary'=>'$3800', 'work_modality'=>'Presencial', 'type_contract'=>'Contrato'],
            ['user_id'=>50, 'title'=>'Médico Especialista', 'description'=>'Atención especializada y supervisión de pacientes.', 'salary'=>'$4500', 'work_modality'=>'Presencial', 'type_contract'=>'Término Indefinido'],
            ['user_id'=>2,  'title'=>'Ingeniero Backend', 'description'=>'APIs y microservicios avanzados.', 'salary'=>'$4200', 'work_modality'=>'Remoto', 'type_contract'=>'Contrato'],
            ['user_id'=>10, 'title'=>'Analista de Datos', 'description'=>'Extracción y análisis de información.', 'salary'=>'$3500', 'work_modality'=>'Híbrido', 'type_contract'=>'Contrato'],
            ['user_id'=>18, 'title'=>'Chef Pastelero', 'description'=>'Creación de postres y supervisión.', 'salary'=>'$3300', 'work_modality'=>'Presencial', 'type_contract'=>'Contrato'],
            ['user_id'=>22, 'title'=>'Arquitecto Senior', 'description'=>'Proyectos de gran escala.', 'salary'=>'$4700', 'work_modality'=>'Presencial', 'type_contract'=>'Término Indefinido'],
            ['user_id'=>30, 'title'=>'Ingeniero Agrícola', 'description'=>'Supervisión de cultivos y procesos agrícolas.', 'salary'=>'$3400', 'work_modality'=>'Presencial', 'type_contract'=>'Contrato'],
            ['user_id'=>32, 'title'=>'Asesor Financiero Junior', 'description'=>'Soporte en consultoría e inversiones.', 'salary'=>'$3200', 'work_modality'=>'Presencial', 'type_contract'=>'Contrato'],
            ['user_id'=>14, 'title'=>'Tutor Educativo', 'description'=>'Clases y seguimiento académico.', 'salary'=>'$2600', 'work_modality'=>'Remoto', 'type_contract'=>'Contrato'],
            ['user_id'=>4,  'title'=>'Consultor Estratégico', 'description'=>'Planeación y análisis de proyectos.', 'salary'=>'$3800', 'work_modality'=>'Presencial', 'type_contract'=>'Término Indefinido'],
            ['user_id'=>36, 'title'=>'Desarrollador Fullstack Senior', 'description'=>'Soluciones web completas.', 'salary'=>'$4500', 'work_modality'=>'Remoto', 'type_contract'=>'Contrato'],
            ['user_id'=>16, 'title'=>'Ingeniero Mecánico Senior', 'description'=>'Mantenimiento avanzado y fabricación.', 'salary'=>'$4200', 'work_modality'=>'Presencial', 'type_contract'=>'Término Indefinido'],
        ];

        foreach ($offers as $offer) {
            if (isset($companies[$offer['user_id']])) {
                Offer::create([
                    'company_id'    => $companies[$offer['user_id']]->id,
                    'title'         => $offer['title'],
                    'description'   => $offer['description'],
                    'salary'        => $offer['salary'],
                    'work_modality' => $offer['work_modality'],
                    'type_contract' => $offer['type_contract'],
                ]);
            }
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        $companies = [
            ['user_id'=>2,  'name'=>'TechCorp S.A.',          'sector'=>'Tecnología',   'phone'=>'3001234500', 'city'=>'Medellín',      'adress'=>'Calle 10 # 20-30',      'description'=>'Empresa de software y soluciones tecnológicas.', 'website'=>'https://techcorp.com'],
            ['user_id'=>4,  'name'=>'Innova Solutions',       'sector'=>'Consultoría',  'phone'=>'3101234500', 'city'=>'Bogotá',        'adress'=>'Carrera 15 # 45-60',    'description'=>'Consultoría especializada en transformación digital.', 'website'=>'https://innovasolutions.com'],
            ['user_id'=>6,  'name'=>'Green Energy Ltd.',      'sector'=>'Energía',      'phone'=>'3111234500', 'city'=>'Cali',          'adress'=>'Av. 5 # 30-40',        'description'=>'Soluciones de energía renovable y sustentable.', 'website'=>'https://greenenergy.com'],
            ['user_id'=>8,  'name'=>'MarketingPlus',         'sector'=>'Marketing',    'phone'=>'3121234500', 'city'=>'Barranquilla', 'adress'=>'Calle 50 # 10-20',     'description'=>'Agencia de marketing digital y publicidad.', 'website'=>'https://marketingplus.com'],
            ['user_id'=>10, 'name'=>'FinTech Group',         'sector'=>'Finanzas',     'phone'=>'3131234500', 'city'=>'Bucaramanga',   'adress'=>'Calle 100 # 20-30',    'description'=>'Soluciones financieras y tecnológicas para empresas.', 'website'=>'https://fintechgroup.com'],
            ['user_id'=>12, 'name'=>'HealthCare Co.',        'sector'=>'Salud',        'phone'=>'3141234500', 'city'=>'Cartagena',     'adress'=>'Av. del Mar # 5-10',    'description'=>'Servicios y soluciones de atención médica.', 'website'=>'https://healthcareco.com'],
            ['user_id'=>14, 'name'=>'EduSmart Ltd.',         'sector'=>'Educación',    'phone'=>'3151234500', 'city'=>'Manizales',     'adress'=>'Calle 25 # 10-20',     'description'=>'Plataforma de educación y aprendizaje online.', 'website'=>'https://edusmart.com'],
            ['user_id'=>16, 'name'=>'AutoMotive Inc.',       'sector'=>'Automotriz',   'phone'=>'3161234500', 'city'=>'Popayán',       'adress'=>'Carrera 12 # 5-15',     'description'=>'Fabricación y venta de vehículos automotores.', 'website'=>'https://automotiveinc.com'],
            ['user_id'=>18, 'name'=>'Foodies Co.',           'sector'=>'Alimentación', 'phone'=>'3171234500', 'city'=>'Tunja',         'adress'=>'Calle 30 # 15-20',     'description'=>'Compañía especializada en alimentos gourmet.', 'website'=>'https://foodiesco.com'],
            ['user_id'=>20, 'name'=>'TravelExperts',        'sector'=>'Turismo',      'phone'=>'3181234500', 'city'=>'Armenia',       'adress'=>'Carrera 10 # 25-30',    'description'=>'Agencia de viajes y turismo nacional e internacional.', 'website'=>'https://travelexperts.com'],
            ['user_id'=>22, 'name'=>'BuildIt Ltd.',          'sector'=>'Construcción', 'phone'=>'3191234500', 'city'=>'Villavicencio', 'adress'=>'Av. 40 # 15-20',       'description'=>'Empresa de construcción e ingeniería civil.', 'website'=>'https://buildit.com'],
            ['user_id'=>24, 'name'=>'DesignWorks',           'sector'=>'Diseño',       'phone'=>'3201234500', 'city'=>'Florencia',     'adress'=>'Calle 12 # 5-15',       'description'=>'Diseño de interiores y arquitectura creativa.', 'website'=>'https://designworks.com'],
            ['user_id'=>26, 'name'=>'LogiTech Solutions',    'sector'=>'Tecnología',   'phone'=>'3211234500', 'city'=>'Mocoa',         'adress'=>'Carrera 8 # 10-20',      'description'=>'Soluciones en logística y tecnología.', 'website'=>'https://logitechsolutions.com'],
            ['user_id'=>28, 'name'=>'SmartHome Inc.',        'sector'=>'Hogar',        'phone'=>'3221234500', 'city'=>'Bucaramanga',   'adress'=>'Calle 50 # 20-30',      'description'=>'Automatización y soluciones para hogares inteligentes.', 'website'=>'https://smarthomeinc.com'],
            ['user_id'=>30, 'name'=>'AgroTech Co.',          'sector'=>'Agricultura',  'phone'=>'3231234500', 'city'=>'Ibagué',        'adress'=>'Carrera 15 # 5-15',      'description'=>'Tecnología aplicada a procesos agrícolas.', 'website'=>'https://agrotech.com'],
            ['user_id'=>32, 'name'=>'FinConsult Ltd.',       'sector'=>'Finanzas',     'phone'=>'3241234500', 'city'=>'Santa Marta',   'adress'=>'Calle 30 # 10-20',      'description'=>'Consultoría y análisis financiero para empresas.', 'website'=>'https://finconsult.com'],
            ['user_id'=>34, 'name'=>'MediaHouse',            'sector'=>'Medios',       'phone'=>'3251234500', 'city'=>'Montería',      'adress'=>'Av. 25 # 5-15',        'description'=>'Producción y distribución de contenidos mediáticos.', 'website'=>'https://mediahouse.com'],
            ['user_id'=>36, 'name'=>'TechSolutions',         'sector'=>'Tecnología',   'phone'=>'3261234500', 'city'=>'Neiva',         'adress'=>'Calle 18 # 10-20',      'description'=>'Desarrollo de software y soluciones IT.', 'website'=>'https://techsolutions.com'],
            ['user_id'=>38, 'name'=>'GreenFoods Ltd.',       'sector'=>'Alimentación', 'phone'=>'3271234500', 'city'=>'Ibagué',        'adress'=>'Carrera 12 # 20-30',     'description'=>'Producción y distribución de alimentos saludables.', 'website'=>'https://greenfoods.com'],
            ['user_id'=>40, 'name'=>'TravelCo',              'sector'=>'Turismo',      'phone'=>'3281234500', 'city'=>'Tunja',         'adress'=>'Calle 25 # 15-25',      'description'=>'Agencia de viajes con enfoque en experiencias personalizadas.', 'website'=>'https://travelco.com'],
            ['user_id'=>42, 'name'=>'Innovatech',            'sector'=>'Tecnología',   'phone'=>'3291234500', 'city'=>'Bogotá',       'adress'=>'Calle 60 # 15-25',      'description'=>'Desarrollo de soluciones tecnológicas avanzadas.', 'website'=>'https://innovatech.com'],
            ['user_id'=>44, 'name'=>'EcoPower Ltd.',         'sector'=>'Energía',      'phone'=>'3301234500', 'city'=>'Medellín',     'adress'=>'Carrera 30 # 20-30',    'description'=>'Energía renovable y sustentable para empresas.', 'website'=>'https://ecopower.com'],
            ['user_id'=>46, 'name'=>'Creative Minds',        'sector'=>'Diseño',       'phone'=>'3311234500', 'city'=>'Cali',         'adress'=>'Calle 10 # 5-15',       'description'=>'Agencia de diseño gráfico y branding.', 'website'=>'https://creativeminds.com'],
            ['user_id'=>48, 'name'=>'FinAdvisor',            'sector'=>'Finanzas',     'phone'=>'3321234500', 'city'=>'Barranquilla', 'adress'=>'Carrera 25 # 10-20',    'description'=>'Asesoría financiera y consultoría empresarial.', 'website'=>'https://finadvisor.com'],
            ['user_id'=>50, 'name'=>'HealthPlus',            'sector'=>'Salud',        'phone'=>'3331234500', 'city'=>'Bucaramanga',  'adress'=>'Av. 20 # 15-25',       'description'=>'Servicios médicos y soluciones de salud integral.', 'website'=>'https://healthplus.com'],
            ['user_id'=>52, 'name'=>'EduPro',                'sector'=>'Educación',    'phone'=>'3341234500', 'city'=>'Manizales',    'adress'=>'Calle 18 # 5-15',       'description'=>'Plataforma educativa y cursos online.', 'website'=>'https://edupro.com'],
            ['user_id'=>54, 'name'=>'AutoTech',              'sector'=>'Automotriz',   'phone'=>'3351234500', 'city'=>'Popayán',      'adress'=>'Carrera 10 # 10-20',    'description'=>'Innovación en vehículos y movilidad.', 'website'=>'https://autotech.com'],
            ['user_id'=>56, 'name'=>'FoodTech Ltd.',         'sector'=>'Alimentación', 'phone'=>'3361234500', 'city'=>'Tunja',        'adress'=>'Calle 12 # 20-30',      'description'=>'Desarrollo de alimentos saludables y tecnología alimentaria.', 'website'=>'https://foodtech.com'],
            ['user_id'=>58, 'name'=>'TravelWorld',           'sector'=>'Turismo',      'phone'=>'3371234500', 'city'=>'Armenia',      'adress'=>'Carrera 5 # 15-25',      'description'=>'Agencia de viajes y experiencias únicas.', 'website'=>'https://travelworld.com'],
            ['user_id'=>60, 'name'=>'BuildSmart Ltd.',       'sector'=>'Construcción', 'phone'=>'3381234500', 'city'=>'Florencia',    'adress'=>'Av. 30 # 5-15',         'description'=>'Proyectos de construcción y arquitectura moderna.', 'website'=>'https://buildsmart.com'],
        ];

        foreach ($companies as $c) {
            Company::create($c);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
        $experiences = [
            ['id' => 1, 'job_title' => 'Analista de Datos', 'company' => 'DataCorp', 'functions' => 'Análisis de datos y generación de reportes', 'status' => 'finished', 'start_date' => '2022-01-10', 'finish_date' => '2023-02-15', 'candidate_id' => 1],
            ['id' => 2, 'job_title' => 'Desarrollador Backend', 'company' => 'TechSoft', 'functions' => 'Desarrollo de APIs REST y mantenimiento de servicios', 'status' => 'finished', 'start_date' => '2020-06-01', 'finish_date' => '2022-12-15', 'candidate_id' => 2],
            ['id' => 3, 'job_title' => 'Diseñador UX/UI', 'company' => 'CreativeLab', 'functions' => 'Diseño de interfaces de usuario para aplicaciones móviles', 'status' => 'finished', 'start_date' => '2019-03-20', 'finish_date' => '2021-09-30', 'candidate_id' => 3],
            ['id' => 4, 'job_title' => 'Ingeniero de Soporte', 'company' => 'HelpSystems', 'functions' => 'Atención a incidentes técnicos y soporte a usuarios', 'status' => 'finished', 'start_date' => '2023-04-01', 'finish_date' => '2024-03-20', 'candidate_id' => 4],
            ['id' => 5, 'job_title' => 'Gerente de Proyecto', 'company' => 'ProjectWay', 'functions' => 'Planificación y gestión de proyectos de TI', 'status' => 'finished', 'start_date' => '2018-08-15', 'finish_date' => '2021-11-20', 'candidate_id' => 5],
            ['id' => 6, 'job_title' => 'Especialista en Marketing', 'company' => 'AdWorks', 'functions' => 'Estrategias de marketing digital y campañas publicitarias', 'status' => 'finished', 'start_date' => '2017-02-10', 'finish_date' => '2019-06-30', 'candidate_id' => 6],
            ['id' => 7, 'job_title' => 'Administrador de Redes', 'company' => 'NetSecure', 'functions' => 'Gestión y monitoreo de infraestructura de red', 'status' => 'finished', 'start_date' => '2021-07-12', 'finish_date' => '2022-08-30', 'candidate_id' => 7],
            ['id' => 8, 'job_title' => 'Desarrollador Frontend', 'company' => 'Webify', 'functions' => 'Implementación de interfaces web con HTML, CSS y JavaScript', 'status' => 'finished', 'start_date' => '2020-01-01', 'finish_date' => '2022-05-15', 'candidate_id' => 8],
            ['id' => 9, 'job_title' => 'Consultor de Negocios', 'company' => 'BizSolutions', 'functions' => 'Consultoría en procesos de negocio y mejoras operativas', 'status' => 'finished', 'start_date' => '2022-10-05', 'finish_date' => '2023-11-10', 'candidate_id' => 9],
            ['id' => 10, 'job_title' => 'Arquitecto de Software', 'company' => 'CodeHouse', 'functions' => 'Diseño de arquitecturas de software escalables', 'status' => 'finished', 'start_date' => '2016-11-01', 'finish_date' => '2019-12-01', 'candidate_id' => 10],
            ['id' => 11, 'job_title' => 'Especialista en QA', 'company' => 'TestPro', 'functions' => 'Pruebas de software y aseguramiento de calidad', 'status' => 'finished', 'start_date' => '2019-05-10', 'finish_date' => '2021-08-25', 'candidate_id' => 11],
            ['id' => 12, 'job_title' => 'Scrum Master', 'company' => 'AgileDev', 'functions' => 'Facilitación de ceremonias Scrum y gestión de equipos', 'status' => 'finished', 'start_date' => '2023-01-20', 'finish_date' => '2024-02-01', 'candidate_id' => 12],
            ['id' => 13, 'job_title' => 'Administrador de Base de Datos', 'company' => 'DataBank', 'functions' => 'Gestión y respaldo de bases de datos', 'status' => 'finished', 'start_date' => '2018-03-15', 'finish_date' => '2020-07-10', 'candidate_id' => 13],
            ['id' => 14, 'job_title' => 'Ingeniero DevOps', 'company' => 'CloudOps', 'functions' => 'Automatización de despliegues y CI/CD', 'status' => 'finished', 'start_date' => '2022-06-01', 'finish_date' => '2023-07-01', 'candidate_id' => 14],
            ['id' => 15, 'job_title' => 'Asistente Administrativo', 'company' => 'OfficeLine', 'functions' => 'Soporte administrativo y gestión documental', 'status' => 'finished', 'start_date' => '2017-04-01', 'finish_date' => '2019-09-30', 'candidate_id' => 15],
            ['id' => 16, 'job_title' => 'Líder Técnico', 'company' => 'TechLeads', 'functions' => 'Supervisión técnica de equipos de desarrollo', 'status' => 'finished', 'start_date' => '2023-03-15', 'finish_date' => '2024-04-01', 'candidate_id' => 16],
            ['id' => 17, 'job_title' => 'Diseñador Gráfico', 'company' => 'DesignBox', 'functions' => 'Diseño de materiales gráficos y branding', 'status' => 'finished', 'start_date' => '2020-10-10', 'finish_date' => '2022-01-01', 'candidate_id' => 17],
            ['id' => 18, 'job_title' => 'Ingeniero de Seguridad', 'company' => 'CyberShield', 'functions' => 'Evaluación y mitigación de riesgos de seguridad informática', 'status' => 'finished', 'start_date' => '2021-12-05', 'finish_date' => '2023-01-10', 'candidate_id' => 18],
            ['id' => 19, 'job_title' => 'Product Owner', 'company' => 'InnoSoft', 'functions' => 'Definición de productos y priorización de backlog', 'status' => 'finished', 'start_date' => '2019-07-01', 'finish_date' => '2021-03-10', 'candidate_id' => 19],
            ['id' => 20, 'job_title' => 'Técnico en Soporte', 'company' => 'ITHelp', 'functions' => 'Mantenimiento de equipos y asistencia técnica a usuarios', 'status' => 'finished', 'start_date' => '2022-09-01', 'finish_date' => '2023-10-05', 'candidate_id' => 20],
            ['id' => 21, 'job_title' => 'Analista de Sistemas', 'company' => 'SysPro', 'functions' => 'Evaluación de requerimientos y diseño de sistemas', 'status' => 'finished', 'start_date' => '2018-04-10', 'finish_date' => '2020-01-20', 'candidate_id' => 1],
            ['id' => 22, 'job_title' => 'Programador Full Stack', 'company' => 'CodeWorks', 'functions' => 'Desarrollo de aplicaciones web completas', 'status' => 'finished', 'start_date' => '2021-02-15', 'finish_date' => '2023-03-10', 'candidate_id' => 2],
            ['id' => 23, 'job_title' => 'Técnico Electrónico', 'company' => 'ElectroFix', 'functions' => 'Reparación y mantenimiento de equipos electrónicos', 'status' => 'finished', 'start_date' => '2017-07-01', 'finish_date' => '2019-11-30', 'candidate_id' => 3],
            ['id' => 24, 'job_title' => 'Ingeniero Civil TI', 'company' => 'BuildSoft', 'functions' => 'Automatización de procesos constructivos', 'status' => 'finished', 'start_date' => '2019-06-10', 'finish_date' => '2021-05-25', 'candidate_id' => 4],
            ['id' => 25, 'job_title' => 'Diseñador Web', 'company' => 'PixelWeb', 'functions' => 'Diseño visual y experiencia de usuario para sitios web', 'status' => 'finished', 'start_date' => '2020-08-01', 'finish_date' => '2022-03-15', 'candidate_id' => 5],
            ['id' => 26, 'job_title' => 'Administrador de Servidores', 'company' => 'CloudSys', 'functions' => 'Gestión de servidores y servicios cloud', 'status' => 'finished', 'start_date' => '2018-01-01', 'finish_date' => '2019-10-01', 'candidate_id' => 6],
            ['id' => 27, 'job_title' => 'Especialista SEO', 'company' => 'SearchUp', 'functions' => 'Optimización de contenido web para motores de búsqueda', 'status' => 'finished', 'start_date' => '2021-09-10', 'finish_date' => '2023-02-10', 'candidate_id' => 7],
            ['id' => 28, 'job_title' => 'Tester de Software', 'company' => 'BugFree', 'functions' => 'Ejecución de pruebas automatizadas y manuales', 'status' => 'finished', 'start_date' => '2019-10-05', 'finish_date' => '2021-01-15', 'candidate_id' => 8],
            ['id' => 29, 'job_title' => 'Analista Financiero', 'company' => 'FinanTech', 'functions' => 'Evaluación de datos financieros y elaboración de reportes', 'status' => 'finished', 'start_date' => '2017-03-15', 'finish_date' => '2018-12-20', 'candidate_id' => 9],
            ['id' => 30, 'job_title' => 'Ingeniero en Automatización', 'company' => 'AutoTech', 'functions' => 'Diseño de sistemas automatizados industriales', 'status' => 'finished', 'start_date' => '2020-04-01', 'finish_date' => '2022-07-01', 'candidate_id' => 10],
        ];

        foreach ($experiences as $e){
            Experience::create($e);
        }
    }
}

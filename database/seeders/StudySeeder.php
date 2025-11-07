<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Study;

class StudySeeder extends Seeder
{
    public function run(): void
    {
        $studies = [
            ['candidate_id'=>1, 'study_level'=>'undergraduate', 'institution'=>'Universidad de Antioquia', 'study_name'=>'Ingeniería de Sistemas', 'status'=>'finished', 'start_date'=>'2008-02-01', 'finish_date'=>'2012-11-30'],
            ['candidate_id'=>3, 'study_level'=>'undergraduate', 'institution'=>'Pontificia Universidad Javeriana', 'study_name'=>'Diseño Gráfico', 'status'=>'finished', 'start_date'=>'2009-03-01', 'finish_date'=>'2013-12-15'],
            ['candidate_id'=>5, 'study_level'=>'postgraduate', 'institution'=>'Universidad del Valle', 'study_name'=>'Seguridad Informática', 'status'=>'finished', 'start_date'=>'2014-01-15', 'finish_date'=>'2016-06-30'],
            ['candidate_id'=>7, 'study_level'=>'technical', 'institution'=>'SENA', 'study_name'=>'Marketing Digital', 'status'=>'finished', 'start_date'=>'2015-02-01', 'finish_date'=>'2015-12-20'],
            ['candidate_id'=>9, 'study_level'=>'undergraduate', 'institution'=>'Universidad Industrial de Santander', 'study_name'=>'Análisis de Datos', 'status'=>'finished', 'start_date'=>'2009-09-01', 'finish_date'=>'2013-06-30'],
            ['candidate_id'=>11, 'study_level'=>'technologist', 'institution'=>'Universidad de Cartagena', 'study_name'=>'Gestión de Redes Sociales', 'status'=>'finished', 'start_date'=>'2016-01-10', 'finish_date'=>'2016-06-20'],
            ['candidate_id'=>13, 'study_level'=>'undergraduate', 'institution'=>'Universidad Autónoma de Manizales', 'study_name'=>'Desarrollo Frontend', 'status'=>'finished', 'start_date'=>'2010-02-01', 'finish_date'=>'2014-11-30'],
            ['candidate_id'=>15, 'study_level'=>'undergraduate', 'institution'=>'Universidad del Cauca', 'study_name'=>'UX/UI Design', 'status'=>'finished', 'start_date'=>'2011-03-01', 'finish_date'=>'2015-12-15'],
            ['candidate_id'=>17, 'study_level'=>'postgraduate', 'institution'=>'Universidad Nacional de Colombia', 'study_name'=>'Ingeniería de Software', 'status'=>'finished', 'start_date'=>'2013-01-15', 'finish_date'=>'2015-06-30'],
            ['candidate_id'=>19, 'study_level'=>'undergraduate', 'institution'=>'Universidad Pedagógica y Tecnológica de Colombia', 'study_name'=>'Data Science', 'status'=>'finished', 'start_date'=>'2012-02-01', 'finish_date'=>'2016-12-20'],
            ['candidate_id'=>1, 'study_level'=>'technologist', 'institution'=>'SENA', 'study_name'=>'PHP Avanzado', 'status'=>'finished', 'start_date'=>'2017-01-10', 'finish_date'=>'2017-06-20'],
            ['candidate_id'=>3, 'study_level'=>'technologist', 'institution'=>'SENA', 'study_name'=>'Photoshop y Illustrator', 'status'=>'finished', 'start_date'=>'2016-01-15', 'finish_date'=>'2016-06-30'],
            ['candidate_id'=>5, 'study_level'=>'certification', 'institution'=>'Cisco', 'study_name'=>'Redes y Seguridad', 'status'=>'finished', 'start_date'=>'2017-02-01', 'finish_date'=>'2017-08-30'],
            ['candidate_id'=>7, 'study_level'=>'certification', 'institution'=>'Google', 'study_name'=>'Ads y Analytics', 'status'=>'finished', 'start_date'=>'2018-03-01', 'finish_date'=>'2018-08-15'],
            ['candidate_id'=>9, 'study_level'=>'technologist', 'institution'=>'SENA', 'study_name'=>'Python para Análisis de Datos', 'status'=>'finished', 'start_date'=>'2017-09-01', 'finish_date'=>'2017-12-20'],
            ['candidate_id'=>11, 'study_level'=>'certification', 'institution'=>'HubSpot', 'study_name'=>'Marketing Automation', 'status'=>'finished', 'start_date'=>'2018-01-10', 'finish_date'=>'2018-06-20'],
            ['candidate_id'=>13, 'study_level'=>'technologist', 'institution'=>'SENA', 'study_name'=>'JavaScript Avanzado', 'status'=>'finished', 'start_date'=>'2016-03-01', 'finish_date'=>'2016-08-30'],
            ['candidate_id'=>15, 'study_level'=>'certification', 'institution'=>'Adobe', 'study_name'=>'UX Design', 'status'=>'finished', 'start_date'=>'2017-01-15', 'finish_date'=>'2017-06-30'],
            ['candidate_id'=>17, 'study_level'=>'technologist', 'institution'=>'SENA', 'study_name'=>'Laravel Framework', 'status'=>'finished', 'start_date'=>'2018-02-01', 'finish_date'=>'2018-08-15'],
            ['candidate_id'=>19, 'study_level'=>'certification', 'institution'=>'Coursera', 'study_name'=>'Machine Learning', 'status'=>'finished', 'start_date'=>'2019-03-01', 'finish_date'=>'2019-08-30'],
            ['candidate_id'=>2, 'study_level'=>'undergraduate', 'institution'=>'Universidad del Norte', 'study_name'=>'Administración de Empresas', 'status'=>'finished', 'start_date'=>'2007-02-01', 'finish_date'=>'2011-12-15'],
            ['candidate_id'=>4, 'study_level'=>'postgraduate', 'institution'=>'Universidad de los Andes', 'study_name'=>'Ingeniería Industrial', 'status'=>'finished', 'start_date'=>'2012-01-15', 'finish_date'=>'2014-06-30'],
            ['candidate_id'=>6, 'study_level'=>'technical', 'institution'=>'SENA', 'study_name'=>'Electrónica', 'status'=>'finished', 'start_date'=>'2010-03-01', 'finish_date'=>'2011-12-20'],
            ['candidate_id'=>8, 'study_level'=>'technologist', 'institution'=>'SENA', 'study_name'=>'Marketing de Contenidos', 'status'=>'finished', 'start_date'=>'2013-01-10', 'finish_date'=>'2013-06-20'],
            ['candidate_id'=>10,'study_level'=>'certification', 'institution'=>'Cisco', 'study_name'=>'Networking Avanzado', 'status'=>'finished', 'start_date'=>'2015-02-01', 'finish_date'=>'2015-08-30'],
            ['candidate_id'=>12,'study_level'=>'undergraduate', 'institution'=>'Universidad de la Sabana', 'study_name'=>'Finanzas', 'status'=>'finished', 'start_date'=>'2008-03-01', 'finish_date'=>'2012-12-15'],
            ['candidate_id'=>14,'study_level'=>'technologist', 'institution'=>'SENA', 'study_name'=>'Diseño UX', 'status'=>'finished', 'start_date'=>'2014-01-10', 'finish_date'=>'2014-06-20'],
            ['candidate_id'=>16,'study_level'=>'undergraduate', 'institution'=>'Universidad del Cauca', 'study_name'=>'Ingeniería Mecánica', 'status'=>'finished', 'start_date'=>'2009-02-01', 'finish_date'=>'2013-12-15'],
            ['candidate_id'=>18,'study_level'=>'postgraduate', 'institution'=>'Universidad Nacional', 'study_name'=>'Inteligencia Artificial', 'status'=>'finished', 'start_date'=>'2015-01-15', 'finish_date'=>'2017-06-30'],
            ['candidate_id'=>20,'study_level'=>'certification', 'institution'=>'Google', 'study_name'=>'Cloud Computing', 'status'=>'finished', 'start_date'=>'2016-03-01', 'finish_date'=>'2016-08-15'],
            ['candidate_id'=>1, 'study_level'=>'technical', 'institution'=>'SENA', 'study_name'=>'Java Básico', 'status'=>'finished', 'start_date'=>'2011-02-01', 'finish_date'=>'2011-08-15'],
            ['candidate_id'=>3, 'study_level'=>'technologist', 'institution'=>'SENA', 'study_name'=>'Photoshop Avanzado', 'status'=>'finished', 'start_date'=>'2012-03-01', 'finish_date'=>'2012-08-20'],
            ['candidate_id'=>5, 'study_level'=>'undergraduate', 'institution'=>'Universidad del Valle', 'study_name'=>'Ciberseguridad', 'status'=>'finished', 'start_date'=>'2013-02-01', 'finish_date'=>'2017-11-30'],
            ['candidate_id'=>7, 'study_level'=>'certification', 'institution'=>'HubSpot', 'study_name'=>'Inbound Marketing', 'status'=>'finished', 'start_date'=>'2015-01-15', 'finish_date'=>'2015-06-20'],
            ['candidate_id'=>9, 'study_level'=>'undergraduate', 'institution'=>'Universidad de Santander', 'study_name'=>'Big Data', 'status'=>'finished', 'start_date'=>'2014-03-01', 'finish_date'=>'2018-12-15'],
            ['candidate_id'=>11,'study_level'=>'technologist', 'institution'=>'SENA', 'study_name'=>'SEO Avanzado', 'status'=>'finished', 'start_date'=>'2016-02-01', 'finish_date'=>'2016-06-20'],
            ['candidate_id'=>13,'study_level'=>'certification', 'institution'=>'Coursera', 'study_name'=>'Python Avanzado', 'status'=>'finished', 'start_date'=>'2017-01-15', 'finish_date'=>'2017-06-30'],
            ['candidate_id'=>15,'study_level'=>'technologist', 'institution'=>'SENA', 'study_name'=>'React.js', 'status'=>'finished', 'start_date'=>'2018-02-01', 'finish_date'=>'2018-08-15'],
            ['candidate_id'=>17,'study_level'=>'certification', 'institution'=>'Microsoft', 'study_name'=>'Azure', 'status'=>'finished', 'start_date'=>'2019-03-01', 'finish_date'=>'2019-08-30'],
            ['candidate_id'=>19,'study_level'=>'technologist', 'institution'=>'SENA', 'study_name'=>'Node.js Avanzado', 'status'=>'finished', 'start_date'=>'2020-01-10', 'finish_date'=>'2020-06-20'],
            ['candidate_id'=>2, 'study_level'=>'undergraduate', 'institution'=>'Universidad del Norte', 'study_name'=>'Economía', 'status'=>'finished', 'start_date'=>'2006-02-01', 'finish_date'=>'2010-12-15'],
            ['candidate_id'=>4, 'study_level'=>'postgraduate', 'institution'=>'Universidad de los Andes', 'study_name'=>'Gestión de Proyectos', 'status'=>'finished', 'start_date'=>'2011-01-15', 'finish_date'=>'2013-06-30'],
        ];

        foreach ($studies as $s) {
            Study::create($s);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;
class ConveniosAlianzasController extends Controller
{
    //
    public function convenios()
    {
        SEO::setTitle('SEDI - Convenios',False);
        SEO::setDescription('SEDI es el Centro Educativo para la Primera Infancia, líder en la zona Poniente de la Ciudad de México,con dos sedes: en Santa Fe y Lomas de Chapultepec. Atendemos niños durante todo el año, desde 42 días de nacidos hasta 6 años de edad, de 7:00 am a 7:45 pm y a niños de cualquier edad y hasta los 9 años, a partir de las 12:30 pm y hasta las 7:45 pm, en un servicio de Afterschool. ');
        SEO::opengraph()->setUrl('https://www.sedi.edu.mx/');
        SEO::setCanonical('https://www.sedi.edu.mx/');
        SEO::opengraph()->addProperty('type', 'website');
        SEO::twitter()->setSite('@SediEDU');
        return view('convenios/convenios');
    }

    public function alianzas()
    {
        SEO::setTitle('SEDI - Alianzas con instituciones educativas',False);
        SEO::setDescription('SEDI es el Centro Educativo para la Primera Infancia, líder en la zona Poniente de la Ciudad de México,con dos sedes: en Santa Fe y Lomas de Chapultepec. Atendemos niños durante todo el año, desde 42 días de nacidos hasta 6 años de edad, de 7:00 am a 7:45 pm y a niños de cualquier edad y hasta los 9 años, a partir de las 12:30 pm y hasta las 7:45 pm, en un servicio de Afterschool. ');
        SEO::opengraph()->setUrl('https://www.sedi.edu.mx/');
        SEO::setCanonical('https://www.sedi.edu.mx/');
        SEO::opengraph()->addProperty('type', 'website');
        SEO::twitter()->setSite('@SediEDU');
        return view('convenios/alianzas');
    }
}

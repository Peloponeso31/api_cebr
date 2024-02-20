<?php

namespace Database\Seeders\MunicipioSeeders;

use App\Models\Estado;
use App\Models\Municipio;
use Illuminate\Database\Seeder;

class VeracruzSeeder extends Seeder
{
    public function run(): void
    {
        $municipios = [
            'Acajete',
            'Acatlán',
            'Acayucan',
            'Actopan',
            'Acula',
            'Acultzingo',
            'Camarón de Tejeda',
            'Alpatláhuac',
            'Alto Lucero de Gutiérrez Barrios',
            'Altotonga',
            'Alvarado',
            'Amatitlán',
            'Naranjos Amatlán',
            'Amatlán de los Reyes',
            'Angel R. Cabada',
            'La Antigua',
            'Apazapan',
            'Aquila',
            'Astacinga',
            'Atlahuilco',
            'Atoyac',
            'Atzacan',
            'Atzalan',
            'Tlaltetela',
            'Ayahualulco',
            'Banderilla',
            'Benito Juárez',
            'Boca del Río',
            'Calcahualco',
            'Camerino Z. Mendoza',
            'Carrillo Puerto',
            'Catemaco',
            'Cazones de Herrera',
            'Cerro Azul',
            'Citlaltépetl',
            'Coacoatzintla',
            'Coahuitlán',
            'Coatepec',
            'Coatzacoalcos',
            'Coatzintla',
            'Coetzala',
            'Colipa',
            'Comapa',
            'Córdoba',
            'Cosamaloapan de Carpio',
            'Cosautlán de Carvajal',
            'Coscomatepec',
            'Cosoleacaque',
            'Cotaxtla',
            'Coxquihui',
            'Coyutla',
            'Cuichapa',
            'Cuitláhuac',
            'Chacaltianguis',
            'Chalma',
            'Chiconamel',
            'Chiconquiaco',
            'Chicontepec',
            'Chinameca',
            'Chinampa de Gorostiza',
            'Las Choapas',
            'Chocamán',
            'Chontla',
            'Chumatlán',
            'Emiliano Zapata',
            'Espinal',
            'Filomeno Mata',
            'Fortín',
            'Gutiérrez Zamora',
            'Hidalgotitlán',
            'Huatusco',
            'Huayacocotla',
            'Hueyapan de Ocampo',
            'Huiloapan de Cuauhtémoc',
            'Ignacio de la Llave',
            'Ilamatlán',
            'Isla',
            'Ixcatepec',
            'Ixhuacán de los Reyes',
            'Ixhuatlán del Café',
            'Ixhuatlancillo',
            'Ixhuatlán del Sureste',
            'Ixhuatlán de Madero',
            'Ixmatlahuacan',
            'Ixtaczoquitlán',
            'Jalacingo',
            'Xalapa',
            'Jalcomulco',
            'Jáltipan',
            'Jamapa',
            'Jesús Carranza',
            'Xico',
            'Jilotepec',
            'Juan Rodríguez Clara',
            'Juchique de Ferrer',
            'Landero y Coss',
            'Lerdo de Tejada',
            'Magdalena',
            'Maltrata',
            'Manlio Fabio Altamirano',
            'Mariano Escobedo',
            'Martínez de la Torre',
            'Mecatlán',
            'Mecayapan',
            'Medellín de Bravo',
            'Miahuatlán',
            'Las Minas',
            'Minatitlán',
            'Misantla',
            'Mixtla de Altamirano',
            'Moloacán',
            'Naolinco',
            'Naranjal',
            'Nautla',
            'Nogales',
            'Oluta',
            'Omealca',
            'Orizaba',
            'Otatitlán',
            'Oteapan',
            'Ozuluama de Mascareñas',
            'Pajapan',
            'Pánuco',
            'Papantla',
            'Paso del Macho',
            'Paso de Ovejas',
            'La Perla',
            'Perote',
            'Platón Sánchez',
            'Playa Vicente',
            'Poza Rica de Hidalgo',
            'Las Vigas de Ramírez',
            'Pueblo Viejo',
            'Puente Nacional',
            'Rafael Delgado',
            'Rafael Lucio',
            'Los Reyes',
            'Río Blanco',
            'Saltabarranca',
            'San Andrés Tenejapan',
            'San Andrés Tuxtla',
            'San Juan Evangelista',
            'Santiago Tuxtla',
            'Sayula de Alemán',
            'Soconusco',
            'Sochiapa',
            'Soledad Atzompa',
            'Soledad de Doblado',
            'Soteapan',
            'Tamalín',
            'Tamiahua',
            'Tampico Alto',
            'Tancoco',
            'Tantima',
            'Tantoyuca',
            'Tatatila',
            'Castillo de Teayo',
            'Tecolutla',
            'Tehuipango',
            'Álamo Temapache',
            'Tempoal',
            'Tenampa',
            'Tenochtitlán',
            'Teocelo',
            'Tepatlaxco',
            'Tepetlán',
            'Tepetzintla',
            'Tequila',
            'José Azueta',
            'Texcatepec',
            'Texhuacán',
            'Texistepec',
            'Tezonapa',
            'Tierra Blanca',
            'Tihuatlán',
            'Tlacojalpan',
            'Tlacolulan',
            'Tlacotalpan',
            'Tlacotepec de Mejía',
            'Tlachichilco',
            'Tlalixcoyan',
            'Tlalnelhuayocan',
            'Tlapacoyan',
            'Tlaquilpa',
            'Tlilapan',
            'Tomatlán',
            'Tonayán',
            'Totutla',
            'Tuxpan',
            'Tuxtilla',
            'Úrsulo Galván',
            'Vega de Alatorre',
            'Veracruz',
            'Villa Aldama',
            'Xoxocotla',
            'Yanga',
            'Yecuatla',
            'Zacualpan',
            'Zaragoza',
            'Zentla',
            'Zongolica',
            'Zontecomatlán de López y Fuentes',
            'Zozocolco de Hidalgo',
            'Agua Dulce',
            'El Higo',
            'Nanchital de Lázaro Cárdenas del Río',
            'Tres Valles',
            'Carlos A. Carrillo',
            'Tatahuicapan de Juárez',
            'Uxpanapa',
            'San Rafael',
            'Santiago Sochiapan'
        ];

        $estado = Estado::where('nombre', 'Veracruz de Ignacio de la Llave')->first()->id;

        foreach ($municipios as $municipio) {
            Municipio::firstOrCreate([
                'estado_id' => $estado,
                'nombre' => $municipio
            ]);
        }
    }

}

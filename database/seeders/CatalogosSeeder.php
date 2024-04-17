<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class CatalogosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Catalogos\RegionCuerpo::insert([
            ["nombre" => "NO ESPECIFICA",                 "color" => "3F48CC"],
            ["nombre" => "BORDE INTERNO DEL PIE",         "color" => "FF0000"],
            ["nombre" => "BORDE EXTERNO DEL PIE",         "color" => "FF6102"],
            ["nombre" => "CARA DORSAL DE LA MANO",        "color" => "FF9D03"],
            ["nombre" => "CARA INTERNA DEL MUSLO",        "color" => "FFCC03"],
            ["nombre" => "CARA PLANTAR O PLANTA DEL PIE", "color" => "FFF502"],
            ["nombre" => "CARA POSTERIOR DE LA MUÑECA",   "color" => "D9FF00"],
            ["nombre" => "CARA POSTERIOR DE LA PIERNA",   "color" => "85FF00"],
            ["nombre" => "CARA POSTERIOR DEL ANTEBRAZO",  "color" => "33FF02"],
            ["nombre" => "CARA POSTERIOR DEL BRAZO",      "color" => "00FF34"],
            ["nombre" => "CARA POSTERIOR DEL CODO",       "color" => "FFB3B3"],
            ["nombre" => "CARA POSTERIOR DEL MUSLO",      "color" => "00FFFA"],
            ["nombre" => "DEDOS DE LA MANO",              "color" => "009EFF"],
            ["nombre" => "HUECO POPLITEO",                "color" => "0003FF"],
            ["nombre" => "PARED POSTERIOR DE LA AXILA",   "color" => "ED00FF"],
            ["nombre" => "REGION DEL TRAPECIO",           "color" => "FF01AC"],
            ["nombre" => "REGION GLUTEA",                 "color" => "FF004C"],
            ["nombre" => "REGION LUMBAR",                 "color" => "FFF11D"],
            ["nombre" => "REGION LUMBAR EXTERNA FLANCO",  "color" => "FF781E"],
            ["nombre" => "REGION MASTOIDEA",              "color" => "FF1E1E"],
            ["nombre" => "REGION OCCIPITAL",              "color" => "FFEC1F"],
            ["nombre" => "REGION POSTERIOR DEL CUELLO",   "color" => "7AFF20"],
            ["nombre" => "REGION SACRA",                  "color" => "21FF3A"],
            ["nombre" => "TALON",                         "color" => "1FFFE0"],
            ["nombre" => "TENDON DE AQUILES",             "color" => "1443FF"],
            ["nombre" => "CARA PALMAR DE LA 2A. FALANGE", "color" => "3214FF"],
            ["nombre" => "CARA PALMAR DE LA 3A. FALANGE", "color" => "9513FF"],
            ["nombre" => "CARA PALMAR DE LA 1A. FALANGE", "color" => "FF15BE"],
            ["nombre" => "TOBILLO",                       "color" => "FF1666"],
            ["nombre" => "DORSO DEL PIE",                 "color" => "FF28F5"],
            ["nombre" => "EPIGASTRO",                     "color" => "FF283B"],
            ["nombre" => "FLANCO",                        "color" => "A428FF"],
            ["nombre" => "FOSA ILIACA",                   "color" => "502AFF"],
            ["nombre" => "HIPOCONDRIO",                   "color" => "2B78FF"],
            ["nombre" => "MALEOLO EXTERNO",               "color" => "2ADBFF"],
            ["nombre" => "MALEOLO INTERNO",               "color" => "2CFFCE"],
            ["nombre" => "MASETERINA",                    "color" => "2EFF63"],
            ["nombre" => "MENTON O BARBILLA",             "color" => "89FF30"],
            ["nombre" => "PARED ANTERIOR DE LA AXILA",    "color" => "FDFF2F"],
            ["nombre" => "REGION CLAVICULAR",             "color" => "FF9B31"],
            ["nombre" => "REGION ESTERNAL",               "color" => "FF3232"],
            ["nombre" => "REGION FRONTAL",                "color" => "FF4F46"],
            ["nombre" => "REGION INGUINAL  O INGLE",      "color" => "FF5A5A"],
            ["nombre" => "REGION LATERAL DEL CUELLO",     "color" => "FFFD55"],
            ["nombre" => "REGION MALAR O POMULO",         "color" => "D2FF55"],
            ["nombre" => "REGION MAMILAR O TETILLA",      "color" => "FF5555"],
            ["nombre" => "REGION METATARZO",              "color" => "57FF6E"],
            ["nombre" => "REGION NASAL",                  "color" => "FFBB8A"],
            ["nombre" => "REGION ORBITARIA",              "color" => "56A7FF"],
            ["nombre" => "REGION PALMAR",                 "color" => "8456FF"],
            ["nombre" => "REGION PECTORAL",               "color" => "FB55FF"],
            ["nombre" => "REGION PERIBUCAL",              "color" => "FF539F"],
            ["nombre" => "REGION PUBIANA",                "color" => "FF5356"],
            ["nombre" => "REGION TORULEANA O ROTULA",     "color" => "FF6669"],
            ["nombre" => "REGION SUPRACLAVICULAR",        "color" => "FF79CA"],
            ["nombre" => "REGION XIFOIDEA",               "color" => "F577FF"],
            ["nombre" => "REGION MANO",                   "color" => "C276FF"],
            ["nombre" => "REGION PIE",                    "color" => "7684FF"],
            ["nombre" => "REGION HOMBRO",                 "color" => "76B8FF"],
            ["nombre" => "REGION TIBIA",                  "color" => "77FFFF"],
            ["nombre" => "REGION ABDOMEN INFERIOR",       "color" => "76FFAC"],
            ["nombre" => "REGION ABDOMEN SUPERIOR",       "color" => "84FF76"],
            ["nombre" => "REGION BOCA",                   "color" => "DEFF78"],
            ["nombre" => "REGION NARIZ",                  "color" => "56FFC8"],
            ["nombre" => "REGION OREJA",                  "color" => "FF8989"],
            ["nombre" => "REGION FRENTE",                 "color" => "FFE3E3"],
            ["nombre" => "REGION CARA",                   "color" => "01FF17"],
            ["nombre" => "REGION ESPALDA INFERIOR",       "color" => "04ECFF"],
            ["nombre" => "REGION ESPALDA SUPERIOR",       "color" => "29FF7D"],
            ["nombre" => "REGION CABEZA",                 "color" => "92FFE3"],
            ["nombre" => "REGION NUCA",                   "color" => "FFF5A3"],
            ["nombre" => "REGION ANTEBRAZO",              "color" => "FFD1A4"],
            ["nombre" => "REGION BRAZO",                  "color" => "FFA2A2"],
            ["nombre" => "REGION CODO",                   "color" => "00FFAC"],
            ["nombre" => "REGION CUELLO",                 "color" => "FF7070"],
            ["nombre" => "REGION MUSLO",                  "color" => "FF5659"],
            ["nombre" => "REGION MUÑECA",                 "color" => "FFBCBD"],
            ["nombre" => "REGION OMOPLATO",               "color" => "FFBAE4"],
            ["nombre" => "REGION RODILLA",                "color" => "BF09FF"],
        ]);

        \App\Models\Catalogos\RegionCuerpoRnpdno::insert([
            ["nombre" => "BORDE INTERNO DEL PIE"],
            ["nombre" => "BORDE EXTERNO DEL PIE"],
            ["nombre" => "CARA DORSAL DE LA MANO"],
            ["nombre" => "CARA INTERNA DEL MUSLO"],
            ["nombre" => "CARA PLANTAR O PLANTA DEL PIE"],
            ["nombre" => "CARA POSTERIOR DE LA MUÑECA"],
            ["nombre" => "CARA POSTERIOR DE LA PIERNA"],
            ["nombre" => "CARA PORTERIOR DE PIERNA"],
            ["nombre" => "CARA PORTERIOR DEL ANTEBRAZO"],
            ["nombre" => "CARA PORTERIOR DEL BRAZO"],
            ["nombre" => "CARA PORTERIOR DEL CODO"],
            ["nombre" => "CARA PORSTERIOR DEL MUSLO"],
            ["nombre" => "DEDOS DE LA MANO"],
            ["nombre" => "HUECO POPLITEO"],
            ["nombre" => "OLECRANO"],
            ["nombre" => "PARES POSTERIOR DE LA AXILA"],
            ["nombre" => "PROMINENTE"],
            ["nombre" => "REGION DEL TRAPECIO"],
            ["nombre" => "REGION ESCAPULAR"],
            ["nombre" => "REGION GLUTEA"],
            ["nombre" => "REGION INFRAESCAPULAR"],
            ["nombre" => "REGION INTERESCAPULAR"],
            ["nombre" => "REGION LUMBAR"],
            ["nombre" => "REGION LUMBAR EXTERNA FLANCO"],
            ["nombre" => "REGION MASTOIDEA"],
            ["nombre" => "REGION OCCIPITAL"],
            ["nombre" => "REGION POSTERIOR DEL CUELLO"],
            ["nombre" => "REGION SACRA"],
            ["nombre" => "REGION SUPRAESCAPULAR"],
            ["nombre" => "REGION TROCANTEREANA"],
            ["nombre" => "TALON"],
            ["nombre" => "TENDON DE AQUILES"],
            ["nombre" => "CARA ANTERIOR DE LA PIERNA"],
            ["nombre" => "CARA ANTERIOR DE LA RODILLA"],
            ["nombre" => "CARA ANTERIOR DE LA MUÑECA"],
            ["nombre" => "CARA ANTERIOR DEL ANTEBRAZO"],
            ["nombre" => "CARA ANTERIOR DEL BRAZO"],
            ["nombre" => "CARA ANTERIOR DEL CODO"],
            ["nombre" => "CARA ANTERIOR DEL MUSLO"],
            ["nombre" => "CARA INTERNA DEL MUSLO"],
            ["nombre" => "CARA PALMAR DE LA 2A. FALANGE"],
            ["nombre" => "CARA PALMAR DE LA 3A. FALANGE"],
            ["nombre" => "CARA PALMAR DE LA 1A. FALANGE"],
            ["nombre" => "CUELLO DEL PIE"],
            ["nombre" => "DORSO DEL PIE"],
            ["nombre" => "EMINENCIA HIPOTENAR"],
            ["nombre" => "EMINENCIA TENAR"],
            ["nombre" => "EPIGASTRO"],
            ["nombre" => "FLANCO"],
            ["nombre" => "FOSA ILIACA"],
            ["nombre" => "HIPOCONDRIO"],
            ["nombre" => "HIPOGASTRIO"],
            ["nombre" => "MALEOLO EXTERNO"],
            ["nombre" => "MALEOLO INTERNO"],
            ["nombre" => "MASETERINA"],
            ["nombre" => "MENTON O BARBILLA"],
            ["nombre" => "PARED ANTERIOR DE LA AXILA"],
            ["nombre" => "REGION ACROMIAL"],
            ["nombre" => "REGION ANTERIOR DEL CUELLO (MANZANA DE ADAN)"],
            ["nombre" => "REGION CIGOMATICA"],
            ["nombre" => "REGION CLAVICULAR"],
            ["nombre" => "REGION ESTERNAL"],
            ["nombre" => "REGION FOSETA YUGULAR"],
            ["nombre" => "REGION FRONTAL"],
            ["nombre" => "REGION INGUINAL  O INGLE"],
            ["nombre" => "REGION LATERAL DEL CUELLO"],
            ["nombre" => "REGION MALAR O POMULO"],
            ["nombre" => "REGION MAMILAR O TETILLA"],
            ["nombre" => "REGION MESOGASTRIO"],
            ["nombre" => "REGION METATARZO"],
            ["nombre" => "REGION NASAL"],
            ["nombre" => "REGION ORBITARIA"],
            ["nombre" => "REGION PALMAR"],
            ["nombre" => "REGION PECTORAL"],
            ["nombre" => "REGION PERIBUCAL"],
            ["nombre" => "REGION PUBIANA"],
            ["nombre" => "REGION TORULEANA O ROTULA"],
            ["nombre" => "REGION SUPRACLAVICULAR"],
            ["nombre" => "REGION XIFOIDEA"],
            ["nombre" => "REGION  MANO"],
            ["nombre" => "REGION PIE"],
            ["nombre" => "REGION HOMBRO"],
            ["nombre" => "REGIION TIBIA"],
            ["nombre" => "REGION ABDOMEN INFERIOR"],
            ["nombre" => "REGION ABDOMEN SUPERIOR"],
            ["nombre" => "REGION BOCA"],
            ["nombre" => "REGION NARIZ"],
            ["nombre" => "REGION OREJA"],
            ["nombre" => "REGION FRENTE"],
            ["nombre" => "REGION CARA"],
            ["nombre" => "CARA PORTERIOR DEL RODILLA"],
            ["nombre" => "REGION ESPALDA INFERIOR"],
            ["nombre" => "REGION ESPALDA SUPERIOR"],
            ["nombre" => "REGION CABEZA"],
            ["nombre" => "REGION NUCA"],
        ]);

        \App\Models\Catalogos\Vista::insert([
            ["nombre" => "DORSAL"],
            ["nombre" => "FRONTAL"],
            ["nombre" => "NO ESPECIFICA"],
            ["nombre" => "INTERNO"],
            ["nombre" => "EXTERNO"],
        ]);

        \App\Models\Catalogos\VistaRnpdno::insert([
            ["nomvistarpndno" => "DORSAL"],
            ["nomvistarpndno" => "FRONTAL"],
            ["nomvistarpndno" => "NO ESPECIFICA"],
        ]);

        \App\Models\Catalogos\Lado::insert([
            ["nombre" => "DERECHO",         "color" => "E63244"],
            ["nombre" => "IZQUIERDO",       "color" => "ED1C24"],
            ["nombre" => "NO ESPECIFICA",   "color" => "6C7156"],
            ["nombre" => "UNICO",           "color" => "000000"],
            ["nombre" => "ANTERIOR",        "color" => "FF7F27"],
            ["nombre" => "POSTERIOR",       "color" => "FFF200"],
        ]);

        \App\Models\Catalogos\LadoRnpdno::insert([
            ["nomladorpndno" => "DERECHO"],
            ["nomladorpndno" => "IZQUIERDO"],
            ["nomladorpndno" => "NO ESPECIFICA"],
            ["nomladorpndno" => "UNICO"],
        ]);

        \App\Models\Catalogos\Tipo::insert([
            ["nombre" => "ARETE/PERFORACIONES"],
            ["nombre" => "CICATRIZ"],
            ["nombre" => "CIRCUNCISION"],
            ["nombre" => "CORTES DECORATIVOS"],
            ["nombre" => "DEFECTO FISICO"],
            ["nombre" => "LUNARES O MANCHAS"],
            ["nombre" => "MARCAS TEMPORALES"],
            ["nombre" => "OTRO"],
            ["nombre" => "PROTESIS"],
            ["nombre" => "TATUAJE"],
         ]);

        \App\Models\Catalogos\CaracteristicasFisicas\ColorCabello::insert([
            ["color" => "ALBINO"],
            ["color" => "CANO"],
            ["color" => "CASTAÑO CLARO"],
            ["color" => "CASTAÑO OSCURO"],
            ["color" => "ENTRECANO"],
            ["color" => "NEGRO"],
            ["color" => "PELIRROJO"],
            ["color" => "RUBIO"],
            ["color" => "TEÑIDO"],
            ["color" => "NO ESPECIFICA"]
        ]);

        \App\Models\Catalogos\CaracteristicasFisicas\ColorOjos::insert([
            ["color" => "AZULES"],
            ["color" => "CAFÉS CLAROS"],
            ["color" => "CAFÉS OSCUROS"],
            ["color" => "GRISES"],
            ["color" => "MIEL O ÁMBAR"],
            ["color" => "NEGROS"],
            ["color" => "VERDES"],
            ["color" => "NO ESPECIFICA"]
        ]);

        \App\Models\Catalogos\CaracteristicasFisicas\TamanoOjos::insert([
            ["tamano" => "GRANDES"],
            ["tamano" => "MEDIANOS"],
            ["tamano" => "PEQUEÑOS"],
            ["tamano" => "NO ESPECIFICA"],

        ]);

        \App\Models\Catalogos\CaracteristicasFisicas\ColorPiel::insert([
            ["color" => "ALBINA"],
            ["color" => "AMARILLA"],
            ["color" => "BLANCA"],
            ["color" => "MORENA"],
            ["color" => "MORENA CLARA"],
            ["color" => "MORENA OSCURA"],
            ["color" => "NEGRA"],
            ["color" => "NO ESPECIFICA"],

        ]);
        \App\Models\Catalogos\CaracteristicasFisicas\TipoCabello::insert([
            ["tipo" => "AFRO +"],
            ["tipo" => "CHINO +"],
            ["tipo" => "CRESPO"],
            ["tipo" => "LACIO"],
            ["tipo" => "ONDULADO"],
            ["tipo" => "RIZADO"],
            ["tipo" => "SEMIONDULADO"],
            ["tipo" => "NO ESPECIFICA"]

        ]);

        \App\Models\Catalogos\CaracteristicasFisicas\TipoLabios::insert([
            ["tipo" => "DELGADOS"],
            ["tipo" => "GRUESOS"],
            ["tipo" => "MEDIANOS"],
            ["tipo" => "MIXTOS"],
            ["tipo" => "NO ESPECIFICA"],
        ]);

        \App\Models\Catalogos\CaracteristicasFisicas\TipoNariz::insert([
            ["tipo" => "AGUILEÑA"],
            ["tipo" => "CHATA"],
            ["tipo" => "RECTA"],
            ["tipo" => "NO ESPECIFICA"],

        ]);

        \App\Models\Catalogos\CaracteristicasFisicas\TamanoOrejas::insert([
            ["tamano" => "CHICAS"],
            ["tamano" => "GRANDES"],
            ["tamano" => "MEDIANAS"],
            ["tamano" => "NO ESPECIFICA"],

        ]);

        \App\Models\Catalogos\CaracteristicasFisicas\Complexion::insert([
            ["complexion" => "ATLÉTICA"],
            ["complexion" => "DELGADA"],
            ["complexion" => "OBESA"],
            ["complexion" => "REGULAR"],
            ["complexion" => "ROBUSTA"],
            ["complexion" => "NO ESPECIFICA"],

        ]);

        \App\Models\Catalogos\Etnia\Religion::insert([
            ["religion" => "Católicos"],
            ["religion" => "Catolicos Ortodoxos"],
            ["religion" => "Anabautista/Menonita"],
            ["religion" => "Anglicano/Episcopal"],
            ["religion" => "Bautista"],
            ["religion" => "Luterana"],
            ["religion" => "Metodista"],
            ["religion" => "Testigos de jehova"],
            ["religion" => "Cristianos"],
            ["religion" => "Evangelicos"],
            ["religion" => "Pentecostales"],
            ["religion" => "Protestantes"],
            ["religion" => "Judaismo"],
            ["religion" => "Islamismo"],
            ["religion" => "Budismo"],
            ["religion" => "Hinduismo"],
            ["religion" => "Otras de origen oriental"],

        ]);

        \App\Models\Catalogos\Etnia\Lengua::insert([
            ["lengua" => "Nahualt"],
            ["lengua" => "Paipai"],
            ["lengua" => "Kiliwa"],
            ["lengua" => "Cucapa"],
            ["lengua" => "Cochini"],
            ["lengua" => "Kumiai"],
            ["lengua" => "Seri"],
            ["lengua" => "Chontal de Oaxaca"],
            ["lengua" => "Chinanteco"],
            ["lengua" => "Chinanteco Ojitlan"],
            ["lengua" => "Chinanteco de Usila"],
            ["lengua" => "Chinanteco de Quiotepec"],
            ["lengua" => "Chinanteco de Yolox"],
            ["lengua" => "Chinanteco de Palantla"],
            ["lengua" => "Chinanteco de Valle Nacional"],
            ["lengua" => "Chinanteco de Lalana"],
            ["lengua" => "Chinanteco de Latani"],
            ["lengua" => "Chinanteco de Petlapa"],
            ["lengua" => "Pame"],
            ["lengua" => "Chichimeca Jonaz"],
            ["lengua" => "Otomi"],
            ["lengua" => "Mazahua"],
            ["lengua" => "Matlatzinca"],
            ["lengua" => "Español"],


        ]);

        \App\Models\Catalogos\Etnia\GrupoEtnico::insert([
            ["grupoetnico" => "NAHUAS"],
            ["grupoetnico" => "TOTONACAS"],
            ["grupoetnico" => "HUASTECO"],
            ["grupoetnico" => "POPOLUCAS"],
            ["grupoetnico" => "TEPEHUAS"],
            ["grupoetnico" => "OTOMIES"],
            ["grupoetnico" => "ZOQUE"],
            ["grupoetnico" => "MIXES"],

        ]);

        \App\Models\Catalogos\Etnia\Vestimenta::insert([
            ["vestimenta" => "HUIPIL"],
            ["vestimenta" => "CALZÓN DE MANTA"],
            ["vestimenta" => "SARAPE"],
            ["vestimenta" => "HIPIL"],
            ["vestimenta" => "JUBÓN"],
            ["vestimenta" => "ENREDO"],
            ["vestimenta" => "PICOTE"],
            ["vestimenta" => "REBOZO"],

        ]);


        \App\Models\Catalogos\Etnia\Ascendencia::insert([
            ["ascendencia" => "AFROAMERICANO"],
            ["ascendencia" => "ESPAÑOLA"],
            ["ascendencia" => "MEXICANA"],
            ["ascendencia" => "EUROPEA"],
            ["ascendencia" => "INDIGENA"],
            ["ascendencia" => "MIXTA"],
            ["ascendencia" => "AMERICANA"],
            ["ascendencia" => "ASIATICA"],
        ]);

        \App\Models\Catalogos\Oficina::insert([
            ["oficina"=> "Celula Norte"],
            ["oficina"=> "Celula Centro"],
            ["oficina"=> "Celula Sur"],
            ["oficina"=> "Búsqueda Inmediata"],
            ["oficina"=> "Larga Data"],
            ["oficina"=> "OGPI"],
        ]);

        \App\Models\Catalogos\Puesto::insert([
            ["nombre"=> "Comisionado Estatal"],
            ["nombre"=> "Jefe de Departamento"],
            ["nombre"=> "Jefe de Oficina"],
        ]);

        /*

        \App\Models\Catalogos\PrendaDeVestir::insert([
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "ABRIGO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "ALBA (VESTIMENTA PARA SACERDOTE)"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "BAÑADOR"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "BABERO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "BATA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "BAUTIZO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "BERMUDA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "BIKINI"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "BLUSA, PANTIBLUSA, BLUSON"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "BOTAS"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "BRASSIER"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "CALCETAS"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "CALCETIN"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "CAMISON"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "CAMISA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "CAMISETA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "CAMISOLA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "CAPA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "CHALECO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "CHAMARRA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "CONJUNTO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "COORDINADO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "CORPIÑO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "DELANTAL"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "DISFRAZ"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "ESCOLAR"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "FAJERO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "FALDA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "FONDO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "GABARDINA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "GUAYABERA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "HOSPITAL"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "INDUSTRIAL"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "LEGGINGS"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "LEOTARDO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "MALLON"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "MAMELUCO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "MEDIAS"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "MILITAR"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "NOVIA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "OVEROL"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "PANTALON"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "PANTALETA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "PANTS"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "PETO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "PIJAMA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "PLAYERA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "POLICIA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "PRIMERA COMUNION"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "ROPA INTERIOR"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "SACO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "SALTO DE CAMA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "SHORTS"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "SUDADERA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "SUETER"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "TENIS"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "TRAJE DE BAÑO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "TRAJE REGIONAL"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "TRAJE"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "TRUSA"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "VESTIDO"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "XV AÑOS"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "ZAPATILLAS"],
            ["grupo_pertenencia" => "PRENDA DE VESTIR", "pertenencia" => "ZAPATOS"],
            ["grupo_pertenencia" => "ALHAJA", "pertenencia" => "JOYERIA"],
            ["grupo_pertenencia" => "ALHAJA", "pertenencia" => "RELOJES DE PULSO"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "ANILLO"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "ARETES - ARRACADAS - PENDIENTES"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "BOINA"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "BOLSO"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "BUFANDA"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "CINTURON"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "COLLAR - CADENA - PULSERA"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "CORBATA"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "ESTOLA"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "FAJA"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "GORRA"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "GORRO"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "GUANTES"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "JORONGO - PONCHO"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "MANCUERNILLA"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "MASCARA - PAÑOLETA"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "MONEDERO"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "MOÑO"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "PANUELO"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "PASHMINA"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "PECHERA"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "PEINETA - PASADOR - TUBOS PARA PELO"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "PLUMA"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "REBOZO"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "SOMBRERO"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "TOCADO"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "TURBANTE"],
            ["grupo_pertenencia" => "ACCESORIO DE DAMA Y CABALLERO", "pertenencia" => "UÑAS POSTIZAS"],
            ["grupo_pertenencia" => "OTRO", "pertenencia" => "NO ESPECIFICA"],
            ["grupo_pertenencia" => "OTRO", "pertenencia" => "OTRO"],
            
        ]); */
        
    }
}

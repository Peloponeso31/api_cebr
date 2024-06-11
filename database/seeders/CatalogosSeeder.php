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
            ["oficina" => "Celula Norte"],
            ["oficina" => "Celula Centro"],
            ["oficina" => "Celula Sur"],
            ["oficina" => "Búsqueda Inmediata"],
            ["oficina" => "Larga Data"],
            ["oficina" => "OGPI"],
        ]);

        \App\Models\Catalogos\Puesto::insert([
            ["nombre" => "Comisionado Estatal"],
            ["nombre" => "Jefe de Departamento"],
            ["nombre" => "Jefe de Oficina"],
        ]);

        \App\Models\Color::insert([
            ["nombre" => "NO ESPECIFICA", "hexadecimal" => "CCCCCC"],
            ["nombre" => "ROJO", "hexadecimal" => "FF0000"],
            ["nombre" => "VERDE", "hexadecimal" => "00FF00"],
            ["nombre" => "BLANCO", "hexadecimal" => "FFFFFF"],
            ["nombre" => "AZUL", "hexadecimal" => "0000FF"],
            ["nombre" => "AMARILLO", "hexadecimal" => "FFFF00"],
            ["nombre" => "CAFE", "hexadecimal" => "A52A2A"],
            ["nombre" => "NEGRO", "hexadecimal" => "000000"],
            ["nombre" => "CEREZA", "hexadecimal" => "DE3163"],
            ["nombre" => "CHAMPAGNE", "hexadecimal" => "F7E7CE"],
            ["nombre" => "BEIGE", "hexadecimal" => "F5F5DC"],
            ["nombre" => "COBRE", "hexadecimal" => "B87333"],
            ["nombre" => "ORO", "hexadecimal" => "FFD700"],
            ["nombre" => "GRIS", "hexadecimal" => "808080"],
            ["nombre" => "MORADO", "hexadecimal" => "800080"],
            ["nombre" => "NARANJA", "hexadecimal" => "FFA500"],
            ["nombre" => "ROSA", "hexadecimal" => "FFC0CB"],
            ["nombre" => "PLATA", "hexadecimal" => "C0C0C0"],
            ["nombre" => "PRIMER", "hexadecimal" => "E5E5E5"],
            ["nombre" => "VINO", "hexadecimal" => "800000"],
            ["nombre" => "VIOLETA", "hexadecimal" => "EE82EE"],
            ["nombre" => "SALMON", "hexadecimal" => "FA8072"],
            ["nombre" => "GUINDA", "hexadecimal" => "B22222"],
            ["nombre" => "MARRON", "hexadecimal" => "8B4513"],
            ["nombre" => "CREMA", "hexadecimal" => "FFF8DC"],
            ["nombre" => "PURPURA", "hexadecimal" => "800080"],
            ["nombre" => "ARENA", "hexadecimal" => "DAA520"],
            ["nombre" => "ONIX", "hexadecimal" => "353839"],
            ["nombre" => "PISTACHE", "hexadecimal" => "93C572"],
            ["nombre" => "AGUACATE", "hexadecimal" => "568203"],
            ["nombre" => "ALUMINIO", "hexadecimal" => "848789"],
            ["nombre" => "AMARILLO/AZUL", "hexadecimal" => "FFFF00"],
            ["nombre" => "AMARILLO/BLANCO", "hexadecimal" => "FFFF01"],
            ["nombre" => "AMARILLO/CAFE", "hexadecimal" => "DAA520"],
            ["nombre" => "AZUL-GIRS", "hexadecimal" => "778899"],
            ["nombre" => "AZUL ACERO", "hexadecimal" => "4682B4"],
            ["nombre" => "AZUL CIELO", "hexadecimal" => "87CEEB"],
            ["nombre" => "AZUL MARINO", "hexadecimal" => "000080"],
            ["nombre" => "AZUL METALICO", "hexadecimal" => "4169E1"],
            ["nombre" => "AZUL REAL", "hexadecimal" => "0000FF"],
            ["nombre" => "AZUL REY", "hexadecimal" => "0000FF"],
            ["nombre" => "AZUL TURQUESA", "hexadecimal" => "00CED1"],
            ["nombre" => "AZUL/BLANCO", "hexadecimal" => "ADD8E6"],
            ["nombre" => "AZUL/GRIS", "hexadecimal" => "778899"],
            ["nombre" => "AZUL/ORO", "hexadecimal" => "6495ED"],
            ["nombre" => "AZUL/PERLA", "hexadecimal" => "00BFFF"],
            ["nombre" => "AZUL/PLATEADO", "hexadecimal" => "B0C4DE"],
            ["nombre" => "BEIGE/CAFE", "hexadecimal" => "D2B48C"],
            ["nombre" => "BLANCO/AZUL", "hexadecimal" => "ADD8E6"],
            ["nombre" => "BLANCO/CREMA", "hexadecimal" => "FFFACD"],
            ["nombre" => "BLANCO/GRIS", "hexadecimal" => "D3D3D3"],
            ["nombre" => "BLANCO/NEGRO", "hexadecimal" => "FFFFFF"],
            ["nombre" => "BLANCO/ROJO", "hexadecimal" => "FF0000"],
            ["nombre" => "BLANCO/VINO", "hexadecimal" => "A52A2A"],
            ["nombre" => "CORAL", "hexadecimal" => "FF7F50"],
            ["nombre" => "CREMA/CAFE", "hexadecimal" => "FFF8DC"],
            ["nombre" => "DORADO", "hexadecimal" => "FFD700"],
            ["nombre" => "GRAFITO", "hexadecimal" => "2F4F4F"],
            ["nombre" => "GRIS ACERO", "hexadecimal" => "8A9597"],
            ["nombre" => "GRIS CLARO", "hexadecimal" => "D3D3D3"],
            ["nombre" => "GRIS METALICO", "hexadecimal" => "C0C0C0"],
            ["nombre" => "GRIS OXFORD", "hexadecimal" => "708090"],
            ["nombre" => "GRIS PERLA", "hexadecimal" => "C0C0C0"],
            ["nombre" => "GRIS PLATA", "hexadecimal" => "C0C0C0"],
            ["nombre" => "GRIS/AZUL", "hexadecimal" => "778899"],
            ["nombre" => "GRIS/ROJO", "hexadecimal" => "A52A2A"],
            ["nombre" => "GUINDA/BLANCO", "hexadecimal" => "FF0000"],
            ["nombre" => "GUINDA/NARANJA", "hexadecimal" => "FFA500"],
            ["nombre" => "GUINDA/ROJO", "hexadecimal" => "FF0000"],
            ["nombre" => "LILA", "hexadecimal" => "DAA0DD"],
            ["nombre" => "MALVA METALICO", "hexadecimal" => "BA55D3"],
            ["nombre" => "MAPLE", "hexadecimal" => "C9B59A"],
            ["nombre" => "MARFIL", "hexadecimal" => "FFFFF0"],
            ["nombre" => "MIEL", "hexadecimal" => "D2691E"],
            ["nombre" => "MOCA", "hexadecimal" => "493D26"],
            ["nombre" => "MORA", "hexadecimal" => "7B3F00"],
            ["nombre" => "NEGRO/AMARILLO", "hexadecimal" => "000000"],
            ["nombre" => "NEGRO/GRIS", "hexadecimal" => "2F4F4F"],
            ["nombre" => "NEGRO/MORADO", "hexadecimal" => "800080"],
            ["nombre" => "NEGRO/NARANJA", "hexadecimal" => "FFA500"],
            ["nombre" => "NEGRO/VERDE", "hexadecimal" => "008000"],
            ["nombre" => "OBSCURO", "hexadecimal" => "333333"],
            ["nombre" => "OCRE", "hexadecimal" => "CC7722"],
            ["nombre" => "PLATINO", "hexadecimal" => "E6E8FA"],
            ["nombre" => "PLOMO", "hexadecimal" => "737373"],
            ["nombre" => "ROJO CEREZA", "hexadecimal" => "DE3163"],
            ["nombre" => "ROJO FLAMA", "hexadecimal" => "FF4500"],
            ["nombre" => "ROJO GRANATE", "hexadecimal" => "B80F0A"],
            ["nombre" => "ROJO INDIO", "hexadecimal" => "CD5C5C"],
            ["nombre" => "ROJO METALICO", "hexadecimal" => "8B0000"],
            ["nombre" => "ROJO/AZUL", "hexadecimal" => "FF0000"],
            ["nombre" => "ROJO/GRIS", "hexadecimal" => "A52A2A"],
            ["nombre" => "ROJO/NEGRO", "hexadecimal" => "000000"],
            ["nombre" => "ROJO/VINO", "hexadecimal" => "A52A2A"],
            ["nombre" => "ROSA/NEGRO", "hexadecimal" => "FFC0CB"],
            ["nombre" => "RUBI", "hexadecimal" => "DAA0DD"],
            ["nombre" => "RUBI/OBSCURO", "hexadecimal" => "DAA0DD"],
            ["nombre" => "SATIN", "hexadecimal" => "6F4E37"],
            ["nombre" => "TABACO", "hexadecimal" => "9400D3"],
            ["nombre" => "UVA", "hexadecimal" => "00FFFE"],
            ["nombre" => "VERDE AGUA", "hexadecimal" => "008007"],
            ["nombre" => "VERDE BOTELLA", "hexadecimal" => "008008"],
            ["nombre" => "VERDE ESMERALDA", "hexadecimal" => "008009"],
            ["nombre" => "VERDE METALICO", "hexadecimal" => "00800A"],
            ["nombre" => "VERDE OBSCURO", "hexadecimal" => "80800B"],
            ["nombre" => "VERDE OLIVO", "hexadecimal" => "40E0DC"],
            ["nombre" => "VERDE TURQUESA", "hexadecimal" => "008000"],
            ["nombre" => "VERDE/AZUL", "hexadecimal" => "008001"],
            ["nombre" => "VERDE/BEIGE", "hexadecimal" => "008002"],
            ["nombre" => "VERDE/BLANCO", "hexadecimal" => "008003"],
            ["nombre" => "VERDE/GRIS/ECOLOGICO", "hexadecimal" => "800001"],
            ["nombre" => "VINO/GRIS", "hexadecimal" => "A52A2A"],
            ["nombre" => "CAFE/BEIGE", "hexadecimal" => "FFF8E1"],
            ["nombre" => "ROJO/BLANCO", "hexadecimal" => "FF0000"],
            ["nombre" => "VERDE/AMARILLO", "hexadecimal" => "808001"],
            ["nombre" => "AZUL/AMARILLO", "hexadecimal" => "FFFF01"],
            ["nombre" => "MAMEY", "hexadecimal" => "E37E5F"],
            ["nombre" => "ROJO/AMARILLO", "hexadecimal" => "FF0001"],
            ["nombre" => "VERDE/PLATA", "hexadecimal" => "C0C0C0"],
            ["nombre" => "AMARILLO/VERDE", "hexadecimal" => "DAA520"],
            ["nombre" => "NEGRO/ROJO", "hexadecimal" => "000000"],
            ["nombre" => "BLANCO/VERDE", "hexadecimal" => "FFFFFF"],
            ["nombre" => "AZUL/ROJO", "hexadecimal" => "0000FF"],
            ["nombre" => "AMARILLO/CAFE", "hexadecimal" => "808001"],
            ["nombre" => "BLANCO/MORADO", "hexadecimal" => "FFFFFF"],
            ["nombre" => "AZUL/NEGRO", "hexadecimal" => "000100"],
            ["nombre" => "VERDE/CREMA", "hexadecimal" => "008006"],
            ["nombre" => "GRIS/AMARILLO", "hexadecimal" => "A52A2A"],
            ["nombre" => "CREMA/NARANJA", "hexadecimal" => "FFDB59"],
            ["nombre" => "GRIS/GUINDA", "hexadecimal" => "FFD702"],
            ["nombre" => "NEGRO/BEIGE", "hexadecimal" => "000001"],
            ["nombre" => "MOSTAZA", "hexadecimal" => "DAA520"],
            ["nombre" => "TITANIO", "hexadecimal" => "C0C0C0"],
            ["nombre" => "OSTION", "hexadecimal" => "D9D6CF"],
            ["nombre" => "BLANCO/NARANJA", "hexadecimal" => "FFFF02"],
            ["nombre" => "NARANJA/AZUL", "hexadecimal" => "FFA500"],
            ["nombre" => "CAFE/VERDE", "hexadecimal" => "A52A2C"],
            ["nombre" => "ORO METALICO", "hexadecimal" => "FFD701"],
            ["nombre" => "NEGRO/BLANCO", "hexadecimal" => "000002"],
            ["nombre" => "VERDE/ROJO", "hexadecimal" => "008007"],
            ["nombre" => "BEIGE/AZUL", "hexadecimal" => "F5F5DD"],
            ["nombre" => "CREMA/VERDE OBSCURO", "hexadecimal" => "FFF8DF"],
            ["nombre" => "AZUL MARINO/NEGRO", "hexadecimal" => "000003"],
            ["nombre" => "MORADO/AMARILLO", "hexadecimal" => "800081"],
            ["nombre" => "GRIS/BLANCO", "hexadecimal" => "808003"],
            ["nombre" => "GRIS/VERDE", "hexadecimal" => "808004"],
            ["nombre" => "CREMA/ROJO", "hexadecimal" => "FFF8E0"],
            ["nombre" => "CAFE/BLANCO", "hexadecimal" => "A52A2D"],
            ["nombre" => "CREMA/VINO", "hexadecimal" => "FFF8E1"],
            ["nombre" => "PAJA", "hexadecimal" => "FFDB59"],
            ["nombre" => "ROJO/DORADO", "hexadecimal" => "FFD702"],
            ["nombre" => "HUESO", "hexadecimal" => "E6D2A9"],
            ["nombre" => "TERRACOTA", "hexadecimal" => "E2725B"],
            ["nombre" => "AZUL/VERDE", "hexadecimal" => "008009"],
            ["nombre" => "NEGRO/BLANCO", "hexadecimal" => "000004"],
            ["nombre" => "BLANCO/AMARILLO", "hexadecimal" => "FFFF03"],
            ["nombre" => "OPALO", "hexadecimal" => "COCOC1"],
            ["nombre" => "ROJO PERLADO", "hexadecimal" => "FF0002"],
            ["nombre" => "ESTAMPADO", "hexadecimal" => "FFFFF"],
            ["nombre" => "CLARO", "hexadecimal" => "FFFFFF"]
        ]);

        /*

        \App\Models\Catalogos\Prenda DeVestir::insert([
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

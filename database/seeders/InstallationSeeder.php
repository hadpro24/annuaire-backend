<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Pays};
use Illuminate\Support\Facades\Schema;

class InstallationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = $this->getWorldList();

        Schema::disableForeignKeyConstraints();

        Pays::truncate();

        foreach ($countries as $key => $countrie) {

            Pays::firstOrCreate([
                'nom' => $countrie['name']
            ])->update([
                'alpha2' => $countrie['alpha2'],
                'alpha3' => $countrie['alpha3']
            ]); 
        }

        Schema::enableForeignKeyConstraints();
    }



    public function getWorldList()
    {
        return array(
            array(
                'id'        => 324,
                'name'      => 'Guinée',
                'alpha2'    => 'gn',
                'alpha3'    => 'gin'
            ),
            array(
                'id'        => 624,
                'name'      => 'Guinée-Bissau',
                'alpha2'    => 'gw',
                'alpha3'    => 'gnb'
            ),
            array(
                'id'        => 226,
                'name'      => 'Guinée équatoriale',
                'alpha2'    => 'gq',
                'alpha3'    => 'gnq'
            ),
            array(
                'id'        => 404,
                'name'      => 'Kenya',
                'alpha2'    => 'ke',
                'alpha3'    => 'ken'
            ),
            array(
                'id'        => 4,
                'name'      => 'Afghanistan',
                'alpha2'    => 'af',
                'alpha3'    => 'afg'
            ),
            array(
                'id'        => 710,
                'name'      => 'Afrique du Sud',
                'alpha2'    => 'za',
                'alpha3'    => 'zaf'
            ),
            array(
                'id'        => 8,
                'name'      => 'Albanie',
                'alpha2'    => 'al',
                'alpha3'    => 'alb'
            ),
            array(
                'id'        => 12,
                'name'      => 'Algérie',
                'alpha2'    => 'dz',
                'alpha3'    => 'dza'
            ),
            array(
                'id'        => 276,
                'name'      => 'Allemagne',
                'alpha2'    => 'de',
                'alpha3'    => 'deu'
            ),
            array(
                'id'        => 20,
                'name'      => 'Andorre',
                'alpha2'    => 'ad',
                'alpha3'    => 'and'
            ),
            array(
                'id'        => 24,
                'name'      => 'Angola',
                'alpha2'    => 'ao',
                'alpha3'    => 'ago'
            ),
            array(
                'id'        => 28,
                'name'      => 'Antigua-et-Barbuda',
                'alpha2'    => 'ag',
                'alpha3'    => 'atg'
            ),
            array(
                'id'        => 682,
                'name'      => 'Arabie saoudite',
                'alpha2'    => 'sa',
                'alpha3'    => 'sau'
            ),
            array(
                'id'        => 32,
                'name'      => 'Argentine',
                'alpha2'    => 'ar',
                'alpha3'    => 'arg'
            ),
            array(
                'id'        => 51,
                'name'      => 'Arménie',
                'alpha2'    => 'am',
                'alpha3'    => 'arm'
            ),
            array(
                'id'        => 36,
                'name'      => 'Australie',
                'alpha2'    => 'au',
                'alpha3'    => 'aus'
            ),
            array(
                'id'        => 40,
                'name'      => 'Autriche',
                'alpha2'    => 'at',
                'alpha3'    => 'aut'
            ),
            array(
                'id'        => 31,
                'name'      => 'Azerbaïdjan',
                'alpha2'    => 'az',
                'alpha3'    => 'aze'
            ),
            array(
                'id'        => 44,
                'name'      => 'Bahamas',
                'alpha2'    => 'bs',
                'alpha3'    => 'bhs'
            ),
            array(
                'id'        => 48,
                'name'      => 'Bahreïn',
                'alpha2'    => 'bh',
                'alpha3'    => 'bhr'
            ),
            array(
                'id'        => 50,
                'name'      => 'Bangladesh',
                'alpha2'    => 'bd',
                'alpha3'    => 'bgd'
            ),
            array(
                'id'        => 52,
                'name'      => 'Barbade',
                'alpha2'    => 'bb',
                'alpha3'    => 'brb'
            ),
            array(
                'id'        => 112,
                'name'      => 'Biélorussie',
                'alpha2'    => 'by',
                'alpha3'    => 'blr'
            ),
            array(
                'id'        => 56,
                'name'      => 'Belgique',
                'alpha2'    => 'be',
                'alpha3'    => 'bel'
            ),
            array(
                'id'        => 84,
                'name'      => 'Belize',
                'alpha2'    => 'bz',
                'alpha3'    => 'blz'
            ),
            array(
                'id'        => 204,
                'name'      => 'Bénin',
                'alpha2'    => 'bj',
                'alpha3'    => 'ben'
            ),
            array(
                'id'        => 64,
                'name'      => 'Bhoutan',
                'alpha2'    => 'bt',
                'alpha3'    => 'btn'
            ),
            array(
                'id'        => 68,
                'name'      => 'Bolivie',
                'alpha2'    => 'bo',
                'alpha3'    => 'bol'
            ),
            array(
                'id'        => 70,
                'name'      => 'Bosnie-Herzégovine',
                'alpha2'    => 'ba',
                'alpha3'    => 'bih'
            ),
            array(
                'id'        => 72,
                'name'      => 'Botswana',
                'alpha2'    => 'bw',
                'alpha3'    => 'bwa'
            ),
            array(
                'id'        => 76,
                'name'      => 'Brésil',
                'alpha2'    => 'br',
                'alpha3'    => 'bra'
            ),
            array(
                'id'        => 96,
                'name'      => 'Brunei',
                'alpha2'    => 'bn',
                'alpha3'    => 'brn'
            ),
            array(
                'id'        => 100,
                'name'      => 'Bulgarie',
                'alpha2'    => 'bg',
                'alpha3'    => 'bgr'
            ),
            array(
                'id'        => 854,
                'name'      => 'Burkina Faso',
                'alpha2'    => 'bf',
                'alpha3'    => 'bfa'
            ),
            array(
                'id'        => 108,
                'name'      => 'Burundi',
                'alpha2'    => 'bi',
                'alpha3'    => 'bdi'
            ),
            array(
                'id'        => 116,
                'name'      => 'Cambodge',
                'alpha2'    => 'kh',
                'alpha3'    => 'khm'
            ),
            array(
                'id'        => 120,
                'name'      => 'Cameroun',
                'alpha2'    => 'cm',
                'alpha3'    => 'cmr'
            ),
            array(
                'id'        => 124,
                'name'      => 'Canada',
                'alpha2'    => 'ca',
                'alpha3'    => 'can'
            ),
            array(
                'id'        => 132,
                'name'      => 'Cap-Vert',
                'alpha2'    => 'cv',
                'alpha3'    => 'cpv'
            ),
            array(
                'id'        => 140,
                'name'      => 'République centrafricaine',
                'alpha2'    => 'cf',
                'alpha3'    => 'caf'
            ),
            array(
                'id'        => 152,
                'name'      => 'Chili',
                'alpha2'    => 'cl',
                'alpha3'    => 'chl'
            ),
            array(
                'id'        => 156,
                'name'      => 'Chine',
                'alpha2'    => 'cn',
                'alpha3'    => 'chn'
            ),
            array(
                'id'        => 196,
                'name'      => 'Chypre (pays)',
                'alpha2'    => 'cy',
                'alpha3'    => 'cyp'
            ),
            array(
                'id'        => 170,
                'name'      => 'Colombie',
                'alpha2'    => 'co',
                'alpha3'    => 'col'
            ),
            array(
                'id'        => 174,
                'name'      => 'Comores (pays)',
                'alpha2'    => 'km',
                'alpha3'    => 'com'
            ),
            array(
                'id'        => 178,
                'name'      => 'République du Congo',
                'alpha2'    => 'cg',
                'alpha3'    => 'cog'
            ),
            array(
                'id'        => 180,
                'name'      => 'République démocratique du Congo',
                'alpha2'    => 'cd',
                'alpha3'    => 'cod'
            ),
            array(
                'id'        => 410,
                'name'      => 'Corée du Sud',
                'alpha2'    => 'kr',
                'alpha3'    => 'kor'
            ),
            array(
                'id'        => 408,
                'name'      => 'Corée du Nord',
                'alpha2'    => 'kp',
                'alpha3'    => 'prk'
            ),
            array(
                'id'        => 188,
                'name'      => 'Costa Rica',
                'alpha2'    => 'cr',
                'alpha3'    => 'cri'
            ),
            array(
                'id'        => 384,
                'name'      => 'Côte d\'Ivoire',
                'alpha2'    => 'ci',
                'alpha3'    => 'civ'
            ),
            array(
                'id'        => 191,
                'name'      => 'Croatie',
                'alpha2'    => 'hr',
                'alpha3'    => 'hrv'
            ),
            array(
                'id'        => 192,
                'name'      => 'Cuba',
                'alpha2'    => 'cu',
                'alpha3'    => 'cub'
            ),
            array(
                'id'        => 208,
                'name'      => 'Danemark',
                'alpha2'    => 'dk',
                'alpha3'    => 'dnk'
            ),
            array(
                'id'        => 262,
                'name'      => 'Djibouti',
                'alpha2'    => 'dj',
                'alpha3'    => 'dji'
            ),
            array(
                'id'        => 214,
                'name'      => 'République dominicaine',
                'alpha2'    => 'do',
                'alpha3'    => 'dom'
            ),
            array(
                'id'        => 212,
                'name'      => 'Dominique',
                'alpha2'    => 'dm',
                'alpha3'    => 'dma'
            ),
            array(
                'id'        => 818,
                'name'      => 'Égypte',
                'alpha2'    => 'eg',
                'alpha3'    => 'egy'
            ),
            array(
                'id'        => 222,
                'name'      => 'Salvador',
                'alpha2'    => 'sv',
                'alpha3'    => 'slv'
            ),
            array(
                'id'        => 784,
                'name'      => 'Émirats arabes unis',
                'alpha2'    => 'ae',
                'alpha3'    => 'are'
            ),
            array(
                'id'        => 218,
                'name'      => 'Équateur (pays)',
                'alpha2'    => 'ec',
                'alpha3'    => 'ecu'
            ),
            array(
                'id'        => 232,
                'name'      => 'Érythrée',
                'alpha2'    => 'er',
                'alpha3'    => 'eri'
            ),
            array(
                'id'        => 724,
                'name'      => 'Espagne',
                'alpha2'    => 'es',
                'alpha3'    => 'esp'
            ),
            array(
                'id'        => 233,
                'name'      => 'Estonie',
                'alpha2'    => 'ee',
                'alpha3'    => 'est'
            ),
            array(
                'id'        => 840,
                'name'      => 'États-Unis',
                'alpha2'    => 'us',
                'alpha3'    => 'usa'
            ),
            array(
                'id'        => 231,
                'name'      => 'Éthiopie',
                'alpha2'    => 'et',
                'alpha3'    => 'eth'
            ),
            array(
                'id'        => 242,
                'name'      => 'Fidji',
                'alpha2'    => 'fj',
                'alpha3'    => 'fji'
            ),
            array(
                'id'        => 246,
                'name'      => 'Finlande',
                'alpha2'    => 'fi',
                'alpha3'    => 'fin'
            ),
            array(
                'id'        => 250,
                'name'      => 'France',
                'alpha2'    => 'fr',
                'alpha3'    => 'fra'
            ),
            array(
                'id'        => 266,
                'name'      => 'Gabon',
                'alpha2'    => 'ga',
                'alpha3'    => 'gab'
            ),
            array(
                'id'        => 270,
                'name'      => 'Gambie',
                'alpha2'    => 'gm',
                'alpha3'    => 'gmb'
            ),
            array(
                'id'        => 268,
                'name'      => 'Géorgie (pays)',
                'alpha2'    => 'ge',
                'alpha3'    => 'geo'
            ),
            array(
                'id'        => 288,
                'name'      => 'Ghana',
                'alpha2'    => 'gh',
                'alpha3'    => 'gha'
            ),
            array(
                'id'        => 300,
                'name'      => 'Grèce',
                'alpha2'    => 'gr',
                'alpha3'    => 'grc'
            ),
            array(
                'id'        => 308,
                'name'      => 'Grenade (pays)',
                'alpha2'    => 'gd',
                'alpha3'    => 'grd'
            ),
            array(
                'id'        => 320,
                'name'      => 'Guatemala',
                'alpha2'    => 'gt',
                'alpha3'    => 'gtm'
            ),
            
            
            
            array(
                'id'        => 328,
                'name'      => 'Guyana',
                'alpha2'    => 'gy',
                'alpha3'    => 'guy'
            ),
            array(
                'id'        => 332,
                'name'      => 'Haïti',
                'alpha2'    => 'ht',
                'alpha3'    => 'hti'
            ),
            array(
                'id'        => 340,
                'name'      => 'Honduras',
                'alpha2'    => 'hn',
                'alpha3'    => 'hnd'
            ),
            array(
                'id'        => 348,
                'name'      => 'Hongrie',
                'alpha2'    => 'hu',
                'alpha3'    => 'hun'
            ),
            array(
                'id'        => 356,
                'name'      => 'Inde',
                'alpha2'    => 'in',
                'alpha3'    => 'ind'
            ),
            array(
                'id'        => 360,
                'name'      => 'Indonésie',
                'alpha2'    => 'id',
                'alpha3'    => 'idn'
            ),
            array(
                'id'        => 364,
                'name'      => 'Iran',
                'alpha2'    => 'ir',
                'alpha3'    => 'irn'
            ),
            array(
                'id'        => 368,
                'name'      => 'Irak',
                'alpha2'    => 'iq',
                'alpha3'    => 'irq'
            ),
            array(
                'id'        => 372,
                'name'      => 'Irlande (pays)',
                'alpha2'    => 'ie',
                'alpha3'    => 'irl'
            ),
            array(
                'id'        => 352,
                'name'      => 'Islande',
                'alpha2'    => 'is',
                'alpha3'    => 'isl'
            ),
            array(
                'id'        => 376,
                'name'      => 'Israël',
                'alpha2'    => 'il',
                'alpha3'    => 'isr'
            ),
            array(
                'id'        => 380,
                'name'      => 'Italie',
                'alpha2'    => 'it',
                'alpha3'    => 'ita'
            ),
            array(
                'id'        => 388,
                'name'      => 'Jamaïque',
                'alpha2'    => 'jm',
                'alpha3'    => 'jam'
            ),
            array(
                'id'        => 392,
                'name'      => 'Japon',
                'alpha2'    => 'jp',
                'alpha3'    => 'jpn'
            ),
            array(
                'id'        => 400,
                'name'      => 'Jordanie',
                'alpha2'    => 'jo',
                'alpha3'    => 'jor'
            ),
            array(
                'id'        => 398,
                'name'      => 'Kazakhstan',
                'alpha2'    => 'kz',
                'alpha3'    => 'kaz'
            ),
            
            array(
                'id'        => 417,
                'name'      => 'Kirghizistan',
                'alpha2'    => 'kg',
                'alpha3'    => 'kgz'
            ),
            array(
                'id'        => 296,
                'name'      => 'Kiribati',
                'alpha2'    => 'ki',
                'alpha3'    => 'kir'
            ),
            array(
                'id'        => 414,
                'name'      => 'Koweït',
                'alpha2'    => 'kw',
                'alpha3'    => 'kwt'
            ),
            array(
                'id'        => 418,
                'name'      => 'Laos',
                'alpha2'    => 'la',
                'alpha3'    => 'lao'
            ),
            array(
                'id'        => 426,
                'name'      => 'Lesotho',
                'alpha2'    => 'ls',
                'alpha3'    => 'lso'
            ),
            array(
                'id'        => 428,
                'name'      => 'Lettonie',
                'alpha2'    => 'lv',
                'alpha3'    => 'lva'
            ),
            array(
                'id'        => 422,
                'name'      => 'Liban',
                'alpha2'    => 'lb',
                'alpha3'    => 'lbn'
            ),
            array(
                'id'        => 430,
                'name'      => 'Liberia',
                'alpha2'    => 'lr',
                'alpha3'    => 'lbr'
            ),
            array(
                'id'        => 434,
                'name'      => 'Libye',
                'alpha2'    => 'ly',
                'alpha3'    => 'lby'
            ),
            array(
                'id'        => 438,
                'name'      => 'Liechtenstein',
                'alpha2'    => 'li',
                'alpha3'    => 'lie'
            ),
            array(
                'id'        => 440,
                'name'      => 'Lituanie',
                'alpha2'    => 'lt',
                'alpha3'    => 'ltu'
            ),
            array(
                'id'        => 442,
                'name'      => 'Luxembourg (pays)',
                'alpha2'    => 'lu',
                'alpha3'    => 'lux'
            ),
            array(
                'id'        => 807,
                'name'      => 'Macédoine du Nord',
                'alpha2'    => 'mk',
                'alpha3'    => 'mkd'
            ),
            array(
                'id'        => 450,
                'name'      => 'Madagascar',
                'alpha2'    => 'mg',
                'alpha3'    => 'mdg'
            ),
            array(
                'id'        => 458,
                'name'      => 'Malaisie',
                'alpha2'    => 'my',
                'alpha3'    => 'mys'
            ),
            array(
                'id'        => 454,
                'name'      => 'Malawi',
                'alpha2'    => 'mw',
                'alpha3'    => 'mwi'
            ),
            array(
                'id'        => 462,
                'name'      => 'Maldives',
                'alpha2'    => 'mv',
                'alpha3'    => 'mdv'
            ),
            array(
                'id'        => 466,
                'name'      => 'Mali',
                'alpha2'    => 'ml',
                'alpha3'    => 'mli'
            ),
            array(
                'id'        => 470,
                'name'      => 'Malte',
                'alpha2'    => 'mt',
                'alpha3'    => 'mlt'
            ),
            array(
                'id'        => 504,
                'name'      => 'Maroc',
                'alpha2'    => 'ma',
                'alpha3'    => 'mar'
            ),
            array(
                'id'        => 584,
                'name'      => 'Îles Marshall (pays)',
                'alpha2'    => 'mh',
                'alpha3'    => 'mhl'
            ),
            array(
                'id'        => 480,
                'name'      => 'Maurice (pays)',
                'alpha2'    => 'mu',
                'alpha3'    => 'mus'
            ),
            array(
                'id'        => 478,
                'name'      => 'Mauritanie',
                'alpha2'    => 'mr',
                'alpha3'    => 'mrt'
            ),
            array(
                'id'        => 484,
                'name'      => 'Mexique',
                'alpha2'    => 'mx',
                'alpha3'    => 'mex'
            ),
            array(
                'id'        => 583,
                'name'      => 'États fédérés de Micronésie (pays)',
                'alpha2'    => 'fm',
                'alpha3'    => 'fsm'
            ),
            array(
                'id'        => 498,
                'name'      => 'Moldavie',
                'alpha2'    => 'md',
                'alpha3'    => 'mda'
            ),
            array(
                'id'        => 492,
                'name'      => 'Monaco',
                'alpha2'    => 'mc',
                'alpha3'    => 'mco'
            ),
            array(
                'id'        => 496,
                'name'      => 'Mongolie',
                'alpha2'    => 'mn',
                'alpha3'    => 'mng'
            ),
            array(
                'id'        => 499,
                'name'      => 'Monténégro',
                'alpha2'    => 'me',
                'alpha3'    => 'mne'
            ),
            array(
                'id'        => 508,
                'name'      => 'Mozambique',
                'alpha2'    => 'mz',
                'alpha3'    => 'moz'
            ),
            array(
                'id'        => 104,
                'name'      => 'Birmanie',
                'alpha2'    => 'mm',
                'alpha3'    => 'mmr'
            ),
            array(
                'id'        => 516,
                'name'      => 'Namibie',
                'alpha2'    => 'na',
                'alpha3'    => 'nam'
            ),
            array(
                'id'        => 520,
                'name'      => 'Nauru',
                'alpha2'    => 'nr',
                'alpha3'    => 'nru'
            ),
            array(
                'id'        => 524,
                'name'      => 'Népal',
                'alpha2'    => 'np',
                'alpha3'    => 'npl'
            ),
            array(
                'id'        => 558,
                'name'      => 'Nicaragua',
                'alpha2'    => 'ni',
                'alpha3'    => 'nic'
            ),
            array(
                'id'        => 562,
                'name'      => 'Niger',
                'alpha2'    => 'ne',
                'alpha3'    => 'ner'
            ),
            array(
                'id'        => 566,
                'name'      => 'Nigeria',
                'alpha2'    => 'ng',
                'alpha3'    => 'nga'
            ),
            array(
                'id'        => 578,
                'name'      => 'Norvège',
                'alpha2'    => 'no',
                'alpha3'    => 'nor'
            ),
            array(
                'id'        => 554,
                'name'      => 'Nouvelle-Zélande',
                'alpha2'    => 'nz',
                'alpha3'    => 'nzl'
            ),
            array(
                'id'        => 512,
                'name'      => 'Oman',
                'alpha2'    => 'om',
                'alpha3'    => 'omn'
            ),
            array(
                'id'        => 800,
                'name'      => 'Ouganda',
                'alpha2'    => 'ug',
                'alpha3'    => 'uga'
            ),
            array(
                'id'        => 860,
                'name'      => 'Ouzbékistan',
                'alpha2'    => 'uz',
                'alpha3'    => 'uzb'
            ),
            array(
                'id'        => 586,
                'name'      => 'Pakistan',
                'alpha2'    => 'pk',
                'alpha3'    => 'pak'
            ),
            array(
                'id'        => 585,
                'name'      => 'Palaos',
                'alpha2'    => 'pw',
                'alpha3'    => 'plw'
            ),
            array(
                'id'        => 591,
                'name'      => 'Panama',
                'alpha2'    => 'pa',
                'alpha3'    => 'pan'
            ),
            array(
                'id'        => 598,
                'name'      => 'Papouasie-Nouvelle-Guinée',
                'alpha2'    => 'pg',
                'alpha3'    => 'png'
            ),
            array(
                'id'        => 600,
                'name'      => 'Paraguay',
                'alpha2'    => 'py',
                'alpha3'    => 'pry'
            ),
            array(
                'id'        => 528,
                'name'      => 'Pays-Bas',
                'alpha2'    => 'nl',
                'alpha3'    => 'nld'
            ),
            array(
                'id'        => 604,
                'name'      => 'Pérou',
                'alpha2'    => 'pe',
                'alpha3'    => 'per'
            ),
            array(
                'id'        => 608,
                'name'      => 'Philippines',
                'alpha2'    => 'ph',
                'alpha3'    => 'phl'
            ),
            array(
                'id'        => 616,
                'name'      => 'Pologne',
                'alpha2'    => 'pl',
                'alpha3'    => 'pol'
            ),
            array(
                'id'        => 620,
                'name'      => 'Portugal',
                'alpha2'    => 'pt',
                'alpha3'    => 'prt'
            ),
            array(
                'id'        => 634,
                'name'      => 'Qatar',
                'alpha2'    => 'qa',
                'alpha3'    => 'qat'
            ),
            array(
                'id'        => 642,
                'name'      => 'Roumanie',
                'alpha2'    => 'ro',
                'alpha3'    => 'rou'
            ),
            array(
                'id'        => 826,
                'name'      => 'Royaume-Uni',
                'alpha2'    => 'gb',
                'alpha3'    => 'gbr'
            ),
            array(
                'id'        => 643,
                'name'      => 'Russie',
                'alpha2'    => 'ru',
                'alpha3'    => 'rus'
            ),
            array(
                'id'        => 646,
                'name'      => 'Rwanda',
                'alpha2'    => 'rw',
                'alpha3'    => 'rwa'
            ),
            array(
                'id'        => 659,
                'name'      => 'Saint-Christophe-et-Niévès',
                'alpha2'    => 'kn',
                'alpha3'    => 'kna'
            ),
            array(
                'id'        => 674,
                'name'      => 'Saint-Marin',
                'alpha2'    => 'sm',
                'alpha3'    => 'smr'
            ),
            array(
                'id'        => 670,
                'name'      => 'Saint-Vincent-et-les-Grenadines',
                'alpha2'    => 'vc',
                'alpha3'    => 'vct'
            ),
            array(
                'id'        => 662,
                'name'      => 'Sainte-Lucie',
                'alpha2'    => 'lc',
                'alpha3'    => 'lca'
            ),
            array(
                'id'        => 90,
                'name'      => 'Îles Salomon',
                'alpha2'    => 'sb',
                'alpha3'    => 'slb'
            ),
            array(
                'id'        => 882,
                'name'      => 'Samoa',
                'alpha2'    => 'ws',
                'alpha3'    => 'wsm'
            ),
            array(
                'id'        => 678,
                'name'      => 'Sao Tomé-et-Principe',
                'alpha2'    => 'st',
                'alpha3'    => 'stp'
            ),
            array(
                'id'        => 686,
                'name'      => 'Sénégal',
                'alpha2'    => 'sn',
                'alpha3'    => 'sen'
            ),
            array(
                'id'        => 688,
                'name'      => 'Serbie',
                'alpha2'    => 'rs',
                'alpha3'    => 'srb'
            ),
            array(
                'id'        => 690,
                'name'      => 'Seychelles',
                'alpha2'    => 'sc',
                'alpha3'    => 'syc'
            ),
            array(
                'id'        => 694,
                'name'      => 'Sierra Leone',
                'alpha2'    => 'sl',
                'alpha3'    => 'sle'
            ),
            array(
                'id'        => 702,
                'name'      => 'Singapour',
                'alpha2'    => 'sg',
                'alpha3'    => 'sgp'
            ),
            array(
                'id'        => 703,
                'name'      => 'Slovaquie',
                'alpha2'    => 'sk',
                'alpha3'    => 'svk'
            ),
            array(
                'id'        => 705,
                'name'      => 'Slovénie',
                'alpha2'    => 'si',
                'alpha3'    => 'svn'
            ),
            array(
                'id'        => 706,
                'name'      => 'Somalie',
                'alpha2'    => 'so',
                'alpha3'    => 'som'
            ),
            array(
                'id'        => 729,
                'name'      => 'Soudan',
                'alpha2'    => 'sd',
                'alpha3'    => 'sdn'
            ),
            array(
                'id'        => 728,
                'name'      => 'Soudan du Sud',
                'alpha2'    => 'ss',
                'alpha3'    => 'ssd'
            ),
            array(
                'id'        => 144,
                'name'      => 'Sri Lanka',
                'alpha2'    => 'lk',
                'alpha3'    => 'lka'
            ),
            array(
                'id'        => 752,
                'name'      => 'Suède',
                'alpha2'    => 'se',
                'alpha3'    => 'swe'
            ),
            array(
                'id'        => 756,
                'name'      => 'Suisse',
                'alpha2'    => 'ch',
                'alpha3'    => 'che'
            ),
            array(
                'id'        => 740,
                'name'      => 'Suriname',
                'alpha2'    => 'sr',
                'alpha3'    => 'sur'
            ),
            array(
                'id'        => 748,
                'name'      => 'Eswatini',
                'alpha2'    => 'sz',
                'alpha3'    => 'swz'
            ),
            array(
                'id'        => 760,
                'name'      => 'Syrie',
                'alpha2'    => 'sy',
                'alpha3'    => 'syr'
            ),
            array(
                'id'        => 762,
                'name'      => 'Tadjikistan',
                'alpha2'    => 'tj',
                'alpha3'    => 'tjk'
            ),
            array(
                'id'        => 834,
                'name'      => 'Tanzanie',
                'alpha2'    => 'tz',
                'alpha3'    => 'tza'
            ),
            array(
                'id'        => 148,
                'name'      => 'Tchad',
                'alpha2'    => 'td',
                'alpha3'    => 'tcd'
            ),
            array(
                'id'        => 203,
                'name'      => 'Tchéquie',
                'alpha2'    => 'cz',
                'alpha3'    => 'cze'
            ),
            array(
                'id'        => 764,
                'name'      => 'Thaïlande',
                'alpha2'    => 'th',
                'alpha3'    => 'tha'
            ),
            array(
                'id'        => 626,
                'name'      => 'Timor oriental',
                'alpha2'    => 'tl',
                'alpha3'    => 'tls'
            ),
            array(
                'id'        => 768,
                'name'      => 'Togo',
                'alpha2'    => 'tg',
                'alpha3'    => 'tgo'
            ),
            array(
                'id'        => 776,
                'name'      => 'Tonga',
                'alpha2'    => 'to',
                'alpha3'    => 'ton'
            ),
            array(
                'id'        => 780,
                'name'      => 'Trinité-et-Tobago',
                'alpha2'    => 'tt',
                'alpha3'    => 'tto'
            ),
            array(
                'id'        => 788,
                'name'      => 'Tunisie',
                'alpha2'    => 'tn',
                'alpha3'    => 'tun'
            ),
            array(
                'id'        => 795,
                'name'      => 'Turkménistan',
                'alpha2'    => 'tm',
                'alpha3'    => 'tkm'
            ),
            array(
                'id'        => 792,
                'name'      => 'Turquie',
                'alpha2'    => 'tr',
                'alpha3'    => 'tur'
            ),
            array(
                'id'        => 798,
                'name'      => 'Tuvalu',
                'alpha2'    => 'tv',
                'alpha3'    => 'tuv'
            ),
            array(
                'id'        => 804,
                'name'      => 'Ukraine',
                'alpha2'    => 'ua',
                'alpha3'    => 'ukr'
            ),
            array(
                'id'        => 858,
                'name'      => 'Uruguay',
                'alpha2'    => 'uy',
                'alpha3'    => 'ury'
            ),
            array(
                'id'        => 548,
                'name'      => 'Vanuatu',
                'alpha2'    => 'vu',
                'alpha3'    => 'vut'
            ),
            array(
                'id'        => 862,
                'name'      => 'Venezuela',
                'alpha2'    => 've',
                'alpha3'    => 'ven'
            ),
            array(
                'id'        => 704,
                'name'      => 'Viêt Nam',
                'alpha2'    => 'vn',
                'alpha3'    => 'vnm'
            ),
            array(
                'id'        => 887,
                'name'      => 'Yémen',
                'alpha2'    => 'ye',
                'alpha3'    => 'yem'
            ),
            array(
                'id'        => 894,
                'name'      => 'Zambie',
                'alpha2'    => 'zm',
                'alpha3'    => 'zmb'
            ),
            array(
                'id'        => 716,
                'name'      => 'Zimbabwe',
                'alpha2'    => 'zw',
                'alpha3'    => 'zwe'
            ),
        );

    }
}

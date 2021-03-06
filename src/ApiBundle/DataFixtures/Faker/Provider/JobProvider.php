<?php

/*
 * This file is part of the Incipio package.
 *
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ApiBundle\DataFixtures\Faker\Provider;

use Faker\Provider\Base as BaseProvider;

/**
 * Class JobProvider.
 *
 * Faker provider for jobs.
 *
 * @see    ApiBundle\Entity\Job
 *
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
class JobProvider extends BaseProvider
{
    /**
     * @var array List of job titles.
     *            Sources: {@link http://siliconvalleyjobtitlegenerator.tumblr.com/}
     */
    private $titleProvider = [
        'firstname' => [
            'Audience Recognition',
            'Big Data',
            'Bitcoin',
            'Brand Experience',
            'Brand Score',
            'Brand Story',
            'Brogramming',
            'Chief Uber',
            'Cloud',
            'Contextual Computing',
            'Culture',
            'Click-Through',
            'Collaboration',
            'Connection',
            'Content',
            'Convergence',
            'Conversation',
            'Crowdfunding',
            'Cryptocurrency',
            'Data',
            'Decentralized Information Asset',
            'DevOps',
            'Digital',
            'Digital Media',
            'Engagement',
            'Emoji',
            'Facebook',
            'Functionality',
            'Human Experience',
            'Idea',
            'In-House Social Media',
            'Information',
            'Innovation',
            'Intelligence',
            'Kickstarter',
            'Longform Engagement',
            'Mobile Intimacy',
            'Mobile Platform',
            'Naked',
            'Online Space',
            'Pinterest',
            'Platform',
            'Principal Digital Imaging',
            'Quantification',
            'Reddit',
            'Scalability',
            'Self-Quantification',
            'Senior Information',
            'Shareability',
            'Social Media',
            'Software',
            'Startup',
            'Strategic Partnership',
            'Tablet',
            'Technology',
            'Thought',
            'Tinder',
            'Trend',
            'Tumblr',
            'Twitter',
            'User Experience',
            'Unique Experience',
            'Video Experience',
            'Wearables',
            'Webinar',
        ],
        'lastname' => [
            'Advocate',
            'Amplifier',
            'Architect',
            'Agitator',
            'Baron',
            'Commander',
            'Conductor',
            'Connector',
            'Consultant',
            'Curator',
            'Custodian',
            'Directress',
            'Disruptor',
            'Disruptionist',
            'Disruptor',
            'Evangelist',
            'Fellow',
            'Futurist',
            'Hacker',
            'Gatekeeper',
            'General',
            'Guardian',
            'Guru',
            'Instigator',
            'Lord',
            'Maestro',
            'Mastermind',
            'Maven',
            'Mentor',
            'Messiah',
            'Minister',
            'Mystic',
            'Nerd',
            'Ninja',
            'Officer',
            'Overlord',
            'Philosopher',
            'Prophet',
            'Pioneer',
            'Proctor',
            'Resident',
            'Revisionist',
            'Sage',
            'Savant',
            'Seer',
            'Sentry',
            'Shaman',
            'Shepherd',
            'Sherpa',
            'Steward',
            'Strategist',
            'Sultan',
            'Superintendent',
            'Svengali',
            'Tinkerer',
            'Translator',
            'Tsar',
            'Visionary',
            'Warden',
            'Warlock',
            'Watchman',
            'Wizard',
        ],
        'fullname' => [
            'Conductor of Datafication',
            'Crowd-Funder-in-Residence',
            'Quantified-Self-in-Residence',
            'Creator of Things',
            'Curator of Datafication',
            'Curator of Brand Stories',
            'Custodian of Datafication',
            'Custodian of the Quantified Self',
            'Custodian of the Twitterverse',
            'Custodian of the Reddit-sphere',
            'Brogrammer-in-Residence',
            'Data-Miner-in-Residence',
            'Digitizer-in-Residence',
            'Disruptor-in-Residence',
            'Early-Adopter-in-Residence',
            'Explainer-in-Residence',
            'Game-Changer-in-Residence',
            'Gamifyer-in-Residence',
            'Geek-in-Residence',
            'Genius-in-Residence',
            'Grand Poobah of Bitcoin',
            'Grand Poobah of Brand Utilization',
            'Grand Poobah of Cryptocurrencies',
            'Grand Poobah of Big Data',
            'Grand Poobah of Digital Media',
            'Grand Poobah of Digital Innovation',
            'Grand Poobah of Disruptive Innovation',
            'Grand Poobah of Functionality',
            'Grand Poobah of Scalability',
            'Grand Poobah of the Online Space',
            'Grand Poobah of Wearables',
            'Grand Poobah of Video Experience',
            'Hacker-in-Chief',
            'High Priest of Bitcoins',
            'High Priest of Cryptocurrencies',
            'High Priest of Brand Utilization',
            'High Priestess of Data',
            'High Priest of Datafication',
            'High Priestess of Digital Media Solutions',
            'High Priest of Digital Innovation',
            'High Priestess of Disruptive Innovation',
            'High Priest of Functionality',
            'High Priestess of the Quantified Self',
            'High Priest of Scalability',
            'High Priest of the Online Space',
            'High Priest of Wearables',
            'High Preist of Video Experience',
            'In-House Cryptocurrency Wizard',
            'In-House Data Miner',
            'In-House Disruptor',
            'In-House Explainer',
            'In-House Game Changer',
            'In-House Gamifyer',
            'In-House Genius',
            'In-House Evangelist',
            'In-House Pioneer',
            'In-House Tech Evangelist',
            'In-House Tech Mastermind',
            'In-House Tech Maven',
            'In-House Tech Mentor',
            'In-House Tech Mystic',
            'In-House Tech Pioneer',
            'In-House Tech Primo',
            'In-House Tech Sage',
            'In-House Tech Shaman',
            'In-House Tech Sherpa',
            'In-House Tech Sultan',
            'In-House Tech Superintendent',
            'In-House Tech Svengali',
            'In-House Tech Wizard',
            'Influencer-in-Residence',
            'Harbinger of Digital Media',
            'Harbinger of Disruptive Innovation',
            'Instagrammer-in-Chief',
            'Instagrammer-in-Residence',
            'Maker of Things',
            'Mastermind-in-Residence',
            'Maven-in-Residence',
            'Mentor-in-Residence',
            'Nerd-in-Residence',
            'Resident Agitator',
            'Resident Brogrammer',
            'Resident Digitizer',
            'Resident Disruptionist',
            'Resident Evangelist',
            'Resident Future-Maker',
            'Resident Gamifyer',
            'Resident Influencer',
            'Resident Mastermind',
            'Resident Nerd',
            'Resident Tech Maven',
            'Resident Tech Mentor',
            'Resident Tech Mystic',
            'Resident Tech Pioneer',
            'Resident Tech Primo',
            'Resident Tech Sage',
            'Resident Tech Shaman',
            'Resident Tech Sherpa',
            'Resident Tech Sultan',
            'Resident Tech Svengali',
            'Resident Tech Wizard',
            'Resident Thought Leader',
            'Pioneer-in-Residence',
            'Snapchatter-in-Residence',
            'Tech-Shaman-in-Residence',
            'Tech-Sherpa-in-Residence',
            'Tech-Sultan-in-Residence',
            'Tech-Svengali-in-Residence',
            'Tech-Wizard-in-Residence',
            'Thought-Leader-in-Residence',
        ],
    ];

    /**
     * @var array List of job abbreviations.
     *            Sources: {@link http://sos.uhrs.indiana.edu/Job_Code_Title_Abbreviation_List.htm}
     */
    private $abbreviationProvider = [
        'ABATE',
        'ACAD',
        'ACCT',
        'ACK',
        'ACQ',
        'ACT',
        'ADMIN',
        'ADMISS',
        'ADVNCD',
        'AIT',
        'ADV',
        'AFF',
        'AA',
        'AIM',
        'ALUM',
        'AMBUL',
        'ADA',
        'ANGIO',
        'ANN',
        'APPL',
        'APPT',
        'APR',
        'A/S',
        'ASBES',
        'ASSESS',
        'ASST',
        'AVC',
        'AVP',
        'AI',
        'ASSOC',
        'ABFE',
        'ASSUR',
        'ATH',
        'ATTD',
        'AV',
        'AUD',
        'ACE/IVR',
        'AUX',
        'BSW',
        'BASBL',
        'BSKTB',
        'BEN',
        'BIOINFO',
        'BTHER',
        'BL',
        'BLDG',
        'BUS',
        'B&E',
        'CAMP',
        'CNCR',
        'CAP',
        'CAM',
        'CLS',
        'CARDIO',
        'CPR',
        'CTLG',
        'CATH',
        'CAV',
        'CTR',
        'CRTN',
        'CHANC',
        'CHEM',
        'CEO',
        'CFO',
        'CHLDHD',
        'CIRC',
        'CL',
        'CLSF',
        'CLRGHOUSE',
        'CLIN',
        'COLL',
        'CPI',
        'CMTE',
        'COMM',
        'CMTY',
        'COMPENS',
        'CMPL',
        'CBC',
        'CADD&',
        'COMP',
        'CONF',
        'CONST',
        'CONS',
        'CONSMR',
        'CONTIN',
        'CME',
        'CONT',
        'COOP',
        'COORD',
        'COUN',
        'CURR',
        'CYCL',
        'CYTO',
        'DFAC',
        'DECIS',
        'DEL',
        'DENT',
        'DEPT',
        'DPND',
        'DSGN',
        'DEVL',
        'DIAG',
        'DIG',
        'DIR',
        'DISAB',
        'DIST',
        'DISTRIB',
        'DIVR',
        'DIV',
        'DOC',
        'DUPL',
        'ECG',
        'EDUC',
        'EDUCR',
        'ELEC',
        'EEG',
        'ELECT',
        'ERA',
        'ELECTROPHYS',
        'ELEM',
        'EMPL',
        'ERCP',
        'ENFORCEMNT',
        'ENG',
        'ES',
        'ENVIRO',
        'EQUIP',
        'ERIC',
        'EVAL',
        'EVEN',
        'EP',
        'EXCEL',
        'EXEC',
        'EXER',
        'EXP',
        'FAC',
        'FACET',
        'FEL',
        'FIN',
        'FMS',
        'FIS',
        'FSER',
        'FOUNDTN',
        'FRSH',
        'FUTR',
        'GI',
        'GEN',
        'GSN',
        'GIS',
        'GENI',
        'GIV',
        'GOVT',
        'GR',
        'GRAD',
        'GRND',
        'GRP',
        'HD',
        'HLTH',
        'HIS',
        'HVAC',
        'HEMA',
        'HS',
        'HORTI',
        'HOSP',
        'HFC',
        'HIV',
        'HR',
        'IMAG',
        'IMMUN',
        'IN',
        'IAI',
        'IPCRES',
        'IU',
        'INDPLS',
        'IAHP',
        'INFEC',
        'IBD',
        'INFO',
        'IO-LINE',
        'IOCM',
        'INIT',
        'INSP',
        'INSTALL',
        'INST',
        'INSTR',
        'IMS',
        'IT',
        'INSTRUMENT',
        'INT',
        'IAVP',
        'INTERLIBR',
        'INTNL',
        'INTRN',
        'INTRREL',
        'INTRM',
        'INV',
        'INVEST',
        'JR',
        'LAB',
        'LANG',
        'LD',
        'LEAD',
        'LRNG',
        'LEC',
        'LAS',
        'LIBR',
        'LIC',
        'LAN',
        'MACH',
        'MRI',
        'MAINT',
        'MMS',
        'MBDC',
        'MAMMO',
        'MGT',
        'MGR',
        'MNGNG',
        'MKTG',
        'MSW',
        'MSMS',
        'MATH',
        'MECH',
        'MED',
        'MERP',
        'MSAA',
        'MEDCN',
        'MEMBER',
        'METH',
        'MICRO',
        'MIN',
        'MOL',
        'MOM',
        'MULTIM',
        'NATL',
        'NIH',
        'NGHBORHD',
        'NEO/PERI',
        'NW',
        'NWBORN',
        'NIC',
        'NGT',
        'NMR',
        'PRN',
        'NRSG',
        'OSCE',
        'OB/GYN',
        'OCCUP',
        'OFF',
        'ONCOL',
        'OPER',
        'OPTOM',
        'ORTHO',
        'OUTPAT',
        'PRNT',
        'P/T',
        'PRTNR',
        'PATH',
        'PAT',
        'PED',
        'PER',
        'PHOTOCOMP',
        'PHOTOGRAPHR',
        'PHYS',
        'PHYSN',
        'PHYSIO',
        'PL',
        'PLAN',
        'POS',
        'POL',
        'PET',
        'PRACT',
        'PRECRTN',
        'PRENA-NATAL',
        'PREP',
        'PRESNT',
        'PRES',
        'PREV',
        'PRIN',
        'PROB',
        'PROC',
        'PRODU',
        'PROD',
        'PROF',
        'PROG',
        'PROJ',
        'PROM',
        'PSYCH',
        'PSYCHOL',
        'PUBL',
        'PDDS',
        'PUR',
        'QUAL',
        'QC',
        'RADIO',
        'REC',
        'RECRE',
        'RECR',
        'REDRC',
        'REFRIG',
        'REG',
        'REGR',
        'REHAB',
        'REIMBURSE',
        'REL',
        'REP',
        'RES',
        'RESNET',
        'RESID',
        'RESO',
        'RESP',
        'SAFE',
        'SCAN',
        'SCHED',
        'SCHL',
        'SCI',
        'SCNDRY',
        'SEC',
        'SECT',
        'SR',
        'SER',
        'SHIP',
        'SHOOT',
        'SBDC',
        'SOC',
        'SEA',
        'SPEC',
        'SPAN',
        'SPECT',
        'S/L',
        'SPON',
        'STF',
        'STATIS',
        'STR',
        'STU',
        'SRSC',
        'STDY',
        'SUPT',
        'SUPR',
        'SUPP',
        'SWIM',
        'SYS',
        'TCHNG',
        'TECH',
        'TECHNOL',
        'TELC',
        'TEMP',
        'THTR',
        'THER',
        'TIS',
        'TOX',
        'TRNE',
        'TRNR',
        'TRNG',
        'TRANSCPT',
        'TRANS',
        'TRNSPLT',
        'TRANSPORT',
        'ULTRA',
        'UG',
        'UNEMPLOY',
        'UNIV',
        'UCET',
        'UMDA',
        'UPA',
        'UTIL',
        'VARS',
        'VCLUB',
        'VC',
        'VP',
        'VIC',
        'WAREHS',
        'WELLNS',
        'WCTR',
        'WSTRN',
        'WKR',
    ];

    /**
     * @return string Random job title.
     */
    public function jobTitle()
    {
        $names = [
            sprintf(
                '%s %s',
                $this->getRandomValueFromArray($this->titleProvider['firstname']),
                $this->getRandomValueFromArray($this->titleProvider['lastname'])
            ),
            $this->getRandomValueFromArray($this->titleProvider['fullname']),
        ];

        return $this->getRandomValueFromArray($names);
    }

    /**
     * @return string Random job abbreviation title
     */
    public function jobAbbreviation()
    {
        return $this->getRandomValueFromArray($this->abbreviationProvider);
    }

    /**
     * Helper to get a random value from array.
     *
     * @param array $array
     *
     * @return mixed|null Null on error, random value on success.
     */
    private function getRandomValueFromArray(array $array)
    {
        $key = array_rand($array);

        return (null === $key) ? $key : $array[$key];
    }
}

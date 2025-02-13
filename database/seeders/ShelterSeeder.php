<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShelterSeeder extends Seeder {

    public function run(): void {

        DB::table('shelters')->insert([
            [
                'name' => 'British Animal Hospital',
                'website' => 'https://britishanimalhospital.com/',
                'services' => 'VCTC, house calls, vaccinations, pet surgeries, hospitalization, microchip implantation, x-ray examination, ultrasounds, flea and tick control programs, travel certificates.',
                'location' => 'Business Point, Sheikh Zayed City, Giza Governorate - Sheikh Zayed, 6th October, Egypt',
                'landmark' => '4 Mix Mall – Beverly Hills- Sheikh Zayed',
                'phone_number' => '+201224708702, +201023330245, +201101010474, +201277778947',
            ],
            [
                'name' => 'Dr Paws',
                'website' => 'https://sites.google.com/view/drpawsalsheikhzayed/dr-paws-vet-clinic?authuser=0',
                'services' => '24hours emergency and home visits (not all services are mentioned)',
                'location' => '2XJX+7WV Hayat Clinics, Cairo Governorate EG, First Al Sheikh Zayed, Giza Governorate 3244410',
                'landmark' => null,
                'phone_number' => '01030795778',
            ],
            [
                'name' => 'Columbian Animal Hospital',
                'website' => 'https://columbiaanimalhosp.wixsite.com/columbia-animal-hosp',
                'services' => 'Veterinary Diagnostic Labs, Emergency Care Services, Pet Wellness Exams, Open 24/7',
                'location' => 'Icon Mall Gate 9 Beverly Hills - In front of Golds Gym Beverly Hills sheikh zayed',
                'landmark' => null,
                'phone_number' => '01020405694',
            ],
            [
                'name' => 'Dr Abdelwahab Animal Clinic',
                'website' => 'https://petdoctorsanimalcl.wixsite.com/website',
                'services' => 'Emergency care services, pet wellness exams',
                'location' => 'Badr Aldin Center, Second Al Sheikh Zayed, Giza Governorate 12588',
                'landmark' => null,
                'phone_number' => '01000113877',
            ],
            [
                'name' => 'American Vet Clinic',
                'website' => 'https://www.americanvetcenter.com/',
                'services' => 'Pet wellness exams, radiology and laboratory diagnostics, emergency care services, vaccinations, surgery, health and travel certificates, boarding and hospitalization, grooming, dental care, and complete pharmacy',
                'location' => 'District 13, 1st Neighbourhood, St 12',
                'landmark' => null,
                'phone_number' => '01110802802, 01210813869, (02) 38956948',
            ],
        ]);
    }
}

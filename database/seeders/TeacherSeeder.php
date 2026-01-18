<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        Teacher::create([
            'name' => 'Alexandrian Mualang Djarop Panurian, S.Sn.',
            'position' => 'Staff Pengajar',
            'subject' => 'Seni Musik',
            'photo' => 'alexandrian.png'
        ]);

        Teacher::create([
            'name' => 'Anitha Dessy Yahya, S.Sos., S.Pd.K.',
            'position' => 'Staff Pengajar',
            'subject' => 'Pendidikan Kewarganegaraan',
            'photo' => 'dessy.JPG'
        ]);

        Teacher::create([
            'name' => 'Arifin, S.Pd., M.M.',
            'position' => 'Staff Pengajar',
            'subject' => 'Bahasa Inggris',
            'photo' => 'arifin.JPG'
        ]);

        Teacher::create([
            'name' => 'Deddy Sunardy, S.Kom.',
            'position' => 'Staff Pengajar',
            'subject' => 'Administrasi Infrastruktur Jaringan',
            'photo' => 'deddy_sunardi.JPG'
        ]);

        Teacher::create([
            'name' => 'Dedy Haryanto, M.Pd.',
            'position' => 'Staff Pengajar',
            'subject' => 'Dasar-Dasar Akuntansi, Akuntansi Keuangan, Praktik Akuntansi Perusahaan Manufaktur, Akuntansi Lembaga/Instansi Pemerintah',
            'photo' => 'dedy_haryanto.JPG'
        ]);

        Teacher::create([
            'name' => 'Hendra Wijaya, S.T., M.M.',
            'position' => 'Staff Pengajar',
            'subject' => 'IPAS',
            'photo' => 'hendra.JPG'
        ]);

        Teacher::create([
            'name' => 'Herawati, B.Ed.',
            'position' => 'Staff Pengajar',
            'subject' => 'Bahasa Mandarin',
            'photo' => 'herawati.JPG'
        ]);

    }
}

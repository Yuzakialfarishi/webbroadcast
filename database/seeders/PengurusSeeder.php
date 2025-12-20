<?php

namespace Database\Seeders;

use App\Models\Pengurus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengurusSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $pengurus = [
            // Pembina
            ['nama' => 'Nama Pembina', 'jabatan' => 'Pembina'],
            
            // Ketua dan Wakil
            ['nama' => 'Nama Ketua', 'jabatan' => 'Ketua'],
            ['nama' => 'Nama Wakil Ketua', 'jabatan' => 'Wakil Ketua'],
            
            // Sekretaris dan Wakil
            ['nama' => 'Nama Sekretaris', 'jabatan' => 'Sekretaris'],
            ['nama' => 'Nama Wakil Sekretaris', 'jabatan' => 'Wakil Sekretaris'],
            
            // Bendahara dan Wakil
            ['nama' => 'Nama Bendahara', 'jabatan' => 'Bendahara'],
            ['nama' => 'Nama Wakil Bendahara', 'jabatan' => 'Wakil Bendahara'],
            
            // Ketua Divisi Fotografi dan Wakil
            ['nama' => 'Nama Ketua Divisi Fotografi', 'jabatan' => 'Ketua Divisi Fotografi'],
            ['nama' => 'Nama Wakil Divisi Fotografi', 'jabatan' => 'Wakil Divisi Fotografi'],
            
            // Ketua Divisi Videografi dan Wakil
            ['nama' => 'Nama Ketua Divisi Videografi', 'jabatan' => 'Ketua Divisi Videografi'],
            ['nama' => 'Nama Wakil Divisi Videografi', 'jabatan' => 'Wakil Divisi Videografi'],
            
            // Ketua Divisi Desain Grafis dan Wakil
            ['nama' => 'Nama Ketua Divisi Desain Grafis', 'jabatan' => 'Ketua Divisi Desain Grafis'],
            ['nama' => 'Nama Wakil Divisi Desain Grafis', 'jabatan' => 'Wakil Divisi Desain Grafis'],
            
            // Ketua Divisi Jurnalistik dan Wakil
            ['nama' => 'Nama Ketua Divisi Jurnalistik', 'jabatan' => 'Ketua Divisi Jurnalistik'],
            ['nama' => 'Nama Wakil Divisi Jurnalistik', 'jabatan' => 'Wakil Divisi Jurnalistik'],
            
            // PJ (Penanggung Jawab)
            ['nama' => 'Nama PJ', 'jabatan' => 'Penanggung Jawab'],
        ];

        foreach ($pengurus as $p) {
            Pengurus::create($p);
        }
    }
}

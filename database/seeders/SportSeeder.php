<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SportSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sports')->insert([
            [
                'name' => 'Bulu Tangkis (Badminton)',
                'category' => 'Individu / Ganda',
                'equipment' => 'Raket, Shuttlecock, Net',
                'rules' => 'Memukul shuttlecock melewati net hingga jatuh di area lapangan lawan.',
                'origin_country' => 'Inggris / India Kuno',
                'image' => 'badminton.jpg',
                'description' => 'Olahraga raket yang dimainkan oleh dua orang (untuk tunggal) atau dua pasangan (untuk ganda) yang saling berlawanan di area lapangan berjarak.'
            ],
            [
                'name' => 'Sepak Bola',
                'category' => 'Olahraga Tim',
                'equipment' => 'Bola, Sepatu Bola, Gawang',
                'rules' => 'Memasukkan bola ke gawang lawan sebanyak-banyaknya tanpa menggunakan tangan (kecuali kiper).',
                'origin_country' => 'Inggris',
                'image' => 'football.jpg',
                'description' => 'Olahraga populer yang dimainkan oleh dua tim beranggotakan masing-masing 11 orang dengan mengandalkan kerjasama tim.'
            ],
            [
                'name' => 'Bola Basket',
                'category' => 'Olahraga Tim',
                'equipment' => 'Bola Basket, Ring & Papan Pantul',
                'rules' => 'Memasukkan bola ke dalam keranjang (ring) lawan untuk mencetak poin terbanyak.',
                'origin_country' => 'Amerika Serikat',
                'image' => 'basketball.jpg',
                'description' => 'Olahraga bola berkelompok yang terdiri atas dua tim masing-masing beranggotakan lima orang yang saling bertanding di lapangan indoor/outdoor.'
            ],
            [
                'name' => 'Renang (Swimming)',
                'category' => 'Akuatik / Individu',
                'equipment' => 'Pakaian Renang, Kacamata Renang',
                'rules' => 'Menempuh jarak kolam dalam gaya tertentu (gaya bebas, dada, punggung, kupu-kupu) secepat mungkin.',
                'origin_country' => 'Mesir Kuno / Yunani',
                'image' => 'swimming.jpg',
                'description' => 'Gerakan berpindah tempat di air secara mandiri menggunakan tangan dan kaki tanpa perlengkapan buatan.'
            ],
            [
                'name' => 'Bola Voli',
                'category' => 'Olahraga Tim',
                'equipment' => 'Bola Voli, Net, Lapangan',
                'rules' => 'Memantulkan bola melewati net ke lantai area lawan dan mencegah bola menyentuh lantai area sendiri.',
                'origin_country' => 'Amerika Serikat',
                'image' => 'volleyball.jpg',
                'description' => 'Olahraga beregu yang dimainkan oleh dua tim dengan masing-masing 6 orang pemain, dipisahkan oleh sebuah net tinggi.'
            ],
            [
                'name' => 'Tenis Meja (Pingpong)',
                'category' => 'Individu / Ganda',
                'equipment' => 'Bet, Bola Pingpong, Meja Tenis, Net',
                'rules' => 'Memukul bola melewati net di atas meja menggunakan bet secara bergantian.',
                'origin_country' => 'Inggris',
                'image' => 'table_tennis.jpg',
                'description' => 'Olahraga raket yang dimainkan oleh dua orang (singel) atau dua pasangan (ganda) dengan memantulkan bola di atas meja.'
            ],
            [
                'name' => 'Lari Jarak Pendek (Sprint)',
                'category' => 'Atletik',
                'equipment' => 'Sepatu Spikes, Blok Start',
                'rules' => 'Pelari harus berlari secepat mungkin menempuh jarak pendek (100m, 200m, 400m) dari garis start hingga finish.',
                'origin_country' => 'Yunani Kuno',
                'image' => 'sprint.jpg',
                'description' => 'Cabang atletik lari di mana peserta berlari dengan kecepatan penuh sepanjang jarak yang pendek.'
            ],
            [
                'name' => 'Bola Tangan (Handball)',
                'category' => 'Olahraga Tim',
                'equipment' => 'Bola Tangan, Gawang',
                'rules' => 'Melempar bola menggunakan tangan untuk memasukkannya ke gawang lawan.',
                'origin_country' => 'Denmark / Jerman',
                'image' => 'handball.jpg',
                'description' => 'Permainan beregu yang menggunakan tangan untuk mengoper dan melemparkan bola ke gawang lawan.'
            ],
            [
                'name' => 'Pencak Silat',
                'category' => 'Bela Diri',
                'equipment' => 'Pakaian Silat, Pelindung Tubuh (Body Protector)',
                'rules' => 'Menggunakan teknik pukulan, tendangan, tangkisan, dan bantingan untuk menjatuhkan lawan sesuai aturan.',
                'origin_country' => 'Indonesia / Asia Tenggara',
                'image' => 'pencak_silat.jpg',
                'description' => 'Seni bela diri tradisional asal Indonesia yang mengandalkan keampuan bertarung, seni, dan nilai mental spiritual.'
            ],
            [
                'name' => 'Karate',
                'category' => 'Bela Diri',
                'equipment' => 'Gi (Baju Karate), Sabuk, Pelindung',
                'rules' => 'Menyerang lawan menggunakan teknik pukulan, tendangan, dan sabetan tangan kosong.',
                'origin_country' => 'Jepang (Okinawa)',
                'image' => 'karate.jpg',
                'description' => 'Seni bela diri tradisional yang berasal dari Jepang yang menekankan pada teknik serangan tangan kosong.'
            ],
            [
                'name' => 'Sepeda Gunung (Mountain Biking)',
                'category' => 'Ekstrem / Luar Ruangan',
                'equipment' => 'Sepeda Gunung, Helm, Pelindung Lutut/Siku',
                'rules' => 'Menyusuri jalur pegunungan atau medan terjal menggunakan sepeda khusus hingga garis akhir.',
                'origin_country' => 'Amerika Serikat',
                'image' => 'mountain_biking.jpg',
                'description' => 'Olahraga bersepeda yang dilakukan pada medan berat dan menantang seperti bukit, hutan, dan jalur berbatu.'
            ],
            [
                'name' => 'Panahan (Archery)',
                'category' => 'Konsentrasi / Individu',
                'equipment' => 'Busur, Anak Panah (Arrow), Target Sasaran',
                'rules' => 'Menembakkan anak panah menggunakan busur ke arah papan target dengan akurasi ketepatan tinggi.',
                'origin_country' => 'Mesir Kuno',
                'image' => 'archery.jpg',
                'description' => 'Kegiatan menggunakan busur panah untuk menembakkan anak panah ke sasaran target yang ditentukan.'
            ],
            [
                'name' => 'Tinju (Boxing)',
                'category' => 'Bela Diri / Tempur',
                'equipment' => 'Sarung Tinju, Pelindung Gigi, Ring Tinju',
                'rules' => 'Memukul lawan menggunakan kepalan tangan bersarung sesuai ronde dan aturan wasit di dalam ring.',
                'origin_country' => 'Yunani Kuno',
                'image' => 'boxing.jpg',
                'description' => 'Olahraga tarung di mana dua orang peserta dengan berat badan yang serupa bertanding menggunakan tinju.'
            ],
            [
                'name' => 'Bulutangkis Pantai / Voli Pantai',
                'category' => 'Olahraga Pasir',
                'equipment' => 'Bola Voli, Net Pantai, Lapangan Pasir',
                'rules' => 'Sama seperti voli biasa tetapi dimainkan di atas lapangan pasir pantai terbuka.',
                'origin_country' => 'Amerika Serikat',
                'image' => 'beach_volleyball.jpg',
                'description' => 'Varian olahraga bola voli yang dimainkan di atas pasir dengan formasi tim yang lebih sedikit.'
            ],
            [
                'name' => 'Senam Lantai (Gymnastics)',
                'category' => 'Senam / Fleksibilitas',
                'equipment' => 'Matras Senam',
                'rules' => 'Melakukan gerakan akrobatik, kelenturan, keseimbangan, dan kekuatan di atas matras.',
                'origin_country' => 'Yunani Kuno',
                'image' => 'gymnastics.jpg',
                'description' => 'Kegiatan olahraga yang mengandalkan kelenturan, kekuatan, dan keselarasan gerakan tubuh di atas permukaan matras.'
            ]
        ]);
    }
}
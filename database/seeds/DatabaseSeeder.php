<?php

use Illuminate\Database\Seeder;
use App\Data;
use App\Atribut;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //Query Builder
        //for actors
        // $dataactors=[
        //     ['username' => "aufal", 'password' => bcrypt("asikasikjos"), 'fullname' => "Aufal Marom", 'access_level' => "Administrator"],
        //     ['username' => "yudi", 'password' => bcrypt("ekowindarto"), 'fullname' => "Yudi Eko", 'access_level' => "Manager"],
        //     ['username' => "cahyo", 'password' => bcrypt("dwinugroho"), 'fullname' => "Dwi Cahyo", 'access_level' => "User"]
        // ];

        // DB::table('actors')->insert($dataactors);

        //Query Builder
        //for users
        $datausers=[
            ['name' => "Aufal Marom", 'email' => 'admin@sigtpa.com' , 'password' => bcrypt("admin123"), 'role' => "administrator"],
            ['name' => "Yudi Eko W", 'email'=> 'manager@sigtpa.com' , 'password' => bcrypt("manager123"), 'role' => "manager"],
            ['name' => "Cahyo Ndut",'email'=> 'operator@sigtpa.com' ,  'password' => bcrypt("operator123"), 'role' => "operator",]
        ];

        DB::table('users')->insert($datausers);

        //Eloquent ORM
        // Atribut::created([
        //     'daerah' => "Gondang",
        //     'nilai_klasifikasi' => 60
        // ]);

        //Seed Faker
        // factory(App\Atribut::Class, 50)-> create();

        //for bobot_parameters
        // $bobotparamaters=[
        //     ['parameter' => "Kelerengan", 'bobot' => 10],
        //     ['parameter' => "Penggunaan Lahan", 'bobot' => 20],
        //     ['parameter' => "Rawan Bencana Longsor", 'bobot' => 15],
        //     ['parameter' => "Curah Hujan", 'bobot' => 15],
        //     ['parameter' => "Hidrogeologi", 'bobot' => 20],
        //     ['parameter' => "Jenis Tanah", 'bobot' => 10],
        //     ['parameter' => "Rawan Bencana Banjir", 'bobot' => 10],
        // ];

        // DB::table('bobot_parameters')->insert($bobotparamaters);

        $bobotparamaters=[
            ['parameter' => "Kelerengan", 'bobot' => 10, 'created_by' => 1],
            ['parameter' => "Penggunaan Lahan", 'bobot' => 20, 'created_by' => 1],
            ['parameter' => "Rawan Bencana Longsor", 'bobot' => 15, 'created_by' => 1],
            ['parameter' => "Curah Hujan", 'bobot' => 15, 'created_by' => 1],
            ['parameter' => "Hidrogeologi", 'bobot' => 20, 'created_by' => 1],
            ['parameter' => "Jenis Tanah", 'bobot' => 10, 'created_by' => 1],
            ['parameter' => "Rawan Bencana Banjir", 'bobot' => 10, 'created_by' => 1],
        ];

        DB::table('bobot_parameters')->insert($bobotparamaters);

        //for kecamatan
        $kecamatans=[
            ['daerah' => "Ampelgading"],
            ['daerah' => "Bantarbolang"],
            ['daerah' => "Belik"],
            ['daerah' => "Bodeh"],
            ['daerah' => "Comai"],
            ['daerah' => "Moga"],
            ['daerah' => "Pemalang"],
            ['daerah' => "Petarukan"],
            ['daerah' => "Pulosari"],
            ['daerah' => "Randudongkal"],
            ['daerah' => "Taman"],
            ['daerah' => "Ulujami"],
            ['daerah' => "Warungpring"],
            ['daerah' => "Watukumpul"]
        ];

        DB::table('kecamatans')->insert($kecamatans);

        //nilai_klasifikasi_kriterias
        $nilai_klasifikasi_kriterias=[
            ['id_parameter' => 1, 'batas_bawah' => 40, 'batas_atas'=> 100, 'nilai_klasifikasi' => 0],
            ['id_parameter' => 1, 'batas_bawah' => 25, 'batas_atas'=> 40, 'nilai_klasifikasi' => 1],
            ['id_parameter' => 1, 'batas_bawah' => 15, 'batas_atas'=> 25, 'nilai_klasifikasi' => 2],
            ['id_parameter' => 1, 'batas_bawah' => 8, 'batas_atas'=> 15, 'nilai_klasifikasi' => 3],
            ['id_parameter' => 1, 'batas_bawah' => 0, 'batas_atas'=> 8, 'nilai_klasifikasi' => 4],
            ['id_parameter' => 4, 'batas_bawah' => 4000, 'batas_atas'=> 10000, 'nilai_klasifikasi' => 0],
            ['id_parameter' => 4, 'batas_bawah' => 2750, 'batas_atas'=> 4000, 'nilai_klasifikasi' => 1],
            ['id_parameter' => 4, 'batas_bawah' => 1500, 'batas_atas'=> 4000, 'nilai_klasifikasi' => 2]
        ];

        DB::table('nilai_klasifikasi_kriterias')->insert($nilai_klasifikasi_kriterias);

        //nilai_klasifikasi_kategoris
        $nilai_klasifikasi_kategoris=[
            ['id_parameter' => 2, 'nilai_parameter' => 'Hutan', 'nilai_klasifikasi' => 0],
            ['id_parameter' => 2, 'nilai_parameter' => 'Pemukiman', 'nilai_klasifikasi' => 1],
            ['id_parameter' => 2, 'nilai_parameter' => 'Sawah', 'nilai_klasifikasi' => 2],
            ['id_parameter' => 2, 'nilai_parameter' => 'Kebun/Lapangan', 'nilai_klasifikasi' => 3],
            ['id_parameter' => 2, 'nilai_parameter' => 'Industri', 'nilai_klasifikasi' => 4],
            ['id_parameter' => 3, 'nilai_parameter' => 'Tinggi', 'nilai_klasifikasi' => 0],
            ['id_parameter' => 3, 'nilai_parameter' => 'Sedang', 'nilai_klasifikasi' => 1],
            ['id_parameter' => 3, 'nilai_parameter' => 'Rendah', 'nilai_klasifikasi' => 2],
            ['id_parameter' => 5, 'nilai_parameter' => 'Akuiver Produktif', 'nilai_klasifikasi' => 0],
            ['id_parameter' => 5, 'nilai_parameter' => 'Air Tanah Langka', 'nilai_klasifikasi' => 2],
            ['id_parameter' => 6, 'nilai_parameter' => 'Gromosol', 'nilai_klasifikasi' => 0],
            ['id_parameter' => 6, 'nilai_parameter' => 'Latosol', 'nilai_klasifikasi' => 1],
            ['id_parameter' => 6, 'nilai_parameter' => 'Regosol', 'nilai_klasifikasi' => 2],
            ['id_parameter' => 6, 'nilai_parameter' => 'Alluvial', 'nilai_klasifikasi' => 3],
            ['id_parameter' => 7, 'nilai_parameter' => 'Rawan Banjir', 'nilai_klasifikasi' => 0],
            ['id_parameter' => 7, 'nilai_parameter' => 'Tidak Rawan Banjir', 'nilai_klasifikasi' => 1]
        ];

        DB::table('nilai_klasifikasi_kategoris')->insert($nilai_klasifikasi_kategoris);

        //for data_tpas horizontal
        $data_tpa=[
            ['id_kecamatan' => 1, 'nilai_klasifikasi_kelerengan' => 4, 'nilai_parameter_kelerengan' => "0-8%", 'nilai_klasifikasi_penggunaan_lahan' => 4, 'nilai_parameter_penggunaan_lahan' => "Industri", 'nilai_klasifikasi_rawan_bencana_longsor' => 2, 'nilai_parameter_rawan_bencana_longsor' => "Rendah", 'nilai_klasifikasi_curah_hujan' => 2, 'nilai_parameter_curah_hujan' => "1500-2750", 'nilai_klasifikasi_hidrogeologi' => 0, 'nilai_parameter_hidrogeologi' => "Akuiver Produktif", 'nilai_klasifikasi_jenis_tanah' => 3, 'nilai_parameter_jenis_tanah' => "Alluvial", 'nilai_klasifikasi_rawan_bencana_banjir' => 0, 'nilai_parameter_rawan_bencana_banjir' => "Rawan Banjir"],
            ['id_kecamatan' => 2, 'nilai_klasifikasi_kelerengan' => 3, 'nilai_parameter_kelerengan' => "8-15%", 'nilai_klasifikasi_penggunaan_lahan' => 0, 'nilai_parameter_penggunaan_lahan' => "Hutan", 'nilai_klasifikasi_rawan_bencana_longsor' => 1, 'nilai_parameter_rawan_bencana_longsor' => "Sedang", 'nilai_klasifikasi_curah_hujan' => 1, 'nilai_parameter_curah_hujan' => "2750-4000", 'nilai_klasifikasi_hidrogeologi' => 2, 'nilai_parameter_hidrogeologi' => "Air Tanah Langka", 'nilai_klasifikasi_jenis_tanah' => 1, 'nilai_parameter_jenis_tanah' => "Latosol", 'nilai_klasifikasi_rawan_bencana_banjir' => 1, 'nilai_parameter_rawan_bencana_banjir' => "Tidak Rawan Banjir"],
            ['id_kecamatan' => 3, 'nilai_klasifikasi_kelerengan' => 3, 'nilai_parameter_kelerengan' => "8-15%", 'nilai_klasifikasi_penggunaan_lahan' => 0, 'nilai_parameter_penggunaan_lahan' => "Hutan", 'nilai_klasifikasi_rawan_bencana_longsor' => 0, 'nilai_parameter_rawan_bencana_longsor' => "Tinggi", 'nilai_klasifikasi_curah_hujan' => 1, 'nilai_parameter_curah_hujan' => "2750-4000", 'nilai_klasifikasi_hidrogeologi' => 2, 'nilai_parameter_hidrogeologi' => "Air Tanah Langka", 'nilai_klasifikasi_jenis_tanah' => 2, 'nilai_parameter_jenis_tanah' => "Regosol", 'nilai_klasifikasi_rawan_bencana_banjir' => 1, 'nilai_parameter_rawan_bencana_banjir' => "Tidak Rawan Banjir"],
            ['id_kecamatan' => 4, 'nilai_klasifikasi_kelerengan' => 3, 'nilai_parameter_kelerengan' => "8-15%", 'nilai_klasifikasi_penggunaan_lahan' => 4, 'nilai_parameter_penggunaan_lahan' => "Industri", 'nilai_klasifikasi_rawan_bencana_longsor' => 0, 'nilai_parameter_rawan_bencana_longsor' => "Tinggi", 'nilai_klasifikasi_curah_hujan' => 2, 'nilai_parameter_curah_hujan' => "1500-2750", 'nilai_klasifikasi_hidrogeologi' => 2, 'nilai_parameter_hidrogeologi' => "Air Tanah Langka", 'nilai_klasifikasi_jenis_tanah' => 0, 'nilai_parameter_jenis_tanah' => "Gromosol", 'nilai_klasifikasi_rawan_bencana_banjir' => 0, 'nilai_parameter_rawan_bencana_banjir' => "Rawan Banjir"],
            ['id_kecamatan' => 5, 'nilai_klasifikasi_kelerengan' => 4, 'nilai_parameter_kelerengan' => "0-8%", 'nilai_klasifikasi_penggunaan_lahan' => 3, 'nilai_parameter_penggunaan_lahan' => "Kebun/Lapangan", 'nilai_klasifikasi_rawan_bencana_longsor' => 2, 'nilai_parameter_rawan_bencana_longsor' => "Rendah", 'nilai_klasifikasi_curah_hujan' => 2, 'nilai_parameter_curah_hujan' => "1500-2750", 'nilai_klasifikasi_hidrogeologi' => 0, 'nilai_parameter_hidrogeologi' => "Akuiver Produktif", 'nilai_klasifikasi_jenis_tanah' => 3, 'nilai_parameter_jenis_tanah' => "Alluvial", 'nilai_klasifikasi_rawan_bencana_banjir' => 0, 'nilai_parameter_rawan_bencana_banjir' => "Rawan Banjir"],
            ['id_kecamatan' => 6, 'nilai_klasifikasi_kelerengan' => 3, 'nilai_parameter_kelerengan' => "8-15%", 'nilai_klasifikasi_penggunaan_lahan' => 1, 'nilai_parameter_penggunaan_lahan' => "Pemukiman", 'nilai_klasifikasi_rawan_bencana_longsor' => 0, 'nilai_parameter_rawan_bencana_longsor' => "Tinggi", 'nilai_klasifikasi_curah_hujan' => 0, 'nilai_parameter_curah_hujan' => ">4000", 'nilai_klasifikasi_hidrogeologi' => 0, 'nilai_parameter_hidrogeologi' => "Akuiver Produktif", 'nilai_klasifikasi_jenis_tanah' => 2, 'nilai_parameter_jenis_tanah' => "Alluvial", 'nilai_klasifikasi_rawan_bencana_banjir' => 1, 'nilai_parameter_rawan_bencana_banjir' => "Tidak Rawan Banjir"],
            ['id_kecamatan' => 7, 'nilai_klasifikasi_kelerengan' => 4, 'nilai_parameter_kelerengan' => "0-8%", 'nilai_klasifikasi_penggunaan_lahan' => 1, 'nilai_parameter_penggunaan_lahan' => "Pemukiman", 'nilai_klasifikasi_rawan_bencana_longsor' => 2, 'nilai_parameter_rawan_bencana_longsor' => "Rendah", 'nilai_klasifikasi_curah_hujan' => 2, 'nilai_parameter_curah_hujan' => "1500-2750", 'nilai_klasifikasi_hidrogeologi' => 0, 'nilai_parameter_hidrogeologi' => "Akuiver Produktif", 'nilai_klasifikasi_jenis_tanah' => 3, 'nilai_parameter_jenis_tanah' => "Alluvial", 'nilai_klasifikasi_rawan_bencana_banjir' => 0, 'nilai_parameter_rawan_bencana_banjir' => "Rawan Banjir"],
            ['id_kecamatan' => 8, 'nilai_klasifikasi_kelerengan' => 4, 'nilai_parameter_kelerengan' => "0-8%", 'nilai_klasifikasi_penggunaan_lahan' => 3, 'nilai_parameter_penggunaan_lahan' => "Kebun/Lapangan", 'nilai_klasifikasi_rawan_bencana_longsor' => 2, 'nilai_parameter_rawan_bencana_longsor' => "Rendah", 'nilai_klasifikasi_curah_hujan' => 2, 'nilai_parameter_curah_hujan' => "1500-2750", 'nilai_klasifikasi_hidrogeologi' => 0, 'nilai_parameter_hidrogeologi' => "Akuiver Produktif", 'nilai_klasifikasi_jenis_tanah' => 3, 'nilai_parameter_jenis_tanah' => "Alluvial", 'nilai_klasifikasi_rawan_bencana_banjir' => 1, 'nilai_parameter_rawan_bencana_banjir' => "Tidak Rawan Banjir"],
            ['id_kecamatan' => 9, 'nilai_klasifikasi_kelerengan' => 1, 'nilai_parameter_kelerengan' => "25-40%", 'nilai_klasifikasi_penggunaan_lahan' => 3, 'nilai_parameter_penggunaan_lahan' => "Kebun/Lapangan", 'nilai_klasifikasi_rawan_bencana_longsor' => 0, 'nilai_parameter_rawan_bencana_longsor' => "Tinggi", 'nilai_klasifikasi_curah_hujan' => 1, 'nilai_parameter_curah_hujan' => "2750-4000", 'nilai_klasifikasi_hidrogeologi' => 0, 'nilai_parameter_hidrogeologi' => "Akuiver Produktif", 'nilai_klasifikasi_jenis_tanah' => 0, 'nilai_parameter_jenis_tanah' => "Gromosol", 'nilai_klasifikasi_rawan_bencana_banjir' => 1, 'nilai_parameter_rawan_bencana_banjir' => "Tidak Rawan Banjir"],
            ['id_kecamatan' => 10, 'nilai_klasifikasi_kelerengan' => 2, 'nilai_parameter_kelerengan' => "15-25%", 'nilai_klasifikasi_penggunaan_lahan' => 0, 'nilai_parameter_penggunaan_lahan' => "Industri", 'nilai_klasifikasi_rawan_bencana_longsor' => 0, 'nilai_parameter_rawan_bencana_longsor' => "Tinggi", 'nilai_klasifikasi_curah_hujan' => 1, 'nilai_parameter_curah_hujan' => "2750-4000", 'nilai_klasifikasi_hidrogeologi' => 0, 'nilai_parameter_hidrogeologi' => "Akuiver Produktif", 'nilai_klasifikasi_jenis_tanah' => 1, 'nilai_parameter_jenis_tanah' => "Latosol", 'nilai_klasifikasi_rawan_bencana_banjir' => 1, 'nilai_parameter_rawan_bencana_banjir' => "Tidak Rawan Banjir"],
            ['id_kecamatan' => 11, 'nilai_klasifikasi_kelerengan' => 4, 'nilai_parameter_kelerengan' => "0-8%", 'nilai_klasifikasi_penggunaan_lahan' => 4, 'nilai_parameter_penggunaan_lahan' => "Industri", 'nilai_klasifikasi_rawan_bencana_longsor' => 2, 'nilai_parameter_rawan_bencana_longsor' => "Rendah", 'nilai_klasifikasi_curah_hujan' => 2, 'nilai_parameter_curah_hujan' => "1500-2750", 'nilai_klasifikasi_hidrogeologi' => 2, 'nilai_parameter_hidrogeologi' => "Air Tanah Langka", 'nilai_klasifikasi_jenis_tanah' => 3, 'nilai_parameter_jenis_tanah' => "Alluvial", 'nilai_klasifikasi_rawan_bencana_banjir' => 1, 'nilai_parameter_rawan_bencana_banjir' => "Tidak Rawan Banjir"],
            ['id_kecamatan' => 12, 'nilai_klasifikasi_kelerengan' => 4, 'nilai_parameter_kelerengan' => "0-8%", 'nilai_klasifikasi_penggunaan_lahan' => 2, 'nilai_parameter_penggunaan_lahan' => "Sawah/Ladang/Tambah", 'nilai_klasifikasi_rawan_bencana_longsor' => 2, 'nilai_parameter_rawan_bencana_longsor' => "Rendah", 'nilai_klasifikasi_curah_hujan' => 2, 'nilai_parameter_curah_hujan' => "1500-2750", 'nilai_klasifikasi_hidrogeologi' => 0, 'nilai_parameter_hidrogeologi' => "Akuiver Produktif", 'nilai_klasifikasi_jenis_tanah' => 3, 'nilai_parameter_jenis_tanah' => "Alluvial", 'nilai_klasifikasi_rawan_bencana_banjir' => 0, 'nilai_parameter_rawan_bencana_banjir' => "Tidak Rawan Banjir"],
            ['id_kecamatan' => 13, 'nilai_klasifikasi_kelerengan' => 3, 'nilai_parameter_kelerengan' => "8-15%", 'nilai_klasifikasi_penggunaan_lahan' => 1, 'nilai_parameter_penggunaan_lahan' => "Pemukiman", 'nilai_klasifikasi_rawan_bencana_longsor' => 2, 'nilai_parameter_rawan_bencana_longsor' => "Rendah", 'nilai_klasifikasi_curah_hujan' => 1, 'nilai_parameter_curah_hujan' => "2750-4000", 'nilai_klasifikasi_hidrogeologi' => 2, 'nilai_parameter_hidrogeologi' => "Air Tanah Langka", 'nilai_klasifikasi_jenis_tanah' => 2, 'nilai_parameter_jenis_tanah' => "Regosol", 'nilai_klasifikasi_rawan_bencana_banjir' => 1, 'nilai_parameter_rawan_bencana_banjir' => "Tidak Rawan Banjir"],
            ['id_kecamatan' => 14, 'nilai_klasifikasi_kelerengan' => 0, 'nilai_parameter_kelerengan' => ">40%", 'nilai_klasifikasi_penggunaan_lahan' => 0, 'nilai_parameter_penggunaan_lahan' => "Hutan", 'nilai_klasifikasi_rawan_bencana_longsor' => 0, 'nilai_parameter_rawan_bencana_longsor' => "Tinggi", 'nilai_klasifikasi_curah_hujan' => 0, 'nilai_parameter_curah_hujan' => ">4000", 'nilai_klasifikasi_hidrogeologi' => 2, 'nilai_parameter_hidrogeologi' => "Air Tanah Langka", 'nilai_klasifikasi_jenis_tanah' => 2, 'nilai_parameter_jenis_tanah' => "Regosol", 'nilai_klasifikasi_rawan_bencana_banjir' => 1, 'nilai_parameter_rawan_bencana_banjir' => "Tidak Rawan Banjir"]
        ];

        DB::table('data_tpas')->insert($data_tpa);


        // //for data_kelerengans
        // $datakelerengans=[
        //     ['daerah' => "Ampelgading", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "0-8%"],
        //     ['daerah' => "Bantarbolang", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "8-15%"],
        //     ['daerah' => "Belik", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "8-15%"],
        //     ['daerah' => "Bodeh", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "8-15%"],
        //     ['daerah' => "Comal", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "0-8%"],
        //     ['daerah' => "Moga", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "8-15%"],
        //     ['daerah' => "Pemalang", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "0-8%"],
        //     ['daerah' => "Petarukan", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "0-8%"],
        //     ['daerah' => "Pulosari", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "25-40%"],
        //     ['daerah' => "Randudongkal", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "15-25%"],
        //     ['daerah' => "Taman", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "0-8%"],
        //     ['daerah' => "Ulujami", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "0-8%"],
        //     ['daerah' => "Warungpring", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "8-15%"],
        //     ['daerah' => "Watukumpul", 'nilai_klasifikasi' => 0, 'nilai_parameter' => ">40%"],
        // ];

        // DB::table('data_kelerengans')->insert($datakelerengans);

        // //for data_penggunaan_lahans
        // $datapenggunaanlahans=[
        //     ['daerah' => "Ampelgading", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "Industri"],
        //     ['daerah' => "Bantarbolang", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Hutan"],
        //     ['daerah' => "Belik", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Hutan"],
        //     ['daerah' => "Bodeh", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "Industri"],
        //     ['daerah' => "Comal", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Kebun/Lapangan"],
        //     ['daerah' => "Moga", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Pemukiman"],
        //     ['daerah' => "Pemalang", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Pemukiman"],
        //     ['daerah' => "Petarukan", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Kebun/Lapangan"],
        //     ['daerah' => "Pulosari", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Kebun/Lapangan"],
        //     ['daerah' => "Randudongkal", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Hutan"],
        //     ['daerah' => "Taman", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "Industri"],
        //     ['daerah' => "Ulujami", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Sawah/Ladang/Tambak"],
        //     ['daerah' => "Warungpring", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Pemukiman"],
        //     ['daerah' => "Watukumpul", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Hutan"]
        // ];

        // DB::table('data_penggunaan_lahans')->insert($datapenggunaanlahans);

        // //for data_rawan_bencana_longsors
        // $datarawanbencanalongsors=[
        //     ['daerah' => "Ampelgading", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Rendah"],
        //     ['daerah' => "Bantarbolang", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Sedang"],
        //     ['daerah' => "Belik", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Tinggi"],
        //     ['daerah' => "Bodeh", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Tinggi"],
        //     ['daerah' => "Comal", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Rendah"],
        //     ['daerah' => "Moga", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Tinggi"],
        //     ['daerah' => "Pemalang", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Rendah"],
        //     ['daerah' => "Petarukan", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Rendah"],
        //     ['daerah' => "Pulosari", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Tinggi"],
        //     ['daerah' => "Randudongkal", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Tinggi"],
        //     ['daerah' => "Taman", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Rendah"],
        //     ['daerah' => "Ulujami", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Rendah"],
        //     ['daerah' => "Warungpring", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Rendah"],
        //     ['daerah' => "Watukumpul", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Tinggi"]
        // ];

        // DB::table('data_rawan_bencana_longsors')->insert($datarawanbencanalongsors);

        // //for data_curah_hujans
        // $datacurahhujans=[
        //     ['daerah' => "Ampelgading", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "1500-2750"],
        //     ['daerah' => "Bantarbolang", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "2750-4000"],
        //     ['daerah' => "Belik", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "2750-4000"],
        //     ['daerah' => "Bodeh", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "1500-2750"],
        //     ['daerah' => "Comal", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "1500-2750"],
        //     ['daerah' => "Moga", 'nilai_klasifikasi' => 0, 'nilai_parameter' => ">4000"],
        //     ['daerah' => "Pemalang", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "1500-2750"],
        //     ['daerah' => "Petarukan", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "1500-2750"],
        //     ['daerah' => "Pulosari", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "2750-4000"],
        //     ['daerah' => "Randudongkal", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "2750-4000"],
        //     ['daerah' => "Taman", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "1500-2750"],
        //     ['daerah' => "Ulujami", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "1500-2750"],
        //     ['daerah' => "Warungpring", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "2750-4000"],
        //     ['daerah' => "Watukumpul", 'nilai_klasifikasi' => 0, 'nilai_parameter' => ">4000"]
        // ];

        // DB::table('data_curah_hujans')->insert($datacurahhujans);

        // //for data_hidrogeologis
        // $datahidrogeologis=[
        //     ['daerah' => "Ampelgading", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
        //     ['daerah' => "Bantarbolang", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Air Tanah Langka"],
        //     ['daerah' => "Belik", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Air Tanah Langka"],
        //     ['daerah' => "Bodeh", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Air Tanah Langka"],
        //     ['daerah' => "Comal", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
        //     ['daerah' => "Moga", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
        //     ['daerah' => "Pemalang", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
        //     ['daerah' => "Petarukan", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
        //     ['daerah' => "Pulosari", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
        //     ['daerah' => "Randudongkal", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
        //     ['daerah' => "Taman", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Air Tanah Langka"],
        //     ['daerah' => "Ulujami", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
        //     ['daerah' => "Warungpring", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Air Tanah Langka"],
        //     ['daerah' => "Watukumpul", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Air Tanah Langka"]
        // ];

        // DB::table('data_hidrogeologis')->insert($datahidrogeologis);

        // //for data_jenis_tanahs
        // $datajenistanahs=[
        //     ['daerah' => "Ampelgading", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Alluvial"],
        //     ['daerah' => "Bantarbolang", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Latosol"],
        //     ['daerah' => "Belik", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Regosol"],
        //     ['daerah' => "Bodeh", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Gromosol"],
        //     ['daerah' => "Comal", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Alluvial"],
        //     ['daerah' => "Moga", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Regosol"],
        //     ['daerah' => "Pemalang", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Alluvial"],
        //     ['daerah' => "Petarukan", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Alluvial"],
        //     ['daerah' => "Pulosari", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Gromosol"],
        //     ['daerah' => "Randudongkal", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Latosol"],
        //     ['daerah' => "Taman", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Alluvial"],
        //     ['daerah' => "Ulujami", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Alluvial"],
        //     ['daerah' => "Warungpring", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Regosol"],
        //     ['daerah' => "Watukumpul", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Regosol"]
        // ];

        // DB::table('data_jenis_tanahs')->insert($datajenistanahs);

        // //for data_rawan_bencana_banjirs
        // $datarawanbencanabanjirs=[
        //     ['daerah' => "Ampelgading", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Rawan Banjir"],
        //     ['daerah' => "Bantarbolang", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
        //     ['daerah' => "Belik", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
        //     ['daerah' => "Bodeh", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Rawan Banjir"],
        //     ['daerah' => "Comal", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Rawan Banjir"],
        //     ['daerah' => "Moga", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
        //     ['daerah' => "Pemalang", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Rawan Banjir"],
        //     ['daerah' => "Petarukan", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
        //     ['daerah' => "Pulosari", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
        //     ['daerah' => "Randudongkal", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
        //     ['daerah' => "Taman", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
        //     ['daerah' => "Ulujami", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Rawan Banjir"],
        //     ['daerah' => "Warungpring", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
        //     ['daerah' => "Watukumpul", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"]
        // ];

        // DB::table('data_rawan_bencana_banjirs')->insert($datarawanbencanabanjirs);

        //create view parameter data
        // Schema::create('parameter_data_view', function (Blueprint $table) {
        //     DB::statement("create view parameter_data_view as select `lab_baru`.`peminjams`.`id` AS `id`,`lab_baru`.`pinjam_alats`.`status` AS `status`,`lab_baru`.`peminjams`.`username` AS `nim`,`lab_baru`.`peminjams`.`nama` AS `nama`,`lab_baru`.`pinjam_alats`.`tgl_pinjam` AS `tgl_pinjam`,`lab_baru`.`pinjam_alats`.`tgl_kembali` AS `tgl_kembali`,`lab_baru`.`pinjam_alats`.`keterangan` AS `keterangan`,`lab_baru`.`pinjam_alats`.`nama_alat` AS `nama_alat`,`lab_baru`.`pinjam_alats`.`kegunaan` AS `kegunaan`,`lab_baru`.`pinjam_alats`.`jumlah` AS `jumlah`,`lab_baru`.`peminjams`.`no_hp` AS `no_hp`,`lab_baru`.`peminjams`.`alamat` AS `alamat` from (`lab_baru`.`peminjams` join `lab_baru`.`pinjam_alats` on((`lab_baru`.`peminjams`.`id` = `lab_baru`.`pinjam_alats`.`id_peminjam`)))");
        // });


    }
}

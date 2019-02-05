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
        //     'nilai' => 60
        // ]);

        //Seed Faker
        // factory(App\Atribut::Class, 50)-> create();

        //for bobot_parameters
        $bobotparamaters=[
            ['parameter' => "Kelerengan", 'bobot' => 10],
            ['parameter' => "Penggunaan Lahan", 'bobot' => 20],
            ['parameter' => "Rawan Bencana Longsor", 'bobot' => 15],
            ['parameter' => "Curah Hujan", 'bobot' => 15],
            ['parameter' => "Hidrogeologi", 'bobot' => 20],
            ['parameter' => "Jenis Tanah", 'bobot' => 10],
            ['parameter' => "Rawan Bencana Banjir", 'bobot' => 10],
        ];

        DB::table('bobot_parameters')->insert($bobotparamaters);

        //for data_kelerengans
        $datakelerengans=[
            ['daerah' => "Ampelgading", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "0-8%"],
            ['daerah' => "Bantarbolang", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "8-15%"],
            ['daerah' => "Belik", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "8-15%"],
            ['daerah' => "Bodeh", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "8-15%"],
            ['daerah' => "Comal", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "0-8%"],
            ['daerah' => "Moga", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "8-15%"],
            ['daerah' => "Pemalang", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "0-8%"],
            ['daerah' => "Petarukan", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "0-8%"],
            ['daerah' => "Pulosari", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "25-40%"],
            ['daerah' => "Randudongkal", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "15-25%"],
            ['daerah' => "Taman", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "0-8%"],
            ['daerah' => "Ulujami", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "0-8%"],
            ['daerah' => "Warungpring", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "8-15%"],
            ['daerah' => "Watukumpul", 'nilai_klasifikasi' => 0, 'nilai_parameter' => ">40%"],
        ];

        DB::table('data_kelerengans')->insert($datakelerengans);

        //for data_penggunaan_lahans
        $datapenggunaanlahans=[
            ['daerah' => "Ampelgading", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "Industri"],
            ['daerah' => "Bantarbolang", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Hutan"],
            ['daerah' => "Belik", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Hutan"],
            ['daerah' => "Bodeh", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "Industri"],
            ['daerah' => "Comal", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Kebun/Lapangan"],
            ['daerah' => "Moga", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Pemukiman"],
            ['daerah' => "Pemalang", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Pemukiman"],
            ['daerah' => "Petarukan", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Kebun/Lapangan"],
            ['daerah' => "Pulosari", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Kebun/Lapangan"],
            ['daerah' => "Randudongkal", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Hutan"],
            ['daerah' => "Taman", 'nilai_klasifikasi' => 4, 'nilai_parameter' => "Industri"],
            ['daerah' => "Ulujami", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Sawah/Ladang/Tambak"],
            ['daerah' => "Warungpring", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Pemukiman"],
            ['daerah' => "Watukumpul", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Hutan"]
        ];

        DB::table('data_penggunaan_lahans')->insert($datapenggunaanlahans);

        //for data_rawan_bencana_longsors
        $datarawanbencanalongsors=[
            ['daerah' => "Ampelgading", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Rendah"],
            ['daerah' => "Bantarbolang", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Sedang"],
            ['daerah' => "Belik", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Tinggi"],
            ['daerah' => "Bodeh", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Tinggi"],
            ['daerah' => "Comal", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Rendah"],
            ['daerah' => "Moga", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Tinggi"],
            ['daerah' => "Pemalang", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Rendah"],
            ['daerah' => "Petarukan", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Rendah"],
            ['daerah' => "Pulosari", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Tinggi"],
            ['daerah' => "Randudongkal", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Tinggi"],
            ['daerah' => "Taman", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Rendah"],
            ['daerah' => "Ulujami", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Rendah"],
            ['daerah' => "Warungpring", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Rendah"],
            ['daerah' => "Watukumpul", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Tinggi"]
        ];

        DB::table('data_rawan_bencana_longsors')->insert($datarawanbencanalongsors);

        //for data_curah_hujans
        $datacurahhujans=[
            ['daerah' => "Ampelgading", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "1500-2750"],
            ['daerah' => "Bantarbolang", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "2750-4000"],
            ['daerah' => "Belik", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "2750-4000"],
            ['daerah' => "Bodeh", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "1500-2750"],
            ['daerah' => "Comal", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "1500-2750"],
            ['daerah' => "Moga", 'nilai_klasifikasi' => 0, 'nilai_parameter' => ">4000"],
            ['daerah' => "Pemalang", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "1500-2750"],
            ['daerah' => "Petarukan", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "1500-2750"],
            ['daerah' => "Pulosari", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "2750-4000"],
            ['daerah' => "Randudongkal", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "2750-4000"],
            ['daerah' => "Taman", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "1500-2750"],
            ['daerah' => "Ulujami", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "1500-2750"],
            ['daerah' => "Warungpring", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "2750-4000"],
            ['daerah' => "Watukumpul", 'nilai_klasifikasi' => 0, 'nilai_parameter' => ">4000"]
        ];

        DB::table('data_curah_hujans')->insert($datacurahhujans);

        //for data_hidrogeologis
        $datahidrogeologis=[
            ['daerah' => "Ampelgading", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
            ['daerah' => "Bantarbolang", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Air Tanah Langka"],
            ['daerah' => "Belik", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Air Tanah Langka"],
            ['daerah' => "Bodeh", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Air Tanah Langka"],
            ['daerah' => "Comal", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
            ['daerah' => "Moga", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
            ['daerah' => "Pemalang", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
            ['daerah' => "Petarukan", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
            ['daerah' => "Pulosari", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
            ['daerah' => "Randudongkal", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
            ['daerah' => "Taman", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Air Tanah Langka"],
            ['daerah' => "Ulujami", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Akuifer Produktif"],
            ['daerah' => "Warungpring", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Air Tanah Langka"],
            ['daerah' => "Watukumpul", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Air Tanah Langka"]
        ];

        DB::table('data_hidrogeologis')->insert($datahidrogeologis);

        //for data_jenis_tanahs
        $datajenistanahs=[
            ['daerah' => "Ampelgading", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Alluvial"],
            ['daerah' => "Bantarbolang", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Latosol"],
            ['daerah' => "Belik", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Regosol"],
            ['daerah' => "Bodeh", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Gromosol"],
            ['daerah' => "Comal", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Alluvial"],
            ['daerah' => "Moga", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Regosol"],
            ['daerah' => "Pemalang", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Alluvial"],
            ['daerah' => "Petarukan", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Alluvial"],
            ['daerah' => "Pulosari", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Gromosol"],
            ['daerah' => "Randudongkal", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Latosol"],
            ['daerah' => "Taman", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Alluvial"],
            ['daerah' => "Ulujami", 'nilai_klasifikasi' => 3, 'nilai_parameter' => "Alluvial"],
            ['daerah' => "Warungpring", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Regosol"],
            ['daerah' => "Watukumpul", 'nilai_klasifikasi' => 2, 'nilai_parameter' => "Regosol"]
        ];

        DB::table('data_jenis_tanahs')->insert($datajenistanahs);

        //for data_rawan_bencana_banjirs
        $datarawanbencanabanjirs=[
            ['daerah' => "Ampelgading", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Rawan Banjir"],
            ['daerah' => "Bantarbolang", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
            ['daerah' => "Belik", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
            ['daerah' => "Bodeh", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Rawan Banjir"],
            ['daerah' => "Comal", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Rawan Banjir"],
            ['daerah' => "Moga", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
            ['daerah' => "Pemalang", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Rawan Banjir"],
            ['daerah' => "Petarukan", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
            ['daerah' => "Pulosari", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
            ['daerah' => "Randudongkal", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
            ['daerah' => "Taman", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
            ['daerah' => "Ulujami", 'nilai_klasifikasi' => 0, 'nilai_parameter' => "Rawan Banjir"],
            ['daerah' => "Warungpring", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"],
            ['daerah' => "Watukumpul", 'nilai_klasifikasi' => 1, 'nilai_parameter' => "Tidak Rawan Banjir"]
        ];

        DB::table('data_rawan_bencana_banjirs')->insert($datarawanbencanabanjirs);

        //create view parameter data
        // Schema::create('parameter_data_view', function (Blueprint $table) {
        //     DB::statement("create view parameter_data_view as select `lab_baru`.`peminjams`.`id` AS `id`,`lab_baru`.`pinjam_alats`.`status` AS `status`,`lab_baru`.`peminjams`.`username` AS `nim`,`lab_baru`.`peminjams`.`nama` AS `nama`,`lab_baru`.`pinjam_alats`.`tgl_pinjam` AS `tgl_pinjam`,`lab_baru`.`pinjam_alats`.`tgl_kembali` AS `tgl_kembali`,`lab_baru`.`pinjam_alats`.`keterangan` AS `keterangan`,`lab_baru`.`pinjam_alats`.`nama_alat` AS `nama_alat`,`lab_baru`.`pinjam_alats`.`kegunaan` AS `kegunaan`,`lab_baru`.`pinjam_alats`.`jumlah` AS `jumlah`,`lab_baru`.`peminjams`.`no_hp` AS `no_hp`,`lab_baru`.`peminjams`.`alamat` AS `alamat` from (`lab_baru`.`peminjams` join `lab_baru`.`pinjam_alats` on((`lab_baru`.`peminjams`.`id` = `lab_baru`.`pinjam_alats`.`id_peminjam`)))");
        // });


    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsip', function (Blueprint $table) {
            $table->id();
            $table->string('arsipid');
            $table->string('no_arsip');
            $table->enum('klasifikasi', [
                '-', 'DL.00', 'DL.02', 'HK.00', 'HK.01', 'HK.04', 'HK.05', 'HM.00', 'HM.02', 'HM.04', 'KP.00',
                'KP.03', 'KP.04', 'KP.06', 'KP.09', 'KP.11', 'KU.00', 'KU.02', 'KU.03', 'KU.04', 'KU.05', 'KU.06',
                'KU.08', 'KU.09', 'KU.10', 'KU.11', 'KU.12', 'KU.13', 'KU.14', 'LL.00', 'OT.01', 'OT.03', 'PL.00',
                'PM.00', 'PM.02', 'PM.03', 'PP.00', 'PP.01', 'PP.02', 'PT.00', 'PT.02', 'PT.03', 'TU.00', 'TU.03'
            ]);
            $table->enum('bentuk_arsip', ['-', 'Foto', 'Gambar', 'Koresponden']);
            $table->string('uraian');
            $table->string('kode_unit');
            $table->string('jenis_arsip');
            $table->string('ruas');
            $table->string('unit_p');
            $table->enum('m_k', ['Masuk', 'Keluar']);
            $table->date('tahun');
            $table->string('jumlah');
            $table->date('s_d');
            $table->string('no_box');
            $table->enum('perkembangan', ['', 'Asli', 'Copy', 'Tembusan']);
            $table->string('lokasi');
            $table->date('retensi');
            $table->date('gudang');
            $table->enum('keterangan', ['', 'Simpan', 'Permanen']);
            $table->string('kelompok');
            $table->string('proyek');
            $table->string('indeks');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arsip');
    }
};

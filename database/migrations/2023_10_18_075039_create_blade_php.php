<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blade_php', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blade_php');
        <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">nama</a></li>
                    <li><a class="dropdown-item" href="#">jabatan</a></li>
                    <li><a class="dropdown-item" href="#">tahun masuk</a></li>
                    <li><a class="dropdown-item" href="#">tahun selesai</a></li>
                    <li><a class="dropdown-item" href="#">action</a></li>
                  </ul>
                </div>
            </li>
            @foreach ($pengalaman_kerja as $item)
    }
};

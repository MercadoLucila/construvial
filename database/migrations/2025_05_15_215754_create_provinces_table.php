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
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provinces');
    }
};


/*

Model de WorkSites: 

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Work_Site extends Model
{
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
}


Migración de WorkSites
Schema::create('work__sites', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->foreignId('province_id')->constrained('provinces')->onDelete('cascade');
        });


*/
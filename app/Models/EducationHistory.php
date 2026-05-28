<?php 
 
namespace App\Models; 
 
 
use Illuminate\Database\Eloquent\Model; 
 
class EducationHistory extends Model 
{ 
 
    // Mendefinisikan kolom yang boleh diisi secara massal (Mass Assignment) 
    protected $fillable = [ 
        'school_name', 
        'degree', 
        'start_year', 
        'end_year', 
    ]; 
}

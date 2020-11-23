<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Archiv extends Model {

protected $table    = 'archivs';
protected $fillable = [
		'id',
		'admin_id',
		              'section_id',
        'relevantrepartment_id',
        'batch_id',
        'supervisor_id',
'title',
'describe',
'img',
'file_pro',
'std_1',
'std_2',
'std_3',
'std_4',
'std_5',
'note',
'file_pro_r',
		'created_at',
		'updated_at',
	];

   public function section_id(){
      return $this->belongsToMany(\App\Model\Section::class,'id','section_id');
   }

   public function relevantrepartment_id(){
      return $this->belongsToMany(\App\Model\RelevantDepartment::class,'id','relevantrepartment_id');
   }

   public function batch_id(){
      return $this->belongsToMany(\App\Model\Batch::class,'id','batch_id');
   }

   public function supervisor_id(){
      return $this->belongsToMany(\App\Model\Supervisor::class,'id','supervisor_id');
   }

}

<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class RelevantDepartment extends Model {

protected $table    = 'relevant_departments';
protected $fillable = [
		'id',
		'admin_id',
		      'name',
'section_id',

		'created_at',
		'updated_at',
	];

}

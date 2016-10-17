<?php
namespace App\Models;

class Usuario extends BaseModel{

	public function getSource(){
		return 'tbl_usuarios';
	}

}
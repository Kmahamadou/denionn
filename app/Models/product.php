<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['title','auteur','mode','livre','prix','quantite','categorie','description','image','livre_content_aws_storage_path','livre_image_aws_storage_path','sommaire'];
}

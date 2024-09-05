<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Batch extends Model
{
   protected $connection = 'mongodb';
   protected $collection = 'batches';
}
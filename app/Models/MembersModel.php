<?php

namespace App\Models;

use CodeIgniter\Model;

class MembersModel extends Model
{
    protected $table      = 'members';
    protected $primaryKey = 'mb_id';
    protected $allowedFields = ['mb_email', 'mb_password'];
    protected $useTimestamps = true; // created_at, updated_at 사용
    protected $createdField  = 'mb_created_at';
    protected $updatedField  = 'mb_updated_at';
    protected $deletedField  = 'mb_deleted_at'; // 소프트 삭제 사용
}

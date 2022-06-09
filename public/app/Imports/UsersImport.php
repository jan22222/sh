<?php

namespace App\Imports;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name'     => $row[0],
            'username'     => $row[1],
            'email'    => $row[2],
            'password' => Hash::make($row[3]),
         ]);
    }
}

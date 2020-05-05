<?php
namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return User::all();
    }

    public function headings(): array{
        return [ 'Name', 'Email', 'Gender', 'Birthday', 'Country', 'Phone', 'Mobile', 'Accept EDM', 'Register Region', 'Registration Date' ];
    }

    public function map($user): array
    {
        return [
            $user->name,
            $user->email,
            $user->gender,
            $user->present()->birthday,
            $user->present()->country,
            $user->phone,
            $user->mobile,
            $user->accept_edm ? "Y" : "N",
            strtoupper($user->register_region),
            ( $user->created_at ? $user->created_at->format("Y-m-d") : "" ),
        ];
    }
}

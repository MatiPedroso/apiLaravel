<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;

class CaracterExport implements FromCollection
{
    protected $Data;

    public function __construct(array $Data)
    {
        $this->data = $Data;
    }

    public function collection()
    {
        
        return collect($this->data);
    }
}


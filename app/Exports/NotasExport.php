<?php

namespace Otecnya\Exports;

use Otecnya\Nota;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
// use Maatwebsite\Excel\Concerns\FromView;\Concerns\FromCollection;


use Maatwebsite\Excel\Concerns\Exportable;
class NotasExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */


    use Exportable;
 
    protected $notas;
 
    public function __construct($notas = null)
    {
        $this->notas = $notas;
    }
 
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        return view('excels.notas', [
            'notas' => $this->notas
        ]);
    }

    // public function collection()
    // {
    //     return $this->notas ?: Curso::all();
    // }

}

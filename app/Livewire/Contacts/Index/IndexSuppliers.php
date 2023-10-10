<?php

namespace App\Livewire\Contacts\Index;

use Livewire\Component;
use Livewire\WithFileUploads;

class IndexSuppliers extends Component
{
    use WithFileUploads;

    public $fileImport;
    public function render()
    {
        return view('livewire.contacts.index.index-suppliers')->title('Suppliers | Domflow - Apps');
    }

    public function downloadTemplate()
    {
        $filename = 'supplier-template-for-import.xlsx';
        $path = public_path('files/'. $filename);

        return response()->download($path, $filename, [
            'Content-Type' => 'application/vnd.ms-excel',
            'Content-Disposition' => 'inline; filename="' . $filename . '"'
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Device;
use Livewire\Component;

class Search extends Component
{
    public $keywords;
    public $noResult = false;
    public $result = "";


    public function search()
    {
        if ($this->keywords != "") {
            // finding Device wit this Serial
            $this->result = Device::where('serial', 'like', '%' . $this->keywords . '%')->first();
            if ($this->result == "") {
                $this->noResult = true;
            }
        } else {
            $this->noResult = true;
        }
    }


    public function updatedKeywords()
    {
        $this->noResult = false;
    }

    public function render()
    {
        return view('livewire.search');
    }
}

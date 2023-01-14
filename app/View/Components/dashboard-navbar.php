<?php

namespace App\View\Components;

use Illuminate\View\Component;

class dashboardnavbar extends Component
{

    /**
     * @var string 
     * 
     */
    public $User;
    
    /**
     * Create a new component instance.
     * @param string $User
     * @return void
     */
    public function __construct($User)
    {
        //
        $this->User = $User;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard-navbar',['User' => $this->User]);
    }
}
<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormTooltip extends Component
{
    public string $mensagem;
    public string $posicao;
    public string $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $mensagem, string $posicao = "top", string $class = "")
    {
        $this->mensagem = $mensagem;
        $this->posicao = $posicao;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-tooltip');
    }
}

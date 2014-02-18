<?php

class FormulaController extends BaseController
{
    public function store()
    {
        $email = Input::get('email');
        $formulae = $this->parseFormulae(Input::get('formulae'));

        dd($formulae);
    }

    private function parseFormulae($formulae)
    {
        // string 'autoconf 2.69\node 0.10.24 0.10.25'
        // to
        // array ['autoconf 2.69', 'node 0.10.24 0.10.25']
        $formulae = explode("\n", $formulae);

        foreach ($formulae as &$formula) {

            // string 'node 0.10.24 0.10.25'
            // to
            // array ['node','0.10.24','0.10.25']
            $f = explode(' ', $formula);

            $formula = [
                'formula' => array_shift($f), // 1st
                'version' => array_pop($f)    // nth
            ];
        }

        return $formulae;
    }
}

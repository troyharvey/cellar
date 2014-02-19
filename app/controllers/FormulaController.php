<?php

class FormulaController extends BaseController
{
    public function store()
    {
        $user = User::create([
            'email' => Input::get('email')
        ]);

        // Array of new Formulas from brew list string
        $formulae = Formula::createFromBrewList(Input::get('formulae'));

        // Attach each formula
        foreach ($formulae as $formula) {
            $user->formulas()->attach($formulae);
        }
    }
}

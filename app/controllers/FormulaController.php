<?php

class FormulaController extends BaseController
{
    public function store()
    {
        // Try to find the user by email
        $user = User::where('email', '=', Input::get('email'))->first();

        if (!$user) {
            $user = User::create([
                'email' => Input::get('email')
            ]);
        }

        // Array of new Formulas from brew list string
        $formulae = Formula::createFromBrewList(Input::get('formulae'));

        // Attach each formula
        foreach ($formulae as $formula) {
            $user->formulas()->attach($formula->id);
        }

        return Redirect::route('trending');
    }

    /**
     * List the 15 most popular home brew formula
     * @return View
     */
    public function trending()
    {
        $formulas = DB::table('formulas')
            ->select('name', DB::raw('count(*) as total'))
            ->groupBy('name')
            ->orderBy('total', 'DESC')
            ->take(15)
            ->get();

        return View::make('trending', compact('formulas'));
    }
}

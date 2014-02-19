<?php

class Formula extends Eloquent
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany('User', 'user_formula');
    }

    /**
     * Create multiple Formulas from a brew list string
     * @param  string $brew_list The raw dump of the brew list command
     * @return array             Array of new Formula objects
     */
    public static function createFromBrewList($brew_list)
    {
        // string 'autoconf 2.69\node 0.10.24 0.10.25'
        // to
        // array ['autoconf 2.69', 'node 0.10.24 0.10.25']
        $brew_list = explode("\n", $brew_list);

        // Remove empty array elements caused by \n
        $brew_list = array_filter($brew_list);

        $formulae = [];

        foreach ($brew_list as $formula) {

            // string 'node 0.10.24 0.10.25'
            // to
            // array ['node','0.10.24','0.10.25']
            $formula = explode(' ', $formula);

            $formulae[] = Formula::create([
                'name' => array_shift($formula), // 1st
                'version' => array_pop($formula) // nth
            ]);
        }

        return $formulae;
    }
}

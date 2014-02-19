@extends('layout')

@section('content')

    <ol>
        <li>
            <p>Run this command to copy your Homebrew Formulae to the clipboard.</p>
            <code>brew list --versions | pbcopy</code>
        </li>
        <li>
            <p>Paste below.</p>
        </li>
    </ol>

    {{ Form::open(array('route' => 'formulae')) }}
        <textarea placeholder="Your Homebrew formulae" name="formulae" rows="6" autofocus></textarea>
        <div>
            <input type="email" placeholder="Email" name="email">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    {{ Form::close() }}

@stop

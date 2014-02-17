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

    <form action="/formulae" method="POST">
        <textarea placeholder="Your Homebrew formulae" name="formulae"></textarea>
        <div>
            <input type="email" placeholder="Email" name="email">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

@stop

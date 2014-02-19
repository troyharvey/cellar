@extends('layout')

@section('content')

    <ol>
        <li>
            <p>Share your favorite Homebrew formulae.</p>
        </li>
        <li>
            <p>Just run this command.</p>
            <code>brew list --versions | pbcopy</code>
            <p></p>
        </li>
        <li>
            <p>And paste below.</p>
        </li>
    </ol>

    {{ Form::open(array('route' => 'formulae')) }}
        <div class="form-group">
            <textarea
                placeholder="Your Homebrew formulae"
                class="form-control"
                name="formulae"
                rows="6"
                autofocus></textarea>
        </div>

        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-block btn-lg btn-primary">Submit</button>
        </div>
    {{ Form::close() }}

@stop

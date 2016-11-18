<div class="form-group">
    {!! Form::label('listener', 'Listener') !!}
    {!! Form::text('listener', isset($listener) ? $listener->name : null, ['class' => 'form-control']) !!}
</div>

<hr>

<h2>Responses</h2>

<div class="form-group">
    {!! Form::label('response[]', 'Response') !!}
    {!! Form::text('response[]', null, ['class' => 'form-control']) !!}
</div>

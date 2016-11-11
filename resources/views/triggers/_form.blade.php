<div class="form-group">
    {!! Form::label('trigger', 'Trigger') !!}
    {!! Form::text('trigger', isset($trigger) ? $trigger->name : null, ['class' => 'form-control']) !!}
</div>

<hr>

<h2>Responses</h2>

<div class="form-group">
    {!! Form::label('response[]', 'Response') !!}
    {!! Form::text('response[]', null, ['class' => 'form-control']) !!}
</div>

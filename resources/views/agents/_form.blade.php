<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', isset($agent) ? $agent->name : null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', isset($agent) ? $agent->description : null, ['class' => 'form-control']) !!}
</div>

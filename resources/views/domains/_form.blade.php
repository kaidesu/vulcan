<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', isset($domain) ? $domain->name : null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', isset($domain) ? $domain->description : null, ['class' => 'form-control']) !!}
</div>

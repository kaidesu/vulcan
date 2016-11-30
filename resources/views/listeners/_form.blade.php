{!! Form::hidden('domain_id', $domain->id) !!}

<div class="form-group">
    {!! Form::label('for', 'Listen For') !!}
    {!! Form::text('for', isset($listener) ? $listener->for : null, ['class' => 'form-control', 'placeholder' => 'When someone says...']) !!}
</div>

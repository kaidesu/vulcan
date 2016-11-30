{!! Form::hidden('listener_id', $listener->id) !!}

<div class="form-group">
    {!! Form::label('with', 'Respond With') !!}
    {!! Form::text('with', isset($responses) ? $responses->with : null, ['class' => 'form-control', 'placeholder' => 'Your bot replies...']) !!}
</div>

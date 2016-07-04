<!-- Temporary -->
{!! Form::hidden('user_id',1)!!}

<div class="form-group">
    {!! Form::label('title','Name :') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div>
    {!! Form::label('body','Body :') !!}
    {!! Form::textarea('body',null,['class'=>'form-control'])!!}
</div>

<br>

<div>
    {!! Form::label('published_at','Publish On:') !!}
    {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
</div>

<br>
<div class="form-group">
    {!! Form::submit($submitButton,['class'=>'btn btn-primary form-control']) !!}
</div>
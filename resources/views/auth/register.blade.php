@extends('layouts.layout')

@section('content')
    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
        <form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group">
        {!! Form::label('Name','Name:') !!}
        {!! Form::text('Name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email','Email Address:') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('contact','Contact Number:') !!}
        {!! Form::text('contact',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('about_you','About You:') !!}
        {!! Form::textarea('about_you',null,['rows'=>"3",'class'=>'form-control']) !!}
    </div>
    <div>
        {!! Form::label('role','Role ') !!}
        <label class="radio-inline"><input type="radio" name="role" value="1" checked>Student</label>
        <label class="radio-inline"><input type="radio" name="role" value="0">Expert</label>
    </div>
    <div class="student">
        <div class="form-group">
            {!! Form::label('college','College:') !!}
            {!! Form::text('college',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cgpa','Current CGPA:') !!}
            {!! Form::text('cgpa',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('year','Year:') !!}
            {!! Form::text('year',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('course','Course') !!}
            {!! Form::text('course',null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('night','Can you Dedicate late night hours ? ') !!}
        <label class="radio-inline"><input type="radio" name="night" value="1" checked> Yes</label>
        <label class="radio-inline"><input type="radio" name="night" value="0"> No</label>
    </div>
    <div class="expert">
        <div class="form-group">
            {!! Form::label('institute','Institute') !!}
            {!! Form::text('institute',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('experience','Experience') !!}
            {!! Form::text('experience',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content','Will you prepare content for the company? ') !!}
            <label class="radio-inline"><input type="radio" name="content" value="1" checked> Yes</label>
            <label class="radio-inline"><input type="radio" name="content" value="0"> No</label>
        </div>

        <div class="form-group">
            {!! Form::label('job','Will you work Full time or Part time ? ') !!}
            <label class="radio-inline"><input type="radio" name="job" value="1" checked> Full time</label>
            <label class="radio-inline"><input type="radio" name="job" value="0"> Part time</label>
        </div>
        <div class="part-time">
            <div class="form-group">
                {!! Form::label('hours','How many hours will you work ? ') !!}
                {!! Form::text('hours',null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('expected','Expected Salary') !!}
            {!! Form::text('expected',null,['class'=>'form-control']) !!}
        </div>
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>
    </div>
<!--<form>

    <div class="radio">
        <label>
            <input type="radio" name="role" id="optionsRadios1" value="option1" checked>
            Student
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="role" id="optionsRadios2" value="option2">
            Expert
        </label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>-->

@endsection

@section('script')
    <script>
        function job(value){
            if(value==1){
                $('div.part-time').hide().find('input').prop('disabled',true);
            }
            else if(value==0){
                $('div.part-time').show().find('input').prop('disabled',false);
            }
        }
        function role(value){
            if(value==1){
                $('div.expert').hide().find('input').prop('disabled',true);
                $('div.student').show().find('input').prop('disabled',false);

            }
            else if(value==0){
                $('div.expert').show().find('input').prop('disabled',false);
                $('div.student').hide().find('input').prop('disabled',true);
            }
        }
        $(document).ready(function () {
            job($('[name="job"]').val());
            role($('[name="role"]').val());
        });
        $(document).on('change','[name="job"]', function () {
            job($(this).val());
        });

        $(document).on('change','[name="role"]', function () {
            role($(this).val());
        });

    </script>
@endsection
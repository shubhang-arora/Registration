<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
    <div>
        {!! Form::label('contact','Contact Number:') !!}
        {!! Form::text('contact',null) !!}
    </div>
    <p>
        {!! Form::label('role','Role:') !!}
        <input type="radio" name="role" value="1" checked> Student<br>
        <input type="radio" name="role" value="0"> Faculty<br>
    </p>

    <div>
        {!! Form::label('college','College:') !!}
        {!! Form::input('college','null') !!}
    </div>
    <div>
        {!! Form::label('cgpa','Current CGPA:') !!}
        {!! Form::text('cgpa',null) !!}
    </div>
    <div>
        {!! Form::label('year','Year:') !!}
        {!! Form::text('year',null) !!}
    </div>
    <div>
        {!! Form::label('course','Course') !!}
        {!! Form::text('course',null) !!}
    </div>

    <div>
        {!! Form::label('night','Can you Dedicate late night hours ?') !!}
        <input type="radio" name="night" value="1" checked> Yes<br>
        <input type="radio" name="night" value="0"> No<br>
    </div>

    <div>
        {!! Form::label('institute','Institute') !!}
        {!! Form::text('institute',null) !!}
    </div>
    <div>
        {!! Form::label('experience','Experience') !!}
        {!! Form::text('experience',null) !!}
    </div>
    <div>
        {!! Form::label('content','Will you prepare content for the company? ?') !!}
        <input type="radio" name="content" value="1" checked> Yes<br>
        <input type="radio" name="content" value="0"> No<br>
    </div>

    <div>
        {!! Form::label('job','Will you work Full time or Part time ?') !!}
        <input type="radio" name="job" value="1" checked> Full time<br>
        <input type="radio" name="job" value="0"> Part time<br>
    </div>

    <div>
        {!! Form::label('hours','How many hours will you work ?') !!}
        {!! Form::text('hours',null) !!}
    </div>

    <div>
        {!! Form::label('expected','Expected Salary') !!}
        {!! Form::text('expected',null) !!}
    </div>
    <div>
        {!! Form::label('about_you','About You:') !!}
        {!! Form::textarea('about_you',null) !!}
    </div>

    <div>

    </div>
    <div>
        <button type="submit">Register</button>
    </div>
</form>
<div class="form-group">
    {!! Form::label('name', 'User Name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) !!}
    @error('name') 
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('consumer_id', 'Consumer:') !!}
    {!! Form::select('consumer_id', $consumers) !!}
</div>


<div class="form-group">
    {!! Form::label('email', 'E-Mail Address:') !!}
    {!! Form::text('email', null, ['class'=>'form-control' . ($errors->has('email') ? ' is-invalid' : '')]) !!}
    @error('email') 
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('phone', 'Phone Number:') !!}
    {!! Form::number('phone', null, ['placeholder'=>'380', 'class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('confirmed', 'Confirmed:') !!}
    {!! Form::hidden('confirmed', 0) !!}
    {!! Form::checkbox('confirmed', 1) !!}
</div>



@if (!Request::is('admin/user/create'))

    @if (!$user->hasRole('admin') || auth()->user()->id != $user->id)
    <div class="form-group">
        {!! Form::label('role_id', 'User Role:') !!}
        {!! Form::select('role_id', $roles) !!}
    </div>
    @else
        {!! Form::hidden('role_id', 1) !!}
    @endif
@else
    <div class="form-group">
        {!! Form::label('role_id', 'User Role:') !!}
        {!! Form::select('role_id', $roles) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control' . ($errors->has('email') ? ' is-invalid' : '')]) !!}
        @error('password') 
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        {!! Form::label('password_confirmation', 'Confirm Password:') !!}
        {!! Form::password('password_confirmation', ['class'=>'form-control' . ($errors->has('email') ? ' is-invalid' : '')]) !!}
        @error('password_confirmation') 
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
@endif


<button class="btn btn-primary">Save</button>

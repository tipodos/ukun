<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('name', $user->name ?? '', ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('email') }}</label>
    <div>
        {{ Form::text('email', $user->email ?? '', ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('activo') }}</label>
    <div>
        {{ Form::select('activo', [0 => 'Usuario Común', 1 => 'Administrador'], null, ['class' => 'form-control' . ($errors->has('activo') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el Rol']) }}
        {!! $errors->first('activo', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('contraseña') }}</label>
    <div>
        {{ Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Password']) }}
        {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('confirmar contraseña') }}</label>
    <div>
        {{ Form::password('password_confirmation', ['class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : ''), 'placeholder' => 'Confirm Password']) }}
        {!! $errors->first('password_confirmation', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Subir</button>
        </div>
    </div>
</div>

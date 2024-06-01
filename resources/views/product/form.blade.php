
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('name', $product->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('descripción') }}</label>
    <div>
        {{ Form::text('description', $product->description, ['class' => 'form-control' .
        ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('precio') }}</label>
    <div>
        {{ Form::text('price', $product->price, ['class' => 'form-control' .
        ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
        {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('imagen', 'Imagen') }}</label>
    <div>
        {{ Form::file('image', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'onchange' => 'previewImage(event)']) }}
        {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        
        <img id="imagePreview" src="#" alt="your image" style="display: none; max-width: 200px; margin-top: 10px;" />
    </div>
</div>
    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Subir</button>
            </div>
        </div>
    </div>
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

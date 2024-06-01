
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('title') }}</label>
    <div>
        {{ Form::text('title', $promotion->title, ['class' => 'form-control' .
        ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('image_url') }}</label>
    <div>
        {{ Form::file('image_url', ['class' => 'form-control' . ($errors->has('image_url') ? ' is-invalid' : ''), 'onchange' => 'previewImage(event)']) }}
        {!! $errors->first('image_url', '<div class="invalid-feedback">:message</div>') !!}
        <img id="imagePreview" src="#" alt="your image" style="display: none; max-width: 200px; margin-top: 10px;" />
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('view', 'Show Promotion') }}</label>
    <div>
        {{ Form::select('view', [1 => 'Activo', 0 => 'Inactivo'], null, ['class' => 'form-control' . ($errors->has('view') ? ' is-invalid' : '')]) }}
        {!! $errors->first('view', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
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

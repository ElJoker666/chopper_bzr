<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Producto:') }}
            {{ Form::text('name', $product->name, ['class' => 'form-control' . ($errors->has('producto') ? 'necesita ser requerido' : ''), 'placeholder' => 'Agrega un Producto']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Abreviacion:') }}
            {{ Form::text('slug', $product->slug, ['class' => 'form-control' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'Agrega una Abreviacion']) }}
            {!! $errors->first('slug', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Detalles:') }}
            {{ Form::text('details', $product->details, ['class' => 'form-control' . ($errors->has('details') ? ' is-invalid' : ''), 'placeholder' => 'Agrega los Detalles']) }}
            {!! $errors->first('details', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio:') }}
            {{ Form::text('price', $product->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Agrega un Precio']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio de envio:') }}
            {{ Form::text('shipping_cost', $product->shipping_cost, ['class' => 'form-control' . ($errors->has('shipping_cost') ? ' is-invalid' : ''), 'placeholder' => 'Agrega un Precio de envio']) }}
            {!! $errors->first('shipping_cost', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion:') }}
            {{ Form::text('description', $product->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Agrega una Descripcion']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Categoria_id:') }}
            {{ Form::text('category_id', $product->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Agrega una Categoria Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo_id:') }}
            {{ Form::text('brand_id', $product->brand_id, ['class' => 'form-control' . ($errors->has('brand_id') ? ' is-invalid' : ''), 'placeholder' => 'Agrega un Tipo de Id']) }}
            {!! $errors->first('brand_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Imagen:') }}
            {{ Form::text('image_path', $product->image_path, ['class' => 'form-control' . ($errors->has('image_path') ? ' is-invalid' : ''), 'placeholder' => 'Agrega el nombre de la imagen']) }}
            {!! $errors->first('image_path', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i></button>
    </div>
</div>
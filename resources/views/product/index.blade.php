@extends('layouts.app')
  
@section('template_title')
    Productos ChopperBzr
@endsection

@section('content')
 
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Productos de ChopperBzr
                            </span>

                             <div class="float-right">
                                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>
                                        
										<th>Producto</th>
										<th>Abreviacion</th>
										<th>Detalles</th>
										<th>Precio</th>
										<th>Precio de envio</th>
										<th>Descripcion</th>
										<th>Categoria Id</th>
										<th>Tipo de id</th>
										<th>Imagen</th>

                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $product->name }}</td>
											<td>{{ $product->slug }}</td>
											<td>{{ $product->details }}</td>
											<td>{{ $product->price }}</td>
											<td>{{ $product->shipping_cost }}</td>
											<td>{{ $product->description }}</td>
											<td>{{ $product->category_id }}</td>
											<td>{{ $product->brand_id }}</td>
											<td><img src="/images/{{ $product->image_path }}"
                                                class="card-img-top mx-auto"
                                                style="height: 150px; width: 150px;display: block;"
                                                alt="{{ $product->image_path }}"
                                           ></td>

                                            <td>
                                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('products.show',$product->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection

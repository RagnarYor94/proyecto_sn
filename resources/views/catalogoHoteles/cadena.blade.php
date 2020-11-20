@extends('layouts.menu')

@section('body')

    <h1 class="title mt-3">Cadenas Hoteleras</h1>

    <form action="{{ route('guardarCadena') }}" method="POST">
        {{ @csrf_field() }}
        <div class="form-group">
            <label class="text-primary p-1 font-weight-bold" for="nameCadena">Nombre de la Cadena</label>
            <input type="text" class="form-control" name="nombreCadena" placeholder="Ingrese el nombre de la cadena">
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Agregar</button>
    </form>

    @if (session('mensaje'))
        <div class="alert alert-success mt-2">{{ session('mensaje') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="d-flex flex-wrap bd-highlight mb-3 row-cols-5 mt-2  ">
        @foreach ($cadenas as $item)
            <div class="col m-1">
                <div class="row">
                    <div class="card border-dark col" style="max-width: 14rem;padding:0;">
                        <div class="card-header  bg-secondary text-white">Nombre de la Cadena {{ $item->id }}</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">{{ $item->cadena_hotelera }}</h5>
                            <!-- <a href="{{ route('catalogoHoteles.editarCadena', $item) }}"> -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="editarCadena"
                                data-whatever="@mdo">Editar</button>
                            <!-- </a> -->
                            <form action="{{ route('eliminarCadena', $item) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open
        modal for @mdo</button>

    <div class="modal fade" id="editarCadena" tabindex="-1" aria-labelledby="editarCadenaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>





    {{ $cadenas->links() }}

@endsection

@include('role-permission.nav-links')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Editar permisos
                    <a href="{{ url('permissions') }}" class="btn btn-danger float-end">Regresar</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('permissions/'.$permission->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="">Nombre permiso</label>
                            <input type="text" name="name" value="{{ $permission->name }}" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

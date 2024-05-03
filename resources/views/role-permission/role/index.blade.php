@include('role-permission.nav-links')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <div class="card mt-3">
                <div class="card-header">
                    <h4>Roles
                    <a href="{{ url('roles/create') }}" class="btn btn-primary float-end">Añadir Rol</a>
                    </h4>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th width="40%">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a href="{{ url('roles/'.$role->id.'/give-permissions') }}" class="btn btn-warning">Añadir / Editar permisos de rol</a>
                                        <a href="{{ url('roles/'.$role->id.'/edit') }}" class="btn btn-success">Editar</a>
                                        <a href="{{ url('roles/'.$role->id.'/delete') }}" class="btn btn-danger mx-2">Eliminar</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
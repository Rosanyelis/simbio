<a href="{{ route('categories.edit', $data->id) }}" class="btn btn-sm btn-icon btn-text-secondary
    rounded-pill"
    data-bs-toggle="tooltip" title="Editar Categoria">
    <i class="ri-edit-2-line ri-20px"></i>
</a>
<a href="javascript:;" class="btn btn-sm btn-icon btn-text-secondary
    rounded-pill text-danger"
    data-bs-toggle="tooltip" title="Eliminar Categoria"
    onclick="deleteRecord({{ $data->id }})">
    <i class="ri-delete-bin-7-line ri-20px"></i>
</a>

 <div class="table-actions">
    <a href="{{ route($route.'.edit', $data->id) }}" class="btn btn-sm btn-outline-warning action"><i class="ti-pencil"></i></a>
    <a href="{{ route($route.'.show', $data->id) }}" class="btn btn-sm btn-outline-info action"><i class="ti-info"></i></a>
    <form action="{{ route($route.'.destroy', $data->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-outline-danger action"><i class="ti-trash"></i></button>
    </form>
</div>

//return confirm delete
<form
                                                                            action="{{ route('backsite.motherboard.destroy', encrypt($motherboard_item->id)) }}"
                                                                            method="POST"
                                                                            onsubmit="return confirm('Anda yakin ingin menghapus data ini ?');">
                                                                            <input type="hidden" name="_method"
                                                                                value="DELETE">
                                                                            <input type="hidden" name="_token"
                                                                                value="{{ csrf_token() }}">
                                                                            <input type="submit" class="dropdown-item"
                                                                                value="Delete">
                                                                        </form>

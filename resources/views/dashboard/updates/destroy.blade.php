<form action="{{ route('dashboard.updates.destroy', $update->id) }}" method="POST"
      onsubmit="return confirm('Are you sure you want to delete this update?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger">
        <i class="bi bi-trash me-1"></i> Delete
    </button>
</form>

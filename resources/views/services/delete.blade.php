<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $service->id }}">
    <i class="bx bx-trash-alt"></i>
</button>

<div class="modal fade" id="deleteModal{{ $service->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Xizmatni o‘chirish</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Yopish"></button>
            </div>
            <div class="modal-body">
                <p><strong>{{ $service->name }}</strong> xizmatini o‘chirmoqchimisiz?</p>
                <p class="text-danger">O‘chirilgandan keyin uni tiklash mumkin bo‘ladi.</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">O‘chirish</button>
                </form>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Bekor qilish</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit modal partial — included inside loop where $service exists -->
<button
    type="button"
    class="btn btn-warning me-2"
    data-bs-toggle="modal"
    data-bs-target="#editModal{{ $service->id }}"
>
    <i class="bx bx-edit-alt"></i>
</button>

<div class="modal fade" id="editModal{{ $service->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Xizmatni tahrirlash</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Yopish"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('services.update', $service->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nameBasic{{ $service->id }}" class="form-label">Xizmat nomi</label>
                        <input type="text" id="nameBasic{{ $service->id }}" class="form-control" name="name" value="{{ old('name', $service->name) }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="description{{ $service->id }}" class="form-label">Tavsif</label>
                        <textarea id="description{{ $service->id }}" class="form-control" name="description">{{ old('description', $service->description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="cost{{ $service->id }}" class="form-label">Xizmat narxi</label>
                        <input type="number" id="cost{{ $service->id }}" class="form-control" name="cost" value="{{ old('cost', $service->cost) }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="unit{{ $service->id }}" class="form-label">O‘lchov birligi</label>
                        <select name="unit" id="unit{{ $service->id }}" class="form-select" required>
                            <option value="item" {{ old('unit', $service->unit) == 'item' ? 'selected' : '' }}>Item</option>
                            <option value="hour" {{ old('unit', $service->unit) == 'hour' ? 'selected' : '' }}>Hour</option>
                            <option value="day" {{ old('unit', $service->unit) == 'day' ? 'selected' : '' }}>Day</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="count{{ $service->id }}" class="form-label">Xizmat soni</label>
                        <input type="number" id="count{{ $service->id }}" class="form-control" name="count"
                               value="{{ old('count', $service->count) }}" min="0" required/>
                    </div>
                    

                    <div class="mb-3">
                        <label for="status{{ $service->id }}" class="form-label">Status</label>
                        <select name="status" id="status{{ $service->id }}" class="form-select" required>
                            <option value="active" {{ old('status', $service->status) == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status', $service->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Yopish</button>
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

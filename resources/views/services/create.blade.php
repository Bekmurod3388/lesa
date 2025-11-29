<!-- Create button is in index, include this partial for the modal -->
<button
    type="button"
    class="btn btn-secondary create-new btn-primary"
    data-bs-toggle="modal"
    data-bs-target="#basicModal">
    <span>
        <i class="bx bx-plus me-sm-1"></i>
        <span class="d-none d-sm-inline-block">Xizmat yaratish</span>
    </span>
</button>

<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Xizmat yaratish</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Yopish"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('services.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="nameBasic" class="form-label">Xizmat nomi</label>
                        <input type="text" id="nameBasic" class="form-control" name="name" value="{{ old('name') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Tavsif</label>
                        <textarea id="description" class="form-control" name="description">{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="cost" class="form-label">Xizmat narxi</label>
                        <input type="number" id="cost" class="form-control" name="cost" value="{{ old('cost') }}" required/>
                    </div>

                    <div class="mb-3">
                        <label for="unit" class="form-label">O‘lchov birligi</label>
                        <select name="unit" id="unit" class="form-select" required>
                            <option value="">Tanlang</option>
                            <option value="item" {{ old('unit')=='item' ? 'selected' : '' }}>Item</option>
                            <option value="hour" {{ old('unit')=='hour' ? 'selected' : '' }}>Hour</option>
                            <option value="day" {{ old('unit')=='day' ? 'selected' : '' }}>Day</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="count" class="form-label">Xizmat soni</label>
                        <input type="number" id="count" class="form-control" name="count" value="{{ old('count', 0) }}" min="0" required/>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="active" {{ old('status')=='active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status')=='inactive' ? 'selected' : '' }}>Inactive</option>
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

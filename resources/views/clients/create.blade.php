<button
    type="button"
    class="btn btn-secondary create-new btn-primary"
    data-bs-toggle="modal"
    data-bs-target="#basicModal">
    <span>
        <i class="bx bx-plus me-sm-1"></i>
        <span class="d-none d-sm-inline-block">Yangi mijoz qo'shish</span>
    </span>
</button>

<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Yangi mijoz qo'shish</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('clients.store') }}">
                    @csrf
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">To'liq ismi</label>
                            <input type="text" id="nameBasic" class="form-control" name="name" value="{{ old('name') }}"
                                   placeholder="Full Name" required/>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="phone" class="form-label">Telefon raqami</label>
                            <input type="tel" id="phone" class="form-control" name="phone" placeholder="940810048"
                                   pattern="[0-9]{9}" maxlength="9" value="{{ old('phone') }}" required/>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="passport" class="form-label">Passport</label>
                            <input type="text" id="passport" class="form-control" name="passport"
                                   placeholder="AA1234567"
                                   value="{{ old('passport') }}" required/>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="address" class="form-label">Manzil</label>
                            <input type="text" id="address" class="form-control" name="address"
                                   value="{{ old('address') }}" required/>
                        </div>
                    </div>
                    <div id="service-container">
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label for="service" class="form-label">Xizmat</label>
                                <select name="services[]" class="form-control">
                                    @foreach($services as $service)
                                        <option value="{{$service->id}}">{{$service->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3 mb-3">
                                <label for="count" class="form-label">Soni</label>
                                <input type="number" name="counts[]" min="0" class="form-control">
                            </div>
                            <div class="col-2 mb-3">
                                <label for="" class="form-label">Qo'shish</label>
                                <input type="button" name="plus" class="btn btn-success" value="+" onclick="addElement()">
                            </div>
                        </div>
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
<script>
    function addElement() {
        var newRow = document.createElement('div');
        newRow.classList.add('row', 'g-2');

        var serviceCol = document.createElement('div');
        serviceCol.classList.add('col', 'mb-3');

        var serviceLabel = document.createElement('label');
        serviceLabel.classList.add('form-label');
        serviceLabel.innerText = "Xizmat";

        var serviceSelect = document.createElement('select');
        serviceSelect.name = "services[]"; // Name attribute as an array
        serviceSelect.classList.add('form-control');

        @foreach($services as $service)
        var option = document.createElement('option');
        option.value = "{{$service->id}}";
        option.text = "{{$service->name}}";
        serviceSelect.appendChild(option);
        @endforeach

        serviceCol.appendChild(serviceLabel);
        serviceCol.appendChild(serviceSelect);

        var countCol = document.createElement('div');
        countCol.classList.add('col-3', 'mb-3');

        var countLabel = document.createElement('label');
        countLabel.classList.add('form-label');
        countLabel.innerText = "Soni";

        var countInput = document.createElement('input');
        countInput.type = "number";
        countInput.name = "counts[]"; // Name attribute as an array
        countInput.min = "0";
        countInput.classList.add('form-control');

        countCol.appendChild(countLabel);
        countCol.appendChild(countInput);

        var buttonCol = document.createElement('div');
        buttonCol.classList.add('col-2', 'mb-3', 'd-flex', 'align-items-end');

        var addButton = document.createElement('input');
        // addButton.type = "button";
        // addButton.name = "plus";
        // addButton.classList.add('btn', 'btn-success', 'me-1');
        // addButton.value = "+";
        // addButton.onclick = addElement;

        var minusButton = document.createElement('input');
        minusButton.type = "button";
        minusButton.name = "minus";
        minusButton.classList.add('btn', 'btn-danger');
        minusButton.value = "-";
        minusButton.onclick = function() {
            removeElement(newRow);
        };

        // buttonCol.appendChild(addButton);
        buttonCol.appendChild(minusButton);

        newRow.appendChild(serviceCol);
        newRow.appendChild(countCol);
        newRow.appendChild(buttonCol);

        var serviceContainer = document.getElementById('service-container');
        serviceContainer.appendChild(newRow);
    }

    function removeElement(element) {
        element.parentNode.removeChild(element);
    }
</script>

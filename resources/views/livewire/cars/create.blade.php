<div>
    <div class="card border border-light">
        <div class="card-header bg-dark">
            <h3 class="mt-2 text-white">Add Watch</h3>
        </div>
        <div class="card-body shadow">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="car_name">
                <label for="car_name">Watch Name</label>
                @error('car_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="car_brand">
                <label for="car_brand">Watch Brand</label>
                @error('car_brand')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="price">
                <label for="price">Price</label>
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
</div>
                <div class="form-floating mb-3">
                    <select name="color" class="form-select" wire:model.defer="color">
                        <option hidden="true">Select Color</option>
                        <option selected disabled>Select Color</option>
                        <option value="black">Black</option>
                        <option value="white">White</option>
                        <option value="blue">Gold</option>
                        <option value="yellow">Silver</option>
                        <option value="red">Red</option>
                        <option value="pink">Gray</option>
                    </select>
                    <label for="color">Color</label>
                    @error('color')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-dark" wire:click="addCar()">
                    Add Watch
                </button>
            </div>
        </div>
    </div>
</div>

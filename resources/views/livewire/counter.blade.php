<div x-data>
    <button @click="bootstrap.Modal.getOrCreateInstance($refs.myModal).show()" class="btn btn-primary">
        Open Modal
    </button>

    <div class="modal fade" tabindex="-1" x-ref="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 50vh;">
                        <div class="card shadow-sm p-4" style="min-width: 300px;">
                            <h4 class="mb-3 text-center">Livewire Counter</h4>
                            <div class="display-4 text-primary text-center mb-4">
                                {{ $count }}
                            </div>
                            <button class="btn btn-lg btn-success w-100" wire:click="increment">
                                <i class="bi bi-plus-circle"></i> Increment
                            </button><br />
                            <button class="btn btn-lg btn-success w-100" wire:click="decrement">
                                <i class="bi bi-plus-circle"></i> Decrement
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

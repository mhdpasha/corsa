<div wire:poll class="row g-2">
    @if($request->status == 'new')
        <div class="col-12 col-md-auto">
            <button wire:click="update" id="accept-chat" class="btn btn-soft-success w-100">Accept</button>
        </div>
        <div class="col-12 col-md-auto">
            <button  id="assign-chat" class="btn btn-soft-warning w-100" data-bs-toggle="modal" data-bs-target="#assignModal">Assign</button>
        </div>
    @endif
    @livewire('send-message', ['requestId' => $request->id])
</div>
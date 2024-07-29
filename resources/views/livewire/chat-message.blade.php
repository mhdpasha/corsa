<div wire:poll="loadMessages">
    @foreach ($messages as $message)
        @if($message->user->id == auth()->id())
            <div class="d-flex justify-content-end mb-4">
                <div class="p-3 bg-primary text-white rounded" style="max-width: 80%;">
                    <h5 class="fw-bold text-white mb-2">Me</h5>
                    {{ $message->content }} <span class="float-end fs-6 fw-lighter ms-5 mb-0">{{ $message->created_at->translatedFormat('H:i') }}</span>
                </div>
            </div>
        @else
            <div class="d-flex justify-content-start mb-4">
                <div class="p-3 bg-light text-black rounded" style="max-width: 80%;">
                    <h5 class="fw-bold text-black mb-2">{{ $message->user->name }} ({{ $message->user->department }})</h5>
                    {{ $message->content }} <span class="float-end fs-6 text-secondary fw-lighter ms-5">{{ $message->updated_at->translatedFormat('H:i') }}</span>
                </div>
            </div>
        @endif
    @endforeach
</div>

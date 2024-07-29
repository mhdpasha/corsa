<div wire:poll.6000ms class="mx-auto text-center fw-bold w-100">
    @if ($request->status == 'new')
      <span class="badge rounded-pill bg-soft-danger" style="min-width: 60px;"> NEW </span>
      @elseif ($request->status == 'accepted')
      <span class="badge rounded-pill bg-soft-success" style="min-width: 60px;"> ACPT </span>
      @elseif ($request->status == 'assigned')
      <span class="badge rounded-pill bg-soft-danger" style="min-width: 60px;"> ASGN </span>
      @elseif ($request->status == 'cleared')
      <span class="badge rounded-pill bg-soft-primary" style="min-width: 60px;"> CLEAR </span>
    @endif
</div>

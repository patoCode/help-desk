<div class="flex w-full flex-col">
    @if($tickets != null && count($tickets) > 0 )
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th></th>
                <th>CODE</th>
                <th>TYPE</th>
                <th>USER</th>
                <th>REGISTRO</th>
                <th>CATEGORY</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($tickets as $ticket)
                <tr class="broder-b border-slate-600/40">
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->code }}</td>
                    <td>{{ $ticket->type }}</td>
                    <td>{{ $ticket->from_user }}</td>
                    <td>{{ $ticket->fecha_reg_formateada }}</td>
                    <td>{{ $ticket->category->name }}</td>
                    <td>
                        <div class="drawer-end">
                            <input id="events-drawer-{{$ticket->id}}" type="checkbox" class="drawer-toggle" />
                            <div class="drawer-content">
                                <!-- Page content here -->
                                <label for="events-drawer-{{$ticket->id}}" class="btn btn-primary drawer-button">
                                    <i class="fa-solid fa-eye"></i> {{$ticket->id}}
                                </label>
                            </div>
                            <div class="drawer-side">
                                <label for="events-drawer-{{$ticket->id}}" aria-label="close sidebar" class="drawer-overlay"></label>
                                <div class="bg-base-200 text-base-content min-h-full w-[calc(100%-5%)] p-4">
                                    <livewire:user.ticket.detail :ticket_id="$ticket->id" :key="$ticket->id"></livewire:user.ticket.detail>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div role="alert" class="alert alert-warning alert-soft w-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            <span>Advertencia: no existen usuarios para mostrar</span>
        </div>
    @endif
</div>


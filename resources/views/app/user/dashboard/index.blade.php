<x-main-layout>
    <div class="flex flex-row items-center justify-between w-full my-2">
        <h2>Bienvenido {{auth()->user()->name}}</h2>
        <div>
            <livewire:user.ticket.btn-new-ticket></livewire:user.ticket.btn-new-ticket>
        </div>
    </div>
    <div class="flex flex-row w-full gap-4">
        <div class="card card-bordered bg-slate-500/50 text-primary-content w-1/3">
            <div class="card-body">
                <h2 class="card-title">Generados</h2>
                <img src="{{ asset('graph2.png') }}" alt="" class="mx-auto">
            </div>
        </div>
        <div class="card card-bordered bg-teal-500/50 text-primary-content w-1/3">
            <div class="card-body">
                <h2 class="card-title">Atendidos</h2>
                <img src="{{ asset('graph.png') }}" alt="">
            </div>
        </div>
        <div class="card card-bordered bg-blue-600/50 text-primary-content w-1/3">
            <div class="card-body">
                <h2 class="card-title">En curso</h2>
                <img src="{{ asset('graph3.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="flex flex-col w-full gap-x-2 p-2">
        <h2 class="text-[16px]! font-bold flex items-center gap-x-2 w-full"><i class="fa-solid fa-tag"></i>Ticket generados</h2>
        <livewire:user.ticket.datatable></livewire:user.ticket.datatable>
    </div>
</x-main-layout>

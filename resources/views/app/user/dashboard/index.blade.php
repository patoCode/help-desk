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
                <h2 class="card-title">Generados hoy</h2>
                <p>If a dog chews shoes whose shoes does he choose? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum debitis natus nemo nostrum pariatur? A aliquam consequuntur corporis deserunt dolor dolorem et eveniet in magni, modi nobis qui sint tenetur.</p>
            </div>
        </div>
        <div class="card card-bordered bg-teal-500/50 text-primary-content w-1/3">
            <div class="card-body">
                <h2 class="card-title">Atendidos</h2>
                <p>If a dog chews shoes whose shoes does he choose? Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, aliquid at, aut ea eveniet natus nulla pariatur quos repellendus sequi sint vel? Blanditiis delectus est illum magni nesciunt nulla, ullam.</p>
            </div>
        </div>
        <div class="card card-bordered bg-blue-600/50 text-primary-content w-1/3">
            <div class="card-body">
                <h2 class="card-title">En curso</h2>
                <p>If a dog chews shoes whose shoes does he choose? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam beatae cum deleniti error eum eveniet ex illo ipsam laborum neque nesciunt nostrum obcaecati pariatur, quasi quia, quibusdam tenetur velit voluptas.</p>
            </div>
        </div>
    </div>
    <div class="flex flex-col w-full gap-x-2 p-2">
        <h2 class="text-[16px]! font-bold flex items-center gap-x-2 w-full"><i class="fa-solid fa-tag"></i>Ticket generados</h2>
        <livewire:user.ticket.datatable></livewire:user.ticket.datatable>
    </div>
</x-main-layout>

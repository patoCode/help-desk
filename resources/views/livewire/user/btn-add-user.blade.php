<div class="drawer drawer-end">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <!-- Page content here -->
        <label for="my-drawer-4" aria-label="open sidebar" class="btn btn-info">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
            </svg>
            Nuevo usuario
        </label>
    </div>
    <div class="drawer-side bg-purple-500/30">
        <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
        <form wire:submit.prevent="save" class="w-1/4 h-screen flex flex-col gap-y-2 bg-slate-600 p-4">
            <h2>Nuevo usuario</h2>
{{--            <input type="text" class="input input-info validator w-full" value="{{$tenant->name}}" readonly>--}}
            <input wire:model="name" type="text" class="input input-info validator w-full" name="name" placeholder="name">
            <input wire:model="username" type="text" class="input input-info validator w-full" name="username" placeholder="username">
            <input wire:model="password" type="password" class="input input-info validator w-full" name="password" placeholder="password">
            <input wire:model="email" type="text" class="input input-info validator w-full" name="email" placeholder="email">
            <button type="submit" class="btn btn-success">Confirmar</button>
        </form>

    </div>
</div>


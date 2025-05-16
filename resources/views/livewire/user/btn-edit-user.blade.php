<div class="drawer drawer-end">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <!-- Page content here -->
        <label for="my-drawer-4" aria-label="open sidebar" class="btn-neutral">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M10.5 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Zm0 6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" clip-rule="evenodd" />
            </svg>
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

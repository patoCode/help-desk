<div class="drawer drawer-end">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <label for="my-drawer-4" class="drawer-button btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
            </svg>
            Nuevo ticket
        </label>
    </div>
    <div class="drawer-side bg-blue-500/40">
        <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
        <form wire:submit.prevent="save" method="POST" class="flex flex-col items-center w-1/3 min-h-screen bg-slate-600 p-3 gap-y-3">
            @csrf
            <select wire:model="category_id" name="category_id" class="select select-bordered w-full">
                <option selected>Selecciona una categoria</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Describe tu solicitud porfavor: </span>
                </div>
                <textarea wire:model="description" class="textarea textarea-bordered w-full min-h-[300px]" placeholder="Bio"></textarea>
            </label>
            <input type="file" class="file-input file-input-bordered file-input-md w-full" />
            <button type="submit" class="btn btn-active btn-primary block">Crear</button>
        </form>
    </div>
</div>

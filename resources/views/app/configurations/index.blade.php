<x-main-layout>
    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th></th>
                <th>KEY</th>
                <th>VALUE</th>
                <th>DESCRIPTION</th>
                <th>TENANT</th>
                <th>STATUS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($configurations as $element)
                <tr>
                    <td>{{ $element->id }}</td>
                    <td>{{ $element->key }}</td>
                    <td>{{ $element->value }}</td>
                    <td>{{ $element->description }}</td>
                    <td>
                        <div class="flex flex-col gap-y-1 w-full items-center justify-beetwen">
                            <span class="w-full text-center text-[11px] font-bold">{{ $element->tenant->name  }}</span>
                            <span class="w-full text-[10px] p-1 rounded-xl font-bold text-center bg-indigo-500">{{ $element->tenant->code }}</span>
                        </div>
                    </td>
                    <td>
                        <x-basics.status :type="$element->status">{{ $element->status }}</x-basics.status>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <form action="{{route('configurations.store')}}" method="POST" class="flex flex-col w-2/3 md:w-1/3 gap-y-2 mx-auto mt-10">
        @csrf
        <label class="input input-bordered flex items-center gap-2 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
            </svg>
            <input type="text" class="info" placeholder="Key" name="key" />
        </label>
        <label class="input input-bordered flex items-center gap-2 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M3 9a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 9Zm0 6.75a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
            </svg>
            <input type="text" class="info" placeholder="Valor" name="value" />
        </label>
        <textarea class="textarea textarea-info w-full" name="description" placeholder="Descripcion"></textarea>
        <select class="select select-info w-full" name="tenant_id">
            <option disabled selected>Select Tenant</option>
            @foreach($tenants as $option)
                <option value="{{ $option->id }}">{{ $option->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-accent">Enviar</button>
    </form>



</x-main-layout>

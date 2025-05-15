<x-main-layout>
    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
            <tr>
                <th></th>
                <th>NAME</th>
                <th>CODE</th>
                <th>ICON</th>
                <th>STATUS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tenants as $element)
                <tr>
                    <th>{{ $element->id }}</th>
                    <td>{{ $element->name }}</td>
                    <td>{{ $element->code }}</td>
                    <td>{{ $element->logo }}</td>
                    <td>
                        <x-basics.status :type="$element->status">{{ $element->status }}</x-basics.status>
                    </td>
                    <td>
                        <a href="{{route('tenants.show', ['tenant' => $element->id])}}">
                            <i class="fa-solid fa-eye"></i>
                            Ver
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <form action="{{route('tenants.store')}}" method="POST" class="flex flex-col w-2/3 md:w-1/3 gap-y-2 mx-auto mt-10">
        @csrf
        <input type="text" class="input input-info w-full" name="name" placeholder="Nombre">
        <input type="text" class="input input-info w-full" name="code" placeholder="Code">
        <textarea class="textarea textarea-info w-full" name="description" placeholder="Descripcion"></textarea>
        <input type="text" class="input input-info w-full" name="logo" placeholder="LOGO">
        <button type="submit" class="btn btn-info">Enviar</button>
    </form>

</x-main-layout>

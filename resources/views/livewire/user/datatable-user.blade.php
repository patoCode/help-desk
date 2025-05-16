<div class="flex w-full flex-col">
    <div class="flex flex-row w-full gap-x-2 my-2" >
        <livewire:user.btn-add-user :tenant_id="$tenant_id" />
    </div>
@if($users != null && count($users) > 0 )
    <table class="table">
        <!-- head -->
        <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Status</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr class="broder-b border-slate-600/40">
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <x-basics.status :type="$user->status">{{ $user->status }}</x-basics.status>
                </td>
                <td>
                    <livewire:user.btn-edit-user :user_id="$user->id"></livewire:user.btn-edit-user>
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
<script>
    window.addEventListener('user-saved', () => {
        document.getElementById('my-drawer-4').checked = false;
    });
</script>

@php
$links = [
    [
        'name' => 'Dashboard',
        'icon' => 'fa-solid fa-cog',
        'route' => route('test.admin')
    ],
    [
        'name' => 'Users',
        'icon' => 'fa-solid fa-users',
        'route' => route('users.index')
    ],
    [
        'name' => 'Categories',
        'icon' => 'fa-solid fa-folder',
        'route' => route('categories.index')
    ],
     [
        'name' => 'Clientes',
        'icon' => 'fa-solid fa-folder',
        'route' => route('tenants.index')
    ],
     [
        'name' => 'Configuration',
        'icon' => 'fa-solid fa-cog',
        'route' => route('configurations.index')
    ],
]

@endphp
@foreach($links as $link)
    <li><a href="{{ $link['route'] }}"><i class="{{ $link['icon'] }}"></i>{{ $link['name'] }}</a></li>
@endforeach

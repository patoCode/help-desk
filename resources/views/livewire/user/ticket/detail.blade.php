<div class="flex flex-col w-full p-2">
    <div class="ticket-container flex flex-row items-center justify-between">
        <div class="breadcrumbs text-sm">
            <ul>
                <li>
                    <a>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="h-4 w-4 stroke-current">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                        {{ $ticket->category->name }}
                    </a>
                </li>
                <li>
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M12 3.75a6.715 6.715 0 0 0-3.722 1.118.75.75 0 1 1-.828-1.25 8.25 8.25 0 0 1 12.8 6.883c0 3.014-.574 5.897-1.62 8.543a.75.75 0 0 1-1.395-.551A21.69 21.69 0 0 0 18.75 10.5 6.75 6.75 0 0 0 12 3.75ZM6.157 5.739a.75.75 0 0 1 .21 1.04A6.715 6.715 0 0 0 5.25 10.5c0 1.613-.463 3.12-1.265 4.393a.75.75 0 0 1-1.27-.8A6.715 6.715 0 0 0 3.75 10.5c0-1.68.503-3.246 1.367-4.55a.75.75 0 0 1 1.04-.211ZM12 7.5a3 3 0 0 0-3 3c0 3.1-1.176 5.927-3.105 8.056a.75.75 0 1 1-1.112-1.008A10.459 10.459 0 0 0 7.5 10.5a4.5 4.5 0 1 1 9 0c0 .547-.022 1.09-.067 1.626a.75.75 0 0 1-1.495-.123c.041-.495.062-.996.062-1.503a3 3 0 0 0-3-3Zm0 2.25a.75.75 0 0 1 .75.75c0 3.908-1.424 7.485-3.781 10.238a.75.75 0 0 1-1.14-.975A14.19 14.19 0 0 0 11.25 10.5a.75.75 0 0 1 .75-.75Zm3.239 5.183a.75.75 0 0 1 .515.927 19.417 19.417 0 0 1-2.585 5.544.75.75 0 0 1-1.243-.84 17.915 17.915 0 0 0 2.386-5.116.75.75 0 0 1 .927-.515Z" clip-rule="evenodd" />
                        </svg>
                        {{$ticket->code}}
                    </a>
                </li>
            </ul>
        </div>
        <div class="badge bg-indigo-500 badge-md">
            {{$ticket->fecha_reg_formateada}}
        </div>
    </div>
    <div class="flex flex-row items-center justify-between p-2 bg-slate-700 rounded-md">
        <p>{{ $ticket->detail }}</p>
    </div>
    <div class="flex flex-row items-start justify-between gap-4 bg-slate-900 min-h-fit">
        <div class="p-2 w-1/3">
            <form action="" class="w-full p-2 bg-slate-600 space-y-2">
                <textarea class="textarea textarea-bordered h-[100px] w-full" placeholder="Dejanos tu comentario"></textarea>
                <input
                    type="file"
                    class="file-input file-input-bordered file-input-info w-full" />
                <button class="btn btn-info w-full">Agregar</button>
            </form>
        </div>
        <div class="p-2 w-2/3">
            @foreach($events as $index => $event )
                <div tabindex="{{ $index }}" class="collapse collapse-plus bg-blue-950 mb-2">
                    <input type="checkbox" class="peer" />
                    <div class="collapse-title text-sm font-medium flex items-center justify-between">
                        <div><i class="fa-solid fa-user"></i> {{ $event->user->name }} <span class="text-[10px]">({{ $event->fecha_reg_formateada }})</span></div>
                    </div>
                    <div class="collapse-content">
                        <div class="ticket-body min-h-[200px]">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis cum dolore error est inventore ipsa, ipsum, iste laudantium mollitia repudiandae tempore temporibus vero. Et explicabo fugit maiores qui repellat!</p>
                        </div>
                        <div class="ticket-footer flex flex-row justify-between items-center bg-slate-600/20 p-1 rounded-sm">
                            <div class="dropdown dropdown-hover dropdown-top min-w-[200px]">
                                <div tabindex="0" role="button" class="m-1 hover:text-slate-300 p-2"><i class="fa-solid fa-paperclip"></i> Attachments </div>
                                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                                    <li><a>Item 1</a></li>
                                    <li><a>Item 2</a></li>
                                </ul>
                            </div>
                            <span><i class="fa-solid fa-calendar"></i>{{ $event->fecha_reg_formateada }}</span>
                        </div>

                    </div>
                </div>
                <div tabindex="1" class="collapse collapse-plus bg-blue-950">
                    <input type="checkbox" class="peer" />
                    <div class="collapse-title text-sm font-medium flex items-center justify-between">
                        <div><i class="fa-solid fa-user"></i> {{ $event->user->name }} <span class="text-[10px]">({{ $event->fecha_reg_formateada }})</span></div>
                    </div>
                    <div class="collapse-content">
                        <div class="ticket-body min-h-[200px]">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis cum dolore error est inventore ipsa, ipsum, iste laudantium mollitia repudiandae tempore temporibus vero. Et explicabo fugit maiores qui repellat!</p>
                        </div>
                        <div class="ticket-footer flex flex-row justify-between items-center bg-slate-600/20 p-1 rounded-sm">
                            <div class="dropdown dropdown-hover dropdown-top min-w-[200px]">
                                <div tabindex="0" role="button" class="m-1"><i class="fa-solid fa-paperclip"></i> Attachments </div>
                                 <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                                    <li><a>Item 1</a></li>
                                    <li><a>Item 2</a></li>
                                  </ul>
                            </div>
                            <span><i class="fa-solid fa-calendar"></i> {{ $event->fecha_reg_formateada }}</span>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

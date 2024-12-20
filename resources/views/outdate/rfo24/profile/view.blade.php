<div>
    <!-- component -->
    <style>
        .barcode {
            left: 50%;
            box-shadow: 1px 0 0 1px, 5px 0 0 1px, 10px 0 0 1px, 11px 0 0 1px, 15px 0 0 1px, 18px 0 0 1px, 22px 0 0 1px, 23px 0 0 1px, 26px 0 0 1px, 30px 0 0 1px, 35px 0 0 1px, 37px 0 0 1px, 41px 0 0 1px, 44px 0 0 1px, 47px 0 0 1px, 51px 0 0 1px, 56px 0 0 1px, 59px 0 0 1px, 64px 0 0 1px, 68px 0 0 1px, 72px 0 0 1px, 74px 0 0 1px, 77px 0 0 1px, 81px 0 0 1px, 85px 0 0 1px, 88px 0 0 1px, 92px 0 0 1px, 95px 0 0 1px, 96px 0 0 1px, 97px 0 0 1px, 101px 0 0 1px, 105px 0 0 1px, 109px 0 0 1px, 110px 0 0 1px, 113px 0 0 1px, 116px 0 0 1px, 120px 0 0 1px, 123px 0 0 1px, 127px 0 0 1px, 130px 0 0 1px, 131px 0 0 1px, 134px 0 0 1px, 135px 0 0 1px, 138px 0 0 1px, 141px 0 0 1px, 144px 0 0 1px, 147px 0 0 1px, 148px 0 0 1px, 151px 0 0 1px, 155px 0 0 1px, 158px 0 0 1px, 162px 0 0 1px, 165px 0 0 1px, 168px 0 0 1px, 173px 0 0 1px, 176px 0 0 1px, 177px 0 0 1px, 180px 0 0 1px;
            display: inline-block;
            transform: translateX(-90px);
        }
    </style>

    <div class="grid auto-rows-auto">

        @if (count($flights) >= 1)
        <div class="m-5">
            <h2 class="text-2xl font-bold">Vuelos reservados:</h2>
        </div>

        <div class="grid gap-2 lg:grid-cols-3 mx-5 grid-cols-1">
            @foreach ($flights as $item)
            <div class="max-w-md w-full h-full mx-auto z-10 bg-[#0D2C99] rounded-3xl">
                <div class="flex flex-col">
                    <div class="bg-white relative drop-shadow-2xl  rounded-3xl p-4 m-4">
                        <div class="flex-none sm:flex">
                            <div class="flex-auto justify-evenly">

                                <div class="flex items-center">
                                    <div class="flex flex-col">
                                        <h2 class="font-medium">{{$item->airline}}</h2>
                                    </div>
                                    <div class="flex flex-col mx-auto text-[#0D2C99]">{{$item->aircraft}}</div>
                                    <div class="flex flex-col">
                                        <button type="button"
                                            wire:confirm.prompt="Are you sure?\n\nWrite 'UNBOOK' to delete this reservation|UNBOOK"
                                            wire:click='unbookFlights("{{$item->id}}")'
                                            class="bg-[#0D2C99] rounded p-1 text-white hover:bg-[#E93434]">
                                            Cancelar reserva
                                        </button>
                                    </div>
                                </div>

                                <div class=" border-dashed border-b-2 my-5"></div>

                                <div class="flex items-center">
                                    <div class="flex flex-col">
                                        <div class="flex-auto text-xs text-gray-400 my-1">
                                            <span class="mr-1 ">Departure</span>
                                        </div>
                                        <div class="w-full flex-none text-lg text-[#0D2C99] font-bold leading-none">
                                            {{$item->departure}}
                                        </div>

                                    </div>
                                    <div class="flex flex-col mx-auto">
                                        <img src="{{asset('assets/img/symbol-blue-ivao.png')}}" alt="IVAO_SYMBOL"
                                            class="w-24 p-1">

                                    </div>
                                    <div class="flex flex-col ">
                                        <div class="flex-auto text-xs text-gray-400 my-1">
                                            <span class="mr-1">Arrival</span>
                                        </div>
                                        <div class="w-full flex-none text-lg text-[#0D2C99] font-bold leading-none">
                                            {{$item->destination}}
                                        </div>

                                    </div>
                                </div>

                                <div class=" border-dashed border-b-2 my-5 pt-5">
                                    <div class="absolute rounded-full w-5 h-5 bg-[#0D2C99] -mt-2 -left-2"></div>
                                    <div class="absolute rounded-full w-5 h-5 bg-[#0D2C99] -mt-2 -right-2"></div>
                                </div>

                                <div class="flex items-center mb-5 p-5 text-sm">
                                    <div class="flex flex-col">
                                        <span class="text-sm">Flight</span>
                                        <div class="font-semibold">{{$item->flight}}</div>

                                    </div>
                                    <div class="flex flex-col ml-auto">
                                        <span class="text-sm">Gate</span>
                                        <div class="font-semibold">{{$item->departure_gate}}</div>

                                    </div>
                                </div>
                                <div class="flex items-center mb-4 px-5">
                                    <div class="flex flex-col text-sm">
                                        <span class="">Departure time</span>
                                        <div class="font-semibold">{{$item->departure_time}}</div>

                                    </div>
                                    <div class="flex flex-col mx-auto text-sm">
                                        <span class="">Remark</span>
                                        <div class="font-semibold">{{$item->information}}</div>

                                    </div>
                                    <div class="flex flex-col text-sm">
                                        <span class="">Arrival Time</span>
                                        <div class="font-semibold">{{$item->arrival_time}}</div>

                                    </div>
                                </div>
                                <div class="border-dashed border-b-2 my-5 pt-5">
                                    <div class="absolute rounded-full w-5 h-5 bg-[#0D2C99] -mt-2 -left-2"></div>
                                    <div class="absolute rounded-full w-5 h-5 bg-[#0D2C99] -mt-2 -right-2"></div>
                                </div>
                                <div class="flex items-center px-5 pt-3 text-sm">
                                    <div class="flex flex-col">
                                        <span class="">Pilot</span>
                                        <div class="font-semibold">{{Auth::user()->firstName}}</div>
                                    </div>
                                    <div class="flex flex-col mx-auto">
                                        <span class="">Rank</span>
                                        <div class="font-semibold">
                                            <img src="https://www.ivao.aero/data/images/ratings/pilot/{{Auth::user()->ratingpilot}}.gif"
                                                alt="{{Auth::user()->ratingpilot}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col py-5  justify-center text-sm ">
                                    <h6 class="font-bold text-center">Boarding Pass</h6>

                                    <div class="barcode h-14 w-0 inline-block mt-4 relative left-auto"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
        @else
        <div class="m-5">
            <h2 class="text-2xl font-bold">No tienes vuelos reservados</h2>
        </div>
        @endif


        @if (count($bookingsAtc) >= 1)

        <div class="m-5">
            <h2 class="text-2xl font-bold">Reservas ATC:</h2>
        </div>

        <div
            class="mx-center grid gap-2 sm:grid-cols-2 lg:grid-cols-3 lg:justify-center  sm:justify-center grid-cols-1">
            @foreach ($bookingsAtc as $item)
            <div
                class="w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-xl">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 60" fill="currentColor"
                    class="mx-auto mt-8 h-16 w-16 text-[#0D2C99]">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42,25H18V24h2a1,1,0,0,0,1-1V20a1,1,0,0,0-.87-1l.75-6H22a1,1,0,0,0,0-2H20.72L20,8.68A1,1,0,0,0,19,8H15V6a1,1,0,0,0-2,0V8H9a1,1,0,0,0-.95.68L7.28,11H6a1,1,0,0,0,0,2H7.12l.75,6A1,1,0,0,0,7,20v3a1,1,0,0,0,1,1h2V42a1,1,0,0,0,1,1H39a1,1,0,0,0,1-1V31h2a1,1,0,0,0,1-1V26A1,1,0,0,0,42,25ZM9.88,19l-.75-6H13v6ZM15,13h3.87l-.75,6H15ZM9.72,10h8.56l.33,1H9.39ZM9,21H19v1H9Zm3,3h4V41H12ZM25,41H23V35h2Zm2-6h2v6H27Zm4,6V35h2v6Zm7,0H35V34a1,1,0,0,0-1-1H22a1,1,0,0,0-1,1v7H18V31H38Zm3-12H18V27H41Z" />
                </svg>
                <h1 class="mt-2 text-center text-2xl font-bold text-gray-500">{{$item->dependence}}</h1>
                <p class="my-4 text-center text-sm text-gray-500">{{$item->start_at}}z - {{$item->end_at}}z</p>
                <div class="space-x-4 bg-gray-100 py-4 text-center">
                    <button wire:click='unbookAtc({{$item->id}})'
                        class="inline-block rounded-md bg-[#E93434] px-10 py-2 font-semibold text-red-100 shadow-md duration-75 hover:bg-red-400">Unbook</button>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="m-5">
            <h2 class="text-2xl font-bold">No hay reservas ATC</h2>
        </div>
        @endif
    </div>
</div>
</div>
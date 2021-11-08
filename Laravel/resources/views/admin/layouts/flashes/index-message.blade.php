<div class="w-full">
    @if (session()->has('success'))
    <div
        class="flash-message show-message p-4 bg-cGreen-300 text-white text-lg flex flex-col justify-center gap-2 rounded-lg w-2/4 text-center font-semibold capitalize absolute top-[-15%] left-[25%]">
        <span>
            {{session('success')}}
        </span>
    </div>
    @endif
    @if ($errors->has('failed'))
    <div
        class="flash-message show-message p-4 bg-cRed-100 text-white text-lg flex flex-col justify-center gap-2 rounded-lg w-2/4 text-center font-semibold capitalize absolute top-[-5%] left-[25%]">
        <span>
            {{$errors->first('failed')}}
        </span>
    </div>
    @endif
    @include('admin.layouts.flashes.script-flash')

</div>
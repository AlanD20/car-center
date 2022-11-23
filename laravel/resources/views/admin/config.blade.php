<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Configuration</title>
</head>

<body>

    <div class="body-container flex flex-col gap-4">
        @if (session()->has('success'))
        <div
            class="flash-message show-message p-4 bg-cGreen-300 text-white text-lg flex flex-col justify-center gap-2 rounded-lg w-full text-center font-semibold capitalize">
            <span>
                {{session('success')}}
            </span>
        </div>
        @endif
        <form action="{{route('config.up')}}" method="get" class="w-full flex">
            @csrf
            <button type="submit" class="btn create-btn w-2/4 mx-auto">
                Application Up
            </button>
        </form>
        <form action="{{route('config.down')}}" method="get" class="w-full flex">
            @csrf
            <button type="submit" class="btn delete-btn w-2/4 mx-auto">
                Application Down
            </button>
        </form>
        <form action="{{route('config.migration')}}" method="get" class="w-full flex">
            @csrf
            <button type="submit" class="btn config-btn w-2/4 mx-auto">
                Migration
            </button>
        </form>
        <form action="{{route('config.migrationReset')}}" method="get" class="w-full flex">
            @csrf
            <button type="submit" class="btn delete-btn config-btn w-2/4 mx-auto">
                Full Migration Reset
            </button>
        </form>
        <form action="{{route('config.userSeed')}}" method="get" class="w-full flex">
            @csrf
            <button type="submit" class="btn config-btn w-2/4 mx-auto">
                User Database Seed
            </button>
        </form>
        <form action="{{route('config.dataSeed')}}" method="get" class="w-full flex">
            @csrf
            <button type="submit" class="btn config-btn w-2/4 mx-auto">
                Data Database Seed
            </button>
        </form>
        <form action="{{route('config.cache')}}" method="get" class="w-full flex">
            @csrf
            <button type="submit" class="btn config-btn w-2/4 mx-auto">
                Clear Website Cache
            </button>
        </form>
        <form action="{{route('config.key')}}" method="get" class="w-full flex">
            @csrf
            <button type="submit" class="btn config-btn w-2/4 mx-auto">
                Generate Application Key
            </button>
        </form>


        <form action="{{route('config.link')}}" method="get" class="w-full flex">
            @csrf
            <button type="submit" class="btn config-btn w-2/4 mx-auto">
                Link Storage To Public Folder
            </button>
        </form>


        <form action="{{route('config.cacheFiles')}}" method="get" class="w-full flex">
            @csrf
            <button type="submit" class="btn config-btn w-2/4 mx-auto">
                Cache The Website (If Website Failed to load, Clear Cache)
            </button>
        </form>
        <form action="{{route('config.pwdResetTokens')}}" method="get" class="w-full flex">
            @csrf
            <button type="submit" class="btn config-btn w-2/4 mx-auto">
                Clear Password Resets Table
            </button>
        </form>

    </div>

</body>

</html>
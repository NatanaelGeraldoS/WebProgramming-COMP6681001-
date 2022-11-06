<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">

<head>
    @include('layout_parts.header')
</head>

<body class="antialiased">
    @extends('layout_parts.master')
    @section('title', 'Data Mahasiswa')
    @section('content')
        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
            Hi, Mahasiswa
        </div>
        {{-- <li><?php echo $mahasiswa01; ?></li> --}}

        <h1 class="bg-dark px-3 text-white d-inline-block">
            <?php echo $nama; ?>
        </h1>
        <h1 class="bg-dark px-3 text-white d-inline-block">
            <?php echo $nilai; ?>
        </h1>

        {{-- Condition --}}

        @if ($nilai >= 0 and $nilai < 50)
            <div class="alert alert-danger d-inline-block">Sorry, you didn't pass</div>
        @elseif($nilai >= 50 and $nilai <= 100)
            <div class="alert alert-danger d-inline-block">Congrats, you pass</div>
        @endif

        @switch($nilai)
            @case(0)
                <div class="alert alert-danger d-inline-block">Tidak Ikut Ujian</div>
            @break

            @case(75)
                <div class="alert alert-danger d-inline-block">Lumayan</div>
            @break

            @case(1000)
                <div class="alert alert-danger d-inline-block">Sempurna</div>
            @break

            @default
                <div class="alert alert-danger d-inline-block">Nilai tidak Valid</div>
        @endswitch
        {{-- For Loop --}}
        <div class="container text-center mt-3 pt-3 bg-white">
            @for ($i = 0; $i < 5; $i++)
                <div class="alert alert-danger d-inline-block"><br>Laravel</div>
            @endfor
        </div>
        {{-- While loop --}}
        <div class="container text-center mt-3 pt-3 bg-white">
            <?php $i = 0; ?>
            @while ($i < 5)
                <div class="alert alert-danger d-inline-block"><br>{{ $i }}</div>
                <?php $i++; ?>
            @endwhile
        </div>
        {{-- For Each --}}
        <div class="container text-center mt-3 pt-3 bg-white">
            @foreach ((array) $nilai as $val)
                <div class="alert alert-danger d-inline-block"><br>{{ $val }}</div>
            @endforeach
        </div>
        {{-- For else --}}
        <br>
        <div class="container text-center mt-3 pt-3 bg-white">
            @forelse ((array) $nilai as $val)
                @if ($nilai >= 0 and $nilai < 50)
                    <div class="alert alert-danger d-inline-block">{{ $val }} :(</div>
                @elseif($nilai >= 50 and $nilai <= 100)
                    <div class="alert alert-success d-inline-block">{{ $val }} :)</div>
                @endif
            @empty
                <div class="alert alert-alert d-inline-block">Tidak ada data...</div>
            @endforelse
        </div>
        <div>
            <br />
            Copyright ©️ <?php echo date('Y'); ?> Laravel.com
        </div>
        @include('layout_parts.footer')
    @endsection
</body>

</html>

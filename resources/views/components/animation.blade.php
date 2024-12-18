{{-- animated-boxes.blade.php --}}
<div class="w-[250px] flex justify-between items-center relative">
    @for ($i = 1; $i <= 5; $i++)
        <div class="box-{{ $i }} w-[33px] h-[33px] relative block rounded-[15%] transform-origin-[-50%_center]">
        </div>
    @endfor
</div>

@push('styles')
<style>
    :root {
        --duration: 1.5s;
        --container-size: 250px;
        --box-size: 33px;
        --box-border-radius: 15%;
    }

    .box-1,
    .box-2,
    .box-3,
    .box-4,
    .box-5 {
        width: var(--box-size);
        height: var(--box-size);
        position: relative;
        display: block;
        transform-origin: -50% center;
        border-radius: var(--box-border-radius);
    }

    .box-1::after,
    .box-2::after,
    .box-3::after,
    .box-4::after,
    .box-5::after {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        right: 0;
        background-color: lightblue;
        border-radius: var(--box-border-radius);
        box-shadow: 0px 0px 10px 0px rgba(79, 70, 229, 0.4);
    }

    .box-1 {
        animation: slide var(--duration) ease-in-out infinite alternate;
    }

    .box-1::after {
        animation: color-change var(--duration) ease-in-out infinite alternate;
    }

    .box-2 {
        animation: flip-1 var(--duration) ease-in-out infinite alternate;
    }

    .box-2::after {
        animation: squidge-1 var(--duration) ease-in-out infinite alternate;
        background-color: #818cf8;
    }

    .box-3 {
        animation: flip-2 var(--duration) ease-in-out infinite alternate;
    }

    .box-3::after {
        animation: squidge-2 var(--duration) ease-in-out infinite alternate;
        background-color: #6366f1;
    }

    .box-4 {
        animation: flip-3 var(--duration) ease-in-out infinite alternate;
    }

    .box-4::after {
        animation: squidge-3 var(--duration) ease-in-out infinite alternate;
        background-color: #4f46e5;
    }

    .box-5 {
        animation: flip-4 var(--duration) ease-in-out infinite alternate;
    }

    .box-5::after {
        animation: squidge-4 var(--duration) ease-in-out infinite alternate;
        background-color: #4338ca;
    }

    @keyframes slide {
        0% {
            background-color: #a5b4fc;
            transform: translatex(0);
        }
        100% {
            background-color: #3730a3;
            transform: translatex(calc(var(--container-size) - (var(--box-size) * 1.25)));
        }
    }

    @keyframes color-change {
        0% {
            background-color: #a5b4fc;
        }
        100% {
            background-color: #3730a3;
        }
    }

    @keyframes flip-1 {
        0%, 15% { transform: rotate(0); }
        35%, 100% { transform: rotate(-180deg); }
    }

    @keyframes flip-2 {
        0%, 30% { transform: rotate(0); }
        50%, 100% { transform: rotate(-180deg); }
    }

    @keyframes flip-3 {
        0%, 45% { transform: rotate(0); }
        65%, 100% { transform: rotate(-180deg); }
    }

    @keyframes flip-4 {
        0%, 60% { transform: rotate(0); }
        80%, 100% { transform: rotate(-180deg); }
    }

    @keyframes squidge-1 {
        5% { transform-origin: center bottom; transform: scalex(1) scaley(1); }
        15% { transform-origin: center bottom; transform: scalex(1.3) scaley(0.7); }
        25%, 20% { transform-origin: center bottom; transform: scalex(0.8) scaley(1.4); }
        55%, 100% { transform-origin: center top; transform: scalex(1) scaley(1); }
        40% { transform-origin: center top; transform: scalex(1.3) scaley(0.7); }
    }

    @keyframes squidge-2 {
        20% { transform-origin: center bottom; transform: scalex(1) scaley(1); }
        30% { transform-origin: center bottom; transform: scalex(1.3) scaley(0.7); }
        40%, 35% { transform-origin: center bottom; transform: scalex(0.8) scaley(1.4); }
        70%, 100% { transform-origin: center top; transform: scalex(1) scaley(1); }
        55% { transform-origin: center top; transform: scalex(1.3) scaley(0.7); }
    }

    @keyframes squidge-3 {
        35% { transform-origin: center bottom; transform: scalex(1) scaley(1); }
        45% { transform-origin: center bottom; transform: scalex(1.3) scaley(0.7); }
        55%, 50% { transform-origin: center bottom; transform: scalex(0.8) scaley(1.4); }
        85%, 100% { transform-origin: center top; transform: scalex(1) scaley(1); }
        70% { transform-origin: center top; transform: scalex(1.3) scaley(0.7); }
    }

    @keyframes squidge-4 {
        50% { transform-origin: center bottom; transform: scalex(1) scaley(1); }
        60% { transform-origin: center bottom; transform: scalex(1.3) scaley(0.7); }
        70%, 65% { transform-origin: center bottom; transform: scalex(0.8) scaley(1.4); }
        100% { transform-origin: center top; transform: scalex(1) scaley(1); }
        85% { transform-origin: center top; transform: scalex(1.3) scaley(0.7); }
    }
</style>
@endpush
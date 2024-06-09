<nav {{$attributes}}>
    <ul class="flex gap-4 text-slate-500">
        <li>
            <a href="/">Home</a>
        </li>
        @foreach ($links as $label => $link)
        <li>➜</li>
        <li>
            <a href="{{$link}}">{{$label}}</a>
        </li>
        @endforeach
    </ul>
</nav>
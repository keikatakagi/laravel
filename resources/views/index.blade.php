{{-- @dd($posts); --}}

<x-layout>
    <h1>
        <span>Hello Laravel!</span>
        <div>
            <a href="{{ route('create.posts')}}">新規追加</a>
            <a href="{{ route('seach.posts')}}" class="seach">検索</a>
        </div>
    </h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('text.posts',$post->id)}}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>

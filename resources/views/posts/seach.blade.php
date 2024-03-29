<x-layout>
    <a href="{{ route('index.posts')}}" class="re">戻る</a>
    <h1>検索画面</h1>
    <form action="{{ route('seach.posts') }}" method="get">
        @csrf

        <label>
            Title検索
            <input type="text" name="title">
        </label>
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror
        <div class="btn"><button>検索</button></div>
    </form>

    <h2>検索結果</h2>
    @if (isset($posts) && $title)
        @foreach ($posts as $post)
        <li>
            <a href="{{ route('text.posts',$post->id)}}">{{ $post->title }}</a>
        </li>
        @endforeach
    @endif

</x-layout>

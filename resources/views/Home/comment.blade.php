@foreach($comments as $comment)
        <br>
        <div style="direction: rtl">
            <label> نام:{{$comment->name}}</label><br>
            <label> متن:{{$comment->context}}</label><br>
        </div>
@endforeach

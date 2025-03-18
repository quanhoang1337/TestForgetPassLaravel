@if(Auth::check())
    Chào anh/chị <b>{{ Auth::user()->name }} </b>
    @else
    Chào quý khách
    <a href="{{ route('login') }}">Đăng nhập</a>
@endif
 
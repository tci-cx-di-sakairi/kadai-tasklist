@if (Auth::check())
    {{-- タスク一覧ページへのリンク --}}
    <li><a class="link link-hover" href="#">Tasks</a></li>
    {{-- タスク作成ページへのリンク --}}
    <li><a class="link link-hover" href="#">Add Task</a></li>
    <li class="divider lg:hidden"></li>
    {{-- ログアウトへのリンク --}}
    <li><a class="link link-hover" href="#" onclick="event.preventDefault();this.closest('form').submit();">Logout</a></li>
@else
    {{-- ユーザー登録ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('register') }}">Signup</a></li>
    <li class="divider lg:hidden"></li>
    {{-- ログインページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('login') }}">Login</a></li>
@endif
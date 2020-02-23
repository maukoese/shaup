<!-- Topbar -->
<header class="topbar">
    <div class="topbar-left">
        <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>
        <a class="logo d-lg-none" href="{{url('/')}}">
            <img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name', 'Laravel') }}">
        </a>

        <ul class="topbar-btns">

            <!-- Notifications -->
            <li class="dropdown d-none d-lg-block">
                @php
                    $notes = App\Activity::whereRead(0)->get();
                @endphp
                <span class="topbar-btn {{count($notes) > 0 ? 'has-new' : '' }}" data-toggle="dropdown"><i class="ti-bell"></i></span>
                <div class="dropdown-menu">
                    <div class="media-list media-list-hover media-list-divided media-list-xs">
                        @foreach ($notes as $item)
                        <a class="media media-new" href="{{ url('/') }}">
                            <span class="avatar bg-success"><i class="ti-user"></i></span>
                            <div class="media-body">
                                <p>New user registered</p>
                                <time datetime="2018-07-14 20:00">Just now</time>
                            </div>
                        </a>
                        @endforeach
                    </div>

                    <div class="dropdown-footer">
                        <div class="left">
                            <a href="{{ url('notifications') }}">Read all notifications</a>
                        </div>

                        <div class="right">
                            <a href="{{ url('notifications?read=all') }}" data-provide="tooltip"
                                title="Mark all as read"><i class="fa fa-circle-o"></i></a>
                            <a href="" data-provide="tooltip" title="Refresh"><i class="fa fa-repeat"></i></a>
                            <a href="{{ url('notifications') }}" data-provide="tooltip" title="Settings"><i
                                    class="fa fa-gear"></i></a>
                        </div>
                    </div>

                </div>
            </li>
            <!-- END Notifications -->

            <!-- Messages -->
            @php
                $msgs = App\Message::whereRead(0)->get();
            @endphp
            <li class="dropdown d-none d-lg-block">
                <span class="topbar-btn {{count($msgs) > 0 ? 'has-new' : '' }}" data-toggle="dropdown"><i class="ti-email"></i></span>
                <div class="dropdown-menu">

                    <div class="media-list media-list-divided media-list-hover media-list-xs scrollable"
                        style="height: 290px">
                        @foreach ($msgs as $item)
                        <a class="media media-new1" href='{{url("messages/$item->id")}}'>
                            <span class="avatar status-success">
                                <img src="{{ asset($item->user->avatar) }}" alt="{{$item->user->name}}">
                            </span>

                            <div class="media-body">
                                <p><strong>{{$item->user->name}}</strong> <time class="float-right"
                                        datetime="2018-07-14 20:00">{{$item->created_at->diffInDays()}}</time></p>
                                <p class="text-truncate">{{$item->details}}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>

                    <div class="dropdown-footer">
                        <div class="left">
                            <a href="{{ url('messages') }}">Read all messages</a>
                        </div>

                        <div class="right">
                            <a href="{{ url('messages?read=all') }}" data-provide="tooltip" title="Mark all as read"><i
                                    class="fa fa-circle-o"></i></a>
                            <a href="{{ url('settings') }}" data-provide="tooltip" title="Settings"><i
                                    class="fa fa-gear"></i></a>
                        </div>
                    </div>

                </div>
            </li>
            <!-- END Messages -->

        </ul>
    </div>

    <div class="topbar-right">

        <ul class="topbar-btns">
            <li class="dropdown">
                <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="{{auth()->user()->avatar}}"
                        alt="{{auth()->user()->name}}"></span>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ url('profile') }}"><i class="ti-user"></i> Profile</a>
                    <a class="dropdown-item" href="{{ url('settings') }}"><i class="ti-settings"></i> Settings</a>
                    <a class="dropdown-item" href="{{ url('help') }}"><i class="ti-help"></i> Help</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="ti-power-off"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>

        <form class="lookup lookup-circle lookup-right" action="{{url('search')}}">
            <input type="text" name="s">
        </form>

    </div>
</header>
<!-- END Topbar -->

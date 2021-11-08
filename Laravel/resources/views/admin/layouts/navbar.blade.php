<aside class="left-nav">

    {{-- nav header --}}
    <div class="nav-header ">
        <a href="{{route('home')}}" class="flex justify-start items-center" tabindex="-1">
            <div class="nav-logo w-full h-full px-3">
                <img src="{{asset('/uploads/images/logo.svg')}}" style="width:150px;height:150px;margin-inline: auto;"
                    alt="logo">
            </div>
        </a>
        <div class="nav-state-container flex justify-end items-center w-full h-full">
            <div class="nav-state">
                <i class="fas fa-arrow-alt-to-right"></i>
            </div>
        </div>
    </div>
    {{-- nav body --}}
    <div class="nav-body w-full">
        <ul class="list">
            {{-- list links --}}
            <li class="list-item">
                <a href="{{route('admin.dashboard')}}" tabindex="-1">
                    <div class="item-container" tabindex="0">
                        <div class="item-icon">
                            <i class="fas fa-home-lg-alt"></i>
                        </div>
                        <div class="item-link">
                            <span>Dashboard</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-item">
                <div class="item-container" tabindex="0">
                    <div class="item-icon">
                        <i class="fas fa-chart-network"></i>
                    </div>
                    <div class="item-link item-link_extend">
                        <span>Services</span>
                    </div>
                </div>
                <ul class="list_extend">
                    <li class="list-item_extend">
                        <a href="{{route('admin.services.index')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link ">
                                    <span>All Services</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-item_extend">
                        <a href="{{route('admin.services.create')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link">
                                    <span>Add new Services</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="list-item">
                <div class="item-container" tabindex="0">
                    <div class="item-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div class="item-link item-link_extend">
                        <span>Teams</span>
                    </div>
                </div>
                <ul class="list_extend">
                    <li class="list-item_extend">
                        <a href="{{route('admin.teams.index')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link ">
                                    <span>All Team Members</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-item_extend">
                        <a href="{{route('admin.teams.create')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link">
                                    <span>Add new Member</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="list-item">
                <div class="item-container" tabindex="0">
                    <div class="item-icon">
                        <i class="fas fa-handshake-alt"></i>
                    </div>
                    <div class="item-link item-link_extend">
                        <span>Partners</span>
                    </div>
                </div>
                <ul class="list_extend">
                    <li class="list-item_extend">
                        <a href="{{route('admin.partners.index')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link ">
                                    <span>All Partners</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-item_extend">
                        <a href="{{route('admin.partners.create')}}">
                            <div class="item-container">
                                <div class="item-icon">
                                    <i class="fal fa-long-arrow-right"></i>
                                </div>
                                <div class="item-link">
                                    <span>Add new Partner</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    {{-- nav footer --}}
    <div class="nav-footer w-full mt-auto">
        <ul class="list">
            {{-- user profile --}}
            <li class="list-item">
                <a href="{{route('admin.profile.manage')}}" tabindex="-1">
                    <div class="item-container" tabindex="0" role="button">
                        <div class="item-icon nav-profile_icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="item-link nav-profile_name">
                            <span>Manage Users</span>
                        </div>
                    </div>
                </a>
            </li>
            {{-- user profile --}}
            <li class="list-item">
                <a href="{{route('admin.profile.index')}}" tabindex="-1">
                    <div class="item-container" tabindex="0" role="button">
                        <div class="item-icon nav-profile_icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="item-link nav-profile_name">
                            <span>{{auth()->user()->username}}</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-item">
                <form action="{{route('admin.logout')}}" method="post">
                    @csrf
                    <button class="item-container" tabindex="0">
                        <div class="item-icon">
                            <i class="fas fa-sign-out-alt"></i>
                        </div>
                        <div class="item-link">
                            <span>Logout</span>
                        </div>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>
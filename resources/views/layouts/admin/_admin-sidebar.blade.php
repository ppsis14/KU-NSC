@php
    $count_post = \App\Post::all()->where('report_status', 1)->count();

    $posts_report = \App\Post::join('report_posts', 'posts.id', '=', 'report_posts.post_id')
        ->select('posts.*', 'report_posts.report_user', 'report_posts.report_admin')
        ->where('report_status', true)
        ->Where('report_user', false)
        ->count();

    $posts_want_unreport = \App\Post::join('report_posts', 'posts.id', '=', 'report_posts.post_id')
        ->select('posts.*', 'report_posts.report_user', 'report_posts.report_admin')
        ->where('report_status', true)
        ->Where('report_admin', true)
        ->count();
@endphp

<div class="logo">
    <a href="{{ action('AdminDashBoardController@showDashBoard') }}" class="simple-text" style="pointer-events: none;">
        <div class="row justify-content-center">
            <img src="/img/kunsc-logo.png" alt="" class="logo-img">
        </div>
         <div class="form-title">
            <div class="name-box">
                <h6 class="full-name">KU Knowledge Share Community</h6>
            </div>
        </div>
    </a>
    <br>
</div>

<ul class="nav">
    <li id="dashboard">
        <a href="{{ action('AdminDashBoardController@showDashBoard') }}">
            <i class="pe-7s-graph"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li id="user-management">
        <a href="{{ action('UsersManagementController@index') }}">
            <i class="pe-7s-user"></i>
            <p>User Management</p>
        </a>
    </li>
    <li id="post-management">
        <a href="{{ action('PostsManagementController@index') }}">
            <i class="pe-7s-news-paper"></i>
            <p>Post Management</p>
        </a>
    </li>
    <li id="add-admin">
        <a href="{{ action('AddNewAdminController@index')}}">
            <i class="pe-7s-add-user"></i>
            <p>Add new admin</p>
        </a>
    </li>
    <li id="change-password">
        <a href="{{ action('ChangePasswordController@index') }}">
            <i class="pe-7s-key"></i>
            <p>Change Password</p>
        </a>
    </li>
    
    <li id="notify">
        <a href="{{ action('AdminNotificationsController@index') }}">
            <i class="pe-7s-bell"></i>
            <p>Notification&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$posts_report + $posts_want_unreport}}</p>
            <span class="badge"></span>
        </a>
    </li>
</ul>

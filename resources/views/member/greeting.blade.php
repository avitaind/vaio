<div class="container-fluid" style="padding-right:0; padding-left: 0;">

    <div class="member-banner align-items-center text-center hidden-sm-down" />
    <h2 class="text-white pt-4 pl-0">@lang('member.greeting', ['name' => $user->name])</h2>
    <h3 class="text-white py-2 pl-0">{{ $user->email }}</h3>
    <a class="ml-auto hidden-md-up h2" role="button" data-toggle="collapse" href="#account_menu" aria-expanded="true" aria-controls="account_menu">
        <i class="member-icon more-less fa fa-angle-up"></i>
    </a>
</div>
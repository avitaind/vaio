<ul class="list-unstyled">


    <li @if (Request::is('admin/news*')) class="active" @endif>
        <a href="{{ route('admin.news.index') }}"><i class="fa fa-fw fa-newspaper"></i> Offer / VAIO Life / News</a>
    </li>


    <li @if (Request::is('admin/shops*')) class="active" @endif>
        <a href="/admin/shops"><i class="fa fa-fw fa-shopping-bag"></i> Where to Buy</a>
    </li>

    <li @if (Request::is('admin/faqs*')) class="active" @endif>
        <a href="/admin/faqs"><i class="fa fa-fw fa-question-circle"></i> FAQ</a>
    </li>

    <li @if (Request::is('admin/banners*')) class="active" @endif>
        <a href="/admin/banners"><i class="fa fa-fw fa-images"></i> Banners</a>
    </li>
    <li @if (Request::is('admin/warranties*')) class="active" @endif>
        <a href="/admin/warranties/"><i class="fa fa-fw fa-circle"></i> Warranty Terms</a>
    </li>
    <li @if (Request::is('admin/service_centers*')) class="active" @endif>
        <a href="/admin/service_centers"><i class="fa fa-fw fa-circle"></i> Service Centers</a>
    </li>

    @can ('manage-marketing-data')
    <li class="header">Customers </li>

    <li @if (Request::is('admin/customers*')) class="active" @endif>
        <a href="/admin/customers"><i class="fa fa-fw fa-users"></i> Customers</a>
    </li>
    <li @if (Request::is('admin/questionnaire*')) class="active" @endif>
        <a href="/admin/questionnaire"><i class="far fa-fw fa-file-alt"></i> Questionnaire</a>
    </li>

    <li @if (Request::is('admin/survey-data')) class="active" @endif>
        <a href="/admin/survey-data"><i class="far fa-fw fa-file-alt"></i> Product Survey</a>
    </li>

    @endcan

    @can('manage-users')

    <li class="header">Account Management</li>

    <li @if (Request::is('admin/users*')) class="active" @endif>
        <a href="/admin/users"><i class="fa fa-fw fa-user"></i> Accounts</a>
    </li>

    @endcan

</ul>
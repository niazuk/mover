<section class="breadcrumbs-custom">
  <div class="shell">
    <p class="breadcrumbs-custom-subtitle">@yield('PageTitle')</p>
    <p class="heading-1 breadcrumbs-custom-title">@yield('PageSubtitle')</p>
    <ul class="breadcrumbs-custom-path">
      <li><a href="/">Home</a></li>
      <li class="active">@yield('PageBreadcrumbs')</li>
    </ul>
  </div>
</section>
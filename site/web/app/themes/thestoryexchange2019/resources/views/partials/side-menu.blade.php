<div class="side-menu__body-wrap">
{{ $slot }}
</div>
<button class="side-menu__toggle-button" href="#">
</button>
<div class="side-menu__container" style="visibility: hidden">
  <h2 class="site-name">
    {{ get_bloginfo('name', 'display') }}
  </h2>
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
  @endif
  @include('partials.social-icons')
  <div class="search">
      {{ get_search_form() }}
  </div>
</div>

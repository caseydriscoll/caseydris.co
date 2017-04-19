<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class()) >
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content">
        @if (App\display_sidebar())
          <aside class="primary sidebar">
            @include('partials.sidebar-primary')
          </aside>
        @endif
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="secondary sidebar">
            @include('partials.sidebar-secondary')
          </aside>
        @endif
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>

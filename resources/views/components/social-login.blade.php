<div class="social">
  @if (config('services.google.client_id'))
    <a href="{{ url('auth/google') }}" class="btn btn-lg btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google"></i></a>
  @endif
  @if (config('services.instagram.client_id'))
    <a href="{{ url('auth/instagram') }}" class="btn btn-lg btn-instagram" data-toggle="tooltip" title="Login with Instagram"> <i aria-hidden="true" class="fab fa-instagram"></i></a>
  @endif
  @if (config('services.twitter.client_id'))
    <a href="{{ url('auth/twitter') }}" class="btn btn-lg btn-twitter" data-toggle="tooltip"  title="Login with Twitter"> <i aria-hidden="true" class="fab fa-twitter"></i></a>
  @endif
  @if (config('services.linkedin.client_id'))
    <a href="{{ url('auth/twitter') }}" class="btn btn-lg btn-linkedin" data-toggle="tooltip"  title="Login with LinkedIn"> <i aria-hidden="true" class="fab fa-linkedin"></i></a>
  @endif
  @if (config('services.yahoo.client_id'))
    <a href="{{ url('auth/yahoo') }}" class="btn btn-lg btn-tumblr" data-toggle="tooltip" title="Login with Yahoo!"> <i aria-hidden="true" class="fab fa-yahoo"></i></a>
  @endif
  @if (config('services.yandex.client_id'))
    <a href="{{ url('auth/yandex') }}" class="btn btn-lg btn-dribbble" data-toggle="tooltip"  title="Login with Yandex"> <i aria-hidden="true" class="fab fa-yandex"></i></a>
  @endif
  @if (config('services.vkontakte.client_id'))
    <a href="{{ url('auth/vkontakte') }}" class="btn btn-lg btn-flickr" data-toggle="tooltip"  title="Login with VK"> <i aria-hidden="true" class="fab fa-vk"></i></a>
  @endif
</div>

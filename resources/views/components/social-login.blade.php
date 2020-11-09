<div class="social">
  @if (config('services.facebook.client_id'))
      <a href="{{ url('auth/facebook') }}" class="btn btn-facebook" data-toggle="tooltip" title="" data-original-title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> </a>
  @endif
  @if (config('services.google.client_id'))
      <a href="{{ url('auth/google') }}" class="btn btn-xs btn-googleplus" data-toggle="tooltip" title="" data-original-title="Login with Google"> <i aria-hidden="true" class="fab fa-google"></i> Login with Google</a>
  @endif
  @if (config('services.instagram.client_id'))
      <a href="{{ url('auth/instagram') }}" class="btn btn-instagram" data-toggle="tooltip" title="" data-original-title="Login with Instagram"> <i aria-hidden="true" class="fab fa-instagram"></i> </a>
  @endif
  @if (config('services.twitter.client_id'))
      <a href="{{ url('auth/twitter') }}" class="btn btn-twitter" data-toggle="tooltip" title="" data-original-title="Login with Twitter"> <i aria-hidden="true" class="fab fa-twitter"></i> </a>
  @endif
  @if (config('services.linkedin.client_id'))
      <a href="{{ url('auth/twitter') }}" class="btn btn-linkedin" data-toggle="tooltip" title="" data-original-title="Login with LinkedIn"> <i aria-hidden="true" class="fab fa-linkedin"></i> </a>
  @endif
  @if (config('services.yahoo.client_id'))
      <a href="{{ url('auth/yahoo') }}" class="btn btn-tumblr" data-toggle="tooltip" title="" data-original-title="Login with Yahoo!"> <i aria-hidden="true" class="fab fa-yahoo"></i> </a>
  @endif
  @if (config('services.yandex.client_id'))
      <a href="{{ url('auth/yandex') }}" class="btn btn-dribbble" data-toggle="tooltip" title="" data-original-title="Login with Yandex"> <i aria-hidden="true" class="fab fa-yandex"></i> </a>
  @endif
  @if (config('services.vkontakte.client_id'))
      <a href="{{ url('auth/vkontakte') }}" class="btn btn-flickr" data-toggle="tooltip" title="" data-original-title="Login with VK"> <i aria-hidden="true" class="fab fa-vk"></i> </a>
  @endif
</div>

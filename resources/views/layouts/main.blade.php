<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
<!--
Tooplate 2121 Wave Cafe
https://www.tooplate.com/view/2121-wave-cafe
-->
</head>
<body>
  <div class="tm-container">
    <div class="tm-row">
      <!-- Site Header -->
      @include('includes.Header')
      <div class="tm-right">
        <main class="tm-main">
          <div id="drink" class="tm-page-content">
          </div>
          @yield('content')
        </main>
      </div>    
    </div>
    @include('includes.footer')
  </div>
    
  <!-- Background video -->
  @include('includes.Background')
</body>
</html>
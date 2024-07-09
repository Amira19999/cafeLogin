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
            <!-- Drink Menu Page -->
            @include('includes.Menu')
            <!-- end Drink Menu Page -->
          </div>

          <!-- About Us Page -->
          @include('includes.About')
          <!-- end About Us Page -->

          <!-- Special Items Page -->
          @include('includes.Items')
          <!-- end Special Items Page -->

          <!-- Contact Page -->
          @include('includes.Contact')
          <!-- end Contact Page -->
        </main>
      </div>    
    </div>
    @include('includes.footer')
  </div>
    
  <!-- Background video -->
  @include('includes.Background')
</body>
</html>
<div class="cell-sm-10 cell-md-6 cell-lg-4">
  <div class="form-quote">
    <!--h3>Get Your Free Quote <br class="veil reveal-lg-inline">& We’ll Drive Back to You </h3-->
    <!-- RD Mailform -->
    <form class="text-left" method="post" action="{{route('send_email' , ['i'=>1])}}">  
      {{csrf_field()}}
      <div class="range range-15">
        <div class="cell-sm-12">
          <div class="form-wrap form-wrap-validation">
            <label class="form-label" for="old-postcode">Pick Up Address</label>
            <input class="form-input" id="old-postcode" type="text" name="old-postcode" data-constraints="@Required">
          </div>
        </div>
        <div class="cell-sm-12">
          <div class="form-wrap form-wrap-validation">
            <label class="form-label" for="new-postcode">Destination Address</label>
            <input class="form-input" id="new-postcode" type="text" name="new-postcode" data-constraints="@Required">
          </div>
        </div>
        <div class="cell-sm-6">
          <div class="form-wrap form-wrap-validation">
            <label class="form-label" for="forms-name">Full Name</label>
            <input class="form-input" id="forms-name" type="text" name="name" data-constraints="@Required">
          </div>
        </div>
        <div class="cell-sm-6">
          <div class="form-wrap form-wrap-validation">
            <label class="form-label" for="forms-email">E-mail</label>
            <input class="form-input" id="forms-email" type="email" name="email" data-constraints="@Email @Required">
          </div>
        </div>
        <div class="cell-sm-6">
          <div class="form-wrap form-wrap-validation">
            <label class="form-label" for="forms-phone">Phone Number</label>
            <input class="form-input" id="forms-phone" type="text" name="phone" data-constraints="@Numeric @Required">
          </div>
        </div>      
        <div class="cell-sm-6"> 
          <div class="form-wrap form-wrap-validation">
            <label class="form-label" for="moving-date">Moving Date</label>
            <input class="form-input" id="moving-date" data-time-picker="date" type="text" name="moving-date">
          </div>
        </div>   
      </div>     
      <div class="col-sm-offset-1 cell-sm-10"> 
        <div class="form-button" style="padding-top: 20px;">
          <button class="button button-primary button-block" type="submit"><span>Get an Instant Quote</span></button>
        </div>
      </div>
    </form>
  </div>
</div>
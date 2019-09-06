<form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{route('send_email' , ['i'=>1])}}">      
  {{csrf_field()}}
  <div class="range range-15">
    <div class="cell-sm-12">
      <div class="form-wrap form-wrap-validation">
        <input class="form-input" id="forms-email" type="text" name="old-postcode" placeholder="Pick Up Address">
      </div>
    </div>
    <div class="cell-sm-12">
      <div class="form-wrap form-wrap-validation">
        <input class="form-input" id="forms-last-name" type="text" name="new-postcode" placeholder="Destination Address">
      </div>
    </div>
    <div class="cell-sm-6">
      <div class="form-wrap form-wrap-validation">

        <input class="form-input" id="forms-name" type="text" name="name"  placeholder="Full Name" data-constraints="@Required">
      </div>
    </div>
    <div class="cell-sm-6">
      <div class="form-wrap form-wrap-validation">
        <input class="form-input" id="forms-phone" type="text" name="phone" placeholder="Tel / Mobile" data-constraints="@Numeric @Required">
      </div>
    </div>
    <div class="cell-sm-6">
      <div class="form-wrap form-wrap-validation">
        <input class="form-input" id="forms-email" type="email" name="email" placeholder="Email" data-constraints="@Email @Required">
      </div>
    </div>
    <div class="cell-sm-6">
      <div class="form-wrap form-wrap-validation">
        <input class="form-input" id="forms-last-name" type="date" name="moving_date" data-constraints="@Required">
      </div>
    </div>  
    <div class="col-sm-offset-1 cell-sm-10"> 
      <div class="form-button" style="padding-top: 20px;">
        <button class="button button-primary button-block" type="submit"><span>Get an Instant Quote</span></button>
      </div>
    </div>
  </div>
</form>
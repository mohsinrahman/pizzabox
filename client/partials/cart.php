<div class="modal fade" id="myModal" role="dialog"  >
<script onload="printCart()"> </script>
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <img class ="animated  pulse delay-1s" src="images/pizzagreen.svg" width="50" alt="LOGO">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <p class="modal-body-heading">Shopping Cart</p>
 
 <div class="shopping-cart" id="shopping-cart">
  
   <div class="column-labels">
     <label class="product-image">Image</label>
     <label class="product-details">Product</label>
     <label class="product-price">Price</label>
     <label class="product-quantity">Quantity</label>
     <label class="product-removal">Remove</label>
     <label class="product-line-price">Total</label>
   </div>
   <div id=cartTop>
</div>
   
  

  
   <div class="totals">
     <div class="totals-item">
       <label>Subtotal</label>
       <div class="totals-value" id="cart-subtotal"></div>
     </div>
     <div class="totals-item">
       <label>Tax (5%)</label>
       <div class="totals-value" id="cart-tax"></div>
     </div>
     <div class="totals-item">
       <label>Shipping</label>
       <div class="totals-value" id="cart-shipping"></div>
     </div>
     <div class="totals-item totals-item-total">
       <label>Grand Total</label>
       <div class="totals-value" id="cart-total"></div>
     </div>
   </div>
        
       <!-- <button class="checkout">Checkout</button> -->
       <p class="modal-body-heading product">Address</p>
      <div class="container">
        <div class="row">
                <div class="col-lg-12 ">
                    <div class="input-group mb-3 mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Street</span>
                            </div>
                            <input type="text" class="form-control" placeholder="e.g Götgatan 2" aria-label="Default" id="street" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3 mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Postal Code</span>
                            </div>
                            <input type="text" class="form-control" placeholder="e.g 199 00" aria-label="Default" id="postcode" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3 mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">City</span>
                            </div>
                            <input type="text" class="form-control" placeholder="e.g Göteborg" aria-label="Default" id="city" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3 mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Mobile</span>
                            </div>
                            <input type="telephone" class="form-control" placeholder="e.g 079 454 55 66" aria-label="Default" id="mobile" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
        </div>
      </div>
      <p class="modal-body-heading product pt-4">Delivery Time</p>
      <div class="container">
        <div class="row">
                <div class="col-lg-12 ">                
                    <div class="form-group">
                    <label for="exampleFormControlTextarea2">Mention time and date. <span class="minTime">(Minimun 30 min)</span></label>
                    <!-- dd -->
                    <div class="container">
    <div class="row">
        <div class="col-sm-6">
     <!--    <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div> -->
            <div class="form-group">
                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                    <input type="text" id="datetimepicker"class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>

            
        </div>
      
    </div>
</div>
<!--                     <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
 -->                    </div>                    
                </div>
        </div>
      </div>
      <p class="modal-body-heading product pt-4">Delivery Method</p>
      <div class="container">
        <div class="row">
        <div class="col-sm-12">
          <select class="form-control" id="selectDeliveryMethod">
          <option>Foodora</option>
          <option>Uber Eats</option>
          </select>
        </div>
        </div>
      </div>










       <p class="modal-body-heading product pt-4">Payment Method</p>
      <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                  <img class="img-thumbnail img-fluid" src="images/bank.svg" alt="card" width="100">
                  <div class="input-group mb-3 mt-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Card Number</span>
                    </div>
                    <input type="text" class="form-control" placeholder="e.g 2345 6768 9898 4326" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <div class="input-group mb-3 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Expire Date</span>
                        </div>
                        <input type="text" placeholder="e.g 2025-05-19" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <div class="input-group mb-3 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">CVV2/CVC2</span>
                        </div>
                        <input type="text" placeholder="Last 3 digits at the backside of card" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <button  class="checkout">Pay Now</button>
            </div>
            <div class="col-lg-6">
                   <img class="img-thumbnail img-fluid" src="images/swish.png" alt="swish" width="100">
                    <div class="input-group mb-3 mt-3">
                                
                                    <p>Now there is a possibility to pay through SWISH.</p>
                                    <p>Number: 123- 456 78 90</p>
                    </div>
            </div>
        </div>

      </div>  <!-- Payment End -->

       
 </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

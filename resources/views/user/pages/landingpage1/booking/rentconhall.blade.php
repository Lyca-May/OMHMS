<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMHMS</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<style>
.product-details .quantity {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	margin-bottom: 33px;
}

.product-details .quantity .pro-qty {
	width: 123px;
	height: 46px;
	border: 2px solid #ebebeb;
	padding: 0 15px;
	float: left;
	margin-right: 14px;
}

.product-details .quantity .pro-qty .qtybtn {
	font-size: 24px;
	color: #b2b2b2;
	float: left;
	line-height: 38px;
	cursor: pointer;
	width: 18px;
}

.product-details .quantity .pro-qty .qtybtn.dec {
	font-size: 30px;
}

.product-details .quantity .pro-qty input {
	text-align: center;
	width: 52px;
	font-size: 14px;
	font-weight: 700;
	border: none;
	color: #4c4c4c;
	line-height: 40px;
	float: left;
}

.product-details .quantity .primary-btn.pd-cart {
	padding: 14px 70px 10px;
}


.cart-table table tr td.qua-col .pro-qty {
	width: 123px;
	height: 46px;
	border: 2px solid #ebebeb;
	padding: 0 15px;
	float: left;
}

.cart-table table tr td.qua-col .pro-qty .qtybtn {
	font-size: 24px;
	color: #b2b2b2;
	float: left;
	line-height: 38px;
	cursor: pointer;
	width: 18px;
}

.cart-table table tr td.qua-col .pro-qty .qtybtn.dec {
	font-size: 30px;
}

.cart-table table tr td.qua-col .pro-qty input {
	text-align: center;
	width: 52px;
	font-size: 14px;
	font-weight: 700;
	border: none;
	color: #4c4c4c;
	line-height: 40px;
	float: left;
}
</style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->

                                <input type="text" placeholder="Agency">
                                <input type="text" placeholder="Contact Person">
                                <input type="text" placeholder="Contact Number">
                                <br>
                                <label for="">Date Requested</label>
                                <input type="date" placeholder="Date Requested">
                                <br>
                                <label for="">Event Start</label>
                                <input type="time" placeholder="Event Start">
                                <select name="" id="">
                                    <option value="">Choose Event Type</option>
                                    <option value="">Seminar</option>
                                    <option value="">Meeting</option>
                                    <option value="">Wedding</option>
                                    <option value="">Birthday</option>
                                    <option value="">Christening</option>
                                </select>
                                <br>
                                <label for="">Preparation Setup time</label>
                                <input type="time" placeholder="Preparation Setup time">
                                <br>
                                <label for="">Date of Setup</label>
                                <input type="date" placeholder="Date of Setup"> <br>



                                <br>
                                <br>
                                <label for="">Others (if any)</label>
                                <input type="text" placeholder="Request">
                                <br>
                                <br>
                                <section class="shopping-cart spad">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="cart-table">
                                                    <table>
                                                        <tbody>
                                <h1>Other Services  </h1>
                                    <td class="qua-col first-row">
                                        <label>
                                            <input type="checkbox" name="led_tv" value="yes">
                                           Microphone: Do you want to add microphone to your reservation?
                                          </label>
                                        <div>
                                            <label for="">Microphone</label>
                                        </div>
                                        <div>
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" name="quantity" value="1">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="qua-col first-row">
                                        <label>
                                            <input type="checkbox" name="led_tv" value="yes">
                                           Tables: Do you want to add Tables to your reservation?
                                          </label>
                                        <div>
                                            <label for="">Number of Tables</label>
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" name="quantity" value="1">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <br>
                                    <td class="qua-col first-row">
                                        <label>
                                            <input type="checkbox" name="led_tv" value="yes">
                                           Chairs: Do you want to add chairs to your reservation?
                                          </label>
                                        <div>
                                            <label for="">Number of chairs</label>
                                        </div>
                                        <div>
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" name="quantity" value="1">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                              <br>
                              <label>
                                <input type="checkbox" name="led_tv" value="yes">
                                LED TV: Do you want to add an LED TV to your reservation?
                              </label>
                              <label>
                                <input type="checkbox" name="led_tv" value="yes">
                               Sound System: Do you want to add an Sound System to your reservation?
                              </label>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->


    <!-- Js Plugins -->
    <script src="{{asset('assets/js/js/jquery-3.3.1.min.js')}}"></script>
    <script>
        var proQty = $('.pro-qty');
	proQty.prepend('<span class="dec qtybtn">-</span>');
	proQty.append('<span class="inc qtybtn">+</span>');
	proQty.on('click', '.qtybtn', function () {
		var $button = $(this);
		var oldValue = $button.parent().find('input').val();
		if ($button.hasClass('inc')) {
			var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 0) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 0;
			}
		}
		$button.parent().find('input').val(newVal);
	});
    </script>
</body>

</html>

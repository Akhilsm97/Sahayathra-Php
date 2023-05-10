<?php
	session_start();
	if(ISSET($_SESSION['Name'])){
		$username = $_SESSION['Name'];
        
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Payment Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<!--===============================================================================================-->
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
<!--===============================================================================================-->

</head>
<body>
<?php
$conn = mysqli_connect('localhost','root','','sahayathra');
$id=$_GET['Id'];
echo $id;

?>
 <?php
$conn = mysqli_connect('localhost','root','','sahayathra');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT giver_dash.start,giver_dash.destination,giver_dash.Giver_Name,trip_giver.imagename,payment.Id,payment.Taker_Name,giver_dash.price FROM giver_dash,payment,trip_giver WHERE giver_dash.Giver_Name= payment.Giver_Name AND trip_giver.Giver_Name= giver_dash.Giver_Name AND payment.Taker_Name='".$username."' AND payment.req_status='Accepted' AND payment.Id='".$id."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_array($result))
  {
    ?>
 <?php echo $row['Id'];?>
 <div class="container">
  <section class="product">
    <div class="product__details">
      <h1 class="product__details-heading">Payment Gateway</h1>
      <span class="product__details-sub-heading">Sahayathra</span>
<label style="margin-left:10px; ">From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></label>
<label style="margin-left:80px;">To</label><br><br>
<label style="margin-left:10px; "><?php echo $row['Taker_Name']?></label>
<label style="margin-left:110px;"><?php echo $row['Giver_Name']?></label>
<hr>
<label style="margin-left:10px; "><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></label>
<label style="margin-left:80px;"><i class="fa fa-map-marker" aria-hidden="true" ></i></label><br><br>
<label style="margin-left:10px; "><?php echo $row['start']?></label>
<label style="margin-left:110px;"><?php echo $row['destination']?></label>
<hr>
     
      <div class="product__details-basket">
        <div class="product__details-basket-item">
          
        </div>

        <div class="product__details-basket-item" >
          <span class="product__details-basket-heading product__details-basket-heading--right" style="font-size:25px;color:white;margin-right:100px;">Price</span>
          <span class="product__details-basket-price" data-product-price style="margin-left:70px;color:white;font-size:30px;">₹<?php echo $row['price']?></span>
        </div>
      </div>
    </div>

    <form class="card-details" action="" data-form>
      <fieldset class="card-details__fieldset">
        <span class="card-details__heading">Card Type</span>

        <div class="card-details__cards" data-card-types>
          <div class="card-details__cards-item">
            <input class="card-details__card-input" type="radio" name="cardType" id="visa" data-card-type="visa" checked>
            <label class="card-details__card-label" for="visa">Visa</label>
            <img class="card-details__cards-image" src="https://svgshare.com/i/7h2.svg" alt="Visa Card" aria-hidden="true">
          </div>

          <div class="card-details__cards-item">
            <input class="card-details__card-input" type="radio" name="cardType" id="mastercard" data-card-type="mastercard">
            <label class="card-details__card-label" for="mastercard">MasterCard</label>
            <img class="card-details__cards-image" src="https://svgshare.com/i/7fu.svg" alt="MasterCard" aria-hidden="true">
          </div>

          <div class="card-details__cards-item">
            <input class="card-details__card-input" type="radio" name="cardType" id="discover" data-card-type="discover">
            <label class="card-details__card-label" for="discover">Discover</label>
            <img class="card-details__cards-image" src="https://svgshare.com/i/7hP.svg" alt="Discover Card" aria-hidden="true">
          </div>

          <div class="card-details__cards-item">
            <input class="card-details__card-input" type="radio" name="cardType" id="express" data-card-type="express">
            <label class="card-details__card-label" for="express">American Express</label>
            <img class="card-details__cards-image" src="https://svgshare.com/i/7gD.svg" alt="Amercican Express Card" aria-hidden="true">
          </div>
        </div>
      </fieldset>

      <fieldset class="card-details__fieldset">
        <span class="card-details__heading">Card Number</span>

        <div class="card-details__number">
          <div class="card-details__number-field">
            <label for="cardNumberFirstFour" class="card-details__number-label">First Four Digits</label>
            <input class="card-details__number-input" type="text" maxlength="4" name="card-number" placeholder="0000" id="cardNumberFirstFour" data-input>
          </div>

          <div class="card-details__number-field">
            <label for="cardNumberSecondFour" class="card-details__number-label">Second Four Digits</label>
            <input class="card-details__number-input" type="text" maxlength="4" name="card-number" placeholder="0000" id="cardNumberSecondFour" data-input>
          </div>

          <div class="card-details__number-field">
            <label for="cardNumberThirdFour" class="card-details__number-label">Third Four Digits</label>
            <input class="card-details__number-input" type="text" maxlength="4" name="card-number" placeholder="0000" id="cardNumberThirdFour" data-input>
          </div>

          <div class="card-details__number-field">
            <label for="cardNumberFirstFour" class="card-details__number-label">Last Four Digits</label>
            <input class="card-details__number-input" type="text" maxlength="4" name="card-number" placeholder="0000" id="cardNumberLastFour" data-input>
          </div>

          <div class="card-details__number-card">
            <img class="card-details__number-card-image" src="https://svgshare.com/i/7h2.svg" alt="Visa Card" data-card-image>
          </div>
        </div>
      </fieldset>

      <fieldset class="card-details__fieldset">
        <span class="card-details__heading" aria-hidden="true">Card Holder Name</span>
        <div class="card-details__holder">
          <label class="card-details__holder-label" for="cardHolderName">Card Holder Name</label>
          <input class="card-details__holder-input" type="text" id="cardHolderName" data-input>
        </div>
      </fieldset>

      <fieldset class="card-details__fieldset">
        <div class="card-details__expiration">
          <span class="card-details__heading" aria-hidden="true">Expiration Date</span>
          <div class="card-details__expiration-date">
            <label class="card-details__expiration-date-label" for="expirationDate">Expiration Date</label>
            <input class="card-details__expiration-date-input" type="text" maxlength="7" placeholder="MM / YY" id="expirationDate" data-input>
          </div>
        </div>

        <div class="card-details__security">
          <span class="card-details__heading" aria-hidden="true">CVV</span>
          <div class="card-details__details__security-code">
            <label class="card-details__security-code-label" for="expirationDate">CVV</label>
            <input class="card-details__security-code-input" type="text" maxlength="3" placeholder="000" id="expirationDate" data-input>
          </div>
        </div>
      </fieldset>

      <button class="card-details__submit" type="button" data-submit-button><a href="payment_processing.php?Id=<?php echo $row['Id']?>" style="text-decoration:none;">Purchase</a></button>
    </form>
  </section>
  
  
</div>

    <?php
   
  }
}
?> 
	
	<script>
function ValidationModule({ form, inputs, submit }) {
  const state = {
    form,
    inputs,
    submit
  };
  
  function focus({ target }) {
    if (target.defaultValue === target.value) {
      target.value = '';
    }
  }
  
  function blur({ target }) {
    const defaultClassName = target.className.split(' ')[0];
    
    if (target.value === '') {
      target.value = target.defaultValue;
      target.className = defaultClassName;
      return;
    }
    
    target.className = `${defaultClassName} ${defaultClassName}--valid`;
  }
  
  function delegateEvent(event) {
    if (event.target.nodeName !== 'INPUT') {
      return;
    }
    
    if (event.type === 'focus') {
      return focus(event);
    }
    
    if (event.type === 'blur') {
      return blur(event);
    }
  }

  function bindEvents() {
    form.addEventListener('focus', delegateEvent, true);
    form.addEventListener('blur', delegateEvent, true);
  }

  return {
    bindEvents
  }
}



function checkoutForm() {
  const form = document.querySelector('[data-form]');
  const quantity = document.querySelector('[data-product-quantity]');
  const cardTypes = form.querySelector('[data-card-types]');
  const data = {
    form,
    inputs: form.querySelectorAll('[data-input]'),
    submit: form.querySelector('[data-submit]')
  };
  
  function togglePriceChange({ target }) {
    const value = parseInt(target.value, 10);
    const initialPrice = 386.78;
    const price = document.querySelector('[data-product-price]');
    const newPrice = initialPrice * value;
    
    price.textContent = `$${newPrice.toFixed(2)}`;
  }

  function toggleCardType({ target }) {
    const cardImage = form.querySelector('[data-card-image]');
    const cardTypeValue = target.getAttribute('data-card-type');
    const cardPath = 'https://svgshare.com/i/';
    const cardTypeData = {
      visa: { src: `${cardPath}7h2.svg`, alt: 'Visa Card' },
      mastercard: { src: `${cardPath}7fu.svg`, alt: 'MasterCard' },
      discover: { src: `${cardPath}7hP.svg`, alt: 'Discover Card' },
      express: { src: `${cardPath}7gD.svg`, alt: 'American Express Card' }
    }
    
    if (cardTypeData.hasOwnProperty(cardTypeValue)) {
      const data = Object.getOwnPropertyDescriptor(cardTypeData, cardTypeValue);
      
      cardImage.src = data.value.src;
      cardImage.alt = data.value.alt;
    }
  }

  function init() {
    const validation = new ValidationModule(data);
    
    quantity.addEventListener('change', togglePriceChange);
    cardTypes.addEventListener('click', toggleCardType);
    validation.bindEvents();
  }

  init();
}

checkoutForm();

</script>



<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

</body>
</html>




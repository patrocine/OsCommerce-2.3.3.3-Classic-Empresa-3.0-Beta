<?php
/*
  $Id: my_answer.php, V2.1rc2a 2008/OCT/01 16:04:22 dsa_ Exp $
  created by Ben Zukrel, Deep Silver Accessories
  http://www.deep-silver.com
  Reformatted by phocea to use CSS display

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2005 osCommerce

  Released under the GNU General Public License
************************************************************/

// Initialisation of some required parameters for the FAQ answers
 if (tep_not_null(POINTS_AUTO_EXPIRES)){
   $answer_expire = 'Reward answer will expire ' . POINTS_AUTO_EXPIRES . ' months from the date issuance.';
 } else {
   $answer_expire = 'Reward answer do not expire and can be accumulated until you decide to use them.';
 }

if (POINTS_PER_AMOUNT_PURCHASE > 1) {
  $point_or_answer = 'answer';
} else {
  $point_or_answer = 'point';
}

// Definition if the navigation bar and page title
define('NAVBAR_TITLE', 'Programa de Puntos FAQ');
define('HEADING_TITLE', 'Programa de Puntos FAQ');

// Definitions of the FAQ questions
define('POINTS_FAQ_1', '�Qu� es el Programa de Puntos?');
define('POINTS_FAQ_2', '�C�mo funciona el programa?');
define('POINTS_FAQ_3', 'Puntos y Valores');
define('POINTS_FAQ_4', 'Puntos de Compra Canjeados');
define('POINTS_FAQ_5', 'Puntos m�nimos requeridos');
define('POINTS_FAQ_6', 'Cantidad Compra m�nima requerida');
define('POINTS_FAQ_7', 'El m�ximo de puntos Reembolsos permitidos por pedido es de');
define('POINTS_FAQ_8', '�Se consiguen puntos por los gastos de env�o?');
define('POINTS_FAQ_9', '�Se consiguen puntos por los impuestos?');
define ('POINTS_FAQ_10', '�Se consiguen puntos por los productos rebajados?');
define ('POINTS_FAQ_11', '�Se consiguen puntos por compras pagadas por puntos?');
define ('POINTS_FAQ_12', 'Ganando Puntos de Referencia');
define ('POINTS_FAQ_13', 'C�mo ganar puntos Al escribir su opinion');
define ('POINTS_FAQ_14', 'Productos Restricciones');
define ('POINTS_FAQ_15', 'productos a la venta Restricciones');
define ('POINTS_FAQ_16', 'Condiciones de uso');
define ('POINTS_FAQ_17', 'Cuando se producen problemas');
// Definition of the answer for each of the questions:

// FAQ1
define('TEXT_FAQ_1', 'Para agradecer su fidelidad le presentamos nuestro Programa de Puntos.
<br /><br />Nuestro Programa de Puntos es tan simple como suena. Mientras que las compras en ' . STORE_NAME . ' usted ganar� Puntos de Compra por el dinero que gaste.
<br />Una vez confirmado, usted podr� usar esos puntos para pagar futuras compras en ' . STORE_NAME . '.
<br /><br />El Programa de Puntos entro en vigor el&nbsp; ' . tep_get_last_date('USE_POINTS_SYSTEM') . ' . Todas las compras realizadas despu�s de esta
fecha ganan puntos.');

// FAQ2
define('TEXT_FAQ_2', 'Cuando se hace un pedido, la cantidad total<small><font color="FF6633">*</font></small> de la orden se utilizar� para calcular la cantidad de puntos ganados.
These points are added to your Shopping Points account as pending points.
<br />All pending points are listed in your <a href="' . tep_href_link(FILENAME_MY_POINTS) . '"> <u>Shopping Points account </u></a> and will stay there until approved/confirmed by ' . STORE_NAME . '.
<br /><br />Once any pending points have been approved, they will be released and your account will be credited with the value of those points.  Ready for you to spend on whatever you want.
<br />' . $points_expire . '
<br />You must login to your account in order to view the status of your points.
<br /><br />During the checkout procces you\'ll be able to pay for your order with your points balance.
<p align="right"<small><font color="FF6633">*</font> in most cases shipping fees and taxes excluded. See refered FAQ for more details.</small></p>');

// FAQ3
define('TEXT_FAQ_3', 'Currently, for every ' .  $currencies->format(1) . ' spent at ' . STORE_NAME . ' you\'ll earn ' . number_format(POINTS_PER_AMOUNT_PURCHASE,POINTS_DECIMAL_PLACES)  . ' ' . $point_or_points . '
<br />For example:<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Product Cost:</b>&nbsp; ' .  $currencies->format(100) . '<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Value of Points Earned:</b>&nbsp; ' .  $currencies->format(tep_calc_shopping_pvalue(100 * POINTS_PER_AMOUNT_PURCHASE)) . '<br /><br />
Please note, we reserve the right to make changes to the above rate at any time without prior notice.  The rate shown here will always be current.
<p align="right"><small>Last updated: ' . tep_get_last_date('REDEEM_POINT_VALUE') . '</small><p>');

// FAQ4
define('TEXT_FAQ_4', 'If you have a balance in your Shopping Points Account, you can use those points to pay for purchases made at ' . STORE_NAME . '.
<br />During the checkout proccess, on the same page that you select a payment method, there will be a box to enter the amount of points you wish to redeem.  Enter the amount of points you would like to spend or tick the box to use all available points.
Please note, you will still have to select another payment method if there 
is not enough in your Shopping Points Account to cover the cost of your purchase. 
<br />Continue the checkout procedure and at the confirmation page you\'ll notice that the value of the points redeemed will have been credited towards your order.  Once you confirm your order, your Shopping Points account will be updated and the points used deducted from your balance.
<br />Note that any purchase made by redeeming points will only be rewarded with additional points for the amount spent other then points.');


// FAQ5 - conditionnal depending on the point limit value set in admin
if (POINTS_LIMIT_VALUE  > 0)  {
	define('TEXT_FAQ_5', 'Currently, a minimum balance of <b>' . number_format(POINTS_LIMIT_VALUE) . '</b> points <b>(' . $currencies->format(tep_calc_shopping_pvalue(POINTS_LIMIT_VALUE)) . ')' . '</b> is required before you can redeem them.
	<br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('POINTS_LIMIT_VALUE') . '</small></p>');
} else {
	define('TEXT_FAQ_5', 'Currently, no minimum balance is required to redeem your points.  Please note, you\'ll still have to select another payment method if there isn\'t enough in your Shopping Points account to cover the cost of your purchase.<br />
	<br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('POINTS_LIMIT_VALUE') . '</small></p>');
}

// FAQ6 - conditionnal depending on the point min amount value set in admin
if(tep_not_null(POINTS_MIN_AMOUNT))  {
	define('TEXT_FAQ_6', 'Currently, a minimum of <b>' . $currencies->format(POINTS_MIN_AMOUNT) . '</b> in total (per purchase) is required before any Points Redemptions can take place.
	<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('POINTS_MIN_AMOUNT') . '</small></p>');
} else {
	define('TEXT_FAQ_6', 'Currently, no Minimum Purchase Amount required to redeem your points.
	<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('POINTS_MIN_AMOUNT') . '</small></p>');
}

// FAQ7
define('TEXT_FAQ_7', 'A maximum of <b>' . number_format(POINTS_MAX_VALUE) . '</b> points <b>(' . $currencies->format(tep_calc_shopping_pvalue(POINTS_MAX_VALUE)) . ')' . '</b> is allowed to redeem per order.
<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
<p align="right"><small>Last updated: ' . tep_get_last_date('POINTS_MAX_VALUE') . '</small></p>');

// FAQ8 - conditionnal depending on the use point for shipping value set in admin
if(USE_POINTS_FOR_SHIPPING == 'false')  {
	define('TEXT_FAQ_8', 'No. When calculating the amount of points earned, the shipping fees are excluded.
	<p align="right"><small>Last updated ' . tep_get_last_date('USE_POINTS_FOR_SHIPPING') . '</small></p>');
} else {
#---------------------- DO NOT EDIT  EOF ----------------------------  
 	define('TEXT_FAQ_8', 'Yes. When calculating the amount of points earned, the shipping fees are included.
	<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('USE_POINTS_FOR_SHIPPING') . '</small></p>');
}

// FAQ9 - conditionnal depending on the value set in admin for ginving point for tax value
if(USE_POINTS_FOR_TAX == 'false')  {
	define('TEXT_FAQ_9', 'No. When calculating the amount of points earned, the taxes are excluded.
	<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('USE_POINTS_FOR_TAX') . '</small></p>');
} else {
	define('TEXT_FAQ_9', 'Yes. When calculating the amount of points earned, the taxes are included.
	<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('USE_POINTS_FOR_TAX') . '</small></p>');
}	 

// FAQ10 - conditionnal depending on value set in admin for giving point on specials
if(USE_POINTS_FOR_SPECIALS == 'false')  {
	define('TEXT_FAQ_10', 'No. When calculating the amount of points earned, all items which have been discounted are excluded.
	<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('USE_POINTS_FOR_SPECIALS') . '</small></p>');
} else {
	define('TEXT_FAQ_10', 'Yes. When calculating the amount of points earned, all items which have been discounted are included.
	<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('USE_POINTS_FOR_SPECIALS') . '</small></p>');
}

// FAQ11
if(USE_POINTS_FOR_REDEEMED == 'false')  {
	define('TEXT_FAQ_11', 'No. When calculating the amount of points earned. Any purchase made by redeeming points are excluded.
	<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('USE_POINTS_FOR_REDEEMED') . '</small></p>');
} else {
	define('TEXT_FAQ_11', 'Yes. Please note, any purchase made by redeeming points will only be rewarded with additional points for the amount spent other then points.
	<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('USE_POINTS_FOR_REDEEMED') . '</small></p>');
}

// FAQ12
if (tep_not_null(USE_REFERRAL_SYSTEM)){
	define('TEXT_FAQ_12', '<em>"Word-of-mouth" advertising is the most powerful form of advertising there is.</em>
	<br />Referral Points is based on the idea that we should both benefit from your referrals.
	<br />When referred friend place an order, during the checkout procces on the same page that you select a payment method there will be a box to enter a Referral code .
	Your Referral code is your registered email address with us.
	<br />When we receive your referred friends completed and approved order, we will reward your Points account with <b>' .  USE_REFERRAL_SYSTEM . '</b> points .
	<br />The more first time orders we receive from your referrals, the more reward points you will receive.
	<p align="right"><small>Last updated: ' . tep_get_last_date('USE_REFERRAL_SYSTEM') . '</small></p>');
} else {
	define('TEXT_FAQ_12', 'Currently this feature is disabled.
	<p align="right"><small>Last updated: ' . tep_get_last_date('USE_REFERRAL_SYSTEM') . '</small></p>');
}

// FAQ13
if (tep_not_null(USE_POINTS_FOR_REVIEWS)){
	define('TEXT_FAQ_13', '<em>"Writing Review is ego boost knowing others read your opinions, and maybe even take your advice."</em>
	<br />Sharing Your Product Reviews will assist us to continually improve our offers and service to you as well as helps others to choose the right products.
	<br />We would like to thank you for helpful review that you gave us, therefore for every quality review, we will reward your Points account with <b>' .  $currencies->format(tep_calc_shopping_pvalue(USE_POINTS_FOR_REVIEWS)) . '</b> worth of points .
	<br />Your Review must meet all of the following conditions:
	<ul>
  	   <li>Your Reviews must be original.</li>
  	   <li>Reviews must be focused and concise on the product under review.</li>
  	   <li>Reviews should not duplicate content already published.</li>
  	   <li>Be truthful and objective.</li>
  	   <li>Reviews should not include posts that have spam, commercial or advertising content or links.</li>
  	   <li>Reviews should not abuse, harass, or threaten another\'s personal safety .</li>
	</ul>
	' . STORE_NAME .' reserves the right to refuse or remove any review that does not comply with above conditions.
	<br />' . STORE_NAME .' staff reserves the right to correct misspelled words, grammatical errors.
	<br />' . STORE_NAME .' is not responsible or liable in any way for ratings and reviews posted by its customers.
	<p align="right"><small>Last updated: ' . tep_get_last_date('USE_POINTS_FOR_REVIEWS') . '</small></p>');
} else {
	define('TEXT_FAQ_13', 'Currently this feature is disabled.
	<p align="right"><small>Last updated: ' . tep_get_last_date('USE_POINTS_FOR_REVIEWS') . '</small></p>');
}

// FAQ14
if (tep_not_null(RESTRICTION_MODEL)) {
	define('TEXT_FAQ_14', 'Currently, only items which have the model <b>[' . RESTRICTION_MODEL . ']</b> can be purchased using your points balance.
	<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('RESTRICTION_MODEL') . '</small></p>');
}
if (tep_not_null(RESTRICTION_PID)) { 
	$p_ids = split("[,]", RESTRICTION_PID);
	for ($i = 0; $i < count($p_ids); $i++) {
		$prods_query = tep_db_query("SELECT * FROM products, products_description WHERE products.products_id = products_description.products_id and products_description.language_id = '" . $languages_id . "'and products.products_id = '" . $p_ids[$i] . "'");
		if ($list = tep_db_fetch_array($prods_query)) {
			$prods .= '<li>' . $list['products_name'] .'</li>';
		}
	}
	
	define('TEXT_FAQ_14', 'Currently, only  the following items can be purchased using your points balance.<ul>' . $prods . '</ul>
	<br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('RESTRICTION_PID') . '</small></p>');
}
if (tep_not_null(RESTRICTION_PATH)) {
	$cat_path = split("[,]", RESTRICTION_PATH);
        for ($i = 0; $i < count($cat_path); $i++) {
        	$cat_path_query = tep_db_query("select * from " . TABLE_CATEGORIES . ", " . TABLE_CATEGORIES_DESCRIPTION . " WHERE categories.categories_id = categories_description.categories_id and categories_description.language_id = '" . $languages_id . "' and categories.categories_id='" . $cat_path[$i] . "'");
        	if ($list = tep_db_fetch_array($cat_path_query)) {
        		$cats .= '<li>' . $list['categories_name'] .'</li>';
        	}
        }
	define('TEXT_FAQ_14', 'Currently, only items in the following categories and their corresponding sub-categories can be purchased using your points balance.<ul>' . $cats . '</ul>
	<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('RESTRICTION_PATH') . '</small></p>');
 } else {
	define('TEXT_FAQ_14', 'Currently, no restrictions apply to what items may be purchased using your points balance.
	<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('RESTRICTION_PATH') . '</small></p>');
}

// FAQ15
if (REDEMPTION_DISCOUNTED == 'true') {
	define('TEXT_FAQ_15', 'Currently, no items which have been discounted can be purchased using your points balance.
	<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('REDEMPTION_DISCOUNTED') . '</small></p>');
} else {
	define('TEXT_FAQ_15', 'Currently, no restrictions apply to the kind of items which may be purchased using your points balance.
	<br /><br />We strongly advise you to check this page often as we may make changes to this policy.
	<p align="right"><small>Last updated: ' . tep_get_last_date('REDEMPTION_DISCOUNTED') . '</small></p>');
}

// FAQ16
define('TEXT_FAQ_16', '
<ul>
  <li>Shopping Points are only available to registered ' . STORE_NAME . ' member\'s.</li>
  <li>Shopping Points Reward can only be collected and used with online purchases. and are only validated at ' . STORE_NAME . '.</li>
  <li>Points are non-refundable and can\'t be transferred between member\'s.</li>
  <li>Shopping Points are non-transferable or exchangeable for cash under any circumstances.</li>
  <li>Shopping Points will not be refunded for any cancelled order.</li>
  <li>When buying with Points,you will still have to select another payment method if there is not enough in your Shopping Points Account to cover the cost of your purchase.</li>
  <li>When calculating the amount of points earned. shipping fees and taxes are excluded(unless other.see refered FAQ for more details).</li>
</ul>
Please note, we reserve the right to make changes to this policy at any time without prior notice or liability.');

// FAQ17
define('TEXT_FAQ_17', 'For any queries regarding our Reward Point Program, please <a href="' . tep_href_link(FILENAME_CONTACT_US) . '"> <u>contact us </u></a>.  Make sure you provide as much information as possible in the e-mail.');

// Below is the section that will actually displax on the FAQ page
define('TEXT_INFORMATION', '<a name="Top"></a><span class="pointWarning"><b>Please choose from one of the topics below:</b></span>
<ol>
<li><a href="javascript:show(\'answer_q1\');">'. POINTS_FAQ_1 .'</a><br />
	<div id="answer_q1">'.
		TEXT_FAQ_1	
	.'</div>
<li><a href="javascript:show(\'answer_q2\');">'. POINTS_FAQ_2 .'</a><br />
	<div id="answer_q2">'.
		TEXT_FAQ_2
	.'</div>
<li><a href="javascript:show(\'answer_q3\');">'. POINTS_FAQ_3 .'</a><br />
	<div id="answer_q3">'.
		TEXT_FAQ_3	
	.'</div>
<li><a href="javascript:show(\'answer_q4\');">'. POINTS_FAQ_4 .'</a><br />
	<div id="answer_q4">'.
		TEXT_FAQ_4	
	.'</div>
<li><a href="javascript:show(\'answer_q5\');">'. POINTS_FAQ_5 .'</a><br />
	<div id="answer_q5">'.
		TEXT_FAQ_5	
	.'</div>
<li><a href="javascript:show(\'answer_q6\');">'. POINTS_FAQ_6 .'</a><br />
	<div id="answer_q6">'.
		TEXT_FAQ_6	
	.'</div>
<li><a href="javascript:show(\'answer_q7\');">'. POINTS_FAQ_7 .'</a><br />
	<div id="answer_q7">'.
		TEXT_FAQ_7	
	.'</div>
<li><a href="javascript:show(\'answer_q8\');">'. POINTS_FAQ_8 .'</a><br />
	<div id="answer_q8">'.
		TEXT_FAQ_8	
	.'</div>
<li><a href="javascript:show(\'answer_q9\');">'. POINTS_FAQ_9 .'</a><br />
	<div id="answer_q9">'.
		TEXT_FAQ_9	
	.'</div>
<li><a href="javascript:show(\'answer_q10\');">'. POINTS_FAQ_10 .'</a><br />
	<div id="answer_q10">'.
		TEXT_FAQ_10	
	.'</div>
<li><a href="javascript:show(\'answer_q11\');">'. POINTS_FAQ_11 .'</a><br />
	<div id="answer_q11">'.
		TEXT_FAQ_11	
	.'</div>
<li><a href="javascript:show(\'answer_q12\');">'. POINTS_FAQ_12 .'</a><br />
	<div id="answer_q12">'.
		TEXT_FAQ_12	
	.'</div>
<li><a href="javascript:show(\'answer_q13\');">'. POINTS_FAQ_13 .'</a><br />
	<div id="answer_q13">'.
		TEXT_FAQ_13	
	.'</div>
<li><a href="javascript:show(\'answer_q14\');">'. POINTS_FAQ_14 .'</a><br />
	<div id="answer_q14">'.
		TEXT_FAQ_14	
	.'</div>
<li><a href="javascript:show(\'answer_q15\');">'. POINTS_FAQ_15 .'</a><br />
	<div id="answer_q15">'.
		TEXT_FAQ_15	
	.'</div>
<li><a href="javascript:show(\'answer_q16\');">'. POINTS_FAQ_16 .'</a><br />
	<div id="answer_q16">'.
		TEXT_FAQ_16	
	.'</div>
<li><a href="javascript:show(\'answer_q17\');">'. POINTS_FAQ_17 .'</a><br />
	<div id="answer_q17">'.
		TEXT_FAQ_17	
	.'</div></ol>');
?>

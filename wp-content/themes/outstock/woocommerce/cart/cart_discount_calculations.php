<?php 


//Create price without currency
$pricesubtotal = WC()->cart->subtotal;

//Check which currency is selected, what is the price range (because discount depends off price range), and what language is selected, and display info about
//current discount and what products to buy to get higher discounts

//EUR

//EUR >200, <=600, 4%
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'200' && $pricesubtotal<='600') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 601 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>You reached 4% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'200' && $pricesubtotal<='600') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 601 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 4% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'200' && $pricesubtotal<='600') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 601 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 4% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'200' && $pricesubtotal<='600') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 601 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 4%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//EUR >600, <=1200, 8%
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'600' && $pricesubtotal<='1200') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 1201 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 8% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'600' && $pricesubtotal<='1200') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 1201 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 8% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'600' && $pricesubtotal<='1200') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 1201 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 8% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'600' && $pricesubtotal<='1200') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 1201 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 8%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//EUR >1200, <=2100, 14%
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'1200' && $pricesubtotal<='2100') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 2101 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 14% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'1200' && $pricesubtotal<='2100') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 2101 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 14% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'1200' && $pricesubtotal<='2100') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 2101 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 14% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'1200' && $pricesubtotal<='2100') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 2101 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 14%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//EUR >2100, <=3000, 19%
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'2100' && $pricesubtotal<='3000') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 3001 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 19% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'2100' && $pricesubtotal<='3000') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 3001 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 19% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'2100' && $pricesubtotal<='3000') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 3001 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 19% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'2100' && $pricesubtotal<='3000') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 3001 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 19%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//EUR >3000, <=3700, 23%
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3000' && $pricesubtotal<='3700') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 3701 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 23% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3000' && $pricesubtotal<='3700') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 3701 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 23% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3000' && $pricesubtotal<='3700') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 3701 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 23% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3000' && $pricesubtotal<='3700') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 3701 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 23%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//EUR >3700, <=5000, 27%
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3700' && $pricesubtotal<='5000') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 5001 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 27% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3700' && $pricesubtotal<='5000') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 5001 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 27% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3700' && $pricesubtotal<='5000') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 5001 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 27% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3700' && $pricesubtotal<='5000') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 5001 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 27%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//EUR >5000, 33%
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'5000') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p><span>You reached 33% discount.</span> <br>This is your maximum saving level.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'5000') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 33% de réduction.</span> <br>C'est votre niveau d'économie maximum.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'5000') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><span>Sie haben 33% Rabatt erhalten.</span> <br>Dies ist Ihre maximale Einsparungsebene.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'5000') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 33%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}



//CHF

//CHF >230, <=687, 4%
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'230' && $pricesubtotal<='687') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 688 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>You reached 4% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'230' && $pricesubtotal<='687') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 688 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 4% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'230' && $pricesubtotal<='687') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 688 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 4% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'230' && $pricesubtotal<='687') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 688 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 4%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//CHF >687, <=1375, 8%
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'687' && $pricesubtotal<='1375') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 1376 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 8% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'687' && $pricesubtotal<='1375') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 1376 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 8% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'687' && $pricesubtotal<='1375') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 1376 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 8% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'687' && $pricesubtotal<='1375') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 1376 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 8%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php  
}

//CHF >1375, <=2405, 14%
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'1375' && $pricesubtotal<='2405') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 2406 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 14% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'1375' && $pricesubtotal<='2405') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 2406 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 14% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'1375' && $pricesubtotal<='2405') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 2406 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 14% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'1375' && $pricesubtotal<='2405') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 2406 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 14%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//CHF >2405, <=3435, 19%
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'2405' && $pricesubtotal<='3435') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 3436 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 19% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'2405' && $pricesubtotal<='3435') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 3436 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 19% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'2405' && $pricesubtotal<='3435') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 3436 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 19% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'2405' && $pricesubtotal<='3435') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 3436 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 19%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}


//CHF >3435, <=4236, 23%
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'3435' && $pricesubtotal<='4236') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 4237 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 23% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'3435' && $pricesubtotal<='4236') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 4237 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 23% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'3435' && $pricesubtotal<='4236') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 4237 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 23% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'3435' && $pricesubtotal<='4236') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 4237 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 23%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//CHF >4236, <=5725, 27%
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'4236' && $pricesubtotal<='5725') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 5726 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 27% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'4236' && $pricesubtotal<='5725') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 5726 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 27% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'4236' && $pricesubtotal<='5725') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 5726 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 27% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'4236' && $pricesubtotal<='5725') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 5726 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 27%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//CHF >5725, 33%
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'5725') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p><span>You reached 33% discount.</span> <br>This is your maximum saving level.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'5725') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 33% de réduction.</span> <br>C'est votre niveau d'économie maximum.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'5725') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><span>Sie haben 33% Rabatt erhalten.</span> <br>Dies ist Ihre maximale Einsparungsebene.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'5725') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 33%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}


// GBP

//GBP >175, <=523, 4%
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'175' && $pricesubtotal<='523') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 524 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>You reached 4% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'175' && $pricesubtotal<='523') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 524 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 4% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'175' && $pricesubtotal<='523') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 524 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 4% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'175' && $pricesubtotal<='523') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 524 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 4%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//GBP >523, <=1045, 8%
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'523' && $pricesubtotal<='1045') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 1046 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 8% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'523' && $pricesubtotal<='1045') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 1046 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 8% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'523' && $pricesubtotal<='1045') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 1046 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 8% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'523' && $pricesubtotal<='1045') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 1046 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 8%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//GBP >1045, <=1830, 14%
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1045' && $pricesubtotal<='1830') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 1831 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 14% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1045' && $pricesubtotal<='1830') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 1831 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 14% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1045' && $pricesubtotal<='1830') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 1831 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 14% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1045' && $pricesubtotal<='1830') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 1831 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 14%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php  
}

//GBP >1830, <=2615, 19%
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1830' && $pricesubtotal<='2615') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 2616 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 19% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1830' && $pricesubtotal<='2615') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 2616 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 19% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1830' && $pricesubtotal<='2615') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 2616 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 19% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1830' && $pricesubtotal<='2615') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 2616 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 19%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//GBP >2615, <=3223, 23%
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'2615' && $pricesubtotal<='3223') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 3224 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 23% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'2615' && $pricesubtotal<='3223') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 3224 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 23% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'2615' && $pricesubtotal<='3223') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 3224 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 23% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'2615' && $pricesubtotal<='3223') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 3224 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 23%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//GBP >3223, <=4355, 27%
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'3223' && $pricesubtotal<='4355') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 4356 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 27% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'3223' && $pricesubtotal<='4355') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 4356 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 27% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'3223' && $pricesubtotal<='4355') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 4356 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 27% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'3223' && $pricesubtotal<='4355') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 4356 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 27%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//GBP >4355, 33%
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'4355') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p><span>You reached 33% discount.</span> <br>This is your maximum saving level.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'4355') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 33% de réduction.</span> <br>C'est votre niveau d'économie maximum.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'4355') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><span>Sie haben 33% Rabatt erhalten.</span> <br>Dies ist Ihre maximale Einsparungsebene.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'4355') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 33%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php  
}


// USD

//USD >229, <=686, 4%
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'229' && $pricesubtotal<='686') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 687 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>You reached 4% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'229' && $pricesubtotal<='686') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 687 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 4% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'229' && $pricesubtotal<='686') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 687 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 4% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'229' && $pricesubtotal<='686') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 687 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 8% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php  
}

//USD >686, <=1372, 8%
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'686' && $pricesubtotal<='1372') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 1373 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 8% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'686' && $pricesubtotal<='1372') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 1373 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 8% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'686' && $pricesubtotal<='1372') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 1373 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 8% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'686' && $pricesubtotal<='1372') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 1373 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 8%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//USD >1372, <=2400, 14%
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'1372' && $pricesubtotal<='2400') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 2401 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 14% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'1372' && $pricesubtotal<='2400') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 2401 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 14% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'1372' && $pricesubtotal<='2400') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 2401 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 14% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'1372' && $pricesubtotal<='2400') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 2401 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 14%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//USD >2400, <=3430, 19%
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'2400' && $pricesubtotal<='3430') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 3431 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 19% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'2400' && $pricesubtotal<='3430') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 3431 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 19% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'2400' && $pricesubtotal<='3430') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 3431 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 19% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'2400' && $pricesubtotal<='3430') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 3431 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 19%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//USD >3420, <=4230, 23%
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'3430' && $pricesubtotal<='4230') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 4231 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 23% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'3430' && $pricesubtotal<='4230') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 4231 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 23% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'3430' && $pricesubtotal<='4230') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 4231 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 23% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'3430' && $pricesubtotal<='4230') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 4231 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 23%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php  
}

//USD >4230, <=5716, 27%
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'4230' && $pricesubtotal<='5716') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 5717 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 27% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'4230' && $pricesubtotal<='5716') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 5717 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 27% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'4230' && $pricesubtotal<='5716') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 5717 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 27% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'4230' && $pricesubtotal<='5716') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 5717 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 27%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//USD >5716, 33%
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'5716') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p><span>You reached 33% discount.</span> <br>This is your maximum saving level.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'5716') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 33% de réduction.</span> <br>C'est votre niveau d'économie maximum.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'5716') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><span>Sie haben 33% Rabatt erhalten.</span> <br>Dies ist Ihre maximale Einsparungsebene.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'5716') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 33%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php  
}



// DKK

//DKK >1492, <=4476, 4%
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'1492' && $pricesubtotal<='4476') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 4477 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>You reached 4% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'1492' && $pricesubtotal<='4476') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 4477 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 4% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'1492' && $pricesubtotal<='4476') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 4477 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 4% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'1492' && $pricesubtotal<='4476') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 4477 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 4%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-4-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//DKK >4476, <=8952, 8%
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'4476' && $pricesubtotal<='8952') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 8953 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 8% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'4476' && $pricesubtotal<='8952') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 8953 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 8% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'4476' && $pricesubtotal<='8952') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 8953 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 8% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'4476' && $pricesubtotal<='8952') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 8953 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 8%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-8-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//DKK >8952, <=15665, 14%
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'8952' && $pricesubtotal<='15665') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 15666 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 14% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'8952' && $pricesubtotal<='15665') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 15666 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 14% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'8952' && $pricesubtotal<='15665') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 15666 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 14% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'8952' && $pricesubtotal<='15665') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 15666 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 14%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-14-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//DKK >15665, <=22379, 19%
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'15665' && $pricesubtotal<='22379') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 22380 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 19% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'15665' && $pricesubtotal<='22379') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 22380 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 19% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'15665' && $pricesubtotal<='22379') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 22380 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 19% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'15665' && $pricesubtotal<='22379') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 22380 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 19%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-19-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//DKK >22379, <=27601, 23%
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'22379' && $pricesubtotal<='27601') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 27602 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 23% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'22379' && $pricesubtotal<='27601') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 27602 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 23% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'22379' && $pricesubtotal<='27601') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 27602 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 23% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'22379' && $pricesubtotal<='27601') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 27602 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 23%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-23-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//DKK >27601, <=37299, 27%
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'27601' && $pricesubtotal<='37299') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <?php $next_level_price = 37300 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><p><span>You reached 27% discount.</span> <br>To get to next discount level, you need to spend <b>€<?php echo $next_level_price; ?>,00</b> more:</p></div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'27601' && $pricesubtotal<='37299') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <?php $next_level_price = 37300 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 27% de réduction.</span> <br>Pour passer au niveau de remise suivant, vous devez dépenser <b>€<?php echo $next_level_price; ?>,00</b> de plus:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'27601' && $pricesubtotal<='37299') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <?php $next_level_price = 37300 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Sie haben 27% Rabatt erhalten.</span> <br>Um zur nächsten Rabattstufe zu gelangen, müssen Sie <b>€<?php echo $next_level_price; ?>,00</b> mehr ausgeben:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'27601' && $pricesubtotal<='37299') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <?php $next_level_price = 37300 - $pricesubtotal; ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 27%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-27-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}

//DKK >37299, 33%
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'37299') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p><span>You reached 33% discount.</span> <br>This is your maximum saving level.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com" class="button">Continue Shopping</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'37299') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><span>Vous avez atteint 33% de réduction.</span> <br>C'est votre niveau d'économie maximum.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/fr/" class="button">Continuer vos achats</a></div>
    <?php
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'37299') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><span>Sie haben 33% Rabatt erhalten.</span> <br>Dies ist Ihre maximale Einsparungsebene.</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/de/" class="button">Einkaufen gehen</a></div>
    <?php  
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'37299') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><span>Hai raggiunto lo sconto del 33%.</span> <br>Per arrivare al prossimo livello di sconto, è necessario spendere <b>€<?php echo $next_level_price; ?>,00</b> in più:</div>
        <div style="background:#f4f3f1;text-align:center;"><img src="http://steel-classics.com/wp-content/uploads/2018/11/pricing-table-33-1.jpg"></div>
        <div style="text-align:center;margin-top:30px;"><a href="http://steel-classics.com/it/" class="button">Continua a fare acquisti</a></div>
    <?php 
}




/*

?>

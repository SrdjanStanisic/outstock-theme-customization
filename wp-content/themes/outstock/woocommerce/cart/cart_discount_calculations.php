<?php 


//Create price without currency
$pricesubtotal = WC()->cart->subtotal;

//Check which currency is selected, what is the price range (because discount depends off price range), and what language is selected, and display info about
//current discount and what products to buy to get higher discounts

//EUR

//EUR >200, <=600, 4%
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'200' && $pricesubtotal<='600') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 4% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'200' && $pricesubtotal<='600') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 4% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'200' && $pricesubtotal<='600') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 4% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'200' && $pricesubtotal<='600') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 4%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//EUR >600, <=1200, 8%
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'600' && $pricesubtotal<='1200') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 8% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'600' && $pricesubtotal<='1200') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 8% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'600' && $pricesubtotal<='1200') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 8% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'600' && $pricesubtotal<='1200') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 8%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//EUR >1200, <=2100, 14%
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'1200' && $pricesubtotal<='2100') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 14% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'1200' && $pricesubtotal<='2100') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 14% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'1200' && $pricesubtotal<='2100') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 14% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'1200' && $pricesubtotal<='2100') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 14%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//EUR >2100, <=3000, 19%
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'2100' && $pricesubtotal<='3000') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 19% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'2100' && $pricesubtotal<='3000') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 19% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'2100' && $pricesubtotal<='3000') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 19% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'2100' && $pricesubtotal<='3000') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 19%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//EUR >3000, <=3700, 23%
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3000' && $pricesubtotal<='3700') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 23% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3000' && $pricesubtotal<='3700') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 23% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3000' && $pricesubtotal<='3700') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 23% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3000' && $pricesubtotal<='3700') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 23%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//EUR >3700, <=5000, 27%
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3700' && $pricesubtotal<='5000') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 27% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3700' && $pricesubtotal<='5000') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 27% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3700' && $pricesubtotal<='5000') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 27% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'3700' && $pricesubtotal<='5000') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 27%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//EUR >5000, 33%
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'5000') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You may also be interested in buying bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'5000') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous pouvez également être intéressé par l'achat des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'5000') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Möglicherweise interessieren Sie sich auch für den Kauf unten stehender Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='EUR') & ($pricesubtotal>'5000') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Potresti anche essere interessato all'acquisto di prodotti a soffietto:</p></div>
    <?php 
}



//CHF

//CHF >230, <=687, 4%
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'230' && $pricesubtotal<='687') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 4% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'230' && $pricesubtotal<='687') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 4% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'230' && $pricesubtotal<='687') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 4% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'230' && $pricesubtotal<='687') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 4%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//CHF >687, <=1375, 8%
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'687' && $pricesubtotal<='1375') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 8% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'687' && $pricesubtotal<='1375') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 8% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'687' && $pricesubtotal<='1375') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 8% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'687' && $pricesubtotal<='1375') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 8%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//CHF >1375, <=2405, 14%
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'1375' && $pricesubtotal<='2405') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 14% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'1375' && $pricesubtotal<='2405') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 14% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'1375' && $pricesubtotal<='2405') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 14% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'1375' && $pricesubtotal<='2405') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 14%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//CHF >2405, <=3435, 19%
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'2405' && $pricesubtotal<='3435') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 19% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'2405' && $pricesubtotal<='3435') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 19% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'2405' && $pricesubtotal<='3435') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 19% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'2405' && $pricesubtotal<='3435') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 19%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}


//CHF >3435, <=4236, 23%
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'3435' && $pricesubtotal<='4236') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 23% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'3435' && $pricesubtotal<='4236') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 23% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'3435' && $pricesubtotal<='4236') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 23% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'3435' && $pricesubtotal<='4236') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 23%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//CHF >4236, <=5725, 27%
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'4236' && $pricesubtotal<='5725') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 27% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'4236' && $pricesubtotal<='5725') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 27% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'4236' && $pricesubtotal<='5725') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 27% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'4236' && $pricesubtotal<='5725') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 27%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//CHF >5725, 33%
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'5725') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You may also be interested in buying bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'5725') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous pouvez également être intéressé par l'achat des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'5725') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Möglicherweise interessieren Sie sich auch für den Kauf unten stehender Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='CHF') & ($pricesubtotal>'5725') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Potresti anche essere interessato all'acquisto di prodotti a soffietto:</p></div>
    <?php 
}


// GBP

//GBP >175, <=523, 4%
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'175' && $pricesubtotal<='523') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 4% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'175' && $pricesubtotal<='523') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 4% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'175' && $pricesubtotal<='523') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 4% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'175' && $pricesubtotal<='523') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 4%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//GBP >523, <=1045, 8%
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'523' && $pricesubtotal<='1045') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 8% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'523' && $pricesubtotal<='1045') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 8% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'523' && $pricesubtotal<='1045') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 8% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'523' && $pricesubtotal<='1045') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 8%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//GBP >1045, <=1830, 14%
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1045' && $pricesubtotal<='1830') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 14% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1045' && $pricesubtotal<='1830') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 14% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1045' && $pricesubtotal<='1830') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 14% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1045' && $pricesubtotal<='1830') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 14%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//GBP >1830, <=2615, 19%
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1830' && $pricesubtotal<='2615') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 19% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1830' && $pricesubtotal<='2615') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 19% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1830' && $pricesubtotal<='2615') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 19% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'1830' && $pricesubtotal<='2615') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 19%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//GBP >2615, <=3223, 23%
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'2615' && $pricesubtotal<='3223') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 23% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'2615' && $pricesubtotal<='3223') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 23% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'2615' && $pricesubtotal<='3223') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 23% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'2615' && $pricesubtotal<='3223') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 23%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//GBP >3223, <=4355, 27%
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'3223' && $pricesubtotal<='4355') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 27% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'3223' && $pricesubtotal<='4355') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 27% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'3223' && $pricesubtotal<='4355') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 27% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'3223' && $pricesubtotal<='4355') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 27%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//GBP >4355, 33%
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'4355') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You may also be interested in buying bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'4355') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous pouvez également être intéressé par l'achat des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'4355') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Möglicherweise interessieren Sie sich auch für den Kauf unten stehender Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='GBP') & ($pricesubtotal>'4355') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Potresti anche essere interessato all'acquisto di prodotti a soffietto:</p></div>
    <?php 
}


// USD

//USD >229, <=686, 4%
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'229' && $pricesubtotal<='686') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 4% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'229' && $pricesubtotal<='686') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 4% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'229' && $pricesubtotal<='686') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 4% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'229' && $pricesubtotal<='686') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 4%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//USD >686, <=1372, 8%
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'686' && $pricesubtotal<='1372') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 8% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'686' && $pricesubtotal<='1372') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 8% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'686' && $pricesubtotal<='1372') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 8% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'686' && $pricesubtotal<='1372') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 8%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//USD >1372, <=2400, 14%
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'1372' && $pricesubtotal<='2400') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 14% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'1372' && $pricesubtotal<='2400') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 14% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'1372' && $pricesubtotal<='2400') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 14% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'1372' && $pricesubtotal<='2400') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 14%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//USD >2400, <=3430, 19%
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'2400' && $pricesubtotal<='3430') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 19% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'2400' && $pricesubtotal<='3430') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 19% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'2400' && $pricesubtotal<='3430') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 19% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'2400' && $pricesubtotal<='3430') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 19%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//USD >3420, <=4230, 23%
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'3430' && $pricesubtotal<='4230') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 23% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'3430' && $pricesubtotal<='4230') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 23% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'3430' && $pricesubtotal<='4230') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 23% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'3430' && $pricesubtotal<='4230') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 23%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//USD >4230, <=5716, 27%
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'4230' && $pricesubtotal<='5716') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 27% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'4230' && $pricesubtotal<='5716') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 27% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'4230' && $pricesubtotal<='5716') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 27% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'4230' && $pricesubtotal<='5716') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 27%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//USD >5716, 33%
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'5716') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You may also be interested in buying bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'5716') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous pouvez également être intéressé par l'achat des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'5716') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Möglicherweise interessieren Sie sich auch für den Kauf unten stehender Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='USD') & ($pricesubtotal>'5716') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Potresti anche essere interessato all'acquisto di prodotti a soffietto:</p></div>
    <?php 
}



// DKK

//DKK >1492, <=4476, 4%
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'1492' && $pricesubtotal<='4476') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 4% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'1492' && $pricesubtotal<='4476') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 4% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'1492' && $pricesubtotal<='4476') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 4% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'1492' && $pricesubtotal<='4476') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 4%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//DKK >4476, <=8952, 8%
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'4476' && $pricesubtotal<='8952') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 8% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'4476' && $pricesubtotal<='8952') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 8% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'4476' && $pricesubtotal<='8952') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 8% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'4476' && $pricesubtotal<='8952') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 8%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//DKK >8952, <=15665, 14%
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'8952' && $pricesubtotal<='15665') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 14% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'8952' && $pricesubtotal<='15665') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 14% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'8952' && $pricesubtotal<='15665') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 14% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'8952' && $pricesubtotal<='15665') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 14%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//DKK >15665, <=22379, 19%
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'15665' && $pricesubtotal<='22379') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 19% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'15665' && $pricesubtotal<='22379') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 19% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'15665' && $pricesubtotal<='22379') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 19% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'15665' && $pricesubtotal<='22379') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 19%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//DKK >22379, <=27601, 23%
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'22379' && $pricesubtotal<='27601') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 23% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'22379' && $pricesubtotal<='27601') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 23% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'22379' && $pricesubtotal<='27601') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 23% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'22379' && $pricesubtotal<='27601') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 23%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//DKK >27601, <=37299, 27%
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'27601' && $pricesubtotal<='37299') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You reached 27% discount. <br>To get to next discount level, buy some of the bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'27601' && $pricesubtotal<='37299') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous avez atteint 27% de réduction. <br>Pour obtenir le niveau de remise suivant, achetez certains des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'27601' && $pricesubtotal<='37299') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Sie haben 27% Rabatt erhalten. <br>Um zur nächsten Rabattstufe zu gelangen, kaufen Sie einige der unten aufgeführten Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'27601' && $pricesubtotal<='37299') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Hai raggiunto lo sconto del 27%. <br>Per raggiungere il livello di sconto successivo, acquista alcuni dei prodotti a soffietto:</p></div>
    <?php 
}

//DKK >37299, 33%
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'37299') && (ICL_LANGUAGE_CODE=='en')) {
    ?>
        <div class="discounts_cart_title"><p>You may also be interested in buying bellow products:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'37299') && (ICL_LANGUAGE_CODE=='fr')) {
    ?>
        <div class="discounts_cart_title"><p>Vous pouvez également être intéressé par l'achat des produits ci-dessous:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'37299') && (ICL_LANGUAGE_CODE=='de')) {
    ?>
        <div class="discounts_cart_title"><p>Möglicherweise interessieren Sie sich auch für den Kauf unten stehender Produkte:</p></div>
    <?php 
}
if ((get_woocommerce_currency()=='DKK') & ($pricesubtotal>'37299') && (ICL_LANGUAGE_CODE=='it')) {
    ?>
        <div class="discounts_cart_title"><p>Potresti anche essere interessato all'acquisto di prodotti a soffietto:</p></div>
    <?php 
}




/*

?>
<div class="discounts_cart_title"><p>Buy bellow products to get higher savings</p></div>
<?php  

*/

//Show products for EUR only
if(get_woocommerce_currency()=='EUR'): {

    ?>

        <ul class="products">
        <?php
        if($pricesubtotal>'200' && $pricesubtotal<='600') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 600,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 400,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'600' && $pricesubtotal<='1200') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 600,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'1200' && $pricesubtotal<='2100') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1100,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'2100' && $pricesubtotal<='3000') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1100,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'3000' && $pricesubtotal<='3700') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1300,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 700,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'3700' && $pricesubtotal<='5000') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 2500,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 1300,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'5000') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 99999999,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 1000,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();
                    wc_get_template_part( 'content', 'product' );                   

                endwhile;
            } else {
                echo __( 'No products found' );
            }
            wp_reset_postdata();
        ?>
        </ul>
        <?php 
                


}


//Show products for USD only
elseif(get_woocommerce_currency()=='USD'): {

     ?>

        <ul class="products">
        <?php
        if($pricesubtotal>'229' && $pricesubtotal<='686') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 600,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 400,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'686' && $pricesubtotal<='1372') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 600,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'1372' && $pricesubtotal<='2400') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1100,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'2400' && $pricesubtotal<='3430') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1100,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'3430' && $pricesubtotal<='4230') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1300,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 700,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'4230' && $pricesubtotal<='5716') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 2500,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 1300,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'5716') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 99999999,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 1000,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();
                    wc_get_template_part( 'content', 'product' );                   

                endwhile;
            } else {
                echo __( 'No products found' );
            }
            wp_reset_postdata();
        ?>
        </ul>
        <?php 
                
}


//Show products for CHF only
elseif(get_woocommerce_currency()=='CHF'): {

     ?>

        <ul class="products">
        <?php
        if($pricesubtotal>'230' && $pricesubtotal<='687') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 600,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 400,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'687' && $pricesubtotal<='1375') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 600,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'1375' && $pricesubtotal<='2405') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1100,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'2405' && $pricesubtotal<='3435') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1100,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'3435' && $pricesubtotal<='4236') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1300,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 700,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'4236' && $pricesubtotal<='5725') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 2500,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 1300,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'5725') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 99999999,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 1000,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();
                    wc_get_template_part( 'content', 'product' );                   

                endwhile;
            } else {
                echo __( 'No products found' );
            }
            wp_reset_postdata();
        ?>
        </ul>
        <?php 
                



}


//Show products for GBP only
elseif(get_woocommerce_currency()=='GBP'): {

     ?>

        <ul class="products">
        <?php
        if($pricesubtotal>'175' && $pricesubtotal<='523') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 600,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 400,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'523' && $pricesubtotal<='1045') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 600,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'1045' && $pricesubtotal<='1830') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1100,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'1830' && $pricesubtotal<='2615') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1100,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'2615' && $pricesubtotal<='3223') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1300,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 700,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'3223' && $pricesubtotal<='4355') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 2500,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 1300,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'4355') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 99999999,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 1000,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();
                    wc_get_template_part( 'content', 'product' );                   

                endwhile;
            } else {
                echo __( 'No products found' );
            }
            wp_reset_postdata();
        ?>
        </ul>
        <?php 
                


}


//Show products for DKK only
elseif(get_woocommerce_currency()=='DKK'): {

     ?>

        <ul class="products">
        <?php
        if($pricesubtotal>'1492' && $pricesubtotal<='4476') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 600,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 400,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'4476' && $pricesubtotal<='8952') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 600,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'8952' && $pricesubtotal<='15665') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1100,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'15665' && $pricesubtotal<='22379') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1100,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 900,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'22379' && $pricesubtotal<='27601') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 1300,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 700,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'27601' && $pricesubtotal<='37299') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 2500,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 1300,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
        if($pricesubtotal>'37299') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
                'orderby' => "rand",
                'meta_query' => array(
            'relation' => 'and',
            array(
                'key' => '_price',
                'value' => 99999999,
                'compare' => '<=',
                'type' => 'NUMERIC'
            ),
            array(
                'key' => '_price',
                'value' => 1000,
                'compare' => '>',
                'type' => 'NUMERIC'
            )
            )
            );
        }
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();
                    wc_get_template_part( 'content', 'product' );                   

                endwhile;
            } else {
                echo __( 'No products found' );
            }
            wp_reset_postdata();
        ?>
        </ul>
        <?php 
                
    


}
endif;
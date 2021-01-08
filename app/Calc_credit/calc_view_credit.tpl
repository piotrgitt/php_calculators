{extends file="../templates/main.tpl"}



{block name=content}


<!-- Form -->
<section>
    <h3>Kalkulator kredytowy</h3>
    <form action="{$approot}/app/Calc_credit/calc_credit.php" method="GET" >
            <div class="row gtr-uniform gtr-50">
                    <div class="col-6 col-12-xsmall">

                    <input type="text" id="id_x" name="kwota" value="{$kwota}" placeholder="Wpisz kwotę" />
                    </div>
                    <div class="col-6 col-12-xsmall">
                            <input type="text" id="id_y" name="lata" value="{$lata}" placeholder="Wpisz lata" />
                    </div>

                    <div class="col-6 col-12-xsmall">
                            <input type="text" id="id_z" name="oprocentowanie" value="{$oprocentowanie}" placeholder="%" />
                    </div>

                    <div class="col-12">
                            <ul class="actions">
                                    <li><input type="submit" value="Oblicz" class="primary" /></li>
                            </ul>
                    </div>
            </div>
    </form>
</section>
                    

<!-- Messages -->       
{if isset($messages)} 
        {if count ( $messages ) > 0}
        <div style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f55; width:300px; color:black;font-weight: bold; ">
        <h4 style="color:black; font-weight: bold;">Wystąpiły błędy: </h4>
        <ol class="err">
                {foreach  $messages as $msg }
                {strip}
                        <li>{$msg}</li>
                {/strip}
                {/foreach}
                </ol>
        </div>
        {/if}
{/if}


<!-- Results -->    
{if isset($result)}
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #5199FF; width:300px;">
Miesięczna rata kredytu: {$result} PLN
</div>
{/if}                   


{/block}    

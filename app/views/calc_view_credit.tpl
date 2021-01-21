{extends file="main.tpl"}

{block name=content}


<!-- Form -->
<section>
    <h3>Kalkulator kredytowy</h3>
    <form action="{$action_url}process" method="POST" >
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
                    




<!-- Results -->    
{if isset($result)}
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #5199FF;">
    Miesięczna rata kredytu: {$result|string_format:"%.2f"} PLN </br>
    Całkowity koszt kredytu: {$total_cost|string_format:"%.2f"} PLN
</div>
{/if}   

</br></br>



{/block}    

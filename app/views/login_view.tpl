
{extends file="login_template.tpl"}

{block name=content}
<!-- Form -->
<section>
    <h3>Zaloguj</h3>
    <form action="{$action_url}login" method="POST" >
            <div class="row gtr-uniform gtr-50">
                
                    <div class="col-12 col-12-xsmall">
                        <input type="text" id="login" name="login" value="{$form->login}" placeholder="Login" />
                    </div>
                    
                    <div class="col-12 col-12-xsmall">
                        <input type="password" id="pass" name="pass" value="{$form->login}" placeholder="Hasło" />
                    </div>
                    
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Oblicz" class="primary" /></li>
                        </ul>
                    </div>
                    
            </div>
    </form>
</section>
                   
</br></br>



<!-- Messages -->       
{if $messages->isError()} 
    <div style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f55; width:300px; color:black;font-weight: bold; ">
    <h4 style="color:black; font-weight: bold;">Wystąpiły błędy: </h4>
    <ol class="err">
            {foreach  $messages->getErrors() as $msg }
            {strip}
                    <li>{$msg}</li>
            {/strip}
            {/foreach}
            </ol>
    </div> 
{/if}

{if $messages->isInfo()} 
    <div style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #7bf; width:300px; color:black;font-weight: bold; ">
    <h4 style="color:black; font-weight: bold;">INFO: </h4>
    <ol class="err">
            {foreach  $messages->getInfos() as $msg }
            {strip}
                    <li>{$msg}</li>
            {/strip}
            {/foreach}
            </ol>
    </div> 
{/if}

{/block}

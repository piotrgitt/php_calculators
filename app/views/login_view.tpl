
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




{/block}

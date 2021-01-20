{extends file="main.tpl"}

{block name=content}
<!-- Tabela -->
<section>
    <h3>Wynik</h3>
    <div class="table-wrapper">
                <table>
                        <thead>
                                <tr>
                                        <th>ID wyniku</th>
                                        <th>Kwota</th>
                                        <th>Lata</th>
                                        <th>Oprocentowanie</th>
                                        <th>Rata</th>
                                </tr>
                        </thead>
                        <tbody>
                                
                                {foreach $results as $data}
                                   <tr>
                                        <td>{$data["id_wyniku"]}</td>
                                        <td>{$data["kwota"]|string_format:"%.2f"}</td>
                                        <td>{$data["lata"]}</td>
                                        <td>{$data["oprocentowanie"]|string_format:"%.2f"}%</td>
                                        <td>{$data["rata"]|string_format:"%.2f"} PLN</td>
                                    </tr> 
                                {/foreach}    

                               
                        </tbody>
                        <tfoot>
                                <tr>
                                        <td colspan="2"></td>
                                </tr>
                        </tfoot>
                </table>
        </div>
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
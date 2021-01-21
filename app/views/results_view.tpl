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
                                        <th>Data i czas</th>
                                </tr>
                        </thead>
                        <tbody>
                                {$i = 1}
                                {foreach $results as $data}    
                                   <tr>
                                        <td>{$i++} </td>
                                        <td>{$data["kwota"]|string_format:"%.2f"}</td>
                                        <td>{$data["lata"]}</td>
                                        <td>{$data["oprocentowanie"]|string_format:"%.2f"}%</td>
                                        <td>{$data["rata"]|string_format:"%.2f"} PLN</td>
                                        <td>{$data["data"]}</td>
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





{/block}

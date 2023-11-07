<div>  
    <div class="col-xl-2 m-1 d-flex justify-content-end">
        <input value="" id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date">
    </div>
    <table class="table-striped table table-hover text-center">
        <thead>
            <tr>
                <th scope="col">Descrição</th>
                <th scope="col">Data</th>
                <th scope="col">Valor</th>
                <th scope="col">Tipo</th>
                <th scope="col">Parcelas</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Salário</td>
                <td>22-09-2023</td>
                <td>1000,00</td>
                <td>Entrada</td>
                <td>-</td>
                <td>
                    <a class="text-primary active px-2 btn btn-sm" href="">
                        <i class="bi-pencil-square"></i>
                    </a>
                    <a class="btn btn-link active btn-sm" id="delete" onclick="">
                        <i class="bi-trash-fill text-danger"></i>
                    </a>   
                </td>
            </tr>
            <tr>
                <td>Formatação</td>
                <td>22-09-2023</td>
                <td>50,00</td>
                <td>Entrada</td>
                <td>-</td>
                <td>
                    <a class="text-primary active px-2 btn btn-sm" href="">
                        <i class="bi-pencil-square"></i>
                    </a>
                    <a class="btn btn-link active btn-sm" id="delete" onclick="">
                        <i class="bi-trash-fill text-danger"></i>
                    </a>   
                </td>
            </tr>
            <!--tr>
                <th colspan="6">
                    <span>Nenhum registro encontrado...</span>
                </th>
            </tr-->
        </tbody>
    </table>
</div>
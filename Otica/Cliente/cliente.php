<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Danpha's</title>
</head>

<body>
    <nav>
        <a href="/Index/index.html"><img src="/Img/logo.png" alt="logo" class="logo"></a>
        <div class="search-box">
            <input type="text" class="search-text" placeholder="Pesquisar...">
        </div>
        <ul>
            <li><span class='user'>Nome do usuário</span></li>
            <li><a href="/Login/login.html">Sair</a></li>
        </ul>
    </nav>
    <br>
    <div class="box">
        <div id="edit-client">
            <a href="/cad_edit/cad_edit.html"><img class="edit-img" src="/Img/edit.svg" alt="Editar"></a>
        </div>
        <div class="box-client">
            <div id="direita">
                <span style="float: right; margin: 5px;">
                    Data de Cadastro :
                    <span class="tbold">Date </span><br>
                    Usuario Responsavel :
                    <span class="tbold">User </span><br>
                    Celular :
                    <span class="tbold">Celular </span><br>
                    Telefone :
                    <span class="tbold">Telefone </span><br>
                </span>
            </div>
            <div id="esquerda" style="margin: 5px;">
                Cliente ID :
                <span class="tbold">ID </span><br>
                Nome Cliente :
                <span class="tbold">Nome </span><br>
                CPF/CNPJ :
                <span class="tbold">CPF </span><br>
                Cidade :
                <span class="tbold">Cidade </span><br>
            </div>
        </div>
    </div>

    <br>

    <div class="table-client">
        <div class="d-table">
            <div class="b-compra">
                <button><a href="/Nova_Compra/new_compra.html" style="text-decoration: none; color: white;">Nova Compra</a></button>
            </div>
            <div class="data-table" style="float: right; margin: 5px;">
                <label for="filtro">Filtro</label>
                <select id="filtro" name="filtro">
                    <option value="id-filtro">ID Compra</option>
                    <option value="oe">OE</option>
                    <option value="od">OD</option>
                    <option value="valor">Valor</option>
                    <option value="dia">Dia</option>
                    <option value="responsavel">Responsável</option>
                </select>
            </div>
        </div>

        <table class="table-orders">
            <thead>
                <tr role="row" style="border-top: 1px solid;">
                    <th>
                        <div>
                            <span>ID Compra</span>
                        </div>
                    </th>
                    <th>
                        <div>
                            <span>OE</span>
                        </div>
                    </th>
                    <th>
                        <div>
                            <span>OD</span>
                        </div>
                    </th>
                    <th>
                        <div>
                            <span>Valor</span>
                        </div>
                    </th>
                    <th>
                        <div>
                        <span>Medico</span>
                        </div>
                    </th>
                    <th>
                        <div>
                            <span>Observações</span>
                        </div>
                    </th>
                    <th>
                        <div>
                            <span>Dia</span>
                        </div>
                    </th>
                    <th>
                        <div>
                        <span>Responsavel</span>
                        </div>
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><a href="/Informação/id_protocolo.html">1</a>
                    <td>1.5</td>
                    <td>1.25</td>
                    <td>R$ 100,00</td>
                    <td>Dr. Fran</td>
                    <td>Cliente comprou uma armação meio gay</td>
                    <td>20/05/2023</td>
                    <td>Cleitin</td>
                </tr>
                <tr>
                    <td><a href="/Informação/id_protocolo.html">2</a></td>
                    <td>2.0</td>
                    <td>1.75</td>
                    <td>R$ 150,00</td>
                    <td>Dr. Mathias</td>
                    <td>Cliente comprou lente rosa</td>
                    <td>20/05/2023</td>
                    <td>Romualda</td>
                </tr>
            </tbody>
        </table>
    </div>


</body>

</html>
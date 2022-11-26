<?php
if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada");
}
?>

<div class="row d-flex justify-content-center">
    <div class="col-9">
        <a href="<?php echo $this->dados['contato']['link_btn_one']; ?>" target="_blank" class="me-3">
            <button class="btn btn-success my-2" data-anime="left"><?php echo $this->dados['contato']['btn_one']; ?></button>
        </a>
        <a data-bs-toggle="modal" href="#<?php echo $this->dados['contato']['link_btn_two']; ?>">
            <button class="btn btn-secondary my-2" data-anime="right"><?php echo $this->dados['contato']['btn_two']; ?></button>
        </a>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="<?php echo $this->dados['contato']['id_link_modal']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title heading-one" id="exampleModalToggleLabel">Faça seu orçamento agora mesmo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="container">
                <div class="col-12">
                    <div class="modal-body">
                        
                        <!-- Project details-->
                       
                        <form class="row g-3" name="add_msg" method="POST" action="">
                            <div class="col-md-6">
                                <label for="inputName" class="form-label d-flex justify-content-start">Seu nome</label>
                                <input type="text" class="form-control" id="name" name="nome" required>    

                            </div>                    
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label d-flex justify-content-start">Email</label>
                                <input type="email" class="form-control" id="Email" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label d-flex justify-content-start">Endereço Completo</label>
                                <input type="text" class="form-control" id="Address" name="address" placeholder="Coloque seu endereço" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputFone" class="form-label d-flex justify-content-start">Telefone, Celular ou WhatsApp</label>
                                <input type="text" class="form-control" id="Fone" name="phone" placeholder="Um telefone válido" pattern="\([0-9]{2}\)[0-9]{4,6}-[0-9]{3,4}$" required>
                                <!--                                <div class="help-block with-errors"></div>-->
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label d-flex justify-content-start">Cidade</label>
                                <input type="text" class="form-control" id="City" name="cidade" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label d-flex justify-content-start">Estado</label>
                                <select id="State" name="estado" class="form-select" required>
                                    <option selected></option>
                                    <option>  Amazonas</option>
                                    <option>  Amazonas</option>
                                    <option> Acre</option>
                                    <option> Alagoas</option>
                                    <option> Amapá</option>
                                    <option> Bahia</option>
                                    <option> Ceará</option>
                                    <option> Distrito Federal</option>
                                    <option> Espírito Santo</option>
                                    <option> Goiás</option>
                                    <option> Maranhão</option>
                                    <option> Mato Grosso do Sul</option>
                                    <option> Mato Grosso do Sul</option>
                                    <option> Minas Gerais</option>
                                    <option> Pará </option>
                                    <option> Paraíba</option>
                                    <option> Paraná</option>
                                    <option> Pernambuco</option>
                                    <option> Piauí</option>
                                    <option> Rio de Janeiro</option>
                                    <option> Rio Grande do Norte</option>
                                    <option> Rio Grande do Sul</option>
                                    <option> Rondônia</option>
                                    <option> Roraima</option>
                                    <option> Santa Catarina</option>
                                    <option> São Paulo</option>
                                    <option> Sergipe</option>
                                    <option> Tocantins</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="inputCep" class="form-label d-flex justify-content-start">CEP</label>
                                <input type="text" class="form-control" name="cep" id="Cep" required>
                            </div>

                            <div class="mb-3">
                                <label for="validationTextarea" class="form-label d-flex justify-content-start">Descreva sua solicitação de orçamento</label>
                                <textarea class="form-control" id="Menssage" name="mensagem" rows="9" required></textarea>
                            </div> 

                            <div class="col-12 d-flex justify-content-end">
                                <input type="submit" class="btn btn-success d-flex justify-content-end" value="Enviar Solicitação" id="SendAddMsg" name="SendAddMsg">
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


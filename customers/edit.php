<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome / Razão Social</label>
      <input type="text" class="form-control" name="customer['name']" value="<?php echo $customer['name']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF</label>
      <input type="text" class="form-control" name="customer['cpf_cnpj']" value="<?php echo $customer['cpf_cnpj']; ?>" maxlength="14">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="date" class="form-control" name="customer['birthdate']" value="<?php echo $customer['birthdate']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" name="customer['address']" value="<?php echo $customer['address']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" name="customer['hood']" value="<?php echo $customer['hood']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="text" class="form-control" name="customer['zip_code']" value="<?php echo cep($customer['zip_code']); ?>" maxlength="8">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="customer['created']" disabled value="<?php echo $customer['created']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Município</label>
      <input type="text" class="form-control" name="customer['city']" value="<?php echo $customer['city']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="celPhone(customer['phone'])" value="<?php echo $customer['phone']; ?>" maxlength="10">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="telefone(customer['mobile'])" value="<?php echo $customer['mobile']; ?>" maxlength="11">
    </div>

    <div class="form-group col-sm-1">
      <label for="campo3">UF</label>
      <input type="text" class="form-control" name="customer['state']" value="<?php echo $customer['state']; ?>" maxlength="2">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Inscrição Estadual</label>
      <input type="text" class="form-control" name="customer['ie']" value="<?php echo $customer['ie']; ?>" maxlength="14">
    </div>

    <div class="row">
    <div class="form-group col-md-6">
      <label for="photo">Foto Atual:</label><br>
      <?php if (!empty($customer['photo'])): ?>
        <img src="<?php echo $customer['photo']; ?>" alt="Foto Atual" style="max-width: 200px; max-height: 200px;"><br>
        <label for="change_photo">Alterar Foto:</label>
      <?php else: ?>
        <p>Sem foto disponível.</p>
        <label for="photo">Adicionar Foto:</label>
      <?php endif; ?>
      <input type="file" name="photo" id="photo" class="form-control">
    </div>
  </div>

  </div>
  <div id="actions" class="row mt-2">
    <div class="col-md-12">
      <button type="submit" class="btn btn-dark">Salvar</button>
      <a href="index.php" class="btn btn-light">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
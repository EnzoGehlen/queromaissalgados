<?php
session_start();
if (@$_GET['existente']) {
    $msg = "(Você já iniciou um processo de inscrição mas ainda não o finalizou, por favor continue a sua inscrição.)";
}

?>

<form action="checkout.php" method='post'>


    <h3 class="wow fadeInDown" data-wow-delay="0.4s">Segunda Etapa <?=@$msg?></h3>

    <input type="hidden" name='cpf' class="hidden" value='<?=@$_SESSION['cpf']?>'>
    <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
        <input type="text" class="form__input" id="" value='<?=@$_SESSION['nome']?>' name="nome">
        <label class="form__label" for="">
            <span class="form__label-content">Nome</span>
        </label>
    </div>
    <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
        <input type="text" class="form__input" value='<?=@$_SESSION['telefone']?>' id="" name="telefone">
        <label class="form__label" for="">
            <span class="form__label-content">Telefone</span>
        </label>
    </div>
    <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
        <input type="text" class="form__input" id="" value='<?=@$_SESSION['email']?>' name="email">
        <label class="form__label" for="">
            <span class="form__label-content">Email</span>
        </label>
    </div>
    <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">

        <select class='uk-select' name="local" id="">
            <?php
if (@$_SESSION['local']) {
    switch (@$_SESSION['local']) {
        case 0:echo ' <option selected value="0">Mal. Cândido Rondom - PR</option>';
            echo '<option value="1">Três Passos - RS</option>';
            break;
        case 1:echo '<option selected value="1">Três Passos - RS</option>';
            echo ' <option  value="0">Mal. Cândido Rondom - PR</option>';
            break;
    }

} else {
    echo '<option selected>Selecione o local do curso</option>';
    echo ' <option value="0">Mal. Cândido Rondom - PR</option>';
    echo '<option value="1">Três Passos - RS</option>';
}

?>

        </select>







    </div>
    <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">



        <select class='uk-select' name="turma" id="">
            <?php
if (@$_SESSION['turma']) {
    switch (@$_SESSION['turma']) {
        case 0:echo '<option value="1">Tarde</option>';
            echo ' <option selected value="0">Manhã</option>';
            break;
        case 1:echo '<option selected value="1">Tarde</option>';
            echo ' <option value="0">Manhã</option>';
            break;
    }

} else {
    echo '<option selected>Selecione a turma </option>';
    echo ' <option value="0">Manhã</option>';
    echo '<option value="1">Tarde</option>';
}

?>

        </select>
    </div>



    <div class="form__wrapper--submit wow fadeInLeft" data-wow-delay="0.7s">
        <div class="form__input-submit">
            <button name="submit" class="btn btn-block">Continuar para o checkout</button>
        </div>
    </div>

</form>
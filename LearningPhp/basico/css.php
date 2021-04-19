<div class="titulo">Integracao CSS</div>

<h1  center dobro>
    <?php
    echo 'Ola ';
    echo '<small>';
    echo 'Mundo!';
    echo '</small>';
    ?>
</h1>

<?="<div azul>Outra forma de se expressar!</div>"?>

<br>

<div center><button><?= "Legal" ?></button></div>

<style>
    button{
        padding: 5px <?= 2*10?>;
        background-color: #1867c0;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
    }

    [center]{
        display: flex;
        justify-content: center;
    }

    [azul]{
        color: #1867c0;
    }

    [dobro]{
        font-size: 2rem;
    }

</style>
<?php

function retira_acentos($texto) {
    $array1 = array("á", "à", "â", "ã", "ä", "é", "è", "ê", "ë", "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö", "ú", "ù", "û", "ü", "ç"
        , "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü", "Ç");
    $array2 = array("&aacute;", "&agrave;", "&acirc;", "&atilde;", "a", "&eacute;", "&egrave;", "&ecirc;", "e", "&iacute;", "&igrave;", "&icirc;", "i", "&oacute;",
        "&ograve;", "&ocirc;", "&otilde;", "o", "&uacute;", "&ugrave;", "&ucirc;", "u", "&ccedil;"
        , "&Aacute;", "&Agrave;", "&Acirc;", "&Atilde;", "A", "&Eacute;", "&Egrave;", "&Ecirc;", "E",
        "&Iacute;", "&Igrave;", "&Icirc;", "I", "&Oacute;", "&Ograve;", "&Ocirc;", "&Otilde;", "O", "&Oacute;", "&Ugrave;", "&Ucirc;", "U", "&Ccedil;");
    return str_replace($array1, $array2, $texto);
}

if (isset($_POST["send"])) {
    $nome = retira_acentos(htmlspecialchars($_REQUEST['nome']));
    $matricula = $_REQUEST['matricula'];
    $categoria = htmlspecialchars($_REQUEST['categoria']);
    
    $newname = $nome . "_" . $matricula;

    //renomenando o arquivo
    rename("images/" . $_SESSION["nome_arquivo"] . ".jpg", "images/" . $newname . ".jpg");

    //deleta nome do arquivo anterior
    unset($_SESSION["nome_arquivo"]);
    ?>
    <script language="javascript">
        alert("Arquivo salvo com sucesso!");
    </script>
    <?php
}

switch ($site) {
    case 1:
        $end_site = " Av. Ant&Ocirc;nio Carlos Magalh&Atilde;es n&ordm;	4197, Brotas <br/>";
        $cidade_site = "Salvador - BA – Brasil <br/>";
        break;
    case 2:
        $end_site = "Sia Trecho 3/4 Lotes 2055/2065, n&ordm; 4197 <br/>";
        $cidade_site = "Bras&iacute;lia - DF – Brasil <br/>";
        break;
    case 3:
        $end_site = "Av. Marechal Floriano Peixoto - 214  <br/>";
        $cidade_site = "Feira de Santana - BA - Brasil  <br/>";
        break;
    case 4:
        $end_site = "Av. Tancredo Neves, n&ordm; 1543, Edf.Garcia D&rsquo;&Aacute;vila <br/>";
        $cidade_site = "Salvador - BA – Brasil  <br/>";
        break;
    case 5:
        $end_site = "602 Sul, Lote 15, conj. 02 Av. NS 2 <br/>";
        $cidade_site = "Palmas - TO - Brasil <br/>";
        break;
    case 6:
        $end_site = "Rua Jaguar&eacute; Mirim, n&ordm; 288 - Vila Leopoldina <br/>";
        $cidade_site = "S&atilde;o Paulo - SP - Brasil <br/>";
        break;
}
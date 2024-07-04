<!DOCTYPE html>
<html lang="pt">
<head>
  <title> Upload de arquivos:</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<script>
function enforceNumberValidation(ele) {
    if ($(ele).data('decimal') != null) {
        // found valid rule for decimal
        var decimal = parseInt($(ele).data('decimal')) || 0;
        var val = $(ele).val();
        if (decimal > 0) {
            var splitVal = val.split('.');
            if (splitVal.length == 2 && splitVal[1].length > decimal) {
                // user entered invalid input
                $(ele).val(splitVal[0] + '.' + splitVal[1].substr(0, decimal));
            }
        } else if (decimal == 0) {
            // do not allow decimal place
            var splitVal = val.split('.');
            if (splitVal.length > 1) {
                // user entered invalid input
                $(ele).val(splitVal[0]); // always trim everything after '.'
            }
        }
    }
}
</script>
<br /><br />
<form action="upload.php" enctype="multipart/form-data" method="POST">
  <div class="form-group">
    <label for="arquivo">Selecione o Arquivo:</label>
    <input type="file" class="form-control" name="arquivo" accept="image/*">
  </div>
   <div class="form-group">
    <label for="descricao">Descrição:</label>
    <input type="text" class="form-control" name="descricao" >
  </div>
    <div class="form-group">
    <label for="valor">Valor:</label>
    <input type="text" class="form-control" name="valor" onkeypress="return(event.charCode >= 48 && event.charCode <= 57) {} event.charCode ==44" required >
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
</form>

</div>
</body>
</html>


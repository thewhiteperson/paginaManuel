<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/general.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/header.css">
</head>
<body>
    
    <?php include 'views/templates/header.php' ?>

    <main>
        <div class="principal-img">
            <img src="img/principal.JPG" alt="">
        </div>
    </main>

    <?php include 'views/templates/footer.php' ?>

    <script>
const btnNosotros = document.getElementById("btnNosotros");
const menuNosotros = document.getElementById("menuNosotros");

btnNosotros.addEventListener("click", function(e) {
    e.preventDefault();
    menuNosotros.classList.toggle("active");
});

// Cerrar al hacer clic fuera
document.addEventListener("click", function(e) {
    if (!btnNosotros.contains(e.target) && !menuNosotros.contains(e.target)) {
        menuNosotros.classList.remove("active");
    }
});
</script>

</body>
</html>
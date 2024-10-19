<?php include $_SERVER['DOCUMENT_ROOT'].'/fut100/templates/header.php';?>
<style>
 .card {
  width: 280px;
  height: 467px;
  background-image: url('img/carta.webp');
  background-position: center;
  object-fit: contain;
  padding: 10px;
}

.player-info {
  text-align: center;
}

.player-name {
  font-size: 30px;
  font-weight: bold;
  margin-bottom: 10px;
  color: #000;
}

.player-stats {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.stat {
  display: flex;
  justify-content: space-between;
  width: 100%;
  margin-bottom: 5px;
}

.label {
  font-size: 18px;
  font-weight: bold;
  color: #BF775F;
}

.value {
  font-size: 18px;
  color: #000 ;
}
</style>
<main class="bg-center bg-no-repeat bg-[url('img/degradado.webp')] bg-cover bg-gray-700 bg-blend-multiply">
<div class="grid grid-cols-2 gap-10 p-40">
    <div data-aos="fade-right">
        <h4 class="text-white font-sans text-md m-3">DEMUESTRA LO QUE VALES</h4>
        <h1 class="mb-4 text-3xl font-extrabold text-white md:text-4xl lg:text-6xl">Como funciona</h1>
        <p class="text-white">Los datos que has obtenido en función de tus propias mediciones son inexactos y sirven de forme única y exclusiva para que tú mismo te evalues y conozcas tu nivel de rendimiento deportivo en el fútbol, para que puedas mejorar y volver a evaluarte dentro de un tiempo y puedas tener un seguimiento estimado de tu evolución.</p><br>
        <p class="text-white">Estos datos no se acumulan en ninguna base de datos, salvo en tu propio dispositivo y no pueden ser compartidos con nadie; solamente se comparten los datos obtenidos cuando las mediciones son realizadas por personal colaborador cualificado y previo consentimiento escrito del interesado los datos relativos a rendimiento deportivo obtenidos bajo esas circunstancias sí forman parte de una base de datos abierta a cualquier profesional del mundo del fútbol con un interés únicamente deportivo; nunca se comparten datos de carácter personal, incluso con autorización del interesado, siendo que en el caso de recibir alguna consulta, informamos al interesado para que sea él mismo quién aporte los datos que considere oportunos directamente al solicitante.</p>

    </div>
    <div class="flex justify-center">
    <form action="" class="bg-opacity rounded-lg shadow-xl p-10 lg: w-8/12" data-aos="flip-right" method="POST">
        <!-- <h1 class="text-center mb-10 text-3xl font-extrabold text-black md:text-4xl lg:text-xl">RELLENA CON TOTAL SINCERIDAD</h1> -->
        <div class="mb-6">
            <label for="default-input" class="block mb-2 text-sm font-medium text-black dark:text-white">Nombre</label>
            <input type="text" id="default-input" name = "nombre" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="default-input" class="block mb-2 text-sm font-medium text-black dark:text-white">Peso</label>
            <input type="text" id="default-input"  name = "peso" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="default-input" class="block mb-2 text-sm font-medium text-black dark:text-white">Edad</label>
            <input type="text" id="default-input"  name = "edad" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6">
        <label for="default-input" class="block mb-2 text-sm font-medium text-black dark:text-white">Posción</label>
            <select id="countries"   name = "posicion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Delantero</option>
            <option>Defensa</option>
            <option>Medio</option>
            <option>Extremo</option>
            <option>Portero</option>
            </select>
        </div>
        <div class="text-center">

            <input
            type="submit"
            name="enviar"
      class="inline-block rounded bg-indigo-600 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl cursor-pointer focus:outline-none focus:ring active:bg-indigo-500"/>

        </div>
    </form>
    </div>
    <?php
if (isset($_POST['enviar'])) {
    $nombre = $_POST["nombre"];
    $peso = $_POST["peso"];
    $edad = $_POST["edad"];
    $posicion = $_POST["posicion"];
    $media = 99;

    // Aquí puedes generar la tarjeta con los datos recibidos
    // y mostrarla en el formato deseado
    echo '<div class="card">
    <div class="player-info">
      <h2 class="player-name">'.$nombre.'</h2>
      <h2 class="player-name">'.$media.'</h2>
      <div class="player-stats">
        <div class="stat">
          <span class="label">Peso:</span>
          <span class="value">'.$peso.' kg</span>
        </div>
        <div class="stat">
          <span class="label">Edad:</span>
          <span class="value">'.$edad.' años</span>
        </div>
        <div class="stat">
          <span class="label">Posición:</span>
          <span class="value">'.$posicion.'</span>
        </div>
      </div>
    </div>
  </div>
  ';
}
?>
</div>
</main>



<?php include $_SERVER['DOCUMENT_ROOT'].'/fut100/templates/footer.php';?>
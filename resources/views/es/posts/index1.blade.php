<x-es.layout>
   


  <!--Package Section-->

  <section class="packages">
    <div class="box-container">
            @if ($posts->count())
                <x-posts-grid :posts="$posts" />
            @else 
                <p class="text-center">No posts yet. Please check back later.</p>
            @endif
    </div>
      <!--<div class="box">
        <div class="image">
          <img src="images/Six_Flags.jpeg">
        </div>
        <div class="content">
          <h3>Six Flags</h3>
          <p>There is no better way to end the school year than a trip to Six Flags! Our graduating seniors had a lot of fun riding rollercoasters, taking pictures, and spending time with their cohort before they head off to college. We finished the night off with a fancy dinner at Rainforest Cafe and had a surprise visit from a Balloon artist.<br><br>¡No hay mejor manera de terminar el año escolar como a ir un viaje a Six Flags! Nuestros estudiantes de último año se divirtieron mucho montando montañas rusas, tomando fotografías y pasando tiempo con su cohorte antes de ir a la universidad. Terminamos la noche con una cena elegante en Rainforest Cafe y tuvimos una visita sorpresa de un artista de globos.</p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/Kamalazoo.jpeg">
        </div>
        <div class="content">
          <h3>Kamalazoo College</h3>
          <p>Parents joined their 9 and 10 graders on Saturday April 23 on a tour to @kalamazoocollege
During the tour, parents had the opportunity to ask questions and learn about KPlan, trimester schedule, residence life, meal plans, and more!<br><br>Our group was surprised by Kalamazoo College president, Dr. Gonzalez (@kprez18 ) who gave a vibrant speech about the many educational opportunities available to all hard-working and dedicated students. He reassured parents that while finances are an important factor, it is possible to afford college!</p>
          <p>Los padres y los estudiantes de 9no y 10mo grado, asistieron a la visita de Kalamazoo College el dia Sábado 23 de abril.<br><br>Durante el tour, los padres y madres hicieron preguntas y aprendieron sobre el Plan educativo “KPlan”, el horario en trimestre, los aspectos sociales de la vida universitaria, planes alimenticios y mucho más.</p>
         </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/Escape_room.jpeg">
        </div>
        <div class="content">
          <h3>Chicago Lock Room</h3>
          <p>The Freshman class went on a group bonding trip to the escape room, Locked Chicago in Evanston last week. In three groups Scholars worked to get out of rooms in under an hour. The rooms had themes based on mad scientists, saving our planet from destruction, and creating peace between villages that had been in conflict for decades. Afterward, we went to dinner to celebrate teamwork and Freshman bonding.<br><br>Los estudiantes de primer año fueron a una excursión a una sala de escape, Locked Chicago en Evanson, la semana pasada. Los Scholars se dividieron en tres grupos y tuvieron una hora para escapar de las salas. Las salas tenían temas basados en científicos, salvando al planeta de la destrucción, y crear la paz entre pueblos que han estado en conflicto por décadas. Después de la sala de escape, fuimos a celebrar el trabajo en equipo de los Schoalars.</p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/Top_Golf.jpeg">
        </div>
        <div class="content">
          <h3>Top Golf</h3>
          <p>Before Scholars set off for winter break, the HPHS Schuler team took some time to celebrate the students' accomplishments over the past semester at Topgolf! Scholars had lots of fun swinging the club and competing against their peers to see who could score the most points by having their ball land in target. The winter party was closed by presenting awards to students who demonstrated exceptional “Scholar”ship this semester, congrats to everyone who received an award! This year's winners were:<br><br>Antes de que empezaran las vacaciones de invierno, el equipo de Schuler se tomó el tiempo para celebrar los logros del semestre pasado en Topgolf! Los Scholars se divirtieron mucho compitiendo entre ellos mismos para ver quien obtenía la mayor puntuación. El evento lo cerramos al presentar premios a los estudiantes que demostraron cualidades excepcionales este semestre. ¡Felicidades a todos los que recibieron un premio! Los ganadores de esta año fueron:<br><br>

Best STEM-itude <br>
Iliana Borca <br>
Lupe Vazquez <br>
Vanessa Rodriguez <br>
Sean Lopez <br>
Kristian Velazquez <br>
Genelle Fesalvo
<br><br>
Best REP-itude <br>
Naidelin Perez <br>
Stephanie Diaz <br>
Kristian Velazquez <br>
Alondra Rodriguez <br>
Faith Ngulube <br>
Laura Rodriguez-Rios
<br><br>
Upperclassmen Awards <br>
Denia Gomez <br>
Tanan Jigd <br>
Diana Martinez</p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/WNDM.jpeg">
        </div>
        <div class="content">
          <h3>WNDR Museum</h3>
          <p>Scholars had a wonderful time at the WNDR Museum this week where they learned about the intersection between art and science. The museum featured many exciting exhibits that featured light, sound, and optical illusions. Be sure to swipe through and see all of the cool pieces the Scholars interacted with. Stay tuned next week to see the grand reveal of our photo contest winners!<br><br>Los Scholars disfrutaron su tiempo en el Museo WNDR esta semana, aprendiendo sobre la intersección entre el arte y la ciencia. El museo destaca muchas exhibiciones interesantes usando la luz, el sonido y las ilusiones ópticas. Asegúrense a deslizar para ver todas las obras con que los Scholars interactuaron. ¡La próxima semana anunciáramos los ganadores de nuestra competencia de fotografía!</p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/Beach.jpeg">
        </div>
        <div class="content">
          <h3>Beach</h3>
          <p>Scholars have had a successful week of relaxing and recharging during this year's Destress Fest! Each day of the week students could participate in a variety of activities to help take a mindful break after all their hard work so far this school year. This year's festivities included a spa day, origami, a walk to the beach, and arts & crafts. We are glad Scholars across grade levels getting together for some relaxing fun!<br><br>Los Scholars tuvieron una semana exitosa relajándose y recargando energía durante el Festival del Desestres de este año! Cada día de la semana, los estudiantes participaron en una variedad de actividades para ayudarlos a tomar un descanso mental por todo el trabajo que han hecho este año escolar. Las actividades de este año incluyeron un día de spa, origami, una caminata en la playa, y artes y manualidades. Estamos felices de ver que los Scholars de todos los años se hayan reunido para relajarse y divertirse! </p>
  </div>
</div>
      <!--
      <div class="box">
        <div class="image">
          <img src="images/img-7.jpg">
        </div>
        <div class="content">
          <h3>Adventure and Tour</h3>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/img-8.jpg">
        </div>
        <div class="content">
          <h3>Adventure and Tour</h3>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/img-9.jpg">
        </div>
        <div class="content">
          <h3>Adventure and Tour</h3>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/img-10.jpg">
        </div>
        <div class="content">
          <h3>Adventure and Tour</h3>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/img-11.jpg">
        </div>
        <div class="content">
          <h3>Adventure and Tour</h3>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/img-12.jpg">
        </div>
        <div class="content">
          <h3>Adventure and Tour</h3>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        </div>
      </div>
      -->
      <div class="load-more"><span class="btn">Load More</span></div>
    
  </section>


  <!--Package Section Ends-->

</x-es.layout>
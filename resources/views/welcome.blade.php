@extends('master')                              

@section('content')         

<link rel="stylesheet" type="text/css" href="public/Css/form.css">

<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">

<script src="public/Js/form.js"></script>

<section id="page1">

    <div class="panel panel-default">

        <div class="panel-heading">Inicio</div>

        <div class="panel-body">

            <div class="freebirdFormviewerViewFormContent ">

                <div class="freebirdFormviewerViewHeaderHeader">

                    <div class="freebirdFormviewerViewHeaderTitleRow">

                        <!--<div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"><font size="5" face="Comic Sans MS,arial,verdana">FORMULARIO DE INSCRIPCIÓN DÍA DEL DESAFÍO 2017</font></div>-->

                    </div>
<br>
                    <div class="stage">

                        <div id="SLDR-ONE" class="sldr">

                            <ul class="wrp animate">

                                <li class="elmnt-one">                                 


                                        <div class="wrap"><img src="public/Img/porras.jpg"  height="400">


                                        </div>                                   
                                </li>

                               <li class="elmnt-two">
                                    
                                        <div class="wrap"><img src="public/Img/porras1.jpg"  height="400">
                                        </div>                                 
                                </li>

                                 <li class="elmnt-three">
                                    
                                        <div class="wrap"><img src="public/Img/porras2.jpg"  height="400">
                                        </div>                                 
                                </li>
                                 

                            </ul>

                        </div>

                        <div class="clear"></div>

                        <ul class="selectors">

                            <li class="focalPoint"><a href="">•</a></li>

                            <li><a href="">•</a></li>

                            <li><a href="">•</a></li>            
                         
                        </ul>

                    </div>

                    <script src="public/Js/jquery.sldr.js"></script>
                    <div class="freebirdFormviewerViewHeaderDescription" dir="auto">

                        <!--<h2>Ubicación</h2>-->

                        <p><font size="3">Los datos de inactividad física, comportamiento sedentarios y exceso de peso en la población de Bogotá han ido en aumento es así como la ENSIN 2010 (ICBF) muestra que la prevalencia de tiempo dedicado a ver televisión o jugar con video juegos de niños y niñas de 5 a 12 años en Bogotá (mayor a 2 horas) fue de 69.9% presentando una de las prevalencias más altas del país.
                        Los niños, niñas y adolescentes de 13 a 17 años presentaron una prevalencia en Bogotá de 76.6%. En adultos en Bogotá de 18 a 64 años un 37,2% presento sobrepeso y un 14,1 % obesidad, sumados estamos ante un 51,3% de problemas de exceso de peso, sobrepasando el 48,5% del año 2005.
                        Así mismo la prevalencia de obesidad abdominal por circunferencia de cintura en hombres y mujeres para el año 2010 muestra en Bogotá, en hombres el 43,4% y en mujeres el 60,7% , el incremento fue de 10% en hombres y de 12,4% en mujeres. </font></p>

                        <center><h2><font size="5" face="Comic Sans MS,arial,verdana">DESCRIPCIÓN </font></h2></center>

                        <p><font size="3">El Día del Desafío es una actividad dirigida a todos los habitantes de Bogotá, ​que ​ pretende movilizar el mayor número de participantes realizando actividad física, recreativas deportivas o cotidianas que impliquen movimiento durante 15 minutos continuos.
                        Se compite con otra ciudad del mundo. Las actividades este año pretenden concientizar a la ciudadanía sobre la importancia de ​incluir la ​ actividad física, en la rutina diaria, disminuyendo comportamientos sedentarios relacionados con el incremento de las enfermedades cronicas. .</font></p>

                       <center><h2><font size="5" face="Comic Sans MS,arial,verdana">FORMULARIO DE INSCRIPCIÓN DÍA DEL DESAFÍO 2017</font></h2></center>
                        
<br>

<form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">  

            <div class="panel-body">

<!-- nuevo formulario-->

<div class="row">
  <div class="col-xs-6 col-sm-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Actividad Realizada:</label></div>
   <div class="col-xs-6 col-sm-6"><select required name="actividad" id="actividad" class="form-control" data-readonly="tipo_actividad" data-readonly-value="19">
                                  <option value="0">Seleccionar</option>
                                  <option value="1">Entrenamientos deportivos</option>
                                  <option value="2">Campeonatos deportivos</option>
                                  <option value="3">Festivales recreativos</option>
                                  <option value="4">Entrenamientos militares</option>
                                  <option value="5">Maratones atléticas</option>
                                  <option value="6">Nuevas Tendencias</option>
                                  <option value="7">Caminata</option>
                                  <option value="8">Trote o Carrera</option>
                                  <option value="9">Campañas ecológicas</option>
                                  <option value="10">Clases de educación física</option>
                                  <option value="11">Recorrido en Bicicleta</option>
                                  <option value="12">Jornadas o clase de Baile</option>
                                  <option value="13">Actividades Acuáticas</option>
                                  <option value="14">Pruebas de habilidades</option>
                                  <option value="15">Gimnasia Laboral</option>                                                        
                                  <option value="16">Actividades Físicas en Recreos en instituciones educativas</option>
                                  <option value="17">Escuelas Deportivas</option>
                                  <option value="18">Subida y/o bajada de escaleras</option>
                                  <option value="19">Otro</option>
 </select></div>
</div>
  
  <br>
  <div class="row">
  <div class="col-xs-6 col-sm-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">¿Cuál?:</label></div>
   <div class="col-xs-6 col-sm-6"><input required type="text" class="form-control" id="tipo_actividad" name="tipo_actividad"></div>
</div>

<br>
<div class="row">
  <div class="col-md-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Tiempo:</label></div>
  <div class="col-md-1" align="left" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Horas</label></div>
  <div class="col-md-2" align="left"><select  required name="torneo" id="torneo" class="form-control" >
                <option value="" selected="selected">Minutos</option>
                @foreach ($torneos as $torneo)
                    <option value="{{ $torneo->id }}">{{ $torneo->torneo}}</option>
                @endforeach
            </select></div>
  <div class="col-md-1" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Minutos</label></div>
  <div class="col-md-2"><select  required name="torneo" id="torneo" class="form-control" >
                <option value="" selected="selected">Minutos</option>
                @foreach ($torneos as $torneo)
                    <option value="{{ $torneo->id }}">{{ $torneo->torneo}}</option>
                @endforeach
            </select></div>
</div>


<br>
<div class="row">
  <div class="col-xs-6 col-sm-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Persona quien coordina la actividad:</label></div>
   <div class="col-xs-6 col-sm-6"><input required type="text" class="form-control" id="direccion" name="direccion"></div>
</div>

<br>
<div class="row">
  <div class="col-xs-6 col-sm-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Teléfono:</label></div>
   <div class="col-xs-6 col-sm-6"><input required type="text" class="form-control" id="direccion" name="direccion"></div>
</div>

<br>
<div class="row">
  <div class="col-xs-6 col-sm-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Entidad/Grupo/Persona/Comunidad:</label></div>
   <div class="col-xs-6 col-sm-6"><input required type="text" class="form-control" id="direccion" name="direccion"></div>
</div>

<br>
<div class="row">
  <div class="col-xs-6 col-sm-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Sector:</label></div>
   <div class="col-xs-6 col-sm-6"><select  required name="torneo" id="torneo" class="form-control" >
                <option value="" selected="selected">Minutos</option>
                @foreach ($torneos as $torneo)
                    <option value="{{ $torneo->id }}">{{ $torneo->torneo}}</option>
                @endforeach
            </select></div>
</div>


<br>
<div class="row">
  <div class="col-xs-6 col-sm-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Localidad:</label></div>
   <div class="col-xs-6 col-sm-6"><select  required name="localidad" id="localidad" class="form-control" >

                <option value="">Seleccione</option>
                 @foreach ($localidades as $localidad)
                    <option value="{{ $localidad->id_localidad }}">{{ $localidad->localidad}}</option>
                @endforeach

            </select></div>
</div>

<br>
<div class="row">
  <div class="col-xs-6 col-sm-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Dirección:</label></div>
   <div class="col-xs-6 col-sm-6"><input required type="text" class="form-control" id="direccion" name="direccion"></div>
</div>


<br>
<div class="row">
  <div class="col-md-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">N° de participantes:</label></div>
  <div class="col-md-1" align="left" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Hombres:</label></div>
  <div class="col-md-2" align="left"><input required type="text" class="form-control" id="direccion" name="direccion"></div>
  <div class="col-md-1" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Mujeres:</label></div>
  <div class="col-md-2"><input required type="text" class="form-control" id="direccion" name="direccion"></div>
</div>

<br>
<div class="row">

  <div class="col-xs-6 col-sm-4" align="right" style="position: relative;top: 50px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Observaciones:</label></div>
   <div class="col-xs-6 col-sm-6"><textarea id="textarea" name="textarea" rows="5" cols="66"></textarea></div>
</div>


<!-- viejo formulario
             <div class="row">
             <br>
               <div class="col-md-6">
            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Tipo de Torneo<span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span></label></div>
           <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Tipo Evento <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span></label></div>


            <div class="col-md-6"><select  required name="torneo" id="torneo" class="form-control" >
                <option value="" selected="selected">Seleccione</option>
                @foreach ($torneos as $torneo)
                    <option value="{{ $torneo->id }}">{{ $torneo->torneo}}</option>
                @endforeach
            </select></div>
             <div class="col-md-6"><select name="evento" id="evento" class="form-control" >
                <option value="" selected="selected">Seleccione</option>

            </select><br></div>


               <div class="col-md-6">
            <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Nivel <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span></label>

            
           </div>
           <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Categoría <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span></label>

            </div>


              <div class="col-md-6"><select name="nivel" id="nivel" class="form-control" >
                  <option value="" selected="selected" >Seleccione</option>

            </select></div>


              <div class="col-md-6"><select name="categoria" id="categoria" class="form-control" >
              <option value="">Seleccione</option>

            </select><br></div>

             <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Modalidad <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span></label>

            </div>
            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Edad <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span></label>

            </div>


         <div class="col-md-6"><select name="modalidad" id="modalidad" class="form-control" >
             <option value="">Seleccione</option>
         </select></div>

          <div class="col-md-6"><select name="edad" id="edad" class="form-control" >
           <option value="">Seleccione</option>
         </select><br></div>


            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Tipo de Institución académica o Equipo <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

            </div>
         <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Nombre Institución o Equipo <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

            
          </div>


          <div class="col-md-6"><select  required name="tipo" id="tipo" class="form-control" data-readonly="tipo_colegio" data-readonly-value="1"  >

                <option value="">Seleccione</option>

                <option value="1">Institución Educativa</option>


                <option value="2">Equipo</option>

            </select></div>
            <div class="col-md-6"><input required type="text" class="form-control" id="nombre_institucion" name="nombre_institucion"><br></div>



             <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Tipo Institución   <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>


            </div>
            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Cuidad  <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

            
            </div>


           <div class="col-md-6"><select  required name="tipo_colegio" id="tipo_colegio" class="form-control">

                <option value="0">Seleccione</option>

                <option value="1">Pública</option>

                <option value="2">Privada</option>

            </select></div>
             <div class="col-md-6"><input required type="text" class="form-control" id="ciudad" name="ciudad"><br></div>


            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Localidad   <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

            </div>
            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Dirección  <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>


            </label>

            </div>


           <div class="col-md-6"><select  required name="localidad" id="localidad" class="form-control" >

                <option value="">Seleccione</option>
                 @foreach ($localidades as $localidad)
                    <option value="{{ $localidad->id_localidad }}">{{ $localidad->localidad}}</option>
                @endforeach

            </select></div>
             <div class="col-md-6"><input required type="text" class="form-control" id="direccion" name="direccion"><br></div>

             <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">
            Teléfono   <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>


            </label>

           </div>
            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Correo Electrónico<span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

            </div>


           <div class="col-md-6"><input required type="number" class="form-control" id="telefono" name="telefono" ></div>
             <div class="col-md-6"><input required type="mail" class="form-control" id="mail" name="mail"><br></div>

             <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Representante Legal<span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>


            </div>
            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Cédula Representante <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

           </div>


           <div class="col-md-6"><input required type="text" class="form-control" id="representante" name="representante" ></div>
             <div class="col-md-6"><input required type="number" class="form-control" id="cedula_representante" name="cedula_representante"><br></div>

             <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">


            Nombre Completo del entrenador <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

            </div>
            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Cédula del entrenador <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>

            </div>


           <div class="col-md-6"><input required type="text" class="form-control" id="entrenador" name="entrenador" ></div>
             <div class="col-md-6"><input required type="number" class="form-control" id="cedula_entrenador" name="cedula_entrenador"><br></div>

             <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Correo Electrónico del entrenador <span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>


            </div>
            <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

            Número de Celular del entrenado<span style="color: red;font-size: 15px;text-transform: capitalize;color:red">*</span>

            </label>


            </div>


           <div class="col-md-6"><input required type="mail" class="form-control" id="mail_entrenador" name="mail_entrenador" ></div>
             <div class="col-md-6"><input required type="number" class="form-control" id="telefono_entrenador" name="telefono_entrenador"></div>



             </div>-->

         </fieldset>


         <div class="freebirdFormviewerViewFormContent "><div class="freebirdFormviewerViewHeaderHeader"><div class="freebirdFormviewerViewHeaderTitleRow"><div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div></div><div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div></div><div class="freebirdFormviewerViewItemList" role="list"><div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" jsname="bLLMxc" role="heading"><div class="freebirdMaterialHeaderbannerLabelTextContainer freebirdSolidBackground freebirdMaterialHeaderbannerPagebreakBanner"><div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText"></div></div></div><div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div><div role="listitem" class="freebirdFormviewerViewItemsItemItem" jsname="ibnC6b" jscontroller="hIYTQc" jsaction="JIbuQc:qzJD1c;sPvj8e:e4JwSe" data-required="true" data-other-input="qSV85" data-other-hidden="MfYA1e" data-item-id="131124881"><div class="freebirdFormviewerViewItemsItemItemheader"><div class="freebirdFormviewerViewItemsItemItemTitleContainer"><div class="freebirdFormviewerViewItemsItemItemTitle" dir="auto" id="i1" role="heading" aria-level="2" aria-describedby="i.desc.131124881">Términos de inscripción <span class="freebirdFormviewerViewItemsItemRequiredAsterisk" aria-hidden="true">*</span></div><div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto">Usted acepta y cumple con los requisitos exigidos en la presente Resolución</div></div></div><div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class=""><div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto"><div class="freebirdFormviewerViewItemsCheckboxChoice"><label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer"><div class="exportLabelWrapper"><input type="checkbox" required style="float: left;


          margin: 0px;" name="acepto" id="acepto"><div class="docssharedWizToggleLabeledContent"><div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">Acepto</span></div></div></div></label></div><input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden"></div></div><div id="i.req.131124881" class="screenreaderOnly"></div><div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div></div></div><div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681"><div class="freebirdFormviewerViewNavigationButtonsAndProgress"><div class="freebirdFormviewerViewNavigationButtons">



        <input class="enviar" type="submit" value="Enviar" href="registro"> 



           </div><div class="freebirdFormviewerViewNavigationProgress"><div class="freebirdFormviewerViewNavigationProgressIndicator" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-labelledby="lpd4pf" role="progressbar"><div class="freebirdFormviewerViewNavigationProgressIndicatorFill done" style="width:100%"></div></div><div id="lpd4pf" class="quantumWizButtonPaperbuttonContent" aria-hidden="true">Página 1 de 1</div></div></div><div class="freebirdFormviewerViewNavigationPasswordWarning">.</div></div>  


                            </font>

            </form>

                      <!--  </ul> <a class="btn btn-info" href="registro">Registrarse</a>--></div>

                </div>

            </div>

        </div>

       </section>

@stop